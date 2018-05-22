$(document).ready(function(){
    $.getJSON("profileModel.php", function (member){
        console.log(member);
        $("#welcome").append(member.username);
        $("#username").append(member.username);
        
        if(member["own_posts"]){
            $("#own_posts").append("<p><h2>Your posts</h2>");
            for(var i=0; i<member["own_posts"].length; i++){
                $("#own_posts").append(member.own_posts[i][0]+"<br>");
            }
            $("#own_posts").append("</p>");
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