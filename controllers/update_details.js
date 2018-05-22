$(document).ready(function(){
    $.getJSON("../models/profileModel.php", function (member){
        console.log(member);
        $("#forename").val(member.forename);
        $("#surname").val(member.surname);
        $("#username").val(member.username);
        $("#email").val(member.email);
        $("#profile_description").val(member.profile_description);
        
    });
});

$("#update_details").submit(function(){
    var data= $("#update_details").serialize();
    
    $.post("../models/update_detailsModel.php", data).done(function (){
        console.log("done");
    });
})