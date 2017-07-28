<html>
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
<title></title>
</head>

<?php $Id=$_GET['param'];?>
<body class="tot">
<div class="page-header">
<h1 class="text-center"><span style="color:yellow">RELATIONSHIP STATUS</span></h1> 
<div class="text-center">
<div class="btn-group">
  <a href="relation.php?param=<?php echo $Id ?>" class="btn btn-primary">Home</a>
</div>
</div>
</div>
<div class="text-center">
                                                             <b style="font-size:20px;color:blue;"> Copy Paste the URL given in the Box below..!!!<br/>
                                          
                                                           Have Fun...!!!</b></div>
<?php
$url="http://relationshipstatus.comeze.com/relation.php?param=".$Id;
?>
<div class="text-center">
                                                              <input type='box' style="height:40px;width:500px" value='<?php echo $url?>'/><br/><br/></div>
<div class="text-center"><span style="color:blue;font-size:20px"> OR<br/> 
Share Your Link By Below Media...!!!<br/>
</span></div>
	<div class="text-center">													 
<a href="http://www.facebook.com/sharer.php?u=http://relationshipstatus.comeze.com/relation.php?param=<?php echo $Id ?>" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a>
	
	<!-- Google+ -->
    <a href="https://plus.google.com/share?url=http://relationshipstatus.comeze.com/relation.php?param=<?php echo $Id ?> " target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
    </a>
	
	<!-- Twitter -->
    <a href="https://twitter.com/share?http://relationshipstatus.comeze.com/relation.php?param=<?php echo $Id ?>" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
    </a>
	
	<a href="whatsapp://send?text=http://relationshipstatus.comeze.com/relation.php?param=<?php echo $Id ?>" action="_blank">
	<img src='whatsapp.png' style='width:70px;height:70px'/>
	</a>
	</div>

</body>
<footer>
<b class="text-left">
<span style='color:orange'>Devoloped By:</span><br/>
<span style="color:red">Y.V.K.Sai Praveen<br/>
  Mugathi P@'1'<br/>
All Rights &reg; Reserved</b></span>
</footer>
</html>