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
    <title> Web3 </title>
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

            
            <h4> ---- Web3.0 ----  </h4>
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
                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/web3/1.pdf"> <img src='image/web3-1.png' width="20%" height="40%" style="margin-left: 50px;"> </a> </div></td>
                <td><div style = "width: auto; height: auto;"> 
                    <p><b>Title:</b> DeFi and The Future of Finance</p> 
                    <p><b>Author:</b> Campbell, Ashwin and Joey</p> 
                    <p><b>Publisher:</b> WILEY</p>
                    <p><b>Year of Publication:</b> 2021</p> </div> </td>
                
                <p> --------------------------------------------------------------------------------------------------- </p>

                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/web3/2.pdf"> <img src='image/web3-2.png' width="20%" height="40%" style="margin-left: 50px;"> </a></div></td>
                <td><div style = "width: auto; height: auto;"> 
                    <p><b>Title:</b> The Fourth Industrial Revolution</p> 
                    <p><b>Author:</b> Klaus Schwab</p> 
                    <p><b>Publisher:</b> World Economic Forum</p>
                    <p><b>Year of Publication:</b> 2016 </p> </div> </td>

                <p> --------------------------------------------------------------------------------------------------- </p>
                
                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/web3/3.pdf"> <img src='image/web3-3.png' width="20%" height="40%" style="margin-left: 50px;"> </a></div></td>
                <td><div style = "width: auto; height: auto;"> 
                    <p><b>Title:</b> The Digital Economy </p> 
                    <p><b>Author:</b> Don Tapscott </p> 
                    <p><b>Publisher:</b> McGrawHill </p>
                    <p><b>Year of Publication:</b> 2015 </p> </div> </td>

                <p> --------------------------------------------------------------------------------------------------- </p>
                
                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/web3/4.pdf"> <img src='image/web3-4.png' width="20%" height="40%" style="margin-left: 50px;"> </a></div></td>
                <td><div style = "width: auto; height: auto;"> 
                    <p><b>Title:</b> Building The New Economy </p> 
                    <p><b>Author:</b> Alex, Alexander and Thomas </p> 
                    <p><b>Publisher:</b> The MIT Press </p>
                    <p><b>Year of Publication:</b> 2021 </p> </div> </td>

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
