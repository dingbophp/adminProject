<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:99:"D:\phpstudy_pro\WWW\tp5\Tp5-TuFanInc-Admin-master\public/../application/index\view\index\index.html";i:1518166002;s:99:"D:\phpstudy_pro\WWW\tp5\Tp5-TuFanInc-Admin-master\public/../application/index\view\public\base.html";i:1518166002;s:103:"D:\phpstudy_pro\WWW\tp5\Tp5-TuFanInc-Admin-master\public/../application/index\view\public\load_top.html";i:1518166002;s:99:"D:\phpstudy_pro\WWW\tp5\Tp5-TuFanInc-Admin-master\public/../application/index\view\public\head.html";i:1518166002;s:96:"D:\phpstudy_pro\WWW\tp5\Tp5-TuFanInc-Admin-master\public/../application/index\view\inc\left.html";i:1518166002;s:99:"D:\phpstudy_pro\WWW\tp5\Tp5-TuFanInc-Admin-master\public/../application/index\view\public\foot.html";i:1518166002;s:106:"D:\phpstudy_pro\WWW\tp5\Tp5-TuFanInc-Admin-master\public/../application/index\view\public\load_bottom.html";i:1518166002;}*/ ?>
<?php if($box_is_pjax != 1): ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?php endif; ?>

<title><?php echo confv('title'); ?></title>
<meta name="keywords" content="<?php echo confv('keywords'); ?>">
<meta name="description" content="<?php echo confv('description'); ?>">

<?php if($box_is_pjax != 1): ?>
<link rel="stylesheet" type="text/css" href="__STATIC__/global/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/global/bootstrap/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/web/css/style.css" />

<script type="text/javascript" src="__STATIC__/global/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="__STATIC__/global/bootstrap/js/bootstrap.min.js"></script>

<!--[if lt IE 9]>
<script type="text/javascript" src="__STATIC__/web/js/html5shiv.min.js"></script>
<script type="text/javascript" src="__STATIC__/web/js/respond.min.js"></script>
<![endif]-->
<?php endif; if($box_is_pjax != 1): ?>
</head>
<body>
<div class="body-box">
<?php endif; if($box_is_pjax != 1): ?>
<a href="#" class="top-nav-toggle"><i></i></a>

<div class="scr-t">
    <?php  $banner = banners(3, 1); ?>
    <div class="top-info" style="background-image:url(<?php echo $banner['0']['litpic']; ?>);">
        <img class="avatar" src="<?php echo confv('logo'); ?>" />
        <div class="mlz"><?php echo $banner['0']['info']; ?></div>
    </div>
    <div class="nav-box">
        <div class="container">
            <div class="row">
                <nav class="navs">
                    <ul>
                        <?php echo channel(0, $parent['id'], '首页', '<li>', '</li>'); ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
    <div class="scr-c" id="pjax-container" >
        
<div class="container">
    <div class="row">
        <div class="col-sm-4" >
            <div class="user-info bg-white hidden-xs">
    <div class="avatar">
        <img src="<?php echo confv('logo'); ?>" />
    </div>
    <div class="infos bg-theme1">
        <div class="name"><?php echo confv('person'); ?></div>
        <div class="introduce">QQ群：<?php echo confv('address'); ?></div>
    </div>
</div>
<div class="notice bg-white hidden-xs">公告：更新会第一时间在群里通知</div>
<div class="search bg-theme1 hidden-xs">
    <div class="title">搜索</div>
    <div class="search-box bg-white clearfix">
        <form action="" method="get" >
            <div class="col-sm-8 col-xs-8" >
                <input type="text" class="texts" name="" placeholder="请输入搜索输入内容" />
            </div>
            <div class="col-sm-4 col-xs-4" >
                <button class="btn bg-theme1" type="submit">搜索</button>
            </div>
        </form>
    </div>
</div>

<div class="side-box bg-white hidden-xs">
    <div class="title bg-theme1">文档分类</div>
    <div class="category clearfix">
        <?php echo channel(1, '', '', '', '', 'col-sm-4 col-xs-6 ui-ellipsis'); ?>
    </div>
</div>

<div class="side-box bg-white hidden-xs">
    <div class="title bg-theme1">热门文档</div>
    <ul class="lists">
        <?php  $hotarc = arclist(1, 10, '', 'click desc');  if(is_array($hotarc) || $hotarc instanceof \think\Collection || $hotarc instanceof \think\Paginator): $i = 0; $__LIST__ = $hotarc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li class="clearfix">
            <a href="<?php echo $vo['arcurl']; ?>" class="col-sm-8 col-xs-8 ui-ellipsis"><?php echo $vo['title']; ?></a>
            <span class="col-sm-4 col-xs-4 ui-ellipsis"><?php echo date('Y-m-d',strtotime($vo['create_time'])); ?></span>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
        </div>
        
        <div class="col-sm-8" >
            <div class="side-box bg-white">
                <div class="go-admin">
                    <a href="/admin" target="_blank">点我去后台</a>
                    <p>测试账号：admin</p>
                    <p>测试密码：123456</p>
                    <p>系统更新会第一时间在群通知</p>
                    <p>一些资料也能在群里下载</p>
                </div>
            </div>
            
            <div class="new-arc-container">
                <div class="new-arc-box"></div>
                <button class="btn btn-block btn-success" id="new-arc-btn" data-page="1" 
                data-loading-text="&lt;i class='fa fa-spinner fa-spin '&gt;&lt;/i&gt; 加载中..." >点击加载</button>
            </div>
        </div>
    </div>
</div>

<script>
$(function(){
    $('body').off('click', '#new-arc-btn');
    $('body').on("click", '#new-arc-btn', function(event){
        var _this = $(this);
        var page = _this.data('page');
        _this.button('loading');
        $.ajax({
            type : "get",
            url : "/index/index/newarc/page/"+page,
            success : function(html) {
                if( html != ''){
                    $('.new-arc-box').append(html);
                    _this.data("page", page+1);   //分页数+1
                    _this.button('reset');
                }else{
                    _this.html('没有更多');
                }
            }
        });
    });
    $('#new-arc-btn').trigger("click");
})
</script>

        <footer class="foot">
    <div class="container">
        <div class="row">
            <div class="copy"><?php echo confv('copyright'); ?></div>
        </div>
    </div>
</footer>
    </div>
<?php if($box_is_pjax != 1): ?>
</div>
<?php endif; if($box_is_pjax != 1): ?>
<script type="text/javascript" src="__STATIC__/global/jQuery/jquery.pjax.js"></script>

<script type="text/javascript" src="__STATIC__/global/nprogress/nprogress.js"></script>
<link rel="stylesheet" type="text/css" href="__STATIC__/global/nprogress/nprogress.css" />

<script type="text/javascript" src="__STATIC__/web/js/common.js"></script>
<?php endif; if($box_is_pjax != 1): ?>
</body>
</html>
<?php endif; ?>