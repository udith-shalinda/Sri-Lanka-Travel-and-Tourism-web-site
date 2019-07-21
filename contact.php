<?php 
    require('connectDb.php');
?>

<html>
    <head>
        <title>The contact page</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <div class="header">
            <p>
                SRI LANKA TRAVEL AND TOURISM | SRI LANKA TRAVEL AGENCY | BEST TOUR OPERATOR 2019 ---- INFO@SRILANKATRAVELANDTORUISM.COM 
            </p>
        </div>
        <div class="navbar">
            <div class="inlineNav"><a href="index.php">Home</a></div>
            <div class="inlineNav"><a href="destination.php">Destinations</a></div>
            <div class="inlineNav"><a href="#">Activities</a></div>
            <div class="inlineNav"><a href="#">Holiday Tours</a></div>
            <div class="inlineNav"><a href="#">Feedback</a></div>
            <div class="inlineNav"><a href="#">Contact</a></div>
        </div>
        <div class="topic"> Contact Us - Sri Lanka Travel and Tourism</div>

        <div id="content">
        <form action="#" method="post" id="formContent">
            <div id="formField">
                <label for="userName">Your name</label><br>
                <input type="text" value="Name" name="userName"><br>
                <label for="email">Email</label><br>
                <input type="text" name="email" required><br>
                <label for="SriLanka">Sri Lanka</label>
                <input type="radio" name="nationality" id="SriLanka" value="Srilanka" required><br>
                <label for="OtherNation">Other Nation</label>
                <input type="radio" name="nationality" id="OtherNation" value="Other nation" required><br>
                
                
                <input type="checkbox" name="checkbox[]" value="some" >some<br>
                <input type="checkbox" name="checkbox[]" value="thing" >thing<br>
                <input type="checkbox" name="checkbox[]" value="happend" >Happend<br>
                
            </div>
            <div >
                <textarea name="comment" cols = "60" rows="10"></textarea><br>
                <input type="submit" name="submit" value="submit">
            </div>
        </form>
               
        </div>
    </body>
</html>

<?php 
    $checkboxinput = '';
    if(isset($_POST['submit'])){
        
        foreach($_POST['checkbox'] as $selected){
            if($selected != null){
                $checkboxinput .= $selected;
            }
        }
        $name = $_POST['userName'];
        $email = $_POST['email'];
        $nation = $_POST['nationality'];
        $comment = $_POST['comment'];

        echo $_POST['nationality'];
        echo "<br>";
        echo $checkboxinput;
        $insertQuery = "insert into `contactDetails` (name,email,nation,interest,comment) values ('$name', '$email' ,'$nation','$checkboxinput','$comment')";

        mysqli_query($conn,$insertQuery);
    }
    

    
?>