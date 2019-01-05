<style>
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
    width:50%;
    height:25%;
}

.alert.success {background-color: #4CAF50;}
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

</style>
<?php
$con = new mysqli("ganesha","chemocon_2k17","chemo@2017","chemocon_2k17");
	if(mysqli_connect_errno()){
		echo "connection failed";
		exit;
	}
	
$ename = $_POST['name'];
$edate = $_POST['date'];
$stime = $_POST['time1'];
$etime = $_POST['time2'];
$location = $_POST['loc'];
$esite = $_POST['site'];
$email = $_POST['mail'];
$code = mt_rand();
	
	$sql = 'insert into research (name, date, start_time, end_time, location,website, code,email) values("'.$ename.'", "'.$edate.'", "'.$stime.'", "'.$etime.'", "'.$location.'", "'.$esite.'", "'.$code.'", "'.$email.'")';
	$query = mysqli_query($con, $sql);
	if($query == true)
          {
          
         $subject = "ThankYou  for Registration";
         
         
         $message .= "https://chemoconfluence.com/mainweb/mail.php?code=$code";
         
         $header = "From:Event@info.com \r\n";
         $header .= "Cc:subscribe@eventinfo.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($email,$subject,$message,$header);
           ?>
            <center>
<div class="alert success">
  
  <strong style="font-size:40px">Your Event is Successfully Registered with us!</strong><br>
  <p style="margin-top:10px">Please Check  your MailBox for information about subscribed Events .<p></br>
  <a href="about.php"><button type="button="" name="submit">Close</button></a>
</div>
</center>
            <?php
}
        else{
           echo "sorry";
         }

unset(  $_POST['submit'] );
?>