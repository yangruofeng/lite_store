<style>
    #sidebar li .icon {
        transition: all .25s ease;
        -webkit-transition: all .25s ease;
        -moz-transition: all .25s ease;
        -ms-transition: all .25s ease;
        -o-transition: all .25s ease;
    }

    #sidebar li.open .icon {
        transform: rotate(90deg);
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transition: all .25s ease;
        -webkit-transition: all .25s ease;
        -moz-transition: all .25s ease;
        -ms-transition: all .25s ease;
        -o-transition: all .25s ease;
    }

    #sidebar .submenu img {
        width: 12px;
        margin-top: -4px;
    }

    <?php if($output['is_operator'] || $output['is_sub']){?>
    #sidebar > ul li.active a {
        background: url(resource/img/menu-active.png) no-repeat scroll right center transparent !important;
        text-decoration: none;
    }

    #sidebar .submenu img.tab-active {
        display: none;
    }

    #sidebar .submenu.active img.tab-active, #sidebar .submenu:hover img.tab-active {
        display: inline-block;
    }

    #sidebar .submenu.active img.tab-default, #sidebar .submenu:hover img.tab-default {
        display: none;
    }

    #sidebar > ul li ul li a {
        padding-left: 25px;
    }

    #sidebar > ul li ul li {
        position: relative;
    }

    #sidebar > ul > li > a > .label-important {
        float: none!important;
        margin-right: 0px!important;
        position: absolute;
        right: 15px;
        top: 9px;
    }

    #sidebar > ul li ul li a .label-important {
        position: absolute;
        right: 25px;
        top: 10px;
    }
    <?php } ?>
</style>
<?php  ?>
<div>
    <h1>Test</h1>
</div>
<div id="sidebar" style="OVERFLOW-Y: auto; OVERFLOW-X:hidden;display: none;">

    <ul>
        <?php foreach ($output['menu_items'] as $k_c => $s_item) { ?>
            <li class="submenu">
                <a href="#">
                    <img src="<?php echo ENTRY_DESKTOP_SITE_URL . '/resource/img/icon-' . ($s_item['icon']?:$k_c) . '.png' ?>">
                    <span><?php echo $s_item['title']?></span>
                    <i class="icon fa fa-angle-right"></i>
                </a>
                <ul>
                    <?php foreach ($s_item['child'] as $item) { $args = explode(',', $item['args']);?>
                        <li>
                            <a class="menu_a <?php echo $args[1] . '-' . $args[2] ?>" link="<?php echo getUrl($args[1], $args[2], $s_item['params']?:array(), false, C('site_root'). DS . $args[0]); ?>">
                                <span><?php echo $item['title']?></span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
    </ul>
</div>
<!--sidebar-menu-->