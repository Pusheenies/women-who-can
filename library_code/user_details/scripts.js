$(".form-update").submit(function (event) {
    event.preventDefault();            
    let confirmation = confirm("Do you want to update this field?");

    if (confirmation) {
        let data = $(this).serialize();
        
        $.post("user_details.php", data).done(function (response) { 
            $("input[type|='text']").val("");
            
            if (response === "Mismatch") {
                $("#message").html("Oops! passwords must match");
            } else if (response) {
                $("#message").html("Details updated");
            } else {
                $("#message").html("Something went wrong, please try again");
            }
        });
    } else {
        return;
    }
});

