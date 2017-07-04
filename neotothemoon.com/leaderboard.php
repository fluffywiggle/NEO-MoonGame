

<?php include 'pages/header.php'; ?>

<section id="part-1">

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


<?php include 'pages/footer.php'; ?>
