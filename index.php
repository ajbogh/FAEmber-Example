<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="cleartype" content="on">
		<title>CliQ</title>
		
		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/libs/normalize.css">
		<link rel="stylesheet/less" type="text/css" href="css/style.less">
		<link rel="stylesheet/less" type="text/css" href="css/nav.less">
		<link rel="stylesheet/less" type="text/css" href="css/modal.less">
		<link rel="stylesheet/less" type="text/css" href="css/tabs.less">
		<link rel="stylesheet/less" type="text/css" href="css/forms.less">

		<!-- put some scripts up top that are needed for layout rendering -->
		<script src="js/libs/less-1.7.4.min.js"></script>
		
		<script type="text/javascript">
			// IE doesn't have the console object if the console's not open
			// This is a shim to prevent IE errors when people use console.log or other functions.
			if(!console){
				console = {};
				console.log = console.error = console.trace = console.table = console.info = console.memory = console.debug = console.warn = function(){};
			}
		</script>
	</head>
	<body>
		<!-- HTML containers -->
		<?php include('views/shell.php'); ?>

		<?php include('views/dashboard.php'); ?>
		<?php include('views/login.php'); ?>
		<?php include('views/file.php'); ?>

		<?php include('views/modals/contact.php'); ?>
		<?php include('views/modals/shell.php'); ?>

		<!-- Libraries -->
		<script type="text/javascript" src="js/libs/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="js/libs/handlebars-1.1.2.js"></script>
		<script type="text/javascript" src="js/libs/ember-1.7.0.js"></script>
		<script type="text/javascript" src="js/libs/ember-animate.js"></script>
		<script type="text/javascript" src="js/libs/ember-states.js"></script>
		<script type="text/javascript" src="js/libs/ember-data-latest.js"></script>
		<script type="text/javascript" src="js/libs/moment.js"></script>

		<!-- Application files -->
		<script type="text/javascript" src="js/app.js"></script>
		<script type="text/javascript" src="js/router.js"></script>
		<script type="text/javascript" src="js/store.js"></script>
		<script type="text/javascript" src="js/helpers.js"></script>

		<!-- Views -->
		<script type="text/javascript" src="js/views/fadeinview.js"></script>

		<!-- Models -->
		<script type="text/javascript" src="js/models/transactiontype.js"></script>
		<script type="text/javascript" src="js/models/filestatus.js"></script>
		<script type="text/javascript" src="js/models/address.js"></script>
		<script type="text/javascript" src="js/models/addresssource.js"></script>
		<script type="text/javascript" src="js/models/businesstitle.js"></script>
		<script type="text/javascript" src="js/models/file.js"></script>
		<script type="text/javascript" src="js/models/filetype.js"></script>
		<script type="text/javascript" src="js/models/files.js"></script>
		<script type="text/javascript" src="js/models/role.js"></script>
		<script type="text/javascript" src="js/models/office.js"></script>
		<script type="text/javascript" src="js/models/firm.js"></script>
		<script type="text/javascript" src="js/models/contact.js"></script>
		<script type="text/javascript" src="js/models/contacttype.js"></script>
		<script type="text/javascript" src="js/models/email.js"></script>
		<script type="text/javascript" src="js/models/emailtype.js"></script>
		<script type="text/javascript" src="js/models/forwardaddresssource.js"></script>
		<script type="text/javascript" src="js/models/honorific.js"></script>
		<script type="text/javascript" src="js/models/phonenumber.js"></script>
		<script type="text/javascript" src="js/models/phonenumbertype.js"></script>
		<script type="text/javascript" src="js/models/signatorymode.js"></script>
		<script type="text/javascript" src="js/models/user.js"></script>
		<script type="text/javascript" src="js/models/auth.js"></script>
		<script type="text/javascript" src="js/models/underwriter.js"></script>

		<!-- Routes -->
		<script type="text/javascript" src="js/routes/applicationroute.js"></script>
		<script type="text/javascript" src="js/routes/fileroute.js"></script>
		<script type="text/javascript" src="js/routes/dashboardroute.js"></script>
		<script type="text/javascript" src="js/routes/loginroute.js"></script>
		<script type="text/javascript" src="js/routes/indexroute.js"></script>

		<!-- Controllers -->
		<script type="text/javascript" src="js/controllers/applicationcontroller.js"></script>
		<script type="text/javascript" src="js/controllers/contactcontroller.js"></script>
		<script type="text/javascript" src="js/controllers/logincontroller.js"></script>
		<script type="text/javascript" src="js/controllers/logoutcontroller.js"></script>
		<script type="text/javascript" src="js/controllers/filecontroller.js"></script>

		<!-- Components -->
		<script type="text/javascript" src="js/components/modaldialogcomponent.js"></script>		
	</body>
</html>