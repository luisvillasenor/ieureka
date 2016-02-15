<html>
<head>
	<title>Homepage - Dynno.education</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://file.myfontastic.com/xtqYhHuyApx6MR43y8HiHJ/icons.css" rel="stylesheet">

</head>
<body id="<?php echo $template; ?>" class="body-font"> <!-- homepage -->

<div id="wrapper">

	<?php
		if ($template != 'account') {
			include 'template_header_front.php';
		} else {
			include 'template_header_account.php';
		}
	?>