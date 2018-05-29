$("#post-image").change(function () {
    let path = $("#post-image").val();
    let index = path.lastIndexOf("\\");
    let img = path.substring(index + 1, path.length);

    $("#img-label").html(img);
});

$("#hashtags").change(function () {
    let hashtags = $("#hashtags").val().split(" ");
    
    for (let i = 0; i < hashtags.length; i++) {
        if (hashtags[i].charAt(0) !== '#') {
            hashtags[i] = ('#' + hashtags[i]);
        }
    }

    $("#hashtags").val(hashtags.join(" "));
});

$("#submit-btn").click(function () {
    let hashtags = $("#hashtags").val().trim().split(" ");
    
    for (let i = 0; i < hashtags.length; i++) {
        if (hashtags[i].charAt(0) !== '#') {
            hashtags[i] = ('#' + hashtags[i]);
        }
    }

    $("#hashtags").val(hashtags.join(" "));
});

$(document).ready(function () {
    let url = window.location.href;
    let index = url.lastIndexOf('=');
    
    if (index !== -1) {
        let error = url.substring(index + 1, url.length);
        
        if (error === 'size') {
            $("#error-msg").html("The image is too big, please try again with a smaller one");
        } else if (error === 'type') {
            $("#error-msg").html("Only jpeg, jpg and png files are allowed, please try again");
        } else if (error === 'upload') {
            $("#error-msg").html("Something went wrong uploading the file, please try again");
        } else {
            $("#error-msg").html("");
        }
        
        $.post("../../models/session_data.php").done(function (response) {
            if (response) {
                let data = JSON.parse(response);
                
                $("#title").val(data[0]);
                $("#category").val(data[1]);
                $("#content").text(data[2]);
                $("#hashtags").val(data[3]);
            }
        });
    }       
});
