$("#sign-up").submit(function (event) {
    event.preventDefault();
    let data = $("#sign-up").serialize();
    $("#error-msg").html("");
    console.log(data);
    $.post("../../models/sign_up_model.php", data).done(function (response) {
        console.log(response);
        if (response === "Password mismatch") {
            $("#error-msg").html("Your passwords don't match, please try again!");
        } else if (response === "Username exists") {
            $("#error-msg").html("This username already exists, please choose another one!");
        } else if (response === "Sign up successful") {
            $("#error-msg").html("Sign up successful!");
        } else {
            $("#error-msg").html("Something went wrong, please try again!");
        }
    });
});