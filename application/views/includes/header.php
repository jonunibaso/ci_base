<? 
/*
if ($this->ion_auth->logged_in())
{
	$user = $this->ion_auth->user()->row();

	switch ($user->fav_lang) 
	{
		case 'esp':
			$this->lang->load('esp', 'spanish');
			break;

		case 'port':
			$this->lang->load('port', 'portuguese');
			break;
		
		default:
			$this->lang->load('esp', 'spanish');
			break;
	}
}else{
	$this->lang->load('esp', 'spanish');

}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CI Base</title>
<meta name="description" content="">
<meta name="author" content="Marble House">
  <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> 
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    

<link href="<? echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
<link href="<? echo base_url('css/bootstrap-responsive.min.css'); ?>" rel="stylesheet" type="text/css">

<link href="<? echo base_url('css/style.css'); ?>" rel="stylesheet" type="text/css">

<link href="<? echo base_url('img/favicon.ico'); ?>" rel="shortcut icon">

</head>
<body>
