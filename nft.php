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
    <title> NFT </title>
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

            
            <h4> ---- NFT ----  </h4>
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
                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/nft/1.pdf"> <img src='image/nft1.png' width="20%" height="40%" style="margin-left: 50px;"> </a> </div></td>
                <td><div style = "width: auto; height: auto;"> 
                    <p><b>Title:</b> NFTs </p> 
                    <p><b>Author:</b> Tiana and Seoyoung </p> 
                    <p><b>Publisher:</b> John Wiley & Sons </p>
                    <p><b>Year of Publication:</b> 2022 </p> </div> </td>
                
                <p> --------------------------------------------------------------------------------------------------- </p>

                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/nft/2.pdf"> <img src='image/nft2.png' width="20%" height="40%" style="margin-left: 50px;"> </a></div></td>
                <td><div style = "width: auto; height: auto;"> 
                    <p><b>Title:</b> The NFT Handbook </p> 
                    <p><b>Author:</b> Matt and QuHarrison </p> 
                    <p><b>Publisher:</b> WILEY  </p>
                    <p><b>Year of Publication:</b> 2022 </p> </div> </td>

                <p> --------------------------------------------------------------------------------------------------- </p>
                
                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/nft/3.pdf"> <img src='image/nft3.png' width="20%" height="40%" style="margin-left: 50px;"> </a></div></td>
                <td><div style = "width: auto; height: auto;"> 
                    <p><b>Title:</b> Metaverse for Beginners </p> 
                    <p><b>Author:</b> Andrew Clemens </p> 
                    <p><b>Publisher:</b> Andrew Clemens </p>
                    <p><b>Year of Publication:</b> 2022 </p> </div> </td>

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
