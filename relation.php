<head>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel="stylesheet" href="style.css"  type="text/css" />
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
<script >
function validate(){
var n=document.regform.name.value;
var p=document.regform.partner.value;
if(n.length>55 || p.length>55) {alert("Max 50 charecters allowed");return false;}
var check=/^[a-zA-Z]{0,50}$/;
var str1 = n.replace(/\s+/g, '');
var str = p.replace(/\s+/g, '');
if((str1.length>0)){
if(!(check.test(str1))){document.getElementById('notice1').innerHTML='special charecters not allowed';return false;}
}
else {document.getElementById('notice1').innerHTML='enter your name'; return false;}
if((str.length>0)){
if(!(check.test(str))){document.getElementById('notice').innerHTML='special charecters not allowed';return false;}
}
else {document.getElementById('notice').innerHTML='enter your name'; return false;}
return true;
}
</script>
</head>
<?php $Id=$_GET['param']; ?>
<body class="tot">
<div class="page-header">
<h1 class="text-center"><span style="color:yellow">RELATIONSHIP STATUS</span></h1> 
<div class="text-center">
<div class="btn-group">
<a href="relation.php?param=<?php echo $Id ?>"class="btn btn-primary">Home</a>
  <a href="Login.php" class="btn btn-primary">login</a>
<a href="share.php?param=<?php echo $Id ?>" class="btn btn-primary">Share</a>
</div>
</div>
</div>
<div class='text-center'>
<form name='regform' onSubmit="return validate();" method="POST" action=''>
 <input type="text" name="name" placeholder="ur's name" onclick ="placeholder=' '"/><span id='notice1' value='' style="color:red"></span><br/><br/>
 <input type="text" name="partner" placeholder="patner's name" onclick ="placeholder=' '" /><span id='notice' value='' style="color:red"></span><br/><br/>
 <input type="submit" name="submit" value="Result" />
</form>
</div>
</body>



<?php

