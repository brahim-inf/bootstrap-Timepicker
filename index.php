<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>bootstrap timepicker</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<link type="text/css" href="css/bootstrap-timepicker.min.css" />
	
	<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
</head>
<body>
	<div class="panel panel-default">
		<header id="header" class="panel-heading">
			<h4 class="panel-title">
				Custom bootstrap timepicker
			</h4>
		</header><!-- /header -->
		<div class="panel-body">
			<div class="input-group bootstrap-timepicker timepicker">
				<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
				<input id="timepicker1" type="text" class="timepicker-input form-control " placeholder="Enter your start time" aria-describedby="basic-addon1">
			</div>
			<div class="input-group bootstrap-timepicker timepicker">
				<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
				<input id="timepicker2" type="text" class="timepicker-input form-control " placeholder="Enter your arrive time" aria-describedby="basic-addon1">
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$('.timepicker-input').timepicker({
			minuteStep: 1,
			template: 'modal',
			appendWidgetTo: 'body',
			showSeconds: true,
			showMeridian: false,
			defaultTime: false
		});
	</script>
</body>
</html>