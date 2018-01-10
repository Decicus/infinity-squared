<!DOCTYPE html>
<?php
// Start YOURLS engine
require_once( dirname(__FILE__) . '/includes/load-yourls.php' );

// Ask for Infinity Squared settings
if( @include dirname(__FILE__) . '/public/config.php' ) {
	include( dirname(__FILE__) . '/public/config.php' );
} else {
	include( dirname(__FILE__) . '/public/config-sample.php' );
}

class ISQ { public static $general = array(), $links = array(), $social = array(), $recaptcha = array(); }

// Default dependencies
$dependencies = array();

// Load translations
yourls_load_custom_textdomain( 'isq_translation', 'public/languages' );
?>

<html>
	<head>
		<title><?php echo ISQ::$general['name']; ?></title> <!-- Site title defined in theme settings -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo YOURLS_SITE; ?>/public/style.css" /><!-- Theme CSS -->
		<?php if ( ISQ::$general['customstyle'] ) { ?>
			<link rel="stylesheet" href="<?php echo YOURLS_SITE; ?>/public/custom.css" /><!-- Custom CSS -->
		<?php } ?>

		<link rel="apple-touch-icon" sizes="57x57" href="/images/icons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/images/icons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/images/icons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/images/icons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/images/icons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/images/icons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/images/icons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/images/icons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/images/icons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/images/icons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">
		<link rel="manifest" href="/images/icons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/images/icons/ms-icon-144x144.png">
		<meta name="msapplication-config" content="/images/icons/browserconfig.xml">
		<meta name="theme-color" content="#013f6d">
	</head>

	<body class="load">

		<div class="wrapper">

			<header class="content site-header">
				<a href="<?php echo YOURLS_SITE; ?>" class="site-title">
					<h1><?php echo ISQ::$general['name']; ?></h1>
				</a>
				<nav class="menu">
					<?php
						foreach( ISQ::$links as $menuItem ) {
							echo '<a href="' . $menuItem['link'] . '">' . $menuItem['name'] . '</a>';
						};
					?>
				</nav>
			</header>
