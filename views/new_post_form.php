<?php
session_start();

?>

<!--including head-->
<?php include '../includes/head.php';?>

<body class="blog_form_page">

<?php

//Error handling, checking for empty fields
        
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
if (strpos($fullUrl, "error=empty") == true) {
    echo "<p class='error'>* No blog post to submit!</p>";
    header ('refresh:5;url=new_blog.php');
    exit();
}

elseif (strpos($fullUrl, "error=notitle") == true) {
    echo "<p class='error'>* Blog title is missing!</p>";
    header ('refresh:5;url=new_blog.php');
    exit();
}

elseif (strpos($fullUrl, "error=nodescription") == true) {
    echo "<p class='error'>* No blog description!</p>";
    header ('refresh:5;url=new_blog.php');
    exit();
}

?>

    <div class="row justify-content-center">
        
            <div class="col-12 col-md-12 col-lg-6 card">

                <h2 class="blog_heading">New Blog Post</h2>

                <form class="post_form" action="../includes/post_server.php" method="POST" enctype="multipart/form-data">

                    <br/>
                    
                    <label for="image"><h4>Image</h4></label><br/>
                    <input type="file" name="image" id="image">

                    <label for="blog_title"><h4>Title</h4></label><br/>
                    <input type="text" name="title" placeholder="Title" id="blog_title"><br/>

                    <label><h4>Category: </h4></label><br/>
                    <select>
                        <option name="watches">Watches</option>
                        <option name="sunglasses">Sunglasses</option>
                        <option name="home_accesories">Home accesories</option>
                    </select>

                    <br/>

                    <label for="blog_text"><h4>Text</h4></label><br/>
                    <!--<input type="text" name="description" placeholder="..." id="blog_text"><br/>-->
                    <textarea type="text" name="description" placeholder="..." id="text" ></textarea><br/>

                    <input type="hidden" name="user_ID" id="user_ID"><br/>

                    <input type="submit" value="Blog it!" class="btn btn-primary">

                </form>

            </div>
    </div>

</body> 

<!--include footer-->
<?php include '../includes/footer.php';?> 