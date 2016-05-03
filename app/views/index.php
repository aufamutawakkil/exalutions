<?php include "layouts/header.php"; ?>
<div id='container'>
	<div id="content">
		<?php include isset($_GET['p']) ? 'common/' . $_GET['p'] . '.php' : 'common/home.php'; ?>
	</div>
<?php include "layouts/footer.php"; ?>
