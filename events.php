<style>
/* Full-width input fields */
input[type=text] {
    width: 100%;
    padding: 12px 0px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    color:black;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 0px;
    width:100%;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>


<?php

error_reporting(0);
include("config.php");

$sql = "SELECT * FROM ".$SETTINGS["data_table"]." WHERE `date` = '".mysql_real_escape_string($_REQUEST["date"])."'";
$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);
while ($row = mysql_fetch_assoc($sql_result)) 


{
?>
	
<div class="mainevent" style="width:auto;height:auto;background-color:#416c82;margin-bottom:5px;padding:4px;">

<?php        
echo "<h2>Event Title : ".stripcslashes($row["name"])."</h2>";
	echo "<br>";
	echo "<span> <b>Date </b>: ".stripcslashes($row["date"])."</span>";
	echo "<br><br>";
	echo "<span> <b> Start Time </b> :".stripcslashes($row["start_time"]).""."<b>am</b>"."</span>";
	echo "<br><br>";
	echo "<span> <b> End Time </b> :".stripcslashes($row["end_time"]).""."<b>pm</b>"."</span>";
	echo "<br><br>";
	echo "<span> <b> Location </b>:".stripcslashes($row["location"])."</span>";
       
?>
<a href="<?php echo $row["website"] ?>"><button style="width:auto;margin-left:5px;">Visit Site</button></a>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Subscribe</button>
</div>
	

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="subscribe.php" method="post">
    

    <div class="container">
      <input type="hidden" name="code" value="<?php echo $row['code'];?>">
      
      <input type="text" placeholder="Enter Your Email" name="uname" required>

      
        
      <button type="submit" name="submit">Submit</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div>
  </form>
</div>
<?php
}
?>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>