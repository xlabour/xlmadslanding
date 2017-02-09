<?php
error_reporting(0);

?>
<!DOCTYPE html>
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

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!--link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css"-->

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="shortcut icon" type="image//vnd.microsoft.icon" href="./favicon.ico">
  <script src="geo.js"></script>
  <script language="javascript">
	if (location.protocol != 'https:'){
		//location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
	}


  showFAQ = function(){
	  alert("[INFO] Geo location (longitude dan latitude) akan Kami gunakan untuk mempermudah pengecekan coverage XL di area Anda.");
  }
  </script>
</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
	<div class="column" style="margin-top: 3%">
		<div style="position:relative; overflow: show">
			<img width="100%" src="mbbindovision_smallbanner_top.jpg" />
			<br /> <br />
			<h6 style="text-align:center; color:#777; font-weight:bold;">Masukkan Data Anda:</h6>
			<form action="./submit.php" method="post">
				<input type="hidden" name="origin" value="<?php echo $_SERVER['HTTP_REFERER'];?>" autocomplete="off" />
				<input type="hidden" name="lonlat" id="lonlat" value="" /> <!-- LonLat untuk kemudahan Kami dalam mengechek Coverage XL di tempat Anda -->
				<label>Nama:</label>
				<input class="goWidth" type="text" name="name" value="" placeholder="" autocomplete="off"  autofocus /><br />
				<label>No. Telp / HP:</label>
				<input class="goWidth" type="number" name="phone" value="" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="" autocomplete="off" /><br />
				<label>Alamat Pemasangan Super Bundle:</label>
				<!--input type="text" name="address" value="" placeholder="" autocomplete="off" /><br /-->
				<textarea class="goWidth" name="address" rows="5" placeholder="" autocomplete="off"></textarea><br />
				<!--label><input id="sendlocation" type="checkbox" name="sendlocation" value="1" /> Kirim lokasi saya (<i><a href="javascript:showFAQ();">kenapa?</a></i>)</label-->
				<center><input type="Submit" name="submit" id="submit" value="Submit Order" class="button button-primary"/></center>
				<br /><br />
				<center><span style="font-size:10pt;"><i>Penggunaan paket ini hanya untuk area 4G LTE XL, Silahkan cek lokasi instalasi perangkatmu <a target="_blank" href="https://4g.xl.co.id/coverage">disini</a></i></span></center>
			</form>
		</div>
	</div>
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
