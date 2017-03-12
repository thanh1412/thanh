<!DOCTYPE html>
<html>
<body>
<center>
</br>
</br>
<?php
    if(isset($_POST['xuly'])){


        $kq=$_POST['kq'];
    
if($kq==1)
  {
     echo"<img src='1.PNG' />";
 }

if($kq==2)
  {
     echo"<img src='2.PNG' />";
 }
if($kq==3)
  {
     echo"<img src='3.PNG' />";
 }
if($kq==4)
  {
     echo"<img src='4.PNG' />";
 }
if($kq==5)
  {
     echo"<img src='5.PNG' />";
 }
if($kq==6)
  {
     echo"<img src='6.PNG' />";
 }
if($kq==7)
  {
     echo"<img src='7.PNG' />";
 }
if($kq==8)
  {
     echo"<img src='8.PNG' />";
 }

        
 }
?>

<form name='form' method='post' action="index.php">

<input type="submit" name="back" value="quay ve" /> 
</form>
</center>

</body>	
