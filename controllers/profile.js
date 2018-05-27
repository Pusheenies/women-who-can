$(document).ready(function(){
    $.getJSON("../../models/profileModel.php", function (member){
        $("#profile_image").append("<img src='../../"+member.profile_image+"' style='max-height:200px;width:auto;display:block;'>");
        $("#forename").append(member.forename);
        $("#surname").append(member.surname);
        $("#username").append(member.username);
        $("#email").append(member.email);
        $("#profile_description").append(member.profile_description);
        
        //if writer, own posts
        if(member["own_posts"]){
            $("#own_posts").append("<div id='blogposts' class='left'>"
                                    +"<h2>My posts</h2>"
                                    +"<ul id='own_posts_list' style='height:auto;'>");
            for(var i=0; i<member["own_posts"].length; i++){
                if(member.own_posts[i][2]>1){
                    $days= " days ago";
                } else {
                    $days= " day ago";
                }
                $("#own_posts_list").append("<li>"
                                        +"<div class='blogpic left' style='background-image: "+member.own_posts[i][4]+";'></div>"
                                        +"<div class='right'>"
                                        +"<h1>"
                                        +"<a href='../../views/post_page.php?post="+member.own_posts[i][1]+"'>"
                                        +member.own_posts[i][0]
                                        +"</a>"
                                        +"</h1>"
                                        +"<p style='font-size:15px;'>Posted "+member.own_posts[i][2]+$days+"</p>"
                                        +"<p style='margin-top:70px;'><a href='#' class='peach'>Edit/delete post</a></p>"
                                        +"</div>"
                                        +"</li>");
            }
            $("#own_posts_list").append("</ul></div>"); 
        }


        //favourite posts
        if(member["favourites"].length!==0){
            $("#favourites").append("<div id='blogposts' class='left'>"
                                    +"<h2>My favourite posts</h2>"
                                    +"<ul id='favourites_list' style='height:auto;'>");
            for (var i=0; i<member["favourites"].length; i++){ 
                if(member.favourites[i][2]>1){
                    $days= " days ago";
                } else {
                    $days= " day ago";
                }
                $("#favourites_list").append("<li>"
                                            +"<div class='blogpic left' style='background-image: "+member.favourites[i][4]+";'></div>"
                                            +"<div class='right'>"
                                            +"<h1>"
                                            +"<a href='../../views/post_page.php?post="+member.favourites[i][1]+"'>"
                                            +member.favourites[i][0]
                                            +"</a>"
                                            +"</h1>"
                                            +"<p style='font-size:15px;'>Posted "+member.favourites[i][2]+$days+"</p>"
                                            +"<p style='margin-top:70px;'><a href='#' class='peach'>Remove from favourites</a></p>"
                                            +"</div>"
                                            +"</li>");
            }
        } else {
            $("#favourites").append("<div id='blogposts' class='left' style='margin-bottom:50px;'>"
                                    +"<h2>My favourite posts</h2>"
                                    +"<p class='text-center' id='no_fav'>No favourite posts yet.</p>"
                                    +"</div>");
        }


        //followers
        $("#followers").append("<div id='followers_div' class='left'>"
                                +"<h2>My followers</h2>");
        if(member["followers"].length!==0){
            for(var i=0; i<member["followers"].length; i++){
                $("#followers_div").append("<p class='text-center'>"+member.followers[i]+"</p>");
            }  
        } else {
            $("#followers_div").append("<p class='text-center'>You currently don't have followers.</p>");
        }
        $("#followers_div").append("</div>");
        

        //followed members
        $("#followed").append("<div id='followed_div' class='left'>"
                                +"<h2>Members I follow</h2>");
        if(member["followed"].length!==0){
            for(var i=0; i<member["followed"].length; i++){
                $("#followed_div").append("<p class='text-center'>"+member.followed[i]+"</p>");
            }
            $("#followed_div").append("<p class='text-center' style='font-size:12px;'><a href='#' class='peach'>Update followed members</a></p>");
        } else {
            $("#followed_div").append("<p class='text-center'>You're not following anyone at the moment.</p>");
        }
        $("#followed_div").append("</div>");
    });
});
