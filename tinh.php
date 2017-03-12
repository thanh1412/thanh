
<!DOCTYPE html>
<html>
<body>
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '260773321046866',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
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

<div style='padding:10px 8px; position: fixed; top: 50%; left: 50%; margin-top: -150px; margin-left: -520px;border-radius: 0;border: 0px solid #d9d9d9;'>
<div class="fb-like" data-href="" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
</div>
</center>

</body>	
</html>
