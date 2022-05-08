<?php

/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;

$bundle = yiister\gentelella\assets\Asset::register($this);

?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<script src="https://kit.fontawesome.com/a9545f17e8.js" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="<?= Yii::$app->charset ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<style>
    body{
        font-family: 'Poppins';
    }
body .container.body .right_col {
  background: rgb(237, 237, 237);

  
}
span{
    margin-left:10px;
}

.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color: transparent;
  margin-top:90px;
  height:180px;
 
  
}
.flex-containery {
  display: flex;
  flex-wrap: wrap;
  width:300px;
  margin:auto;
  margin-bottom:10px;
}

.flex-containery > div {
  background-color: blue;
  height:25px;
  font-size: 14px;
  text-align:center;
  
  /* flex: 0 0 8.333333%; */
  transition: 1s;
}
.flex-container > div {
  background-color: blue;
  margin: 10px;
  padding: 20px;
  width:700px;
  height:150px;
  font-size: 20px;
  text-align:center;
  margin-left:29px;
  flex: 0 0 29.333333%;
  transition: 1s;
}


.flex-container > div:hover{
		transform: scale(1.1);
		background: #ff800a;
		z-index: 2;
		box-shadow: 2px 2px 2px #000;
		
	}

.flex-container > div a{
    color:white;
    
    
}

.flex-containera {
  display: flex;
  flex-wrap: wrap;
  background-color: transparent;
  margin-top:90px;
  height:160px;
  width:800px;
  margin-bottom:-70px;
  margin-left:10px;

}

.flex-containera > div {
  background-color: white;
  border-color:black;
  border-style: solid;
  margin: 10px;
  padding: 20px;
  width:700px;
  height:110px;
  font-size: 12px;
  text-align:center;
  flex: 0 0 20%;
  transition: 1s;
}

.flex-container_ {
  display: flex;
  flex-wrap: wrap;
  background-color: transparent;
  
  width:700px;
  margin:auto;
}

.flex-container_ > div {
  background-color: white;
  border-color:black;
  border-style: solid;
  margin: 10px;
  padding: 20px;
  width:700px;
  height:140px;
  font-size: 12px;
  text-align:center;
  flex: 0 0 40%;
  transition: 1s;
  margin-left:50px;
}

.gauge {
  width: 100%;
  max-width: 250px;
  font-family: "Roboto", sans-serif;
  font-size: 32px;
  color: #004033;
  margin:auto;
}

.gauge__body {
  width: 100%;
  height: 0;
  padding-bottom: 50%;
  background: white;
  position: relative;
  border-top-left-radius: 100% 200%;
  border-top-right-radius: 100% 200%;
  overflow: hidden;
}

.gauge__fill {
  position: absolute;
  top: 100%;
  left: 0;
  width: inherit;
  height: 100%;
  background: #009578;
  transform-origin: center top;
  transform: rotate(0.25turn);
  transition: transform 0.2s ease-out;
}

.gauge__cover {
  width: 75%;
  height: 150%;
  background: #eee;
  border-radius: 50%;
  position: absolute;
  top: 25%;
  left: 50%;
  transform: translateX(-50%);

  /* Text */
  font-size:16px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding-bottom: 25%;
  box-sizing: border-box;
}


.flex-containera > div:hover{
		transform: scale(1.1);
		background: #ff800a;
		z-index: 2;
		box-shadow: 2px 2px 2px #000;
		
	}

.flex-containera > div a{
    color:black;
    
    
}

