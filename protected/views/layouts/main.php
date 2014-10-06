<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	<?php Yii::app()->bootstrap->register(); ?>
	
	
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    
	<link rel="stylesheet" type="text/css" href="/css/sb-admin-2.css" />
	
	 <!-- Custom Fonts -->
    <link href="/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <style>
        .navbar .nav {
            float:none;
            margin:0;
        }
        .navbar .nav > li {
            float:none;
        }
    </style>
	
</head>

<body>
	    
	 
	    
	<?php echo $content; ?>
	
</div><!-- page -->

</body>
</html>
