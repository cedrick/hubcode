<?PHP
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', false );
header( 'Pragma: no-cache' );	
?>
<head>
<title>PeopleHub Search Portal</title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>templates/images/favicon.ico" type="image/x-icon" />
<link type="text/css" href="<?php echo base_url(); ?>templates/style.css" rel="stylesheet" />
</head>
<body>

<?php
$this->load->view('header');
$this->load->view($page,$data);
?>
</body>