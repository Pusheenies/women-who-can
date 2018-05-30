$(document).ready(function(){
    var category= $("#category").val();
    var hashtag= $("#hashtag").val();
    var title= "";
    var author= "";
    var search_params= {"category":category,
                        "hashtag":hashtag,
                        "title":title,
                        "author":author};
    $.ajax({
        type:"POST",
        url: "../../models/nav_search_model.php",
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
            $("#results").append("<div id='blogPosts' class='home'>"
                                            +"<ul id='results_list' class='postList' style='height:auto;'>");
            for(var i=0; i<results.length; i++){
                var img_url= "../../"+results[i]["post_image"];
                var title= unescape(crop_title(results[i]["title"]));
                $("#results_list").append("<li class='blogPostsHome'>"
                                    +"<a href='#'><div class='blogpic left' style='background-image: url("+img_url+");'></div></a>"
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
    });
});