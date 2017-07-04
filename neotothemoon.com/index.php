
<?php include 'pages/header.php'; ?>

		<section id="part-1">
			<h2 style="font-size:35px; font-weight:bold; text-align:center;  margin-top:0px; margin-bottom:20px;">Play Game</h2><center>
<p style="font-size:20px;">Play and compete in our weekly competition to earn NEO GAS!</p>

			<div class="content2">

				<div id="splash"><img  src="images/splash.png"  onclick="show()" style="width:100%"></div>

				<div class="webgl-content" id="show" style="display:none">

	      <div id="gameContainer" style="width: 100%;" >


	    </div>
			<div class="footer" >

				<div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
				<div class="title">Click anywhere on game screen or press space bar to jump.</div>
			</div>

			</div>


	</div>
		</section>

		<section id="part-2">

			<div class="content">
        <div id="leaderboard">



	      <h2 style="font-size:35px; font-weight:bold; text-align:center;  margin-top:0px; margin-bottom:20px;">Leaderboard</h2><center>



<p style="font-size:20px;">Weekly leaderboard ends every Friday at 10AM EDT.</p>
<div id="clockdiv">
  <div>
    <span class="days"></span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>

<?php
  include 'pages/db.php';
	$numAmount = 10;

	include 'pages/leaderboardOutput.php';

	?>

<span class="smalltext"> *If there are multiple users with same score, they will share that tier's reward</span>
		 <div style="clear:both"></div></div>
			</div>
		</section>

		<section id="part-3">
			<h2 style="font-size:35px; font-weight:bold; text-align:center;  margin-top:0px; margin-bottom:20px;">Information</h2>
<center>
			<div class="content">
			<h5>
			"NEO via technologies including P2P, dBFT, digital certificate,smart contract,superconductive trade, cross-chain operation protocol, enables people to manage smart contract effectively, safely and legally."
		</h4>
		<br>
		<p>NEO, formerly known as Antshares, is China's first original and open source Block Chain project. Through its smart asset platform, NEO allows for a smarter way for assets registration, issuance, and circulation. NEO shares can be held in your wallet and generate GAS which will be used to power the platform.
			NEO: TO THE MOON! Is a fun game I made for the community where they can earn GAS from weekly leaderboards.  </p>
		<h3 style="font-size:30px; font-weight:normal; text-align:center;  margin-top:0px; margin-bottom:20px;">Links</h2>

		<li>
			<a href="http://neo.org" target="blank">NEO Official Website</a>
</li>
<li>
	<a href="http://reddit.com/r/antshares" target="blank">Reddit Community</a>
</li>
<li>
	<a href="http://reddit.com/r/antshares" target="blank">ANC Calculator</a>
</li>
			</div>
		</section>


		<?php include 'pages/footer.php'; ?>
