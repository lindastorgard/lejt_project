<!-- include Head -->
<?php include '../includes/head.php';?>
<?php include '../includes/header.php';?>
<?php include '../classes/Admin_posts.php';?>


<div class="card text-center">
    <h3>Admin panel</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Created_by</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            <tr class="table-active">

                <?php
                /*foreach($posts as $key):
                ?>

                        <?php echo "<td>" ?><?php echo $key['title']?><?php echo "</td>"?>
                        <?php echo "<td>" ?><?php echo $key['created_by']?><?php echo "</td>"?>
                        <?php echo "<td>"?><a href="admin_allposts.php">Remove</a><?php echo "</td>"?>
                        <?php echo "</tr>" ?>
                        <?php
    endforeach; */
                ?>
                
                
                
            </tr>
    </table>



    <tbody>




    </tbody>
</div>

<?php print_r($posts); ?>

<!-- include Footer -->
<?php include '../includes/footer.php';?> 