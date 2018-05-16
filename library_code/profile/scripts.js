$(document).ready(function () {
    $.post("profile.php").done(function (response) {
        if (response) {
            let html = JSON.parse(response);
            let keys = Object.keys(html);
            
            for (let key of keys) {
                $("#" + key).html(html[key]);
            }
            
        } else {
            window.location = "../login/index.html";
        }
    });
});

$("#add-book").submit(function (event) {
    event.preventDefault();
    let data = $("#add-book").serialize();
    $("#result").html("");
    
    $.post("addBook.php", data).done(function (response) {        
        if (response) {
            $("#result").html("Book added!");
            $(".form-control").val("");
            $(":checkbox, :radio").prop("checked", false);
        } else {
            $("#result").html("Something went wrong, please try again");
        }
    });
});