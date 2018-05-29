$("#post-image").change(function () {
    let path = $("#post-image").val();
    let index = path.lastIndexOf("\\");
    let img = path.substring(index + 1, path.length);

    $("#img-label").html(img);
});

// $("#post_form").submit(function (event) {
//     event.preventDefault();
//
//     let form_data = new FormData($("#post_form")[0]);
//
//     $.ajax({
//         type: "POST",
//         enctype: 'multipart/form-data',
//         url: "../../models/write_post_model.php",
//         data: form_data,
//         processData: false,
//         contentType: false,
//         success: function (response) {
//             console.log(response);
//             if (response === "File size error") {
//               $("#error-msg").html("The file is too big, please try again with a smaller file");
//             } else if (response === "Upload error") {
//               $("#error-msg").html("Something went wrong, please try again");
//             } else if (response === "Incorrect file type") {
//               $("#error-msg").html("File types allowed are jpg, jpeg and png");
//             } else if (response === "Image uploaded") {
//               $("#error-msg").html("Posted!");
//               window.location = "profile.php";
//             } else {
//               $("#error-msg").html("Something went wrong, please try again");
//             }
//         },
//         error: function (error) {
//            $("#error-msg").html("Your image could not be uploaded, please try again");
//     //            $("#btnSubmit").prop("disabled", false);
//         }
//     });
//
//     let form_fields = $("#post_form").serialize();
//     let content = $("#content").val();
//     let file = $("#post-image").val();
//     form_fields += ('&content=' + content);
//     form_fields += ('&file=' + file);
//
//     $.post("../../models/write_post_model.php", form_fields).done(function (response) {
//         if (response) {
//
//
//         } else {
//           $("#error-msg").html("Posted!");
//         }
//     });
// });
