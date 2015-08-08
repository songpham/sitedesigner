<!-- Mobile Navigation -->
<a id="mobile-navigation-menu-toggle" href="javascript:void(0)" class="btn btn-dark btn-lg toggle">
    <i class="fa fa-bars"></i>
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
            <a href="<?php echo USER_BASE_URL ?><?php echo getSuffix('lang=' . $LANG) ?>">Trang Chủ</a>
        </li>
        <li>
            <div class="list-group panel">
                <a href="javascript:void(0)" class="list-group-item-success" data-toggle="collapse" aria-expanded="false">Câu Lạc Bộ<span class="glyphicon glyphicon-chevron-right"></span></a>
                <div class="collapse" aria-expanded="false">
                    <ul>
                        <li><a href="<?php echo USER_BASE_URL ?>/club-hcm<?php echo getSuffix('lang=' . $LANG) ?>">TP. Hồ Chí Minh</a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/club-ha-noi<?php echo getSuffix('lang=' . $LANG) ?>">Hà Nội</a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/club-da-nang<?php echo getSuffix('lang=' . $LANG) ?>">Đà Nẵng</a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/club-binh-duong<?php echo getSuffix('lang=' . $LANG) ?>">Bình Dương</a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/club-bien-hoa<?php echo getSuffix('lang=' . $LANG) ?>">Biên Hòa</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <div class="list-group panel">
                <a href="javascript:void(0)" class="list-group-item-success" data-toggle="collapse" aria-expanded="false">Dịch Vụ <span class="glyphicon glyphicon-chevron-right"></span></a>
                <div class="collapse" aria-expanded="false">
                    <ul>
                        <li><a href="<?php echo USER_BASE_URL ?>/group-fitness-services<?php echo getSuffix('lang=' . $LANG) ?>">Group Fitness</a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/dynamicstretching-services<?php echo getSuffix('lang=' . $LANG) ?>">Giảm Căng Cơ</a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/dance-services<?php echo getSuffix('lang=' . $LANG) ?>">Dance</a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/yoga-service<?php echo getSuffix('lang=' . $LANG) ?>s">Yoga</a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/pt-services<?php echo getSuffix('lang=' . $LANG) ?>">Huấn Luyện cá nhân</a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/kickfit-mma-services<?php echo getSuffix('lang=' . $LANG) ?>">Kickfit</a></li>
                        <li><a href="<?php echo USER_BASE_URL ?>/kickfit-mma-services<?php echo getSuffix('lang=' . $LANG) ?>">Võ tự do MMA</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <div class="list-group panel">
                <a href="javascript:void(0)" class="list-group-item-success" data-toggle="collapse" aria-expanded="false">Phong Cách Sống<span class="glyphicon glyphicon-chevron-right"></span></a>
                <div class="collapse" aria-expanded="false">
                    <ul>
                        <li><a href="http://lifestyle.cfyc.com.vn/giam-can-cap-toc/">Giảm Cân</a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/the-duc-suc-khoe/">Thể dục & Sức khỏe</a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/luyen-tap/">Luyện Tập</a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/phong-cach-song/">Phong Cách Sống</a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/dinh-duong/">Dinh Dưỡng</a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/gia-dinh/">Gia Đình</a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/yoga/">Yoga</a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/thoi-trang/">Thời Trang</a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/tin-tuc/">Tin Tức</a></li>
                        <li><a href="http://lifestyle.cfyc.com.vn/su-kien/">Sự Kiện</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <a href="<?php echo USER_BASE_URL ?>/cfyc-memberships<?php echo getSuffix('lang=' . $LANG) ?>">Thành Viên</a>
        </li>
        <li>
            <a href="<?php echo USER_BASE_URL ?>/classes<?php echo getSuffix('lang=' . $LANG) ?>">Lịch học</a>
        </li>
    </ul>
