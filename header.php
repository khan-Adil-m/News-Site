<?php
include "config.php";
//echo "<h1>" .  . "</h1>";
$page = basename($_SERVER['PHP_SELF']);

switch($page){
        case "single.php";
     if(isset($_GET['id'])){
         $sql_title = "SELECT * FROM posts WHERE id = {$_GET['id']}";
         $result_title = mysqli_query($conn, $sql_title) or die('Title Query Failed');
         $row_title = mysqli_fetch_assoc($result_title);
         $page = $row_title['post_title'];
         // print_r($row_title);
         // die();
     }
     else{
         $page = "No Post Found";
     }
     break;

     case "category.php";
     if(isset($_GET['id'])){
        $sql_title = "SELECT * FROM category WHERE id = {$_GET['id']}";
        $result_title = mysqli_query($conn, $sql_title) or die('Title Query Failed');
        $row_title = mysqli_fetch_assoc($result_title);
        $page = $row_title['post_title'];
        // print_r($row_title);
        // die();
    }
    else{
        $page = "No Post Found";
    }
     break;

     case "author.php";
     if(isset($_GET['id'])){
        $sql_title = "SELECT * FROM posts WHERE id = {$_GET['id']}";
        $result_title = mysqli_query($conn, $sql_title) or die('Title Query Failed');
        $row_title = mysqli_fetch_assoc($result_title);
        $page = $row_title['post_title'];
        // print_r($row_title);
        // die();
    }
    else{
        $page = "No Post Found";
    }
     break;

     case "search.php";
     if(isset($_GET['id'])){
        $sql_title = "SELECT * FROM posts WHERE id = {$_GET['id']}";
        $result_title = mysqli_query($conn, $sql_title) or die('Title Query Failed');
        $row_title = mysqli_fetch_assoc($result_title);
        $page = $row_title['post_title'];
        // print_r($row_title);
        // die();
    }
    else{
        $page = "No Post Found";
    }
     break;

//     default :
//     echo "News Site";
//     break;
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $page ?></title>
    <!-- <link rel = "icon" href = "#" 
    type = "image/x-icon"> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">

    

</head>
<body>
<!-- HEADER -->
<div id="header">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            
            <!-- LOGO -->
            <div class=" col-md-offset-4 col-md-4">
                <a href="index.php" id="logo"><img src="images/news.jpg"></a>
            </div>
            <!-- /LOGO -->
        </div>
    </div>
</div>
<!-- /HEADER -->
<!-- Menu Bar -->
<div id="menu-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php
            include "config.php";
            if(isset($_GET['cid'])){
                $id = $_GET['cid'];
            }
            

            $sql = "SELECT * FROM category";
            $result = mysqli_query($conn, $sql) or die("Query Failed : Category");
            $active = "";

            ?>
                <ul class='menu'>

                <li><a href='<?php echo $hostname; ?>'>Home</a></li>";

                    <?php while($row = mysqli_fetch_assoc($result)){
                        if(isset($_GET['cid'])){
                            if($row['id'] == $id){
                                $active = "active";
                            }
                            else{
                                $active = "";
                            }    
                        }
                        
                        echo "<li><a class='{$active}' href='category.php?cid={$row['id']}'>{$row['category_name']}</a></li>";
                    }
                    ?>
                             <li>
                                <a href="admin/post.php">Admin Site</a>
                            </li>
                    
                </ul>
                <?php
            
                ?>
            </div>
        </div>
    </div>
</div>
<!-- /Menu Bar -->
