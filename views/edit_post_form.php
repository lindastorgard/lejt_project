<?php

session_start();

?>

<!--including head-->
<?php include '../includes/head.php';?>

<?php include '../includes/header.php';?>

<body class="edit_post_form_page">

<?php


?>
    <!--Blog post form with image file uplad functionality: Tomasz-->

    <div class="row justify-content-center">
        
         <div class="col-12 col-md-12 col-lg-6 card">

            <h2 class="blog_heading">New Blog Post</h2>

                <form class="post_form" action="../includes/post_server.php" method="POST" enctype="multipart/form-data">

                    <br/>
                    
                    <label for="image"><h4>Image</h4></label><br/>
                    <input type="file" name="image" id="image">

                    <label for="blog_title"><h4>Title</h4></label><br/>
                    <input type="text" name="title" placeholder="Title" id="blog_title"><br/>

                    <label for="category"><h4>Category: </h4></label><br/>

                    <select name="category_select">

                        <option value="watches">Watches</option>
                        <option value="sunglasses">Sunglasses</option>
                        <option value="home_accesories">Home accesories</option>

                    </select>

                    <br/>

                    <label for="blog_text"><h4>Text</h4></label><br/>
                   
                    <textarea type="text" name="description" placeholder="..." id="text" ></textarea><br/>

                    <input type="hidden" name="user_ID" id="user_ID"><br/>

                    <input name="post" type="submit" value="Blog it!" class="btn btn-primary">

                </form>
            
            </div>
        
        </div>

        <br/>

    </div>

</body> 

<!--include footer-->

<?php include '../includes/footer.php';?> 