$(document).ready(function() {
    $(".postList").html("");
    
    $.post("models/home_model.php").done(function (response) {
        function crop_title(title) {
            if (title.length > 35) {
                title = title.substring(0,35);
                let space = title.lastIndexOf(" ");
                title = title.substring(0, space) + "<a class='small-link' href='#'> ...more</a>";
            }
            return title;
        }

        let postsList = JSON.parse(response);
        
        for (let post of postsList) {
            let url = post['post_image'];
            let title = crop_title(post['title']);
            let author = post['forename'];
            let post_date = post['post_date'];
            
            let postHTML = `<li class="blogPostsHome">
                            <a href="#"><div class="blogpic left" style="background-image: url(${url});"></div></a>
                            <div class="right">
                                <a href="#"><h1 class="blog_title">${title}</h1></a>
                                <h6>By <a href="#" class="peach">${author}</a> - Posted on ${post_date}</h6>
                            </div>
                        </li>`;
            
            $(".postList").append(postHTML);
        }
        console.log(postsList);
    });
});