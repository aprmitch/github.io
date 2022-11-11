<?php
session_start();
?>

<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>NTS Inventory Manager</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="index is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="index.html">NTS Inventory Manager <span>Add Received Inventory</span></a></h1>
					<nav id="nav">
						<ul>
							<li><a href="actions.php" class="button primary">Home</a></li>
							
							<li><a href="logout.php" class="button primary">Logout</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
				<h1 id="logo"><a href="index.html">Landed</a></h1>
					<nav id="nav">
				<ul>
							
							<li>
								<a href="#">Layouts</a>
								<ul>
								
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option 1</a></li>
											<li><a href="#">Option 2</a></li>
											<li><a href="#">Option 3</a></li>
											<li><a href="#">Option 4</a></li>
										</ul>
									</li>
								</ul>
							</li>
							
						</ul>
</nav>
					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">
						<header>
							<h2>TWENTY</h2>
						<camera>
						
							

						<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://sandbox.dev.clover.com/v3/merchants/mId/items', [
  'body' => '{"hidden":"false","available":"true","autoManage":"false","defaultTaxRates":"true","isRevenue":"false"}',
  'headers' => [
    'authorization' => 'Bearer guts',
    'content-type' => 'application/json',
  ],
]);

echo $response->getBody();
?>
</camera>
						</header>
						<p>This is <strong>Twenty</strong>
							<ul class="buttons stacked">
								<li><a href="#main" class="button fit scrolly">Scan Barcode</a></li>
							</ul>
						</footer>

					</div>

				</section>

		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>