#newuser-username{
width:350px;

}
#newuser-email{
width:350px;
}
#newuser-password{
width:350px;
}
.mr-md-1{
    margin-left:50px;
    width:100px;
    padding-top:7px;
}
.vaksinasi-form{
    margin:auto;
    width:480px;
    margin-top:20px;
   

}
</style>
<body class="nav-<?= !empty($_COOKIE['menuIsCollapsed']) && $_COOKIE['menuIsCollapsed'] == 'true' ? 'sm' : 'md' ?>" >
<?php $this->beginBody(); ?>
<div class="container body">

    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0; background-color:rgb(237, 237, 237);">
                    <a href="/" class="site_title"><i class="fas fa-cow"  style="color:blue; margin-left:25px;"></i> <span style="color:blue;font-family: 'Poppins';">Mata Sapi</span></a>
                </div>
                <div class="clearfix"></div>

                <!-- menu prile quick info -->
             
                <!-- /menu prile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <br><br>
                        <?=
                        \yiister\gentelella\widgets\Menu::widget(
                            [
                                "items" => [
                                    ["label" => "Home", "url" => "index", "icon" => "home"],
                                    ["label" => "Sapi Anda", "url" => ["/datasapi/index"],"options"=>['class'=>'sapianda','style'=>'display:block'], "icon" => "list-alt"],
                                    ["label" => "Post Artikel", "url" => ["/article/index"],"options"=>['class'=>'artikel','style'=>'display:none'], "icon" => "list-alt"],
                                   
                
                                    [
                                        "label" => "Bacaan  ",
                                        "icon" => "book",
                                        "url" => "#",
                                        "items" => [
                                            ["label" => "Kondisi Visual", "url" => ["site/bacakonvi"],"icon" => "eye"],
                                            ["label" => "BCS", "url" => ["site/bacabcs"],"icon" => "hdd"],
                                            ["label" => "Riwayat Kesehatan", "url" => ["site/bacarike"],"icon" => "plus",],
                                            ["label" => "Riwayat Vaksinasi", "url" => ["site/bacariva"],"icon" => "pencil"],
                                        ],
                                    ],
                                    // [
                                    //     "label" => "Badges",
                                    //     "url" => "#",
                                    //     "icon" => "table",
                                    //     'options' => [
                                    //         'class' => 'aaaa',
                                    //         ],
                                        
                                    //     "items" => [
                                    //         [
                                    //             "label" => "Default",
                                    //             "url" => "#",
                                    //             "badge" => "123",
                                    //         ],
                                    //         [
                                    //             "label" => "Success",
                                    //             "url" => "#",
                                    //             "badge" => "new",
                                    //             "badgeOptions" => ["class" => "label-success"],
                                    //         ],
                                    //         [
                                    //             "label" => "Danger",
                                    //             "url" => "#",
                                    //             "badge" => "!",
                                    //             "badgeOptions" => ["class" => "label-danger"],
                                    //         ],
                                    //     ],
                                    // ],
                                    // [
                                    //     "label" => "Multilevel",
                                    //     "url" => "#",
                                    //     "icon" => "table",
                                    //     "items" => [
                                    //         [
                                    //             "label" => "Second level 1",
                                    //             "url" => "#",
                                    //         ],
                                    //         [
                                    //             "label" => "Second level 2",
                                    //             "url" => "#",
                                    //             "items" => [
                                    //                 [
                                    //                     "label" => "Third level 1",
                                    //                     "url" => "#",
                                    //                 ],
                                    //                 [
                                    //                     "label" => "Third level 2",
                                    //                     "url" => "#",
                                    //                 ],
                                    //             ],
                                    //         ],
                                    //     ],
                                    // ],
                                ],
                                
                            ]
                        )
                        ?>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right" id ='a'>
                   
                        <li class="" id ='b' style="display:none; margin-right:20px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="../../../favicon.ico" alt=""><?php if(!Yii::$app->user->isGuest){echo Yii::$app->user->identity->username;} ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right" id='c'>
                                <li><a href="javascript:;">  Profile</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">Help</a>
                                </li>
                                
                            </ul>
                        </li>
                       
                        <?php   
       if(Yii::$app->user->isGuest){
        $script = <<< JS
        document.getElementById("a").innerHTML += ' <li class="" style="margin-right:20px;"><a href="index?r=site%2Flogin" style="font-weight: bold;">Login</a></li>  <li class=""><a href="index?r=site%2Fregister" style="font-weight: bold;">Register</a></li>';
  JS;
        $this->registerJs($script);
       }
       else{
        $aaa= Yii::$app->user->identity->username;
        $scripta = <<< JS
        document.getElementById("c").innerHTML += '  <li><a href="index?r=site%2Flogout" style="font-weight: bold;" data-method=post> Log Out</a></li>';
        var x = document.getElementById("b");
        x.style.display = "block";
  JS;
        $this->registerJs($scripta);
        }
?>

                
                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <?php if (isset($this->params['h1'])): ?>
                <div class="page-title">
                    <div class="title_left">
                        <h1><?= $this->params['h1'] ?></h1>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="clearfix"></div>

            <?= $content ?>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer style="padding-bottom:40px;background: rgb(237, 237, 237);">
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com" rel="nofollow" target="_blank">Colorlib</a><br />
                Extension for Yii framework 2 by <a href="http://yiister.ru" rel="nofollow" target="_blank">Yiister</a>
            
                </div>
            <div class="clearfix"></div>
            
        </footer>
        <!-- /footer content -->
    </div>

</div>


<!-- /footer content -->
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
