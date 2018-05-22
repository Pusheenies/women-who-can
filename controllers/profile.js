$(document).ready(function(){
    $.getJSON("../models/profileModel.php", function (member){
        console.log(member);
        $("#welcome").append(member.username);
        $("#profile_image").append("<img src='"+member.profile_image+"'>");
        $("#forename").append(member.forename);
        $("#surname").append(member.surname);
        $("#username").append(member.username);
        $("#email").append(member.email);
        $("#profile_description").append(member.profile_description);
        
        if(member["own_posts"]){
            $("#own_posts").append("<div class='container'><h2>Your posts</h2>");
            for(var i=0; i<member["own_posts"].length; i++){
                if(member.own_posts[i][2]>1){
                    $days= " days ago";
                } else {
                    $days= " day ago";
                }
                $("#own_posts").append("<div class='card w-50' style='margin-bottom:10px;'>"
                                        +"<div class='card-body'><h5>"+member.own_posts[i][0]+"</h5>"
                                        +"<p class='card-text'>"+member.own_posts[i][3]+"</p>"
                                        +"<a href='#' class='btn btn-warning'>Edit/delete post</a>"
                                        +"</div>"
                                        +"<div class='card-footer text-center'>"
                                        +member.own_posts[i][2]+$days
                                        +"</div>"
                                        +"</div>");
            }
            $("#own_posts").append("</div>");
        }

        if(member["favourites"].length!==0){
            $("#favourites").append("<div class='container'>");
            for (var i=0; i<member["favourites"].length; i++){ 
                if(member.favourites[i][2]>1){
                    $days= " days ago";
                } else {
                    $days= " day ago";
                }
                $("#favourites").append("<div class='card w-50' style='margin-bottom:10px;'>"
                                        +"<div class='card-body'><h5>"+member.favourites[i][0]+"</h5>"
                                        +"<p class='card-text'>"+member.favourites[i][3]+"</p>"
                                        +"</div>"
                                        +"<div class='card-footer text-center'>"
                                        +member.favourites[i][2]+$days
                                        +"</div>"
                                        +"</div>");
            }
            $("#favourites").append("</div>"
                                    +"<a href='#' class='btn btn-info'>Update favourites</a>");
        } else {
            $("#favourites").append("No favourites yet.");
        }

        if(member["followers"].length!==0){
            for(var i=0; i<member["followers"].length; i++){
                $("#followers").append(member.followers[i]+" ");
            }
        } else {
            $("#followers").append("You currently don't have followers.");
        }
        
        if(member["followed"].length!==0){
            for(var i=0; i<member["followed"].length; i++){
                $("#followed").append(member.followed[i]+" ");
            }
            $("#followed").append("<p><a href='#' class='btn btn-info'>Update followed members</a></p>");
        } else {
            $("#followed").append("You're not following anyone at the moment.");
        }
        
    });
});
