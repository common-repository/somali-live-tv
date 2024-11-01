<html>

<head>
<base target="play">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Somali TV - LIVE TV Channel List</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80541240-1', 'auto');
  ga('send', 'pageview');

</script>
<style>
#rcorners4 {
    border-radius: 15px 50px 30px 5px;
    background: #73AD21;
    padding: 20px;
    width: 150px;
    height: 150px;
}

#rcorners5 {
    border-radius: 15px 50px 30px;
    background: #73AD21;
    padding: 20px;
    width: 150px;
    height: 150px;
}
.table {
border:0px; 
width:90px; 
display:inline;
}
.td {
valign:top;
width:90px;
}
.play {
    position: absolute;
    height: 120px;
    width: 110px;
}
.sawir {
   border-radius: 10px 10px;
    background: #eaeaea;
    padding: 10px;
    width: 90px;
    height: 100px;
    display: block;
    clear: none;
}

#rcorners6 {
   border-radius: 10px 10px;
    background: #eaeaea;
    padding: 10px;
    width: 90px;
    height: 100px;
}
</style>
</head>

<body>
<?php 
$app_list = "https://www.livetvone.com/saved/list.php?action=get_app_list";
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
foreach ($app_list as $app): 
echo $app["name"];
endforeach;
}
  ?>    

</body>

</html>