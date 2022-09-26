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
    <title> Programming </title>
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

            
            <h4> ---- Programming ----  </h4>
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
                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/Programming/1.pdf"> <img src='image/pro1.png' width="20%" height="40%" style="margin-left: 50px;"> </a> </div></td>
                <td><div style = "width: auto; height: auto;"> 
                    <p><b>Title:</b> Cracking Codes with Python </p> 
                    <p><b>Author:</b> AI Sweigart </p> 
                    <p><b>Publisher:</b> William Pollock </p>
                    <p><b>Year of Publication:</b> 2018 </p> </div> </td>
                
                <p> --------------------------------------------------------------------------------------------------- </p>

                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/Programming/2.pdf"> <img src='image/pro2.png' width="20%" height="40%" style="margin-left: 50px;"> </a></div></td>
                <td><div style = "width: auto; height: auto;"> 
                    <p><b>Title:</b> Web Scraping with Python </p> 
                    <p><b>Author:</b> Ryan Mitchell </p> 
                    <p><b>Publisher:</b> O'Reilly </p>
                    <p><b>Year of Publication:</b> 2018 </p> </div> </td>

                <p> --------------------------------------------------------------------------------------------------- </p>
                
                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/Programming/3.pdf"> <img src='image/pro3.png' width="20%" height="40%" style="margin-left: 50px;"> </a></div></td>
                <td><div style = "width: auto; height: auto;"> 
                    <p><b>Title:</b> Web Development with Node & Express </p> 
                    <p><b>Author:</b> Ethan Brown </p> 
                    <p><b>Publisher:</b> O'Reilly </p>
                    <p><b>Year of Publication:</b> 2019 </p> </div> </td>

                <p> --------------------------------------------------------------------------------------------------- </p>
                
                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/Programming/4.pdf"> <img src='image/pro4.png' width="20%" height="40%" style="margin-left: 50px;"> </a></div></td>
                <td><div style = "width: auto; height: auto;"> 
                    <p><b>Title:</b> Modern JavaScript for the Impatient </p> 
                    <p><b>Author:</b> Cay S. Horstmann </p> 
                    <p><b>Publisher:</b> Pearson Education </p>
                    <p><b>Year of Publication:</b> 2020 </p> </div> </td>

                <p> --------------------------------------------------------------------------------------------------- </p>

                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/Programming/5.pdf"> <img src='image/pro5.png' width="20%" height="40%" style="margin-left: 50px;"> </a> </div></td>
                <td><div style = "width: auto; height: auto;"> 
                    <p><b>Title:</b> JavaScript from Begineer to Pro </p> 
                    <p><b>Author:</b> Laurence, Rob and Maaike </p> 
                    <p><b>Publisher:</b> Packt>  </p>
                    <p><b>Year of Publication:</b> 2021 </p> </div> </td>
                
                <p> --------------------------------------------------------------------------------------------------- </p>

                <td style="width: 50px; height: 50px; "><div style="width: auto; height: auto;"> <a href="./books/Programming/6.pdf"> <img src='image/pro6.png' width="20%" height="40%" style="margin-left: 50px;"> </a></div></td>
                <td><div style = "width: auto; height: auto;"> 
                    <p><b>Title:</b> JavaScript Cookbook </p> 
                    <p><b>Author:</b> Adam, Matthew and Shelley </p> 
                    <p><b>Publisher:</b> O'Reilly </p>
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
