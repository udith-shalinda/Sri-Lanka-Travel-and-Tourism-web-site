<?php
    require("connectDb.php");
    $page = $_GET['page'];
    echo $page;
?>

<html>
    <head>
        <title>Sri Lanka Travel and Tourism</title>
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
        <div class="topic"> Destinations</div>
        <div id="setOfImages">

        <?php
            $sqlquery = "select * from destinations limit ".($page*4).",4";
            $result = mysqli_query($conn,$sqlquery);
            
            if(mysqli_num_rows($result)>0){
                while ($row = mysqli_fetch_assoc($result)) {
                    
        ?>
            <div class="imageCard">
                <img src="<?php  echo $row['image']?>" alt="imageone">
                <h3><?php echo $row['place'] ?></h3>
                <p><?php echo $row['description']?> </p>
                <div class="moredetails">
                    <a href="#">more details</a>
                </div>
            </div>

        <?php
                }
            }
            
        ?>
            
        </div>
        <!-- <div id="setOfImages">
                <div class="imageCard">
                    <img src="images/6.jpg" alt="imageone">
                    <h3>Anuradhapura</h3>
                    <p>The ancient city of Anuradhapura was quite large in its 
                        heyday, and so there is a lot of archaeology to see. </p>
                    <div class="moredetails">
                        <a href="#">more details</a>
                    </div>
                </div>
                <div class="imageCard">
                    <img src="images/6.jpg" alt="imageone">
                    <h3>Anuradhapura</h3>
                    <p>The ancient city of Anuradhapura was quite large in its 
                        heyday, and so there is a lot of archaeology to see. </p>
                    <div class="moredetails">
                        <a href="#">more details</a>
                    </div>
                </div>
                <div class="imageCard">
                    <img src="images/6.jpg" alt="imageone">
                    <h3>Anuradhapura</h3>
                    <p>The ancient city of Anuradhapura was quite large in its 
                        heyday, and so there is a lot of archaeology to see. </p>
                    <div class="moredetails">
                        <a href="#">more details</a>
                    </div>
                </div>
                <div class="imageCard">
                    <img src="images/6.jpg" alt="imageone">
                    <h3>Anuradhapura</h3>
                    <p>The ancient city of Anuradhapura was quite large in its 
                        heyday, and so there is a lot of archaeology to see. </p>
                    <div class="moredetails">
                        <a href="#">more details</a>
                    </div>
                </div>
                
            </div> -->
            <?php 
                //paging

                $sqlquerytwo = "select * from destinations";
                $resulttwo = mysqli_query($conn,$sqlquerytwo);

                $noOfRows = mysqli_num_rows($resulttwo);

                for($i=0; $i<$noOfRows/4; $i++ ){
                    echo "<a href='destination?page=$i'>$i</a>";
                }
            ?>

        <div class="footer">
                +94 999 888 111 info@sltravelandtourism.com © 2019 Sri Lanka Travel & Tourism 
        </div>
    </body>
</html>

