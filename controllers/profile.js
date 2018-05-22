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
                                        +"<a href='#' class='text-warning' style='margin:0 5px 0 5px;'>Edit</a>"
                                        +"<a href='#' class='text-danger' style='margin:0 5px 0 5px;'>Delete</a>"
                                        +"</div>"
                                        +"<div class='card-footer text-center'>"
                                        +member.own_posts[i][2]+$days
                                        +"</div>"
                                        +"</div>");
            }
            $("#own_posts").append("</div>");
        }

        if(member["favourites"].length!==0){
            for (var i=0; i<member["favourites"].length; i++){ 
                $("#favourites").append(member.favourites[i][0]+"<br>");
            }
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
        } else {
            $("#followed").append("You're not following anyone at the moment.");
        }
        
    });
});