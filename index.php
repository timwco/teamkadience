<?php 
error_reporting(0);
require "includes/Mobile_Detect.php";
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
	header('Location: http://teamkaidence.com/m');
} else { ?>
<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <!--[if IE]><![endif]-->

  <title>Team Kaidence</title>
  
  <meta name="description" content="">
  <meta name="author" content="Argyll Studios">
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
  
  <link href="images/favicon.ico" rel="icon" type="image/x-icon" />
  <link rel="stylesheet" href="includes/style.css">

</head>
<body>
<div id="wrapper">
	<div id="container">
		<div id="header"><h1>Team Kaidence</h1></div>
		<div id="bodyarea">
			
			<?php $qs = $_GET['r']; ?>
			<?php if($qs == 'thankyou') : ?>
				<div class="thankyou">Thank you for making a donation. Every little bit helps!</div>
				<?php include('includes/payment-recieved.php'); ?>
			<?php endif; ?>
			
			<div class="hero">
				<img src="images/kaidence.jpg" alt="kaidence"/>	
			</div>
			<div class="info">
				<p>
					For updates, please check out our <a href="http://on.fb.me/hYyBlm">Facebook Page</a>. 
				</p>
				<div class="paypal">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="asForm" enctype="multipart/form-data">
						<input type="hidden" name="cmd" value="_donations">
					    <input type="hidden" name="business" value="teamkaidence@gmail.com">
						<div class="asFormElement">
							<label for="ammount">Amount</label>
					        <input class="asInputShort" name="amount" id="amount" type="text" value="$" />
						</div>
						<input type="hidden" name="lc" value="US">
						<input type="hidden" name="item_name" value="Team Kaidence - Donation">
						<input type="hidden" name="currency_code" value="USD">
						<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">
						<input type="hidden" name="return" value="http://teamkaidence.com/?r=thankyou" />
						<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
						<input type="image" class="asSubmit" name="Submit" src="images/paypal.png" />
						<div class="sending">
							<span>sending...</span> <img src="images/ajax-loader.gif"/>
							<br />
							<span class="smaller">(please click "Return to donations coordinator" once complete)</span>
						</div>
					</form>		
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div id="grass">
	  <div id="footer_design"></div>
	</div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="includes/scripts.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20354039-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>
</html>
<?php } ?>