function validate_data() {
    full_name = document.getElementById("full_name").value;
    email = document.getElementById("email").value;
    mgender = document.getElementById("male");
    fgender = document.getElementById("female");
    hobby = $(".checkbox");
    upload_image = document.getElementById("upload_image").value;


    f1 = String(fullname(full_name));
    f2 = String(check_email(email));
    f3 = String(check_gender(mgender, fgender));
    f4 = String(check_hobby(hobby));
    f5 = String(check_image(upload_image));
    if (f1.length == 0 && f2.length == 0 && f3.length == 0 && f4.length == 0 && f5.length == 0) {
        return true;
    } else {
        return false;
    }

}

function fullname(full_name) {
    error1 = document.getElementById("full_name_error");

    if (full_name != null && isNaN(full_name)) {
        error1.innerHTML = "";
        error1.style.display = "none";
    } else {
        // console.log(full_name);
        error1.innerHTML = "enter alphabetic value";
    }
    return error1.innerHTML;
}

function check_email(email) {
    error2 = document.getElementById("email_error");

    var validemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{3})+$/;

    if (validemail.test(form1.email.value) && email != null) {
        error2.style.display = "none";
        error2.innerHTML = "";
    } else {
        error2.style.display = "block";
        if (email == "" || email == null) {
            error2.innerHTML = "*Please Insert Email Address*";
        }
        if (!validemail.test(form1.email.value)) {
            error2.innerHTML = "**Enter Valid Email Address**";
        }
    }
    return error2.innerHTML;
}

function check_gender(mgender, fgender) {
    error3 = document.getElementById("gender_error");

    if (mgender.checked == true || fgender.checked == true) {
        error3.style.display = "none";
        error3.innerHTML = "";
    } else {
        error3.style.display = "block";
        error3.innerHTML = "Please select gender";
    }
    return error3.innerHTML;
}

function check_hobby(hobby) {
    error4 = document.getElementById("hobby_error");

    var ischecked = 0;

    function all_check() {
        $(hobby).each(function(e) {
            if (this.checked == true) {
                ischecked = 1;
                return false; // breaks
            } else {
                ischecked = 0;
            }
        });
    }!Boolean(all_check());
    if (ischecked == 0) {
        error4.style.display = "block";
        error4.innerHTML = "Please select Hobby";
    } else {
        error4.style.display = "none";
        error4.innerHTML = "";
    }
    return error4.innerHTML;
}

function check_image(upload_image) {
    error5 = document.getElementById("upload_image_error");


    upload_image = upload_image.split(/(\\|\/)/g).pop();

    var extensionLists = {}; //Create an object for all extension lists
    extensionLists.video = ["m4v", "avi", "mpg", "mp4", "webm"];
    extensionLists.image = ["jpg", "gif", "bmp", "png"];

    function isValidFileType(fName, fType) {
        return extensionLists[fType].indexOf(fName.split(".").pop()) > -1;
    }

    if (isValidFileType(upload_image, "image")) {
        error5.style.display = "none";
        error5.innerHTML = "";
    } else {
        error5.style.display = "block";
        error5.innerHTML = "Please select valid image";
    }

    return error5.innerHTML;
}