<?php
session_start();

// If not admin redirect to user index
if(isset($_SESSION["admin"]) && ($_SESSION["admin"]) == 0){
    header('Location: /includes/user_firstpage.php');
}

// If not logged in redirect to login page
if(!isset($_SESSION["username"])){
    header('Location: views/login.php');
}

// Include head, header and index_server.php
require 'includes/head.php';
include 'includes/header.php';
include 'includes/index_server.php';

?>

<body>

<!-- Index structure -->
<main class="container">

<?php

// Loops through associative array
foreach($posts as $i => $i_array) {
            
    //Check value of variable i. If 0 echo main blog post.
    if($i === 0){?>

    <div class="row">

        <section class="col-12 main_post_wrapper">

            <div class="main_picture_frame">
                <img class="main_picture" alt="Blog_post_image" src="includes/<?= $i_array['image']; ?>"/>
            </div>

            <div class="post_content">

                <div class="post_inner">
                    <h1 class="h1_index"><?= $i_array['title']; ?></h1>
                    <div class="index_italic"><?= $i_array['post_date']; ?></div>
                    <div class="index_bold"><?= $i_array['category']; ?></div>

                    <!-- Description: if string legth is 70 characters or more, show only 70 characters -->
                    <?php 
                    if(strlen($i_array['description']) >= 70){
                        echo '<div class="index_description">' .  substr($i_array["description"],0,70) . ' ...</div>';
                    }else{
                        echo '<div class="index_description">' . $i_array["description"] . '</div>';
                    }?>
                                
                    <!-- Read more tag -->
                    <div class="index_readmore">
                        <a href="views/single_post.php?post_id=<?= $i_array['post_id'];?>">Read blog post</a>
                    </div>
                        
                    <!-- Comments with post_id -->
                    <div>
                        <a href="views/single_post.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon far fa-comments"></i></a>
                    </div>

                </div>

                <!-- Edit post with post_id -->
                <div class="post_share_left">
                    <a href="views/edit_post_form.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon far fa-edit"></i></a>                    
                </div>

                <!-- Delete post with post_id -->
                <div class="post_share_right">
                    <a href="includes/delete_posts.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon fas fa-trash-alt"></i></a>
                </div>

            </div>

        </section>
 
    <?php
    //If value not 0 echo secondary posts.
    }else{?>
            
        <section class="col-12 col-lg-6 small_post_wrapper">

            <div class="secondary_picture_frame">
                <img class="secondary_picture" alt ="Blog_post_image" src="includes/<?= $i_array['image']; ?>"/>
            </div>

            <div class="small_post_content">
                <div class="small_post_inner">
                    <h1 class="h2_index"><?= $i_array['title']; ?></h1>
                    <div class="index_italic"><?= $i_array['post_date']; ?></div>
                    <div class="index_bold"><?= $i_array['category']; ?></div>

                    <!-- Description: if string legth is 20 characters or more, show only 20 characters -->
                    <?php 
                    if(strlen($i_array['description']) >= 20){
                        echo '<div class="index_description">' .  substr($i_array["description"],0,20) . ' ...</div>';
                    }else{
                        echo '<div class="index_description">' . $i_array["description"] . '</div>';
                    }?>

                    <!-- Read more tag -->
                    <div class="index_readmore">
                        <a href="views/single_post.php?post_id=<?= $i_array['post_id'];?>">Read blog post</a>
                    </div>

                    <!-- Small screens:  Comments with post_id -->
                    <div class="d-lg-none">
                        <a href="views/single_post.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon_comment far fa-comments"></i></a>
                    </div>

                    <!-- Large screens: Icons -->
                    <div class="d-none d-lg-flex row justify-content-center">
                        <!-- Link with post_id to edit post on lg screens -->    
                        <div class="col-lg-3 d-none d-lg-block">
                            <a href="views/edit_post_form.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon_comment far fa-edit"></i></a>
                        </div>
                                
                        <!-- Delete post with post_id -->
                        <div class="col-lg-3 d-none d-lg-block">
                            <a href="includes/delete_posts.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon_comment fas fa-trash-alt"></i></a>
                        </div>

                        <!-- Comments with post_id -->
                        <div class="col-lg-3 d-lg-block">
                            <a href="views/single_post.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon_comment far fa-comments"></i></a>
                        </div>

                    </div>
                        
                    <!-- Small screens: Link with post_id to edit post-->
                    <div class="d-lg-none post_share_left">
                        <a href="views/edit_post_form.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon fas fa-pen"></i></a>
                    </div>

                    <!-- Small screens: Link with post_id to delete post -->
                    <div class="d-lg-none post_share_right">
                        <a href="includes/delete_posts.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon fas fa-trash-alt"></i></a>
                    </div>

                </div>

            </div>

        </section>

<?php

        }
}
    
?>

    </div> <!-- Closing row -->
    
    <div class="index_readall_link">
        <i class="fas fa-book-reader"></i><a href="/views/admin_allposts.php"> READ ALL POSTS</a>
    </div>
     
</main> <!-- Closing main -->

<br/>

<!-- Include footer -->
<?php include 'includes/footer.php';?>