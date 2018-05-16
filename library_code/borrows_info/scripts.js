$(document).ready(function () {
    $.post("borrows.php").done(function (response) {
        console.log(response);
        if (response) {
            let html = JSON.parse(response);
            let keys = Object.keys(html);
            
            for (let key of keys) {
                $("#" + key).html(html[key]);
            }
        } else {
            window.location = "../login/index.html";
        }
        
        $("#return").submit(function (event) {
            event.preventDefault();            
            let confirmation = confirm("Do you want to return this book?");

            if (confirmation) {
                let data = $("#return").serialize();
                
                $.post("return_book.php", data).done(function (response) { 
                    if (response) {
                        window.location = "index.html";
                    } else {
                        $("#error-msg").html("Something went wrong. Please try again.");
                    }
                });
            } else {
                return;
            }
        });
    });
});

