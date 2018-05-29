$(document).ready(function(){

    function crop_title(title) {
        if (title.length > 35) {
            title = title.substring(0,35);
            let space = title.lastIndexOf(" ");
            title = title.substring(0, space) + "<a class='small-link' href='#'> ...more</a>";
        }
        return title;
    }

    $.getJSON("../../models/profileModel.php", function (member){
        $("#profile_image").append("<img src='../../"+member.profile_image+"' style='max-height:200px;width:auto;display:block;'>");
        $("#forename").append(member.forename);
        $("#surname").append(member.surname);
        $("#username").append(member.username);
        $("#email").append(member.email);
        $("#profile_description").append(member.profile_description);
        
        //if writer, own posts
        if(member["own_posts"]){
            console.log(member);
            $("#own_posts").append("<div id='blogposts' class='left'>"
                                    +"<h2>My posts</h2>"
                                    +"<ul id='own_posts_list' style='height:auto;'>");
            for(var i=0; i<member["own_posts"].length; i++){
                if(member.own_posts[i][2]>1){
                    $days= " days ago";
                } else {
                    $days= " day ago";
                }
                var img_url= "../../" + member.own_posts[i][4];
                var title= unescape(crop_title(member.own_posts[i][0]));
                $("#own_posts_list").append("<li>"
                                        +"<div class='blogpic left' style='background-image: url("+img_url+");'></div>"
                                        +"<div class='right'>"
                                        +"<h1>"
                                        +"<a href='../../views/post_page.php?post="+member.own_posts[i][1]+"' class='blog_title'>"
                                        +title
                                        +"</a>"
                                        +"</h1>"
                                        +"<h6>"
                                        +"Posted "+member.own_posts[i][2]+$days
                                        +"</h6>"
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
                var img_url= "../../" + member.favourites[i][4];
                var title= unescape(crop_title(member.favourites[i][0]));
                $("#favourites_list").append("<li>"
                                            +"<div class='blogpic left' style='background-image: url("+img_url+");'></div>"
                                            +"<div class='right'>"
                                            +"<h1>"
                                            +"<a href='../../views/post_page.php?post="+member.favourites[i][1]+"' class='blog_title'>"
                                            +title
                                            +"</a>"
                                            +"</h1>"
                                            +"<h6>By <span class='peach'>"+member.favourites[i][5]+"</span>"
                                            +" - Posted "+member.favourites[i][2]+$days
                                            +"</h6>"
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
        } else {
            $("#followed_div").append("<p class='text-center'>You're not following anyone at the moment.</p>");
        }
        $("#followed_div").append("</div>");
    });
});
