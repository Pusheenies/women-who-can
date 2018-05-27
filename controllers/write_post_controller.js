$("#post-image").change(function () {
    let path = $("#post-image").val();
    let index = path.lastIndexOf("\\");
    let img = path.substring(index + 1, path.length);
    
    $("#img-label").html(img);
});

$("#post_form").submit(function (event) {
    event.preventDefault();
    var data = new FormData($("#post_form")[0]);
    let content = $("#content").val();
    data.append("content", content);
    
    $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: "../../models/write_post_model.php",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function (response) {
            console.log(response);
//            $("#result").text(response);
//            console.log("SUCCESS : ", response);
//            $("#btnSubmit").prop("disabled", false);
        },
        error: function (error) {
//            $("#result").text(error.responseText);
//            console.log("ERROR : ", error);
//            $("#btnSubmit").prop("disabled", false);
        }
    });
//    $.post("../../models/write_post_model.php", data).done(function (response) {
//        console.log(response);
//        if (response === "Sign in successful") {
//            $("#error-msg").html("Signed in!");
//            let reloadPage = function () {
//                location.reload();
//            };
//            setTimeout(reloadPage, 1500);
//            
//        } else {
//            $("#error-msg").html("Your username or password are incorrect, please try again.");
//        }
//    });
});