    
    <div class="btn-toolbar btn-mobile-menus">
        <button class="btn btn-main-menu"></button>
        <button class="btn btn-user-menu"><i class="icon-logo"></i></button>
    </div>

    <div class="nav-fixed-left" style="visibility: hidden">
        <ul class="nav nav-side-menu">
<? if (is_array($menu)): ?>
            <li class="shadow-layer"></li>
<? foreach ($menu as $val) : ?>
            <li>
                <a href="<?=($val['url'] == "#" ? "javascript:;" : $val['url'] . '.php')?>" <?=(is_array($val['children']) ? 'class="sub-nav-container"' : '')?>>
                    <i class="icon-photon <?=$val['icon']?>"></i>
                    <span class="nav-selection"><?=$val['anchor']?></span>
                    <?=(is_array($val['children']) ? '<i class="icon-menu-arrow"></i>' : '')?>
                </a>
<? if (is_array($val['children'])): ?>
                <div class="sub-nav">
                    <ul class="nav">
<? foreach ($val['children'] as $childKey => $childVal): ?>
                        <li>
                            <a href="<?=$childKey?>.php"><?=$childVal?></a>
                        </li>
<? endforeach; ?>
                    </ul>
                </div>
<? endif; ?>
            </li>
<? endforeach; ?>
<? endif; ?>
            <li class="nav-logout">
                <a href="index.php">
                    <i class="icon-photon key_stroke"></i><span class="nav-selection">Logout</span>
                </a>
            </li>
        </ul>
    </div>