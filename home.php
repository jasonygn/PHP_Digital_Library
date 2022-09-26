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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Student Library</title>
    
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
                            <li><a href="search.php">Search</a></li> 
                        </ul>
                    </div>      
                </div>
            </div>

            <h4> ---- Book Collections ----  </h4>
            <br>

            <p style = "text-align:right;"> 
            <?php
                if ($_SESSION['loggedin']== true){
                    echo "{hi " . $_SESSION['username'] . "}";
                }
            ?>
            <a href="logout.php"> <span style="color:lightseagreen">[Log out]</span></a>
            </p>

        <div class="highlight-text">
        <div class="w3-container">
            -- The app was created for testing purpose only, no E-book was uploaded to any page --
            <ul class="w3-ul w3-hoverable">
                <li><a href="web3.php">Web3</a></li><hr>
                <li><a href="business.php">Business</a></li><hr>
                <li><a href="blockchain.php">Blockchain</a></li><hr>
                <li><a href="nft.php">NFT</a></li><hr>
                <li><a href="programming.php">Programming</a></li><hr>
                <li><a href="database.php">Database</a></li><hr>
            </ul>
        </div>
        </div>
        
    </div>

    <div class="box3">
        <p class="highlight-text">
            
        </p>
    </div>
    
</body>
</html>

