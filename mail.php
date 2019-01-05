<style>
input[type=text], input[type=password] {
    width: 200%;
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
    margin: 10px 0;
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
    width: 60%; /* Could be more or less, depending on screen size */
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

$servername="ganesha";
$username="chemocon_2k17";
$password="chemo@2017";
$db="chemocon_2k17";

$conn = mysqli_connect($servername,$username,$password,$db);

$code=$_GET['code'];

$sql ="select * from research where code='".$code."'";
$result=mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
if($row >0)
{
?>
<form action="mail.php" method="post" style="width:auto;height:auto;background-color:green">
<center>
<table>
<tr>
<td><input type="hidden" name="code" value="<?php echo $code?>"></td>
</tr>
<tr>
<td>Enter your Reg email </td>
<td><input type="text" name="mail"></td>
</tr>
<tr><td>
</td>
<td><center> <button type="submit" name="submit" style="width:100%">Submit</button></center>
</td>
</tr>
</table>
</center>
</form>

<?php
}
else{

}

?>
<?php
if(isset($_POST['submit'])){
$code=$_POST['code'];
$email = $_POST['mail'];

$qu = "select * from research where email='".$email."' and code='".$code."'";
$qu1 = "select * from subscribe where code='".$code."'";
$result1 =mysqli_query($conn,$qu);
$row1 = mysqli_num_rows($result1);
if($row1 >0){
?>
<center>
<table border="2px" style="width:50%;">
<tr>
<th style="background:color:green">Email</th>
</tr>
<?php
 
$result2 = mysqli_query($conn,$qu1);
 while($row = mysqli_fetch_assoc($result2)) 
 {
?>
   <tr>
   <td><?php echo $row["email"] ?></td>
   </tr>
 <?php  
   }
   ?>
   </table>
   </center>
  <button onclick="document.getElementById('id01').style.display='block'" style="width:100%;">Broadcast</button>
 <?php if(isset($_POST['maill'])){
 echo "send";
 }  
?>   
   
   
<?php
}
else{
?> 
<div class="alert" style="height:auto;background-color:red;padding:10px;">
 <?php
echo "<h2>You are not user plase resgister or open the link given in mail</h2>";?></div><?php
}
}
?>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="mailer.php" method="post" style="padding:10px">
    

    <div class="container">
    <input type="hidden" name="code1" value="<?php echo $code ?>">
      <center> <textarea rows="10" cols="70" name="uname" required></textarea></center>


      
        
     <center> <button type="submit" name="submit">Submit</button></center>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
    <center>  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></center>
     
    </div>
  </form>
</div>
