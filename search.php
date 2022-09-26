<?php
    session_start(); 
    
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 60)) {
        session_unset();     // unset $_SESSION variable for the run-time 
        session_destroy();   
        header("location:timeout.html");
        exit();
    }
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

    if(!isset($_SESSION["loggedin"])) {
        header("location: login.php");
        exit();
    }
?>

<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Book Search </title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="box1">
        <p class="highlight-text">
        </p>
    </div>

    <div class="box2">
       <img src="jpg/web3.png" style="width: 100%; height: 150px;">
        
            <div class = "menubox"> 
                <div class = "dropdown">
                    <button class ="menu-btn"></button>    
                    <div class="dropdown-content">
                       <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="feedback.html">Feedback</a></li>
                        </ul>
                    </div>      
                </div>
            </div>

            <br>
            <br>
            <p style = "text-align:right;"> 
            <?php
                if ($_SESSION['loggedin']== true){
                    echo "{hi " . $_SESSION['username'] . "}";
                }
            ?>
            <a href="logout.php"> <span style="color:lightseagreen">[Log out]</span></a>
            </p>

        <div>
            <br><br>
            
    --------------------------------------------------------------------------------------------  
            <br><br>
            <form action ="" method ="POST"> 
                <p><label><h3>Book search:</h3> </label></p>
                <p><input type = "text" placeholder="input text" name="search" style="width:50%"></p>
                <p><input type = "submit" name="title_search" ></p>
            </form>
            <br>
            <br>
            <br>
    --------------------------------------------------------------------------------------------        
        </div>
        <br>
        
        <div>  
            <?php

                if (isset($_POST['title_search'])) {
                    $search = mysqli_real_escape_string($link, $_POST['search']);
                    $sql = "SELECT * FROM tbl_book 
                            WHERE title LIKE '%$search%' 
                            OR author LIKE '%$search%'
                            OR publisher LIKE '%$search%'
                            OR Year_of_Publication LIKE '%$search%'";  
                    $result = mysqli_query($link, $sql);
                    $queryResult = mysqli_num_rows($result); 
                    
                    echo "<strong>There are " . $queryResult. " results! <hr></strong>";  

                    if ($queryResult > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div> 
                                <p><strong>Title: </strong>".$row['title']." </p>
                                <p><strong>Author: </strong>".$row['author']." </p>
                                <p><strong>Publisher: </strong>".$row['publisher']." </p> 
                                <p><strong>Year of Publication: </strong>".$row['Year_of_Publication']." </p>
                                <p> <a href= ".$row['URL']."><strong>URL</strong></a> </p>
                                <hr>
                            </div>"; 
                        }

                    } else {
                        echo "There are no results matching your search!"; 
                    }
                }
            ?>
        </div>

    </div>
    
    <div class="box3">
        <p class="highlight-text">
            
        </p>
    </div>  
</body>
</html>