</nav>
<a class="logo" href="<?php echo USER_BASE_URL ?>">
    <img src="<?php echo USER_BASE_URL ?>/img/logo.png" class="img-responsive logo-img" alt="California Fitness &amp; Yoga">
</a>
<nav id="desktop-navigation">
    <a class="logo" href="<?php echo USER_BASE_URL ?><?php echo getSuffix('lang=' . $LANG) ?>">
        <img src="<?php echo USER_BASE_URL ?>/img/logo.png" class="img-responsive logo-img" alt="California Fitness &amp; Yoga">
    </a>
    <ul class="desktop-menu">
        <li><a href="<?php echo USER_BASE_URL ?><?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_HOMEPAGE ?></a></li>
        <li><a href="javascript:void(0)" data-index="0"><?php echo LANG_CLUBS ?></a></li>
        <li><a href="javascript:void(0)" data-index="1">Dịch Vụ</a></li>
        <li><a href="javascript:void(0)" data-index="2">Phong Cách Sống</a></li>
        <li><a href="<?php echo USER_BASE_URL ?>/cfyc-memberships<?php echo getSuffix('lang=' . $LANG) ?>">Thành Viên</a></li>
        <li><a href="<?php echo USER_BASE_URL ?>/classes<?php echo getSuffix('lang=' . $LANG) ?>">Lịch học</a></li>
        <li><a href="<?php echo USER_BASE_URL . ($URI ? ('/' . $URI) : NULL) . getSuffix('lang=' . $OPPOSITE_LANG) ?>"><img src="<?php echo USER_BASE_URL ?>/img/flag_<?php echo $OPPOSITE_LANG ?>.png" class="language"></a></li>
    </ul>
    <div class="holder-submenu">
        <div class="sub-menu collapse">
            <ul>
                <li><a href="<?php echo USER_BASE_URL ?>/club-hcm<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_CLUB_HCM ?></a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/club-ha-noi<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_CLUB_HA_NOI ?></a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/club-da-nang<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_CLUB_DA_NANG ?></a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/club-binh-duong<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_CLUB_BINH_DUONG ?></a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/club-bien-hoa<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_CLUB_BIEN_HOA ?></a></li>
            </ul>
        </div>
        <div class="sub-menu collapse">
            <ul>
                <li><a href="<?php echo USER_BASE_URL ?>/group-fitness-services<?php echo getSuffix('lang=' . $LANG) ?>">Group Fitness</a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/dynamicstretching-services<?php echo getSuffix('lang=' . $LANG) ?>">Giảm Căng Cơ</a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/dance-services<?php echo getSuffix('lang=' . $LANG) ?>">Dance</a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/yoga-services<?php echo getSuffix('lang=' . $LANG) ?>">Yoga</a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/pt-services<?php echo getSuffix('lang=' . $LANG) ?>">Huấn Luyện cá nhân</a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/kickfit-mma-services<?php echo getSuffix('lang=' . $LANG) ?>">Kickfit</a></li>
                <li><a href="<?php echo USER_BASE_URL ?>/kickfit-mma-services<?php echo getSuffix('lang=' . $LANG) ?>">Võ tự do MMA</a></li>
            </ul>
        </div>
        <div class="sub-menu collapse">
            <ul>
                <li><a href="http://lifestyle.cfyc.com.vn/giam-can-cap-toc/">Giảm Cân</a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/the-duc-suc-khoe/">Thể dục & Sức khỏe</a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/luyen-tap/">Luyện Tập</a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/phong-cach-song/">Phong Cách Sống</a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/dinh-duong/">Dinh Dưỡng</a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/gia-dinh/">Gia Đình</a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/yoga/">Yoga</a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/thoi-trang/">Thời Trang</a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/tin-tuc/">Tin Tức</a></li>
                <li><a href="http://lifestyle.cfyc.com.vn/su-kien/">Sự Kiện</a></li>
            </ul>
        </div>
    </div>
</nav>