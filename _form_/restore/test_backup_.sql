

CREATE TABLE `commands` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `command_name` varchar(200) NOT NULL,
  `command_discription` varchar(2000) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

INSERT INTO commands VALUES("2","php composer-setup.php --install-dir=bin --filename=composer","you have to download the Installer of Laravel with the help of Composer, like this","2021-09-15 12:36:40");
INSERT INTO commands VALUES("3","laravel new directory_name","When the installation is done, a new command of laravel will start a new fresh installation in that directory you provide.","2021-09-15 12:39:24");
INSERT INTO commands VALUES("4","composer create-project laravel/laravel -name - prefer -dist","you have to do is make a new folder in some specific path within your system for keeping your Laravel projects. Move to that location where the directory is created. For installing the Laravel, the following command you have to type:","2021-09-16 12:46:39");
INSERT INTO commands VALUES("5","php artisan serve","The command mentioned above will make Laravel installed on that specific directory. Type the command In : Go On laravel project directory and open CMD to run Command","2021-09-15 13:43:16");
INSERT INTO commands VALUES("6","php artisan list","Listing All Available Commands","2021-09-15 13:45:34");
INSERT INTO commands VALUES("7","php artisan --version","Displaying Your Current Laravel Version","2021-09-16 12:51:46");
INSERT INTO commands VALUES("8","composer require laravel/[package_name]","we will install the laravel package with this command only add that laravel has owned.","2021-09-15 16:26:01");
INSERT INTO commands VALUES("9","composer remove laravel/[package_name]","to remove this package from our application. if you have added provider and aliases of this package so firstly we have to remove this as below.  

FROM -> config/app.php

After removing provider and aliases from config/app.php.we will run the following command to remove this package.","2021-09-15 16:30:56");
INSERT INTO commands VALUES("10","php artisan config:clear","After removing provider and aliases from config/app.php.we will run the following command to remove this package.
that’s it. now the socialite package is permanently removed from your application.","2021-09-15 16:38:40");
INSERT INTO commands VALUES("11","php artisan make:middleware <middleware-name>","Basically  middleware Is a mid person between request and response. It can be created with following command:","2021-09-15 17:25:35");
INSERT INTO commands VALUES("12","php artisan help migrate","this command gives a artisans list o command","2021-09-16 10:19:23");
INSERT INTO commands VALUES("13","make:command","Create a new Artisan command","2021-09-16 12:52:02");
INSERT INTO commands VALUES("14","make:seeder","Create a new seeder class","2021-09-16 10:25:41");
INSERT INTO commands VALUES("16","php artisan make:controller UserController","This command creates a new controller file in app/Http/Controllers folder.

After creating the model and migrated our database. Lets now create the controller and the routes for working with your created model. In your terminal, after run this command","2021-09-16 16:33:23");
INSERT INTO commands VALUES("17","php artisan migrate","To run all of your outstanding migrations, execute the migrate Artisan command:","2021-09-16 15:35:46");
INSERT INTO commands VALUES("18","php artisan -V","Go to laravel projecct directory and  run this command in command line.
this command is used to get laravel version","2021-09-16 15:42:11");
INSERT INTO commands VALUES("19","php artisan migrate:fresh","Drop All Tables & Migrate :
The migrate:fresh command will drop all tables from the database and then execute the migrate command:

Note :
The migrate:fresh command will drop all database tables regardless of their prefix. This command should be used with caution when developing on a database that is shared with other applications.","2021-09-16 15:44:51");
INSERT INTO commands VALUES("20","Schema::drop(table_name)","To drop an existing table, you may use the drop or dropIfExists methods:","2021-09-16 16:00:47");
INSERT INTO commands VALUES("21","Schema::dropIfExists(table_name)","To drop an existing table, you may use the drop or dropIfExists methods:","2021-09-16 16:04:35");
INSERT INTO commands VALUES("22","php artisan make:model test1 --migration","create the first Laravel Model. In your terminal, run the following command:

NOTE : 
This will make a test1.php model file inside the app/Models directory of your Laravel 8 project and a migration file will be created inside the database migrations directory. than run php artisan migrate","2021-09-16 16:12:31");
INSERT INTO commands VALUES("24","php artisan config:cache","When deploying your application to production, you should make sure that you run the config:cache Artisan command during your deployment process:

This command will combine all of Laravel's configuration files into a single, cached file, which greatly reduces the number of trips the framework must make to the filesystem when loading your configuration values.","2021-09-16 18:11:47");
INSERT INTO commands VALUES("25","php artisan route:cache","If you are building a large application with many routes, you should make sure that you are running the route:cache Artisan command during your deployment process:

This command reduces all of your route registrations into a single method call within a cached file, improving the performance of route registration when registering hundreds of routes.","2021-09-16 18:23:29");



CREATE TABLE `errors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `error_name` varchar(200) NOT NULL,
  `error_solution` varchar(2000) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO errors VALUES("1","Method Not Allowed HttpException","Simply go to web.php or api.php where you have written the routes and check if any route / url is using some other type of http method instead of the intended method.

For example, if your route is using POST as method but you are calling as GET. As Laravel is too much concerned about security, it will not allow POST route to be called as GET route hence this exception occurs.","2021-09-15 15:31:26");
INSERT INTO errors VALUES("2","419 Error / Page Expired","this exception is based on in-built application security. Error 419 or Page Expired comes when we do not include CSRF_TOKEN in the html form body, since forms are usually the way to POST data to another file or controller.","2021-09-15 15:37:47");
INSERT INTO errors VALUES("3","The Stream or File could not be opened : failed to open stream [ Permission for storage]","laravel generates lots of error logs in storage directory as files named according to dates, for example 2019–08–15.log so to write those In linux distros like Ubuntu, we need to give Super User permission to storage directory.
sudo chmod -R 776 /storage
Same way for bootstrap directory we often get error like this. Hence best practice in would be to give both of these directories access to write.
sudo chmod -R 776 /bootstrap /storage","2021-09-15 15:45:48");
INSERT INTO errors VALUES("4","ReflectionException / Class does not exist [class not exist]","this exception occurs when we give reference to any class but that class is not present at that location.
For example, in web.php, we define a route or URI and map it to a particular Controller and its function, if that particular controller class is not present there, that is, path may be wrong or controller itself is not created. Same applies to Models, Events, ServiceProviders etc.","2021-09-15 15:48:59");
INSERT INTO errors VALUES("5","500 Error","500 error is one of the scariest even for experienced developer, no offense, to debug this error first we need to check if server is all good, second check will be how is a logic applied to source code. Many a times, as new developers, we tend to make silly mistakes like, we redirect to the same page, to be specific a controller function, hence on server end its stack gets full thus it is not available to handle more request.
If anything goes wrong on server, error code will be the same 500 even if root cause be whatever, try to write sensitive codes in try-catch blocks at least we can be prevented by getting 500 errors.","2021-09-15 16:09:55");
INSERT INTO errors VALUES("6","MethodNotAllowedHttpException  [ Method Not Allowed HttpException ]","Usually happens when you try to use an HTTP method for a route but you have not defined that method in your routes file. For example, if you POST to a method, but you only define a GET method for the route in routes.php.","2021-09-15 17:18:19");
INSERT INTO errors VALUES("7","NotFoundHttpException in RouteCollection.php [ Not Found ]","sada","2021-09-15 19:18:15");
INSERT INTO errors VALUES("8","NotFoundHttpException in RouteCollection.php [ Not Found ]","sdasdsaadsadas","2021-09-15 19:19:20");

