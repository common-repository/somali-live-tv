<html>

<head>
<title>Somali TV - LIVE TV</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80541240-1', 'auto');
  ga('create', 'UA-85555870-1', 'auto', 'clientTracker');
  ga('send', 'pageview');
  ga('clientTracker.send', 'pageview');
</script>
</head>

<body>
<a target="_parent" href="http://<?php echo parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST); ?>/live-tv/">
<div style="position: absolute;width: 140px;height: 60px;z-index: 1;right: 50px;left: 50px;margin: 0px;top: 160px;>
<p dir="ltr" align="center"><h2>
<font color="#FFF"> <?php echo parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST); ?> </font></h2></p></div>
<img src="http://i.imgur.com/YhDjbTv.gif" width="100%" height="250" alt="All Somali TV in one click by hividy" Title="All Somali TV in one click by hividy"></a>
<center>
<img src="https://i.imgur.com/yVBdpBS.jpg" alt="sntv" width="36" height="36">
<img src="https://i.imgur.com/nXvCjPL.jpg" alt="universaltv" width="36" height="36">
<img src="https://i.imgur.com/N1FRFoy.jpg" alt="kalsan" width="36" height="36">
<img src="https://i.imgur.com/p0tsFUp.png" alt="somalicable" width="36" height="36">
<img src="https://i.imgur.com/8NbULSf.png" alt="horncable" width="36" height="36">
<img src="https://i.imgur.com/S6o8yOj.png" alt="slnd" width="36" height="36">
<img src="https://i.imgur.com/6bFCnNa.jpg" alt="mbc2" width="36" height="36">
</center>

<br>
<?php

$app_list = "https://www.hividy.com/saved/api.php?action=get_app_list";
//  Initiate curl
$ch = curl_init($app_list);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data2 = curl_exec($ch);
curl_close($ch);

$json4 = $data2;
$app_list = json_decode($json4, true);

if (is_array($app_list)){ 
foreach($app_list as $app) {
echo $app[name];
 }
}
?>
<br>
</body>

</html>