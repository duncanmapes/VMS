<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

    <div id="wrapper">
	     <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><?php echo Yii::app()->name; ?></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                   
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">

        

                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                    </ul>
                    
                     <?php echo TbHtml::nav('plain',array(
        array('label' => 'Home', 'url' => '#', 'active' => true),
        array('label' => 'Dashboard', 'url' => '#', 'icon'=>'fa fa-dashboard fa-fw'),
        array('label' => 'Trip Logs', 'url' => array('TripLog/index'), 'icon'=>'fa fa-car fa-fw'),
         array(
            'label' => 'Trip Logs', 
            'url' => array('TripLog/index'), 
            'icon'=>'fa fa-car fa-fw',
            'class' => "",
            'items' => array(
                array('label' => 'Create', 'url' => array('TripLog/create')),
                array('label' => 'Manage', 'url' => array('TripLog/admin')),
                array('label' => 'Link', 'url' => '#'),
                'htmlOptions'=>array('class'=>'duncan'),
                
            ),
            'htmlOptions'=>array('class'=>'duncan'),
           //  'itemsClass'=>"nav-second-level collapse in",
           
        ),
   
        array('label' => 'Settings', 'url' => '#'),
        array('label' => 'Help', 'url' => '#'),
    ),array('class'=>'nav')); ?>
                        
                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo CHtml::encode($this->pageTitle); ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
  <div class="row">
                <div class="col-lg-12">
    <?php echo $content; ?>
    </div></div>
    
    </div>





<?php $this->endContent(); ?>