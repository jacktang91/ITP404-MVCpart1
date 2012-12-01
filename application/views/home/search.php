<html>
<head>
	<title>Twitter Search App</title>
	<link rel="stylesheet" href="<?php echo URL::to_asset('css/main.css') ?>">
</head>
<body>
	<div id="container">
		<h1>Twitter Search Page</h1>
		<form action="<?php echo URL::to('twitter/results')?>" method ="get">
				<label> Username </label> <input type="text" name="search-term"></br><br/>
				<input type="submit" value="Search">
		</form>
	</div>
</body>
</html>