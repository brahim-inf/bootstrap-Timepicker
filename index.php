<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link type="text/css" href="css/bootstrap.min.css" />
        <link type="text/css" href="css/bootstrap-timepicker.min.css" />
        <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
    </head>
    <body>
	<div class="input-group bootstrap-timepicker timepicker">
            <input id="timepicker1" type="text" class="form-control input-small">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        </div>
        <div class="input-group bootstrap-timepicker timepicker">
            <input id="timepicker2" type="text" class="form-control input-small">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        </div>
 
        <script type="text/javascript">
            $('#timepicker2').timepicker({
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
