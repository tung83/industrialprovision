<?php include "function.php";?><!doctype html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<?php echo pageHeader($view);?>
<link rel="icon" type="image/png" sizes="64x64"  href="<?php echo myWeb;?>images/content/logo.png"/>
<link rel="stylesheet" type="text/css" href="<?php echo myWeb;?>mine.css"/>
<link rel="stylesheet/less" type="text/css" href="<?php echo myWeb;?>styles.less"/>
<script src="<?php echo myWeb;?>less.js"></script>
<link rel="stylesheet" href="<?php echo myWeb;?>dist/magnific-popup.css"/>
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="<?php echo myWeb;?>font-awesome.min.css"/>

<!-- Magnific Popup core JS file -->

<script src="<?php echo myWeb;?>js/jquery.js" type="text/javascript"></script>
<script src="<?php echo myWeb;?>dist/jquery.magnific-popup.js"></script>

<!--wow slider-->

<link rel="stylesheet" type="text/css" href="<?php echo myWeb;?>engine/style.css" />



</head>
<body style="">

<div class="container box-shadow">
    <div class="top">
        <table>
            <tr>
                <td>
                    <img src="<?php echo myWeb;?>images/content/logo.png" style="max-height:100px"/>
                </td>
                <td align="center">
                    <span>CÔNG TY TNHH INDUSTRIAL PROVISION VIỆT NAM.</span>
                              <em style="font-weight:bold;text-shadow:1px 1px #141414">WE ENHANCE INNOVATION</em>
                </td>
            </tr>
        </table>
    </div>
    <div class="ground">
        <?php echo menu();?>
        <div class="left">
            <?php echo left_module();?>
        </div>
        <div class="middle">
            <?php
                switch($view)
                {
                    case 'gioi-thieu': echo about();break;
                    case 'tin-tuc': echo news();break;
                    case 'tuyen-dung': echo career();break;
                    case 'san-pham': echo product();break;
                    case 'lien-he': echo contact();break;
                    case 'download':echo download();break;
                    case 'tim-kiem':echo search();break;
                    case 'tu-bang-dien':echo project();break;
                    case 'dich-vu-sua-chua':echo serv();break;
                    default: echo home();break;
                }
            ?>
            
            
        </div>
        <div class="right">
            <?php echo right_module();?>
        </div>
        <div class="clear"></div>
    </div>

</div>

<div class="footer box-shadow">
    <div class="ground">
        <div class="clearfix">
            <div style="text-align: center;">
                <?=foot_menu()?>
            </div>
            <div style="text-align: center">
                <span class="company-name">CÔNG TY TNHH INDUSTRIAL</span>
            </div>
            <div class="the-left">                
                <?php echo station();?>
            </div>
            <div class="the-right" style="padding-top: 20px;"> 
                <?php
                    include_once 'objects/MysqliDb.php';
                    include_once 'objects/class.visitors.php';
                    global $db;
                    $db = new MysqliDb(_hostName,_useName,_pass,_dbName);
                    $db->connect();
                    $vs=new visitors($db);
                    //$vs->getOnlineVisitors();
                    //$vs->getTodayVisitors();
                    //$vs->getCounter();
                ?>
                <span>Đang online: <em><?php echo $vs->getOnlineVisitors();?></em></span>   
                <span>Ngày online: <em><?php echo $vs->getTodayVisitors();?></em></span>
                <span>Tuần online: <em><?php echo $vs->getWeekVisitors();?></em></span>
                <span>Tháng online: <em><?php echo $vs->getMonthVisitors();?></em></span>  
                <span>Lượt truy cập: <em><?php echo $vs->getCounter();?></em></span>          
            </div>
        </div>
        <div class="copy-right">
            © Copyright 2015 <strong>Industrial Provision</strong>, All rights reserved. Designed by <a>PSmedia.vn</a>
        </div>
    
    </div>
</div>
<script src="<?php echo myWeb;?>mine.js"></script>      
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=1526299550957309";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>