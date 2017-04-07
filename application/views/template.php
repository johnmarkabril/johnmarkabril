<html>
	<head>

		<?php $this->load->view('common/css_files.php'); ?>

	</head>
	
	<body id="page-top" class="index">
		<?php
			$this->load->view('common/navtop.php');

			$this->load->view('home.php');

			$this->load->view('common/footer.php');

			$this->load->view('common/js_files.php'); 
		?>
	</body>
</html>