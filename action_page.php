<?php $_GET['search'] ?>
<html>
	<head>
		<title>User Data</title>
		<link rel="stylesheet" type="text/css" href="/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/global.css">
	<style>
		body {
			width: 100%;
			height: 100%;
		}
		div {
			width: 100%;
			height: 100%;
			padding:0;
			margin:0;
		}
		.col-sm-6 {
			right: 0;
		}
		img {
			position: absolute;
			right: 0;
		}
		.right {
			position: absolute;
			right: 0;
		}
		iframe:focus { 
			outline: none;
			height:100%;
		}
		iframe[seamless] { 
		    display: block;
		}
	</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<iframe src="../data/<?php echo $_GET['search']; ?>.html"></iframe>
				</div>
				<div class="col-sm-6 right">
					<img style="height:100vh;" src="../<?php echo $_GET['search']; ?>.png"></img>
				</div>
			</div>
		</div>
	</body>
</html>
