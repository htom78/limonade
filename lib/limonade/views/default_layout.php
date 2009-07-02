<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Limonade, the fizzy PHP micro-framework</title>
	<link rel="stylesheet" href="<?=url_for('/_lim_css/screen.css');?>" type="text/css" media="screen">
</head>
<body>
  <div id="header">
    <h1>Limonade</h1>
  </div>
  
  <div id="content">
    <?= error_notices_render(); ?>
    <div id="main">
      <?=$content;?>
      <hr class="space">
    </div>
  </div>

</body>
</html>
