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
	<div class="row">
		<center>
			<div class="column" style="margin-top: 3%">
				<div style="position:relative; overflow: show">
					<img src="mbbindovision_smallbanner_top.jpg" />
					<br /> <br />
					<h6 style="color:#777; font-weight:bold;">Masukkan Data Anda:</h6>
					<form action="./submit.php" method="post">
						<input type="hidden" name="origin" value="<?php echo $_SERVER['HTTP_REFERER'];?>" autocomplete="off" />
						<input type="hidden" name="lonlat" id="lonlat" value="" /> <!-- LonLat untuk kemudahan Kami dalam mengechek Coverage XL di tempat Anda -->
						<input type="text" name="name" value="" placeholder="Nama" autocomplete="off"  autofocus/><br />
						<input type="number" name="phone" value="" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="No. Telp / HP" autocomplete="off" /><br />
						<input type="text" name="address" value="" placeholder="Alamat Pemasangan Super Bundle" autocomplete="off" /><br />
						<!--textarea name="address" rows="5" placeholder="Alamat Pemasangan Super Bundle" autocomplete="off"></textarea-->
						<label><input id="sendlocation" type="checkbox" name="sendlocation" value="1" /> Kirim lokasi saya (<i><a href="javascript:showFAQ();">kenapa?</a></i>)</label>
						<input type="Submit" name="submit" id="submit" value="Kirim" class="button button-primary"/>
						<br /><br />
						<span style="font-size:10pt;"><i>Penggunaan paket ini untuk area 4G LTE XL,<br />Cek lokasi instalasi perangkatmu <a target="_blank" href="http://4g.xl.co.id/coverage">disini</a></i></span>
					</form>
				</div>
			</div>
		</center>
	</div>
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
