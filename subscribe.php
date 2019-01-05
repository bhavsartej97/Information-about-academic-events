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
if(isset($_POST['submit']))
{
$servername="ganesha";
$username="chemocon_2k17";
$password="chemo@2017";
$db="chemocon_2k17";

$conn = mysqli_connect($servername,$username,$password,$db);

$code=$_POST['code'];
$mail=$_POST['uname'];
$query = "insert into subscribe values('$code','$mail')";
$result= mysqli_query($conn,$query);
if($result == true){
?>
<center>
<div class="alert success">
  
  <strong style="font-size:40px">Congratulations! You have successfully subscribed for the Event.</strong><br>
  <p style="margin-top:10px">We will Notify you shortly.<p></br>
  <a href="about.php"><button type="button="" name="submit">Close</button></a>
</div>
</center>
<?
}
else
{
echo "Error";
}
}
?>