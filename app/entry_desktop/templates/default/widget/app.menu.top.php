<div id="header">
    <h1><a href="dashboard.html"><?php echo $output['system_title'] ?: '后台'?></a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar">
<!--    <ul class="nav">-->
    <ul class="">
        <li  class="dropdown" id="profile-messages">
            <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle" style="padding: 15px 20px">
                <img alt="Avatar" class="img-circle" src="<?php echo getUserIcon($output['user_info']['user_icon'])?>">
                <span class="text user_name"><?php echo $output['user_info']['user_name']?:$output['user_info']['user_code']?></span>&nbsp;
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu" style="left:auto;right: 0;">
                <li><a href="#" id="my_profile"><i class="fa fa-user"></i> My Profile</a></li>
                <li class="divider"></li>
                <li><a href="#" id="change_password"><i class="fa fa-tasks"></i> Change Login Password</a></li>
                <li class="divider"></li>
                <li><a href="#" id="set_trade_password"><i class="fa fa-tasks"></i> Setting Trading Password</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo getUrl('login','loginOut', array(), false, ENTRY_DESKTOP_SITE_URL)?>"><i class="fa fa-key"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--close-top-Header-menu-->