$Email=base64_decode($Id);
if(isset($_POST['submit'])){
$Name=$_POST['name'];
$Partner=$_POST['partner'];
$Na=$Name;
$Pa=$Partner;
$Name = str_replace(' ', '', $Name);
$Partner = str_replace(' ', '', $Partner);
$Name=strtolower($Name);
$Partner=strtolower($Partner);
$ArrayName=array();
$ArrayPartner=array();

for($i=0;$i<26;$i++)
{
	$ArrayName[$i]=0;
	$ArrayPartner[$i]=0;
}
$Max=max(strlen($Name),strlen($Partner));
for($i=0;$i<$Max;$i++)
{
	if($i<strlen($Name)){
$char=substr($Name,$i);
$asc=ord($char)-97; 
	$ArrayName[$asc]+=1;}
	if($i<strlen($Partner))
	{
$char=substr($Partner,$i);
$asc=ord($char)-97;
$ArrayPartner[$asc]+=1;
	}
}
$Count=0;
for($i=0;$i<26;$i++)
{
$Count+=abs($ArrayName[$i]-$ArrayPartner[$i]);	
}
$Dup=array();
for($i=0;$i<6;$i++)
{
	$Dup[$i]=$i+1;
}
function verify($Dupe,$Count)
{
	$z=sizeof($Dupe);
	$y=($Count%$z);
	if($y==0) $Dupe[$z-1]=0;
	else $Dupe[$y-1]=0;
	$Dummy=array();
	$l=0;
	for($i=($y%$z);$Dupe[$i]!=0;$i=(($i+1)%$z))
	{
		$Dummy[$l++]=$Dupe[$i];
	}
	if($l==1) return $Dummy[0];
	return verify($Dummy,$Count);
}

$Out=verify($Dup,$Count);
$to = $Email;
		$sub = "From Relationship Status";
		$header = "Content-type: text/html"."\r\n";
switch($Out)
{
case 1:{$msg=" <div align=center style='margin:20px'>
<pre>
<b style='color:#F012BE;font-size:18px'>Dear Friend,</b>

	<strong><b><b style='color:#0074D9;font-size:20px'>$Na's</b></b></strong>
		
<b><i style='color:#F012BE;font-size:18px'>Relationship Status</i></b> <b>With</b>

      <strong> <b> <b style='color:#0074D9;font-size:20px'> $Pa</b></b></strong>  <b>is</b> 
	   
 <i><b style='color:#E6000F;font-size:40px'>'Friendship'</b></i>
</pre> 
</div> "; @mail($to,$sub,$msg,$header); echo $msg;
 break;}
case 2:{ 
$msg=" <div align=center style='margin:20px'>
<pre>
<b style='color:#F012BE;font-size:18px'>Dear Friend,</b>

	<strong><b><b style='color:#0074D9;font-size:20px'>$Na's</b></b></strong>
		
<b><i style='color:#F012BE;font-size:18px'>Relationship Status</i></b> <b>With</b>

      <strong> <b> <b style='color:#0074D9;font-size:20px'> $Pa</b></b></strong>  <b>is</b> 
	   
 <i><b style='color:#E6000F;font-size:40px'>'Love'</b></i>
</pre> 
</div> "; @mail($to,$sub,$msg,$header); echo $msg;
 break;}
case 3:{ 
$msg=" <div align=center style='margin:20px'>
<pre>
<b style='color:#F012BE;font-size:18px'>Dear Friend,</b>

	<strong><b><b style='color:#0074D9;font-size:20px'>$Na's</b></b></strong>
		
<b><i style='color:#F012BE;font-size:18px'>Relationship Status</i></b> <b>With</b>

      <strong> <b> <b style='color:#0074D9;font-size:20px'> $Pa</b></b></strong>  <b>is</b> 
	   
 <i><b style='color:#E6000F;font-size:40px'>'Affection'</b></i>
</pre> 
</div> "; @mail($to,$sub,$msg,$header); echo $msg;
 break;}	
case 4:{ 
$msg=" <div align=center style='margin:20px'>
<pre>
<b style='color:#F012BE;font-size:18px'>Dear Friend,</b>

	<strong><b><b style='color:#0074D9;font-size:20px'>$Na's</b></b></strong>
		
<b><i style='color:#F012BE;font-size:18px'>Relationship Status</i></b> <b>With</b>

      <strong> <b> <b style='color:#0074D9;font-size:20px'> $Pa</b></b></strong>  <b>is</b> 
	   
 <i><b style='color:#E6000F;font-size:40px'>'Marriage'</b></i>
</pre> 
</div> "; @mail($to,$sub,$msg,$header); echo $msg;
 break;}
case 5:{
$msg=" <div align=center style='margin:20px'>
<pre>
<b style='color:#F012BE;font-size:18px'>Dear Friend,</b>

	<strong><b><b style='color:#0074D9;font-size:20px'>$Na's</b></b></strong>
		
<b><i style='color:#F012BE;font-size:18px'>Relationship Status</i></b> <b>With</b>

      <strong> <b> <b style='color:#0074D9;font-size:20px'> $Pa</b></b></strong>  <b>is</b> 
	   
 <i><b style='color:#E6000F;font-size:40px'>'Enemies'</b></i>
</pre> 
</div> "; @mail($to,$sub,$msg,$header); echo $msg;
 break;}
case 6:{ $msg=" <div align=center style='margin:20px'>
<pre>
<b style='color:#F012BE;font-size:18px'>Dear Friend,</b>

	<strong><b><b style='color:#0074D9;font-size:20px'>$Na's</b></b></strong>
		
<b><i style='color:#F012BE;font-size:18px'>Relationship Status</i></b> <b>With</b>

      <strong> <b> <b style='color:#0074D9;font-size:20px'> $Pa</b></b></strong>  <b>is</b> 
	   
 <i><b style='color:#E6000F;font-size:40px'>'Sisters'</b></i>
</pre> 
</div> "; @mail($to,$sub,$msg,$header); echo $msg;
 break;
}
}
}

?>
<footer>
<b class='text-left'>
<span style='color:orange'>Devoloped By:</span><br/>
<span style="color:red">Y.V.K.Sai Praveen<br/>
  Mugathi P@'1'<br/>
All Rights &reg; Reserved</b></span>
</footer>