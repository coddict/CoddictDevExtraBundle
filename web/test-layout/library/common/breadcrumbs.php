<div class="breadcrumb-container">
    <ul class="xbreadcrumbs">
        <li>
            <a href="dashboard.php">
                <i class="icon-photon home"></i>
            </a>
        </li>
        <? if (is_array($menu[$config[$filename]['parentmenuitem']]['children'])): ?>
        <li>
            <a href="<?=($menu[$config[$filename]['parentmenuitem']]['url']=='#' ? '#' : $menu[$config[$filename]['parentmenuitem']]['url'] . '.php');?>"><?=$menu[$config[$filename]['parentmenuitem']]['anchor']?></a>
            <ul class="breadcrumb-sub-nav">
                <? foreach($menu[$config[$filename]['parentmenuitem']]['children'] as $key=>$val): ?>
                <li>
                    <a href="<?=$key?>.php"><?=$val?></a>
                </li>
                <? endforeach; ?>
            </ul>
        </li>
        <? endif; ?>
        <li class="current">
            <a href="javascript:;"><?=$config[$filename]['title']?></a>
        </li>
    </ul>
</div>