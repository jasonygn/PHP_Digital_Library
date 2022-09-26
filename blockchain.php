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
    <title> Blockchain </title>
    
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
                        <li><a href="search.php">Search</a></li>
                        
                        </ul>
                    </div>      
                </div>
            </div>

            
            <h4> ---- Blockchain ----  </h4>
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
            <tr>
                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/Blockchain/1.pdf"> <img src='image/bc1.png' width="20%" height="40%" style="margin-left: 50px;"> </a> </div></td>
                <td><div style = "width: auto; height: auto;"> 
                <p><b>Title:</b> Basics of Blockchain </p> 
                <p><b>Author:</b> Bettina, Bill and Tom </p> 
                <p><b>Publisher:</b> Animal Ventures </p>
                <p><b>Year of Publication:</b> 2019 </p> </div> </td>
                
                <p> --------------------------------------------------------------------------------------------------- </p>

                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/Blockchain/2.pdf"> <img src='image/bc2.png' width="20%" height="40%" style="margin-left: 50px;"> </a></div></td>
                <td><div style = "width: auto; height: auto;"> 
                    <p><b>Title:</b> Blockchain Basics </p> 
                    <p><b>Author:</b> Daniel Drescher </p> 
                    <p><b>Publisher:</b> Apress </p>
                    <p><b>Year of Publication:</b> 2017 </p> </div> </td>

                <p> --------------------------------------------------------------------------------------------------- </p>
                
                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/Blockchain/3.pdf"> <img src='image/bc3.png' width="20%" height="40%" style="margin-left: 50px;"> </a></div></td>
                <td><div style = "width: auto; height: auto;"> 
                    <p><b>Title:</b> Blockchain </p> 
                    <p><b>Author:</b> Tiana Laurence </p> 
                    <p><b>Publisher:</b> John Wiley & Sons </p>
                    <p><b>Year of Publication:</b> 2019 </p> </div> </td>

                <p> --------------------------------------------------------------------------------------------------- </p>
                
                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/Blockchain/4.pdf"> <img src='image/bc4.png' width="20%" height="40%" style="margin-left: 50px;"> </a></div></td>
                <td><div style = "width: auto; height: auto;"> 
                    <p><b>Title:</b> Ethereum </p> 
                    <p><b>Author:</b> Michael G. Solomon </p> 
                    <p><b>Publisher:</b> John Wiley & Sons </p>
                    <p><b>Year of Publication:</b> 2019 </p> </div> </td>

                <p> --------------------------------------------------------------------------------------------------- </p>
            </tr>

            
        </div>
        </div>

    </div>

    <div class="box3">
        <p class="highlight-text">
            
        </p>
    </div>
    
</body>
</html>
