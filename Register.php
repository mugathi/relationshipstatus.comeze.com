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
		document.getElementById('notice').innerHTML="enter valid email id";
		return false;
	} 
}


</script>
<title>Relationships status</title>
</head>
<body class='tot'>
<div class="page-header">
<h1 class="text-center"><span style="color: #800000">RELATIONSHIP STATUS</span></h1> 

</div>

<div class="text-center">
 <span style="color:black"><b>Enter your email Here... You will get a link which can be pasted to your friends 
scrapbook, email , blogs or forum. Whenever your friends  enter their Secret crush names, 
it will be send immediately to your email inbox....</b></span>
</div>
<div class='text-center'>
<form name='regform' action='' method="POST" onsubmit="return validate()">
<input type="text" name="mail" placeholder="e-mail" value='' onclick ="placeholder=' '" /><span id='notice' style="font-size:20px;color:red;"></span><br/><br/>
<input type="submit" name="submit" value="register" />
</form>
</div>
</body>

<?php
if(isset($_POST['submit'])){
$Mail=$_POST['mail'];
include_once('connect.php');
$sql = "SELECT * FROM users WHERE Email = '$Mail'";
$res = mysqli_query($conn,$sql);
$rec = mysqli_fetch_assoc($res);

if( $rec['Value']==1) { header("location:Login.php");}
else {
	$Up="INSERT INTO users(Email,Value) VALUES ('$Mail',1)  ";
	$exe=mysqli_query($conn,$Up);
$hashed = base64_encode($Mail);
header("location:share.php?param=$hashed");
}
}
?>

<b class='text-left'>
<span style='color:orange'>Devoloped By:</span><br/>
<span style="color:red">Y.V.K.Sai Praveen<br/>
  Mugathi P@'1'<br/>
All Rights &reg; Reserved</b></span>