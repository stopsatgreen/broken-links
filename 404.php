<?php
/**
 * @package WordPress
 * @subpackage Broken-Links Theme
 */
?>
<!DOCTYPE html>
<html>
<head>
<title><?php wp_title('&raquo;',true,'right'); ?><?php bloginfo('name'); ?></title>
<style type="text/css">
@font-face {
font-family: ClickClack;
src: local('ClickClack'),url('/tools/ClickClack.otf') format('opentype');
}
body { font-size: 10px; }
div#container { margin: 0 auto; width: 50%; }
h1 { font: 480%/1 ClickClack, sans-serif; text-align: center; }
</style>
<?php wp_head(); ?>
</head>
<body>
<div id="container">
<h1>Error 404&mdash;Not Found</h1>
<?php get_footer(); ?>
</div>
</body>
</html>