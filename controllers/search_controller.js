$(document).ready(function(){
    $("#submit").click(function(){
        var category= $("#category").val();
        var hashtag= $("#hashtag").val();
        var title= $("#title").val();
        var author= $("#author").val();
        var search_params= {"category":category,
                            "hashtag":hashtag,
                            "title":title,
                            "author":author};
        
        if (category=="" && hashtag=="" && title=="" && author==""){
            alert("Please choose a category, hashtag, title or author.");
        } else {
            $.ajax({
                type:"POST",
                url: "../../models/search_model.php",
                data: search_params,
                cache: false,
                success: function (results){

                    function crop_title(title) {
                        if (title.length > 35) {
                            title = title.substring(0,35);
                            let space = title.lastIndexOf(" ");
                            title = title.substring(0, space) + "<a class='small-link' href='#'> ...more</a>";
                        }
                        return title;
                    }

                    $("#results").empty();
                    if(results.length===0){
                        $("#results").append("<p class='text-center'>No matching results, sorry!</p>");
                    } else {
                        
                        $("#results").append("<div id='blogPosts' class='home'>"
                                            +"<ul id='results_list' class='postList' style='height:auto;'>");
                        for (var i=0; i<results.length; i++){
                            var img_url= "../../"+results[i]["post_image"];
                            var title= unescape(crop_title(results[i]["title"]));
                            $("#results_list").append("<li class='blogPostsHome'>"
                                                +"<div class='blogpic left' style='background-image: url("+img_url+");'></div>"
                                                +"<div class='right'>"
                                                +"<a href='../../views/pages/post_page.php?post="+results[i]["post_id"]+"'>"
                                                +"<h1 class='blog_title'>"
                                                +title
                                                +"</h1>"
                                                +"</a>"                                                
                                                +"<h6>By <span class='peach'>"+results[i]["username"]+"</span>"
                                                +" - Posted on "+results[i]["post_date"]+"</h6>"
                                                +"</div>"
                                                +"</li>");
                        }  
                        $("#results_list").append("</ul></div>");
                    }
                }
            });
        }
    return false;
    });
});