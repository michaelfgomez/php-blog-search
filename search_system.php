<?php  
include "search_db.php";
?>


<?php

    if(isset($_POST['submit'])){
    $search = $_POST['search'];
    //search both title and content
    $query = mysqli_query($con, "SELECT * FROM search_table WHERE blog_content LIKE '%$search%' || blog_title LIKE '%$search%'");
    if(!$query){
        die("Query failed" . mysqli_error($con));
    }
    

    $count = mysqli_num_rows($query);
    if($count == 0){
        echo "<h1>No result</h1>";
        } else {
            //instead of echo "<h1>Some result</h1>";
           
                while($row = mysqli_fetch_assoc($query)){
                    $blog_title = $row['blog_title'];
                    $blog_content = $row['blog_content'];
        
?>

                    <!-- Blog Post -->
                    <h2><a href="#"> <?php echo $blog_title ?></a></h2>
                    <p><?php echo $blog_content ?></p>

<?php 
                }  
        }
    }
?>
