<?php
session_start();

// Include head
include '../includes/head.php';
// Include header
include '../includes/header.php';
// Include single post server
//include '../includes/single_post_server.php';
// Include database-connection
include '../includes/database_connection.php';
// Include SinglePost class
include '../classes/Single_post.php';

?>
<main class="container-fluid single_post_main">  

        <?php

           $post = new SinglePost($pdo);
           $post->getSinglePost();
           $post->single_post; //hämtar public $single_post från klass (det är en arrray)
           $array = $post->single_post; //istället för att skriva $post->single_post; hela tiden

            /* Looping through and showing chosen values to display a specific blog post from reaching out to database above. sp_part stands for single post part */
            foreach($array as $sp_part){ ?>

                    <div class="row text-center">

                        <div class="col-12 single_post_title">
                            <?php echo "<h2>" . $sp_part["title"] . "</h2>"; ?>
                        </div>

                    </div>

                    <div class="row text-center">

                        <div class="col-6 single_post_image_frame">
                            <img class="single_post_image" src="../includes/<?php echo $sp_part['image']; ?>" alt="blog post image">
                        </div>

                        <div class="col-6 text-center single_post_description">
                            <?php echo "<p>" . $sp_part["description"] . "</p>"; ?>
                        </div>

                    </div>

                    <div class="row">
                            
                        <div class="col-6 single_post_category">
                            <?php echo "<p>" . "Category: " . $sp_part["category"] . "</p>" . " "; ?>
                        </div>  

                    </div>

                    <div class="row">

                        <div class="col-6 single_post_date">
                            <?php echo "<p>" . $sp_part["post_date"] . "</p>"; ?>
                        </div>
                    </div>

        <?php
            }
        ?>



</main>
<?php
// Include footer
include '../includes/footer.php';
?>