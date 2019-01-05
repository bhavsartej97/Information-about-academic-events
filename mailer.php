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
$servername="ganesha";
$username="chemocon_2k17";
$password="chemo@2017";
$db="chemocon_2k17";

$conn = mysqli_connect($servername,$username,$password,$db);

$code =$_POST["code1"];
$message = $_POST["uname"];

$query ="SELECT * from subscribe where code='".$code."'";


$result = mysqli_query($conn,$query);


 while($row = mysqli_fetch_assoc($result)) 
 {
$subject = "Thankx for Registion";
         
         
         
         
         $header = "From:Event@info.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($row['email'],$subject,$message,$header);
         
 }
 ?>
 <center>
 <div class="alert success">
  
  <strong style="font-size:40px">Your Message hase been sent !</strong><br>
  <p style="margin-top:10px">Thankx.<p></br>
  <a href="about.php"><button type="button="" name="submit">Close</button></a>
</div>
</center>