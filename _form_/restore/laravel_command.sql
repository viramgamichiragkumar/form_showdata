-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2021 at 03:13 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_command`
--

-- --------------------------------------------------------

--
-- Table structure for table `commands`
--

CREATE TABLE `commands` (
  `id` int(40) NOT NULL,
  `command_name` varchar(200) NOT NULL,
  `command_discription` varchar(2000) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commands`
--

INSERT INTO `commands` (`id`, `command_name`, `command_discription`, `tstamp`) VALUES
(1, 'composer global require \"laravel/installer\"', 'you have to download the Installer of Laravel with the help of Composer, like this', '2021-09-16 12:51:31'),
(2, 'php composer-setup.php --install-dir=bin --filename=composer', 'you have to download the Installer of Laravel with the help of Composer, like this', '2021-09-15 12:36:40'),
(3, 'laravel new directory_name', 'When the installation is done, a new command of laravel will start a new fresh installation in that directory you provide.', '2021-09-15 12:39:24'),
(4, 'composer create-project laravel/laravel -name - prefer -dist', 'you have to do is make a new folder in some specific path within your system for keeping your Laravel projects. Move to that location where the directory is created. For installing the Laravel, the following command you have to type:', '2021-09-16 12:46:39'),
(5, 'php artisan serve', 'The command mentioned above will make Laravel installed on that specific directory. Type the command In : Go On laravel project directory and open CMD to run Command', '2021-09-15 13:43:16'),
(6, 'php artisan list', 'Listing All Available Commands', '2021-09-15 13:45:34'),
(7, 'php artisan --version', 'Displaying Your Current Laravel Version', '2021-09-16 12:51:46'),
(8, 'composer require laravel/[package_name]', 'we will install the laravel package with this command only add that laravel has owned.', '2021-09-15 16:26:01'),
(9, 'composer remove laravel/[package_name]', 'to remove this package from our application. if you have added provider and aliases of this package so firstly we have to remove this as below.  \r\n\r\nFROM -> config/app.php\r\n\r\nAfter removing provider and aliases from config/app.php.we will run the following command to remove this package.', '2021-09-15 16:30:56'),
(10, 'php artisan config:clear', 'After removing provider and aliases from config/app.php.we will run the following command to remove this package.\r\nthat’s it. now the socialite package is permanently removed from your application.', '2021-09-15 16:38:40'),
(11, 'php artisan make:middleware <middleware-name>', 'Basically  middleware Is a mid person between request and response. It can be created with following command:', '2021-09-15 17:25:35'),
(12, 'php artisan help migrate', 'this command gives a artisans list o command', '2021-09-16 10:19:23'),
(13, 'make:command', 'Create a new Artisan command', '2021-09-16 12:52:02'),
(14, 'make:seeder', 'Create a new seeder class', '2021-09-16 10:25:41'),
(16, 'php artisan make:controller UserController', 'This command creates a new controller file in app/Http/Controllers folder.\r\n\r\nAfter creating the model and migrated our database. Lets now create the controller and the routes for working with your created model. In your terminal, after run this command', '2021-09-16 16:33:23'),
(17, 'php artisan migrate', 'To run all of your outstanding migrations, execute the migrate Artisan command:', '2021-09-16 15:35:46'),
(18, 'php artisan -V', 'Go to laravel projecct directory and  run this command in command line.\r\nthis command is used to get laravel version', '2021-09-16 15:42:11'),
(19, 'php artisan migrate:fresh', 'Drop All Tables & Migrate :\r\nThe migrate:fresh command will drop all tables from the database and then execute the migrate command:\r\n\r\nNote :\r\nThe migrate:fresh command will drop all database tables regardless of their prefix. This command should be used with caution when developing on a database that is shared with other applications.', '2021-09-16 15:44:51'),
(20, 'Schema::drop(table_name)', 'To drop an existing table, you may use the drop or dropIfExists methods:', '2021-09-16 16:00:47'),
(21, 'Schema::dropIfExists(table_name)', 'To drop an existing table, you may use the drop or dropIfExists methods:', '2021-09-16 16:04:35'),
(22, 'php artisan make:model test1 --migration', 'create the first Laravel Model. In your terminal, run the following command:\n\nNOTE : \nThis will make a test1.php model file inside the app/Models directory of your Laravel 8 project and a migration file will be created inside the database migrations directory. than run php artisan migrate', '2021-09-16 16:12:31'),
(23, '<meta name=\"csrf-token\" content=\"\">', 'Next you\'ll need to get the meta tag value using JavaScript/jQuery DOM query methods\r\nFor jQuery you can do this:\r\n\r\n$(\'meta[name=\"csrf-token\"]\').attr(\'content\')', '2021-09-16 17:52:40'),
(24, 'php artisan config:cache', 'When deploying your application to production, you should make sure that you run the config:cache Artisan command during your deployment process:\r\n\r\nThis command will combine all of Laravel\'s configuration files into a single, cached file, which greatly reduces the number of trips the framework must make to the filesystem when loading your configuration values.', '2021-09-16 18:11:47'),
(25, 'php artisan route:cache', 'If you are building a large application with many routes, you should make sure that you are running the route:cache Artisan command during your deployment process:\r\n\r\nThis command reduces all of your route registrations into a single method call within a cached file, improving the performance of route registration when registering hundreds of routes.', '2021-09-16 18:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `errors`
--

CREATE TABLE `errors` (
  `id` int(11) NOT NULL,
  `error_name` varchar(200) NOT NULL,
  `error_solution` varchar(2000) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `errors`
--

INSERT INTO `errors` (`id`, `error_name`, `error_solution`, `tstamp`) VALUES
(1, 'Method Not Allowed HttpException', 'Simply go to web.php or api.php where you have written the routes and check if any route / url is using some other type of http method instead of the intended method.\n\nFor example, if your route is using POST as method but you are calling as GET. As Laravel is too much concerned about security, it will not allow POST route to be called as GET route hence this exception occurs.', '2021-09-15 15:31:26'),
(2, '419 Error / Page Expired', 'this exception is based on in-built application security. Error 419 or Page Expired comes when we do not include CSRF_TOKEN in the html form body, since forms are usually the way to POST data to another file or controller.', '2021-09-15 15:37:47'),
(3, 'The Stream or File could not be opened : failed to open stream [ Permission for storage]', 'laravel generates lots of error logs in storage directory as files named according to dates, for example 2019–08–15.log so to write those In linux distros like Ubuntu, we need to give Super User permission to storage directory.\r\nsudo chmod -R 776 /storage\r\nSame way for bootstrap directory we often get error like this. Hence best practice in would be to give both of these directories access to write.\r\nsudo chmod -R 776 /bootstrap /storage', '2021-09-15 15:45:48'),
(4, 'ReflectionException / Class does not exist [class not exist]', 'this exception occurs when we give reference to any class but that class is not present at that location.\r\nFor example, in web.php, we define a route or URI and map it to a particular Controller and its function, if that particular controller class is not present there, that is, path may be wrong or controller itself is not created. Same applies to Models, Events, ServiceProviders etc.', '2021-09-15 15:48:59'),
(5, '500 Error', '500 error is one of the scariest even for experienced developer, no offense, to debug this error first we need to check if server is all good, second check will be how is a logic applied to source code. Many a times, as new developers, we tend to make silly mistakes like, we redirect to the same page, to be specific a controller function, hence on server end its stack gets full thus it is not available to handle more request.\r\nIf anything goes wrong on server, error code will be the same 500 even if root cause be whatever, try to write sensitive codes in try-catch blocks at least we can be prevented by getting 500 errors.', '2021-09-15 16:09:55'),
(6, 'MethodNotAllowedHttpException  [ Method Not Allowed HttpException ]', 'Usually happens when you try to use an HTTP method for a route but you have not defined that method in your routes file. For example, if you POST to a method, but you only define a GET method for the route in routes.php.', '2021-09-15 17:18:19'),
(7, 'NotFoundHttpException in RouteCollection.php [ Not Found ]', 'sada', '2021-09-15 19:18:15'),
(8, 'NotFoundHttpException in RouteCollection.php [ Not Found ]', 'sdasdsaadsadas', '2021-09-15 19:19:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commands`
--
ALTER TABLE `commands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `errors`
--
ALTER TABLE `errors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commands`
--
ALTER TABLE `commands`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `errors`
--
ALTER TABLE `errors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
