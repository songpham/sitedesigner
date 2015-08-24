<!-- Mobile Navigation -->
<a id="mobile-navigation-menu-toggle" href="javascript:void(0)" class="btn btn-dark btn-lg toggle">

    <i class="fa fa-bars"></i>
    	<?php if ($LANG == 'vn') { ?>
              <p class="menu-toggle-label">DANH MỤC</p>
                <?php } else if ($LANG == 'en') { ?>
               <p class="menu-toggle-label">MENU</p>
                <?php } ?>
</a>
<nav id="mobile-navigation-wrapper">
    <ul class="sidebar-nav">
        <a id="mobile-navigation-menu-close" href="javascript:void(0)" class="btn btn-light btn-lg pull-right toggle">
            <i class="fa fa-times"></i>
        </a>
        <li class="sidebar-brand">
             <a href="<?php echo USER_BASE_URL . ($URI ? ('/' . $URI) : NULL) . getSuffix('lang=' . $OPPOSITE_LANG) ?>"><img src="<?php echo USER_BASE_URL ?>/img/flag_<?php echo $OPPOSITE_LANG ?>.png" class="language"></a>
        </li>
        <li>
            <a href="<?php echo USER_BASE_URL ?><?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_HOMEPAGE ?></a>
        </li>
        <li>
            <div class="list-group panel">
                <a href="javascript:void(0)" class="list-group-item-success" data-toggle="collapse" aria-expanded="false"><?php echo LANG_CLUBS ?><span class="glyphicon glyphicon-chevron-right"></span></a>
                <div class="collapse" aria-expanded="false">
                    <ul>
                        <li><a href="<?php echo USER_BASE_URL ?>/<?php echo createUrl('club-hcm' . getSuffix('lang=' . $LANG)) ?>"><?php echo LANG_CITY_HCMC ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/<?php echo createUrl('club-ha-noi' . getSuffix('lang=' . $LANG)) ?>"><?php echo LANG_CITY_HANOI ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/<?php echo createUrl('club-da-nang' . getSuffix('lang=' . $LANG)) ?>"><?php echo LANG_CITY_DANANG ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/<?php echo createUrl('club-binh-duong' . getSuffix('lang=' . $LANG)) ?>"><?php echo LANG_CITY_BINH_DUONG ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/<?php echo createUrl('club-bien-hoa' . getSuffix('lang=' . $LANG)) ?>"><?php echo LANG_CITY_BIEN_HOA ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/<?php echo createUrl('club-nha-trang' . getSuffix('lang=' . $LANG)) ?>"><?php echo LANG_CITY_NHA_TRANG ?></a></li>

                    </ul>
                </div>
            </div>
        </li>
        <li>
            <div class="list-group panel">
                <a href="javascript:void(0)" class="list-group-item-success" data-toggle="collapse" aria-expanded="false"><?php echo LANG_SERVICES ?> <span class="glyphicon glyphicon-chevron-right"></span></a>
                <div class="collapse" aria-expanded="false">
                    <ul>
                        <li><a href="<?php echo USER_BASE_URL ?>/group-fitness-services<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_GROUP ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/dynamicstretching-services<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_DYNAMIC_STRETCHING ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/dance-services<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_DANCE ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/yoga-services<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_YOGA ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/pt-services<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_PT ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/ptx-services<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_PTX ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/kickfit-mma-services<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_KICKFIT ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/kickfit-mma-services<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_MMA ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/celebrity-training<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_CELEBRITY ?></a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <div class="list-group panel">
                <a href="javascript:void(0)" class="list-group-item-success" data-toggle="collapse" aria-expanded="false"><?php echo LANG_LIFESTYLE ?><span class="glyphicon glyphicon-chevron-right"></span></a>
                <div class="collapse" aria-expanded="false">
                    <ul>
                    	<li><a href="http://lifestyle.cfyc.com.vn/"><?php echo LANG_LIFESTYLE_ARTICLE_HOME ?></a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/giam-can-cap-toc/"><?php echo LANG_LIFESTYLE_WEIGHT_LOSS ?></a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/the-duc-suc-khoe/"><?php echo LANG_LIFESTYLE_FITNESS_HEALTH ?></a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/luyen-tap/"><?php echo LANG_LIFESTYLE_EXERCISE ?></a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/phong-cach-song/"><?php echo LANG_LIFESTYLE_LIFESTYLE ?></a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/dinh-duong/"><?php echo LANG_LIFESTYLE_NUTRITION ?></a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/gia-dinh/"><?php echo LANG_LIFESTYLE_FAMILY ?></a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/yoga/"><?php echo LANG_LIFESTYLE_YOGA ?></a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/thoi-trang/"><?php echo LANG_LIFESTYLE_BEAUTY ?></a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/tin-tuc/"><?php echo LANG_LIFESTYLE_NEWS ?></a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/su-kien/"><?php echo LANG_LIFESTYLE_EVENTS ?></a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
        <div class="list-group panel">
                <a href="javascript:void(0)" class="list-group-item-success" data-toggle="collapse" aria-expanded="false"><?php echo LANG_MEMBERSHIPS ?><span class="glyphicon glyphicon-chevron-right"></span></a>
                <div class="collapse" aria-expanded="false">
                    <ul>
                        <li><a href="<?php echo USER_BASE_URL ?>/cfyc-memberships<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_CFYC_MEMBERSHIPS  ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/centuryon-memberships<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_CENTURYON_MEMBERSHIPS_MENU  ?></a></li>

                    </ul>
                </div>
            </div>
        </li>
         <li>
            <a href="<?php echo USER_BASE_URL ?>/member-testimonials<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_MEMBER_TESTIMONIALS_MENU ?></a>
        </li>
        <li>
            <a href="<?php echo USER_BASE_URL ?>/classes<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SCHEDULES ?></a>
        </li>
         <li>
            <a href="<?php echo USER_BASE_URL ?>/about-us<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_ABOUT_US ?></a>
        </li>
    </ul>
