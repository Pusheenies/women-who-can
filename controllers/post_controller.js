$(document).ready(function (){
    
    $.getJSON("../../models/post_model.php", function(post){
        $("#post_title").append("<h1 class='title'>"+post.title+"</h1>");
        $("#post_username").append("<p>By "+post.username+"</p>");
        var img_url= "../../" + post.post_image;
        $("#post_image").append("<div class='text-center'>"
                                +"<img src='"+img_url+"' alt='post image' style='height:600px;width:auto;margin-bottom:30px;'>"
                                +"</div>");

        $("#post_category_date").append("<p class='subtitle'>"
                                        +"<a href='nav_search_results.php?cat="+post.category_id+"'>"
                                        +post.category_description+"</a> - Posted on "
                                        +post.post_date+"</p>");

        $("#post_content").append("<p class='post-content'>"+post.post_content+"</p>");
        
        for(var i=0; i<post["hashtags"].length; i++){
            var hashtag_no_tag= post.hashtags[i].slice(1, post.hashtags[i].length);
            $("#hashtags").append("<a href='nav_search_results.php?hashtag="+hashtag_no_tag+"' class='border rounded'>"
                                    +post.hashtags[i]+"</a>");
        }
    });

    $.getJSON("../../models/get_comments.php", function(comments){
        $("#comments").append("<h2>Comments ("+comments.length+")</h2>");
        for(var i=0; i<comments.length; i++){

            $("#comments").append("<div class='comment text-center'>"
                                +"<span class='user'>"+comments[i]["username"]+"</span>"
                                +" <span class='date'> - "+comments[i]["comment_date"]+"</span><br>"
                                +comments[i]["comment_content"]
                                +"</div>");  
        }
    });

    $.post("../../models/follow_btn.php", function(response){
        $.getJSON("../../models/post_model.php", function(post){
            var author_id= post.member_id;
            var url= "../../models/follow_unfollow.php?author="+author_id;
            if(response==="already following"){
                $("#follow_btn").append("<a href='"+url+"' class='peach'>Unfollow</a>");
            } else {
                $("#follow_btn").append("<a href='"+url+"' class='peach'>Follow</a>");
            }
        });
    });
    
    $.post("../../models/favourites_btn.php", function(response){
        $.getJSON("../../models/post_model.php", function(post){
            var post_id= post.post_id;
            var url= "../../models/add_remove_favourites.php?post="+post_id;
            if(response==="already favourite"){
                $("#favourites_btn").append("<a href='"+url+"' class='peach'>Remove from favourite posts</a>");
            } else {
                $("#favourites_btn").append("<a href='"+url+"' class='peach'>Add to favourite posts</a>");
            }
        });
    });
});