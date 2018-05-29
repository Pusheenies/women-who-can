$("#sign-in").submit(function (event) {
    event.preventDefault();
    let data = $("#sign-in").serialize();
    $("#error-msg").html("");
    
    $.post("../../models/sign_in_model.php", data).done(function (response) {
        if (response === "Sign in successful") {
            $("#error-msg").html("Signed in!");
            let reloadPage = function () {
                location.reload();
            };
            setTimeout(reloadPage, 1500);
            
        } else {
            $("#error-msg").html("Your username or password are incorrect, please try again.");
        }
    });
});