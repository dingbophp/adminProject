<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:99:"D:\phpstudy_pro\WWW\tp5\Tp5-TuFanInc-Admin-master\public/../application/index\view\inc\new_arc.html";i:1518166002;}*/ ?>
<?php if(is_array($dataList) || $dataList instanceof \think\Collection || $dataList instanceof \think\Paginator): $i = 0; $__LIST__ = $dataList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<div class="side-box bg-white">
    <div class="article">
        <h1><a href="<?php echo $vo['arcurl']; ?>" class="ui-ellipsis"><?php echo $vo['title']; ?></a></h1>
        <div class="litpic">
            <?php if(!(empty($vo['litpic']) || (($vo['litpic'] instanceof \think\Collection || $vo['litpic'] instanceof \think\Paginator ) && $vo['litpic']->isEmpty()))): ?>
            <img src="<?php echo $vo['litpic']; ?>" />
            <?php endif; if(!(empty($vo['description']) || (($vo['description'] instanceof \think\Collection || $vo['description'] instanceof \think\Paginator ) && $vo['description']->isEmpty()))): ?>
            <p><?php echo $vo['description']; ?></p>
            <?php endif; ?>
        </div>
        <div class="tags clearfix">
            <div class="tags-l col-sm-4">
                <i class="fa fa-tags"> <?php echo $vo->Arctype->typename; ?></i>
            </div>
            <div class="tags-r col-sm-8">
                <i class="fa fa-clock-o"> <?php echo date('Y-m-d',strtotime($vo['create_time'])); ?></i>
                <i class="fa fa-eye"> <?php echo $vo['click']; ?></i>
                <i class="fa fa-commenting-o"> 0</i>
                <i class="fa fa-thumbs-o-up"> 0</i>
            </div>
        </div>
    </div>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>