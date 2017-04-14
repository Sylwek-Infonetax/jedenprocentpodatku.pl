<?php session_start();
//include('config/function.php');
//include('fun/db_lacz.php');
//$polaczenie = db_lacz();

if (isset($_GET['p'])) {$p = $_GET['p'];}
if (isset($_POST['p'])) {$p = $_POST['p'];}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="publisher" content="Sylwester Zając (s.zajac@infonetax.pl)">
		<meta name="keywords" content="jeden procent podatku, 1 procent podatku, opp, organziacja pożytku publicznego, fundacje, serwis opp, portal organizacji pożytku publicznego, pozytek publiczny">
		<meta name="description" content="Serwis informacyjny OPP - (jeden procent podatku - 1%) Organizacji Pożytku Publicznego w którym znajdziecie szereg informacji o Organizacjach Pożytku Publicznego oraz możliwości przekazywania 1 procenta podatku na rzecz OPP. To wszystko i jeszcze więcej na www.jedenprocentpodatku.pl">
		
		<title>1% Podatku - portal informacyjny 1</title>
		<link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/linearicons.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<link href="css/slider_opp.css" rel="stylesheet">
	</head>
	<body class="bg-animate">
		<nav class="navbar navbar-default navbar-fixed-top" style="padding-bottom: 3px;">
			<div class="container">
				<div class="row">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">1% Podatku</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php?p=dla_opp"><span class="animated pulse lnr lnr-heart-pulse"></span> Dla OPP</a></li>					
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="lnr lnr-smile"></span> 1% podatku <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="index.php?p=jeden_procent"><span class="lnr lnr-heart"></span> 1% Podatku</a></li>
									<li><a href="index.php?p=faq"><span class="lnr lnr-bubble"></span> Pytania i odpowiedzi</a></li>
									<li><a href="index.php?p=statystyki"><span class="lnr lnr-chart-bars"></span> Statystyki, broszury</a></li>
								</ul>
							</li>
							<li><a href="http://opp.aid.pl/"><span class="lnr lnr-magnifier"></span> Wyszukaj OPP</a></li>
							<li><a href="https://mojpit.pl"><span class="lnr lnr-spell-check"></span> Wypełnij Pit On-Line</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php?p=kontakt"><span class="lnr lnr-envelope"></span> Kontakt</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</div><!-- /.container-fluid -->
		</nav>
		
		<div class="container-fluid">
			<div class="row">
				<div class="parallax-window" data-parallax="scroll" data-image-src="img/bg-parallax.jpg"></div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div id="bg-cont" class="col-md-12">
					<div class="col-md-3">						
						<?php include('page/left.php'); ?>				
						
						<div>
                            <h3>Polecane Organizacje Pożytku Publicznego</h3>
                            <?php include('page/rotator_banerow.php'); slides_polecane_opp(); ?>	
						</div>
					</div>
					<div class="col-md-9">
						<div>
							<?php
								switch ($p) {
									case 'dla_opp': include ("page/dla_opp.php"); break;
									case 'jeden_procent': include ("page/1_procent.php"); break;
									case 'faq': include ("page/faq.php"); break;
									case 'statystyki': include ("page/statystyki.php"); break;
									case 'kontakt': include ("page/kontakt.php"); break;
									default: include ("page/dla_opp.php"); break;
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div id="footer" class="col-md-12">
					<div id="f-link" class="col-md-12 f-link">
						<div class="separate-link"></div>
						<div class="col-md-2"><a href="http://pitscan.pl" class="f-link" title="Pit Scan" target="_blank">Pit Scan</a></div>
						<div class="col-md-2"><a href="http://mojpit.pl" class="f-link" title="Pit OPP" target="_blank">Pit OPP Online</a></div>
						<div class="col-md-2"><a href="http://opp.aid.pl" class="f-link" title="Baza OPP" target="_blank">Baza OPP</a></div>
						<div class="col-md-2"><a href="http://pitregio.pl" class="f-link" title="Pit Regio" target="_blank">Pit Regio</a></div>
						<div class="col-md-2"><a href="http://procentynka.pl" class="f-link" title="Procentynka" target="_blank">Procentynka</a></div>
						<div class="col-md-2"><a href="http://infonetax.pl" class="f-link" title="Infonetax" target="_blank">Infonetax</a></div>
					</div>
					
					<div class="col-md-3">
						<div class="col-md-12">
							<div class=""><span class="f-title">Pit Scan <?php echo date('Y'); ?></span></div>
							<div class="promo-items"><img src="http://lorempixel.com/150/150/city" alt="" /></div>
						</div>
						<div class="col-md-12">
							<div class=""><span class="f-title">Wymagania <i>Pit Scan <?php echo date('Y'); ?></i></span></div>
							<ul class="li-style">
								<li>Lore ipsum</li>
								<li>Lore ipsum</li>
								<li>Lore ipsum</li>
								<li>Lore ipsum</li>
								<li>Lore ipsum</li>
							</ul>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="col-md-12">
							<div class=""><span class="f-title">Pit OPP Online</span></div>
							<div class="promo-items"><img src="http://lorempixel.com/150/150/city" alt="" /></div>
						</div>
						<div class="col-md-12">
							<div class=""><span class="f-title">Wymagania <i>Pit OPP</i></span></div>
							<ul class="li-style">
								<li>Lore ipsum</li>
								<li>Lore ipsum</li>
								<li>Lore ipsum</li>
								<li>Lore ipsum</li>
								<li>Lore ipsum</li>
							</ul>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="col-md-12">
							<div class="col-md-12">
								<div class=""><span class="f-title">Kontakt</span></div>
								<div class="f-copyright">jedenprocentpodatku.pl © 2010 - <?php echo date('Y'); ?> Wszelkie prawa zastrzeżone</div>
								<div class="f-about">Portal Organizacji Pożytku Publicznego jedenprocentpodatku.pl jest obsługiwany przez firmę Infonetax Sp. z o.o., ul. Olszewskiego 6, 25-663 Kielce.</div>
							</div>
							<div class="col-md-10 col-md-offset-2">
								<div class="social-position">
									<a href="#" title="" target="_blank"><img src="img/facebook-ico.png" alt="Facebook" class="social-ico" /></a>
									<a href="#" title="" target="_blank"><img src="img/twitter-ico.png" alt="Twitter" class="social-ico" /></a>
									<a href="#" title="" target="_blank"><img src="img/googleplus-ico.png" alt="Google+" class="social-ico" /></a>
									<a href="#" title="" target="_blank"><img src="img/youtube-ico.png" alt="YouTube" class="social-ico" /></a>
								</div>
							</div>	
						</div>						

					</div>
				</div>
			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/jquery.bxSlider.js"></script>
		<script type="text/javascript">$(document).ready(function(){$('#slider').bxSlider({ticker: true,mode: 'vertical',tickerSpeed: 20000,tickerHover: true});});</script>
		<!-- <script src="js/jquery-2.1.4.min.js"></script> -->
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/parallax.js"></script>
		<script src="js/script.js"></script>
        <script src="js/validation.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
	</body>
</html>