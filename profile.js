$(document).ready(function(){
    $.getJSON("profileModel.php", function (member){
        console.log(member);
        $("#username").append(member.username);
        
        for (var i=0; i<member["favourites"].length; i++){
            $("#favourites").append(member.favourites[i]+"<br>");
        }

        for(var i=0; i<member["followers"].length; i++){
            $("#followers").append(member.followers[i]+" ");
        }

        for(var i=0; i<member["followed"].length; i++){
            $("#followed").append(member.followed[i]+" ");
        }
        if(member["own_posts"]){
            $("#own_posts").append("<p><h2>Your posts</h2>");
            for(var i=0; i<member["own_posts"].length; i++){
                $("#own_posts").append(member["own_posts"][i][0]+"<br>");
            }
            $("#own_posts").append("</p>");
        }
    });
});