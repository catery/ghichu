<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="content-language" content="vi"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title><?php echo isset($title) ? convert_title($title) : ''; ?></title>
		<base href="<?php echo GHICHU_BASE_URL; ?>"/>
		<link rel="shortcut icon" href="public/icon/60ico.ico"/>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="public/css/materialize.min.css" media="screen,projection"/>
		<link rel="stylesheet" type="text/css" href="public/css/portal.css">
		<script type="text/javascript" src="public/js/init.js"></script>
		<script type="text/javascript" src="public/js/jquery.min.js"></script>
		<script type="text/javascript" src="public/js/materialize.min.js"></script>
		<script type="text/javascript" src="public/js/notify.js"></script>
	</head>
	<body>
		<?php $this->load->view('templates/top'); ?>
		<div class="row">
      		<div class="col s12">
      			<h5><i class="small material-icons" style="vertical-align: bottom;">reorder</i>&nbsp;<?php echo convert_title($title); ?></h5>
      			<?php $this->load->view($template, isset($data) ? $data : NULL); ?>
      		</div>
    	</div>
    	<script type="text/javascript">
			$(document).ready(function(){ $('.modal-trigger').leanModal(); });
		</script>
	</body>
</html>