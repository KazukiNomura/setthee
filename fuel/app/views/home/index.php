 <div id="wrapper">
        <div class="wrapperIn">
        <header class="header clearfix">
            <ul class="gNav">
                <li class="gNav01"><a href="#"><img src="/design/common/img/header/logo.png" alt="" /></a></li>
                <li class="gNav02"><a href="#"><img src="/design/common/img/header/logo_txt.png" alt="" /></a></li>
                <li class="gNav03"><a href="#"><img src="/design/common/img/header/menu.png" alt="" /></a></li>
            </ul>
        </header><!-- header -->
        <div class="banner">
            <img src="design/imges/top/top_bnr.png" alt="" />
        </div>
        <div class="menu clearfix">
            <ul class="menuIn">
                <li  class="menu01"><a href="#">Report</a></li>
                <li class="menu02 active"><a href="#">Coupon</a></li>
                <li class="menu03"><a href="#">Category</a></li>
            </ul>
        </div><!-- menu -->
        <div class="content clearfix top">
            <div class="contentIn">
                <div class="topsec clearfix">

                <?php foreach ($list as $info): ?>
                    <ul class="topsecLeft clearfix">
                        <li class="comment"><span>30%off</span>commentcomment<br/>commentcommentcomment</li>
                        <li> <?php if (!empty($menu_info['photo'])): ?>
                      <img src="/uploads/<?=$menu_info['photo'];?>" height="20">
                    <?php endif; ?>
                    </li>
                        <li class="shop_name"></li>
                        <li class="text">texttexttexttexttexttexttext<br/>texttexttexttexttexttexttext</li>
                        <li class="place">Place</li>
                    </ul>

                     <ul class="topsecRight clearfix">
                        <li class="comment"><span>30%off</span>commentcomment<br/>commentcommentcomment</li>
                        <li><img src="design/imges/top/top_img02.png" alt="" /></li>
                        <li class="shop_name"><a href="/shop/edit?id=<?=$info['id'];?>"><?=$info['shop_name'];?></li>
                        <li class="text">texttexttexttexttexttexttext<br/>texttexttexttexttexttexttext</li>
                        <li class="place">Place</li>
                    </ul>
                    <?php endforeach; ?>


                </div><!-- topsec -->

                </div><!-- topsec -->
            </div>
        </div><!-- content -->
        <ul class="footer clearfix">
                <li><a href="#" class="fnav01"><img src="/design/common/img/footer/ft_img01_off.png" alt="" /></a></li>
                <li><a href="#"><img src="/design/common/img/footer/ft_img02_off.png" alt="" /></a></li>
                <li><a href="#"><img src="/design/common/img/footer/ft_img03_off.png" alt="" /></a></li>
                <li><a href="#"><img src="/design/common/img/footer/ft_img04_off.png" alt="" /></a></li>
        </ul><!-- footer -->
        </div><!-- wrapperIn -->
    </div><!-- wrapper -->