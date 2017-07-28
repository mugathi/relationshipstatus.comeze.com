<head>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel="stylesheet" href="style.css"  type="text/css" >
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script><script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>
<title>Relationships status</title>
<script>
function validate()
{
	var s=document.regform.mail.value;
	var check=/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	if(check.test(s))
	{
		return true;
	}
	else {
		return true;
	}
}


</script>
</head>
<body class='tot'>
<div class="page-header">
<h1 class="text-center"><span style="color:#ff5050">RELATIONSHIP STATUS</span></h1> 
<div class="text-center">
<div class="btn-group">
  <a 
  <a href="Register.php" class="btn btn-primary">Prank Ur Friend</a>
</div>
</div>
</div>
<div class='text-center'>
<form name='regform' method="POST" action='' onsubmit="return validate()">
 <input type="text" name="mail" placeholder="e-mail" value='' onclick ="placeholder=' '" /><span id='notice' style="font-size:20px;color:red;"></span><br/><br/>
<input type="submit" name="submit" value="login" />
</form>
</div>
</body>

<?php
if(isset($_POST['submit'])){
$Email=$_POST['mail'];
$hashed = base64_encode($Email);
include_once('connect.php');
@$que="SELECT Value FROM users WHERE Email='$Email'";
@$exe=mysqli_query($conn,$que);
$rec = mysqli_fetch_assoc($exe);
@$path="relation.php?param=".$hashed;
if($rec['Value']==1){echo"<script>window.location.assign('$path')</script>";}
else {echo"<div class='text-center'><b style='font-size:20px;margin-left:400px'> Ur Mail Hasn't Been Registered Yet .. Go to Prank ur Friend  and Register There to Continue...!!!</b></div>";}
}
?>


<b class='text-left'>
<span style='color:red'>Developed By:</span><br/>
<span style="color:black">Y.V.K.Sai Praveen<br/>
  Mugathi P@'1'<br/>
All Rights &reg; Reserved</b></span>
