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
                <li class="menu02 active"><a href="#">New SHOP</a></li>
            </ul>
        </div><!-- menu -->
        <div class="content clearfix top">
            <div class="contentIn">
                <div class="topsec clearfix">

                <?php foreach ($list as $info): ?>
                    <ul class="topsecLeft">
                        <li class="comment"><a href="/shop/detail?id=<?=$info['id'];?>"><?=$info['shop_name'];?></a></li>
                   　　　<li class="topthumbnail"><img src="design/imges/top/top_img02.png" alt="" /></li>
                        <li class="text2"><?=$info['businesshours'];?></li>
                        <li class="text"><?=$info['address_info'];?></li>
                        <li class="place"><?=$info['price'];?></li>
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