</nav>
<a class="logo" href="<?php echo USER_BASE_URL ?><?php echo getSuffix('lang=' . $LANG) ?>">
    <img src="<?php echo USER_BASE_URL ?>/img/m-logo.png" class="img-responsive logo-img" alt="California Fitness &amp; Yoga">
</a>
<nav id="desktop-navigation">
    <a class="logo" href="<?php echo USER_BASE_URL ?><?php echo getSuffix('lang=' . $LANG) ?>">
        <img src="<?php echo USER_BASE_URL ?>/img/logo.png" class="img-responsive logo-img" alt="California Fitness &amp; Yoga">
    </a>
    <ul class="desktop-menu">
        <li><a href="<?php echo USER_BASE_URL ?><?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_HOMEPAGE ?></a></li>
        <li><a href="javascript:void(0)" data-index="0" class="drop-menu"><?php echo LANG_CLUBS ?></a></li>
        <li><a href="javascript:void(0)" data-index="1" class="drop-menu"><?php echo LANG_SERVICES ?></a></li>
        <li><a href="javascript:void(0)" data-index="2" class="drop-menu"><?php echo LANG_LIFESTYLE ?></a></li>
        <li><a href="javascript:void(0)" data-index="3" class="drop-menu"><?php echo LANG_MEMBERSHIPS ?></a></li>
        <li><a href="<?php echo USER_BASE_URL ?>/member-testimonials<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_MEMBER_TESTIMONIALS_MENU ?></a></li>

        <li><a href="<?php echo USER_BASE_URL ?>/classes<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SCHEDULES ?></a></li>
		<li><a href="<?php echo USER_BASE_URL ?>/about-us<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_ABOUT_US ?></a></li>
        <li><a href="<?php echo USER_BASE_URL . ($URI ? ('/' . $URI) : NULL) . getSuffix('lang=' . $OPPOSITE_LANG) ?>"><img src="<?php echo USER_BASE_URL ?>/img/flag_<?php echo $OPPOSITE_LANG ?>.png" class="language"></a></li>
    </ul>
    <div class="holder-submenu">
        <div class="sub-menu collapse">
                    <ul>
                        <li><a href="<?php echo USER_BASE_URL ?>/<?php echo createUrl('club-hcm' . getSuffix('lang=' . $LANG)) ?>"><?php echo LANG_CITY_HCMC ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/<?php echo createUrl('club-ha-noi' . getSuffix('lang=' . $LANG)) ?>"><?php echo LANG_CITY_HANOI ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/<?php echo createUrl('club-da-nang' . getSuffix('lang=' . $LANG)) ?>"><?php echo LANG_CITY_DANANG ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/<?php echo createUrl('club-binh-duong' . getSuffix('lang=' . $LANG)) ?>"><?php echo LANG_CITY_BINH_DUONG ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/<?php echo createUrl('club-bien-hoa' . getSuffix('lang=' . $LANG)) ?>"><?php echo LANG_CITY_BIEN_HOA ?></a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/<?php echo createUrl('club-nha-trang' . getSuffix('lang=' . $LANG)) ?>"><?php echo LANG_CITY_NHA_TRANG ?></a></li>

                    </ul>
        </div>
        <div class="sub-menu collapse">
            <ul>
            	<li><a href="<?php echo USER_BASE_URL ?>/group-fitness-services<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_GROUP ?></a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/dynamicstretching-services<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_DYNAMIC_STRETCHING ?></a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/dance-services<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_DANCE ?></a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/yoga-services<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_YOGA ?></a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/pt-services<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_PT ?></a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/ptx-services<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_PTX ?></a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/kickfit-mma-services<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_KICKFIT ?></a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/kickfit-mma-services<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_MMA ?></a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/celebrity-training<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_SERVICES_CELEBRITY ?></a></li>

           </ul>
        </div>
        <div class="sub-menu collapse">
            <ul>
            	<!--  <li><a href="http://lifestyle.cfyc.com.vn/"><?php echo LANG_LIFESTYLE_ARTICLE_HOME ?></a></li> -->
            	<li><a href="http://lifestyle.cfyc.com.vn/giam-can-cap-toc/"><?php echo LANG_LIFESTYLE_WEIGHT_LOSS ?></a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/the-duc-suc-khoe/"><?php echo LANG_LIFESTYLE_FITNESS_HEALTH ?></a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/luyen-tap/"><?php echo LANG_LIFESTYLE_EXERCISE ?></a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/phong-cach-song/"><?php echo LANG_LIFESTYLE_LIFESTYLE ?></a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/dinh-duong/"><?php echo LANG_LIFESTYLE_NUTRITION ?></a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/gia-dinh/"><?php echo LANG_LIFESTYLE_FAMILY ?></a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/yoga/"><?php echo LANG_LIFESTYLE_YOGA ?></a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/thoi-trang/"><?php echo LANG_LIFESTYLE_BEAUTY ?></a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/tin-tuc/"><?php echo LANG_LIFESTYLE_NEWS ?></a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/su-kien/"><?php echo LANG_LIFESTYLE_EVENTS ?></a></li>
            </ul>
        </div>
                <div class="sub-menu collapse">
            <ul>
            	<li><a href="<?php echo USER_BASE_URL ?>/cfyc-memberships<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_CFYC_MEMBERSHIPS ?></a></li>
            	<li><a href="<?php echo USER_BASE_URL ?>/centuryon-memberships<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_CENTURYON_MEMBERSHIPS_MENU ?></a></li>

            </ul>
        </div>
    </div>
</nav>