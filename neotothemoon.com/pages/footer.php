
		<div id="blob-container">


      <img id="blob-1" src="../images/moon.png" class="force-show" style="top: -539.333px; left: 484px;">
      <img id="blob-2" src="../images/stars2.png" class="force-show" style="top: -539.333px; left: 0;">
      <img id="blob-3" src="../images/stars.png" class="force-show" style="top: 0; left: 0;">
      <img id="blob-4" src="../images/NEOFly.png" width="200px" class="force-show" style="top: -539.333px; left: 484px;">
      <img id="blob-5" src="../images/Ant1.png" width="200px" class="force-show" style="top: -539.333px; left: 484px;">
  <!--  <img id="blob-6" src="../images/earth.png" class="force-show" style="top: -539.333px; left:0px;">
	--><img id="blob-7" src="../images/stars2.png" class="force-show" style="top: -539.333px; left: 0;">
			<img id="blob-8" src="../images/stars.png" class="force-show" style="top: 0; left: 0;">
		</div>
	</section>

<?php include 'pages/privacy.php'; ?>

	<footer class="page-footer"><center>
<span class="smalltext "><i> I am not affiliated in any way with Antshares/NEO team. This is just a project I want to make for the community.</span>
</i>	</center>	 <div class="footer-copyright">
				 <div class="container">
				 © 2017 Fluffy Wiggle |    <a href="#privacy-popup">Policies</a>
		<div class="right">		Send some   <i class="material-icons red-text">favorite</i> <a class="neobold address pointer spread tooltipped" onclick="select_all_and_copy(this)" data-position="top" data-delay="20" data-tooltip="Click to Copy">AJuv7VXMjaMmVpkk1QgVQF61QyFVaveiF9 </a></div>
				 </div>
			 </div>
		 </footer>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="../scripts/parallax.js"></script>
<script src="../Build/UnityLoader.js"></script>
<script src="../TemplateData/UnityProgress.js"></script>
	<script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
	  <script src="../js/copy2clipboard.js"></script>

<script>
$('.modal').modal({
			dismissible: true, // Modal can be dismissed by clicking outside of the modal
			opacity: .5, // Opacity of modal background
			inDuration: 300, // Transition in duration
			outDuration: 200, // Transition out duration
			startingTop: '4%', // Starting top style attribute
			endingTop: '10%', // Ending top style attribute

		}
	);

  function show(target){
	//document.getElementById(target).style.display = 'block';
	document.getElementById("splash").style.display = 'none';

		document.getElementById("show").style.display = 'block';
		var s = document.createElement("script");
		s.type = "text/javascript";
		s.src = "../js/loadGame.js";
		document.body.appendChild(s);

	//document.getElementById(target).style.display = 'block';
}

	</script>
	<script>
	function getTimeRemaining(endtime) {
	  var t = Date.parse(endtime) - Date.parse(new Date());
	  var seconds = Math.floor((t / 1000) % 60);
	  var minutes = Math.floor((t / 1000 / 60) % 60);
	  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
	  var days = Math.floor(t / (1000 * 60 * 60 * 24));
	  return {
	    'total': t,
	    'days': days,
	    'hours': hours,
	    'minutes': minutes,
	    'seconds': seconds
	  };
	}

	function initializeClock(id, endtime) {
	  var clock = document.getElementById(id);
	  var daysSpan = clock.querySelector('.days');
	  var hoursSpan = clock.querySelector('.hours');
	  var minutesSpan = clock.querySelector('.minutes');
	  var secondsSpan = clock.querySelector('.seconds');

	  function updateClock() {
	    var t = getTimeRemaining(endtime);

	    daysSpan.innerHTML = t.days;
	    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
	    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
	    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

	    if (t.total <= 0) {
	      clearInterval(timeinterval);
	    }
	  }

	  updateClock();
	  var timeinterval = setInterval(updateClock, 1000);
	}

	var deadline ='July 7 2017 22:00:00 GMT+8';
	initializeClock('clockdiv', deadline);



			</script>
			<script>
			function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
	Materialize.toast('Address Copied to Clipboard', 4000) // 4000 is the duration of the toast

  $temp.remove();
}

			</script>
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-51918621-11', 'auto');
			  ga('send', 'pageview');

			</script>
</body></html>
