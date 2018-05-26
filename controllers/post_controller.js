$(document).ready(function (){
    var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];

    $.getJSON("../models/post_model.php", function(post){
        console.log(post);
        $("#post_title").append("<h1>"+post.title+"</h1>");

        var date= new Date(post.post_date);
        
        var month= months[date.getMonth()];

        $("#post_username_date").append("<p>"
                                        +post.username
                                        +" <a href='#' class='peach'>Follow/unfollow</a>"
                                        +"<br>"
                                        +"<a href='#'>"+post.category_description+"</a> - "
                                        +date.getDate()+" "+month+" "+date.getFullYear()
                                        // +", "+date.getHours()+"h"+date.getMinutes()
                                        +"</p>");

        $("#post_content").append("<p>"+post.post_content+"</p>");
        // $("#post_category").append("<a href='#'>"+post.category_description+"</a>");
        
        for(var i=0; i<post["hashtags"].length; i++){
            $("#hashtags").append("<a href='#' class='border rounded'>"+post.hashtags[i]+"</a>");
        }
    });

    $.getJSON("../models/get_comments.php", function(comments){
        $("#comments").append("<h2>Comments ("+comments.length+")</h2>");
        for(var i=0; i<comments.length; i++){
            var date= new Date(comments[i]["comment_date"]);
            var month= months[date.getMonth()];
            $("#comments").append("<div class='comment text-center'>"
                                +"<span class='user'>"+comments[i]["username"]+"</span>"
                                +" <span class='date'>"
                                +date.getDate()+" "+month+" "+date.getFullYear()
                                +", "+date.getHours()+"h"+date.getMinutes()
                                +"</span><br>"
                                +comments[i]["comment_content"]
                                +"</div>");
        }
    });
});

