// delete code
$('.delete').on(" click", function(e) {
    delete_id = $(this).attr('data-id');
    console.log(delete_id);
    if (confirm("Press a button!")) {
        $.ajax({
            url: "delete.php",
            method: "post",
            data: {
                id: delete_id
            },
            success: function(data) {
                console.log(data);
                window.location.href = window.location.href;
            },
            error: function() {
                console.log('error del');
                window.location.href = window.location.href;
            }
        });
        alert('Account is deleted');
    } else {
        alert('Account is not deleted');
    }
});

// edit
edits = document.getElementsByClassName('edit');
id = '';

Array.from(edits).forEach((element) => {
    element.addEventListener("click", (e) => {
        tr = e.target.parentNode.parentNode;
        // console.log(tr);
        id = $(tr).attr("name"); //get id

        td_name = tr.getElementsByTagName('td')[1].innerHTML.trim();
        td_email = tr.getElementsByTagName('td')[2].innerHTML.trim();
        td_gender = tr.getElementsByTagName('td')[3].innerHTML.trim();
        td_hobby = tr.getElementsByTagName('td')[4].innerHTML.trim();
        td_image = tr.getElementsByTagName('td')[5].innerHTML.trim();

        hidden.value = id;
        full_name.value = td_name;
        email.value = td_email;


        if (td_gender == "male") {
            console.log(td_gender);
            male.checked = true;
        } else {

            female.checked = true;
        }

        td_hobby_len = td_hobby.split(",").length - 1;
        check_box = document.getElementsByClassName('checkbox');
        Array.from(check_box).forEach((element) => {
            document.getElementById(element.value).checked = false;
        });

        for (i = 0; i < td_hobby_len; i++) {
            td_hobby1 = td_hobby.split(",")[i].trim();
            Array.from(check_box).forEach((element) => {
                if (td_hobby1 == element.value) {
                    document.getElementById(td_hobby1).checked = true;

                }
            });

        }
        td_image = $(td_image).attr("src");
        profile_pic.value = td_image;
        $('.profile-pic').css("background-image", "url(" + td_image + ")");
    })
});


// add new user
$('#adduser').click(function() {
    window.location = "index.php";
});


// on select 
var url = new URL(document.location);
var params = url.searchParams;
var number_result = params.get("number_result");
$("#select").val(number_result);
// Set it as the dropdown value


$('#select').on("change", function() {

    var a = $(this).val();

    var loc = window.location.href;
    $.ajax({
        url: loc,
        method: 'get',

        data: {
            number_result: a
        },

        success: function(data) {
            loc = loc.split("?")[0];
            var page = params.get("page");
            if (page > 0) {
                // alert(page);
                window.location.replace(loc + "?page=" + page + "&number_result=" + a);
            } else {
                window.location.replace(loc + "?page=1&number_result=" + a);
            }
        }


    });
});