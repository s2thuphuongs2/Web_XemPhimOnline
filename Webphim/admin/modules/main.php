<div class="container-fluid">
	<div class="clear">

	</div>
	<div class="main">
	<?php
	if (isset($_GET['action'])) {
		$act = $_GET['action'];
		if (isset($_GET['query'])) {
		$query = $_GET['query'];
		} else {
		$query = '';
		}
	} else {
		$act = '';
	}
	switch ($act) {
		case "quanlyDanhMuc":
		if ($query == 'sua') {
			include("modules/quanlyDanhMuc/sua.php");
		} else {
			include("modules/quanlyDanhMuc/them.php");
			include("modules/quanlyDanhMuc/lietke.php");
		}
		break;
		case "quanlyPhim":
		if ($query == 'sua') {
			include("modules/quanlyPhim/sua.php");
		} elseif ($query == 'them') {
			include("modules/quanlyPhim/them.php");
		} else {
			include("modules/quanlyPhim/lietke.php");
		}
		break;
		case "quanlyTapPhim":
		if ($query == 'sua') {
			include("modules/quanlyTapPhim/sua.php");
		} elseif ($query == 'them') {
			include("modules/quanlyTapPhim/them.php");
		} else {
			include("modules/quanlyTapPhim/lietke.php");
		}
		break;

		case "quanlyUser":
		if ($query == 'sua') {
			include("modules/quanlyUser/sua.php");
		} elseif ($query == 'them') {
			include("modules/quanlyUser/them.php");
		} else {
			include("modules/quanlyUser/lietke.php");
		}
		break;
		case "quanlyComment":
		include("main/quanlyComment.php");
		break;
		default:
		include("modules/Dashboard.php");
		break;
	}
	?>

	</div>
</div>
