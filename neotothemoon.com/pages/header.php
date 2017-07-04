<html><head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="NEO: TO THE MOON! Is a fun game I made for the community where they can earn GAS from weekly leaderboards.">
    <meta name="viewport" content="width=device-width" initial-scale="1">

	<title>NEO: TO THE MOON!</title>

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:600" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link href="../css/materialize.css" rel="stylesheet">
		<link href="../css/materialize.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../TemplateData/style.css">
	<link href="../css/style.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="../favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="../favicon-16x16.png" sizes="16x16" />



</head>
<body>



	<div id="background"></div>

<section id="content" style="background-position: center -340px;">
		<header>

			<center>
			<a href="http://www.neotothemoon.com"><h1>NEO: <span style="color:#fff">TO THE MOON!</span></h1></a>
</center>
<?php
$url = 'https://api.coinmarketcap.com/v1/ticker/antshares/';
$obj = json_decode(file_get_contents($url), true);

$usd = number_format($obj[0]['price_usd'], 2, '.',',');
$btc = number_format($obj[0]['price_btc'], 7, '.',',');
echo '<h4><a href="https://coinmarketcap.com/currencies/antshares/" target="blank">ANS(NEO) $'.$usd.'/USD | '.$btc.'/BTC</a></h4>';

$url2 = 'https://www.19800.com/api/v1/ticker/?market=cny_anc';
$obj2 = json_decode(file_get_contents($url2), true);
$url3 = 'http://api.fixer.io/latest?base=USD';
$obj3 = json_decode(file_get_contents($url3), true);
$cny = $obj2['data']['LastPrice'];
$usd2 = $obj3['rates']['CNY'];
$anc = number_format($cny/$usd2, 2, '.',',');

echo '<h4><a href="https://www.19800.com/market/cny_anc" target="blank">ANC(GAS) $'.$anc.'/USD | '.$cny.'/CNY</a></h4>';
?>
		</header>
