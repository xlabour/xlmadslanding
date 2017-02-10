<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

$name = $_POST['name']!=''?$_POST['name']:'';
$phone = $_POST['phone']!=''?$_POST['phone']:'';
$submit = $_POST['submit']!=''?$_POST['submit']:'';

if (strtoupper($submit)!=''){
	$redir = '';
	if ($name!='' && $phone!=''){
		//insert to database
		include('./_dbconnect.inc.php');
		
		//get input
		$name = (isset($_POST['name']))?mysqli_real_escape_string($dblink,$_POST['name']):'';
		$phone = (isset($_POST['phone']))?mysqli_real_escape_string($dblink,$_POST['phone']):'';
		$address = (isset($_POST['address']))?mysqli_real_escape_string($dblink,$_POST['address']):'';
		$submit = (isset($_POST['submit']))?mysqli_real_escape_string($dblink,$_POST['submit']):'';
		//hiden input
		$lonlat = (isset($_POST['lonlat']))?mysqli_real_escape_string($dblink,$_POST['lonlat']):'';
		$origin = (isset($_POST['origin']))?mysqli_real_escape_string($dblink,$_POST['origin']):'';
		
		$datetime = date('Y-m-d H:i:s',time());
		
		//query insert
		$q = "
			INSERT INTO customerdata 
			SET 
				name='".$name."',
				phone='".$phone."',
				address='".$address."',
				lonlat='".$lonlat."',
				origin='".$origin."',
				datetime_create='".$datetime."',
				statusfu_idauto=1
		";
		$r = mysqli_query($dblink, $q); //or die(mysqli_error($dblink));
		
		
		//close database connection
		mysqli_close($dblink);
		$redir = ''; //'<meta http-equiv="refresh" content="10; url=index.php" />';
		$msg = '<h6><br/><center>Terima kasih, <br/>Kami akan segera menghubungi Anda.<br /><a class="button button-primary" href="index.php" >Tutup</a></center></h6>';
	} else {
		$redir = '<meta http-equiv="refresh" content="5; url=index.php" />';
		$msg = '<h6><br/><center>Silahkan masukkan Nama dan No.HP Anda dengan benar!<br /><a class="button button-primary" href="index.php" >&laquo; Kembali</a></center></h6>';
	}
}

?>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>XL m-Ads</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php echo $redir;?>
  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!--link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css"-->

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="favicon.png">

</head>
<body>
<?php echo $msg;?>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
