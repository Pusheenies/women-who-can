$("#post-image").change(function () {
    let path = $("#post-image").val();
    let index = path.lastIndexOf("\\");
    let img = path.substring(index + 1, path.length);
    
    $("#img-label").html(img);
});

$("#post_form").submit(function (event) {
    event.preventDefault();
    
    let form_fields = $("#post_form").serialize();
    let content = $("#content").val();
    let file = $("#post-image").val();
    form_fields += ('&content=' + content);
    form_fields += ('&file=' + file);

    $.post("../../models/write_post_model.php", form_fields).done(function (response) {
        console.log(response);
    });
    
    let form_data = new FormData($("#post_form")[0]);

    $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: "../../models/write_post_model.php",
        data: form_data,
        processData: false,
        contentType: false,
        success: function (response) {
            console.log(response);
////            $("#result").text(response);
////            console.log("SUCCESS : ", response);
////            $("#btnSubmit").prop("disabled", false);
        },
        error: function (error) {
//            $("#result").text(error.responseText);
//            console.log("ERROR : ", error);
//            $("#btnSubmit").prop("disabled", false);
        }
    });
});