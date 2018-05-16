$("#login").submit(function (event) {
    event.preventDefault();
    let data = $("#login").serialize();
    $("#error-msg").html("");
    
    $.post("login.php", data).done(function (response) {
        if (response === "Login Successful") {
            window.location = "../profile/index.html";
        } else {
            $("#error-msg").html("Login unsuccessful, please try again");
        }
    });
});

