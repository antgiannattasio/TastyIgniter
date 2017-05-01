<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo sprintf(lang('text_title'), $text_heading); ?></title>
	<link type="image/ico" rel="shortcut icon" href="<?php echo root_url('favicon.ico'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo assets_url('css/bootstrap.min.css'); ?>">
	<link type="text/css" rel="stylesheet" href="<?php echo assets_url('css/font-awesome.min.css'); ?>">
	<link type="text/css" rel="stylesheet" href="<?php echo assets_url('css/awesome-checkbox.css'); ?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('views/assets/fonts.css'); ?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('views/assets/stylesheet.css'); ?>">
	<script src="<?php echo assets_url('js/app/vendor.js'); ?>"></script>
	<script src="<?php echo assets_url('js/app/app.js'); ?>"></script>
	<script src="<?php echo assets_url('js/app/installer.js'); ?>"></script>
	<script type="text/javascript">
		var js_site_url = function(str) {
			return "<?php echo rtrim(site_url(), '/').'/'; ?>" + str;
		};

		var js_base_url = function(str) {
			return "<?php echo base_url(); ?>" + str;
		};
	</script>
</head>
<body>
	<div class="container-fluid">
		<div class="col-md-6 center-block">
			<div class="row page-header">
				<div id="logo" class="col-xs-12 col-sm-4 navbar-right">
					<div class="col-xs-8 col-sm-12">
						<img src="<?php echo image_url('tastyigniter-logo.png'); ?>" alt="TastyIgniter Logo">
					</div>
				</div>
				<div class="col-xs-12 col-sm-8">
					<h1><?php echo $text_heading; ?></h1>
					<p><?php echo $text_sub_heading; ?></p>
				</div>
			</div>

			<div class="row bs-wizard" style="border-bottom:0;">
				<div class="col-xs-2 bs-wizard-step <?php if (in_array($setup_step, array('requirements', 'database', 'settings', 'complete', 'success'))) echo "complete"; ?>">
					<div class="progress"><div class="progress-bar"></div></div>
					<span class="bs-wizard-dot"></span>
				</div>
				<div class="col-xs-3 bs-wizard-step <?php if (in_array($setup_step, array('database', 'settings', 'complete', 'success'))) echo "complete"; ?>">
					<div class="progress"><div class="progress-bar"></div></div>
					<span class="bs-wizard-dot"></span>
				</div>
				<div class="col-xs-3 bs-wizard-step <?php if (in_array($setup_step, array('settings', 'complete', 'success'))) echo "complete"; ?>">
					<div class="progress"><div class="progress-bar"></div></div>
					<span class="bs-wizard-dot"></span>
				</div>
				<div class="col-xs-2 bs-wizard-step <?php if (in_array($setup_step, array('complete', 'success'))) echo "complete"; ?>">
					<div class="progress"><div class="progress-bar"></div></div>
					<span class="bs-wizard-dot"></span>
				</div>
				<div class="col-xs-2 bs-wizard-step <?php if (in_array($setup_step, array('success'))) echo "complete"; ?>">
					<div class="progress"><div class="progress-bar"></div></div>
					<span class="bs-wizard-dot"></span>
				</div>
			</div>

			<div class="row setup_box">
				<div class="content">
					<div id="notification">
						<?php echo $this->alert->display(); ?>
					</div>