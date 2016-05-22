<!DOCTYPE html>
<!-- CSP support mode (required for Windows Universal apps): https://docs.angularjs.org/api/ng/directive/ngCsp -->
<html lang="en" ng-app="app" ng-csp>
<head>
    <meta charset="utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <title><?php if (isset($title[0])) echo $title[0]; ?></title>

    <!-- JS dependencies (order matters!) -->
    <script src="/design/scripts/platformOverrides.js"></script>
    <script src="/design/lib/angular/angular.js"></script>
    <script src="/design/lib/onsen/js/onsenui.js"></script>

    <!-- CSS dependencies -->
    <link rel="stylesheet" href="/design/lib/onsen/css/onsenui.css" />
    <link rel="stylesheet" href="/design/lib/onsen/css/onsen-css-components-blue-basic-theme.css" />

    <!-- CSP support mode (required for Windows Universal apps) -->
    <link rel="stylesheet" href="/design/lib/angular/angular-csp.css" />


    <!-- --------------- App init --------------- -->
    <script src="/design/js/app.js"></script>

    <title>Set Thee</title>

    <style>
.clearfix {
    zoom: 1;
}
.clearfix:after {
    clear: both;
    content: ".";
    display: block;
    height: 0;
    line-height: 0;
    visibility: hidden;
}
ul li {
    list-style: none;
}
a {
    text-decoration: none;
}
#wrapper {
    width: 100%;
}
.wrapperIn {
    width: 640px;
    margin: 0 auto;
}
.header {
    width: 640px;
    margin: 0 auto;
    background: #ff0084;
    padding: 30px 0;
}
.gNav, .menuIn, .contentIn, .footerIn {
    width: 595px;
    margin: 0 auto;
}
.gNav li {
    float: left;
}
.gNav li.gNav02 {
    padding: 0 120px;
}
.menu {
    background: #f7f7f7;
    border-bottom: 2px solid #8a8a8a;
}
.menuIn li {
    float: left;
    font-size: 24px;
    text-align: center;
}
.menuIn li a {
    display: block;
    color: #9d9d9d;
    padding: 13px 0;
}
.menu01 {
    width: 110px;
}
.menu02 {
    width: 345px;
}
.active {
    color: #222222 !important;
    background: url(../../common/img/bg/arrow.png) no-repeat center bottom;
}
.menu03 {
    width: 135px;
}
.content {
    background: url(../../common/img/bg/content_bg.png) repeat;
}
.topsec {
    padding-top: 20px;
}
.topsecLeft {
    width: 290px;
    float: left;
    border-radius: 8px;
    background: #ffffff;
    font-size: 22px;
}
.comment {
    font-size: 22px;
    background: #ff0084;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    padding: 9px;
    color: #fff;
    word-wrap: break-word;
}
.comment span {
    font-size: 26px;
}
.shop_name {
    font-size: 24px;
    color: #333333;
    padding: 10px;
}
.text {
    color: #666666;
    padding: 0 10px 10px 10px;
    border-bottom: 2px solid #e4e4e4;
    width: 270px;
    word-wrap: break-word;
}
.place {
    background: url(../../img/top/top_chat.png) no-repeat;
    margin: 15px 10px;
    padding-left: 25px;
    color: #666666;
}
.topsecRight {
    width: 290px;
    float: right;
    border-radius: 8px;
    background: #ffffff;
    font-size: 22px;
}

/*areaList*/
.titname {
    background: #333333;
    color: #ffffff;
    text-align: center;
    padding: 20px 0;
    font-size: 24px;
}
.areaList {
    background: #eaeaea;
}
.areaList li {
    width: 295px;
}
.areaListIn {
    padding: 15px 24px;
    border-bottom: 2px solid #d1d1d1;
}
.areaListIn dt {
    width: 120px;
    float: left;
    color: #222222;
    font-size: 24px;
}
.areaListIn dt span {
    display: block;
    font-size: 22px;
    color: #888888;
    padding-top: 6px;
}
.areaListIn dd {
    width: 110px;
    float: right;
    background: #f7f7f7;
    font-size: 22px;
    text-align: center;
    border-radius: 5px;
    padding: 5px 0;
    margin-top: 8px;
}
.viewmore {
    padding: 20px 0;
}
.viewbtn {
    font-size: 24px;
    color: #f5f5f5;
    background: #9a9a9a;
    width: 595px;
    margin: 0 auto;
    display: block;
    text-align: center;
    padding: 30px 0;
}
.couponlist {
    width: 595px;
    margin: 0 auto;
    padding-top: 20px;
}
.couponlistsec {
    width: 595px;
    margin: 0 auto;
    background: #ffffff;
    border-radius: 7px;
}
.coupon_tlt {
    background-color: #ff0084;
    border-top-left-radius: 7px;
    border-top-right-radius: 7px;
    font-size: 24px;
    color: #ffffff;
    padding: 10px 0 10px 7px;
    display: block;
}
.coupon_tlt span {
    font-size: 22px;
    padding: 8px 0 0 0;
    display: block;
}
.couponpara {
    width: 575px;
    margin: 0 auto;
    border-bottom: 2px solid #e2e2e2;
    padding: 0 10px 20px 10px;
    background: url(../../img/couponlist/couponlist02.png) no-repeat 98%;
}
.coupon_img {
    float: left;
    display: block;
    padding: 10px 0 0 0;
}
.coupon_sp02 {
    float: left;
    width: 392px;
    font-family: "Arial";
    font-weight: bold;
    font-size: 26px;
    color: #223eba;
    padding: 7px 0 0 8px;
    display: block;
}
.coupon_sp03 {
    font-size: 22px;
    color: #000;
    font-weight: normal;
    word-wrap: break-word;
    width: 363px;
    display: block;
    padding-top: 8px;
}
/*shopdetail.html*/
.shopdetail {
    background: #ffffff;
}
.shopsec {
    width: 595px;
    margin: 0 auto;
    padding-top: 20px;
}
.shopcoupon {
    width: 595px;
    margin: 0 auto;
    font-family: "Arial";
}
.shop_l {
    width: 490px;
    margin: 0 auto;
    float: left;
}
.shop_tlt {
    font-weight: bold;
    font-size: 30px;
}
.shop_txt {
    font-size: 22px;
    color: #888888;
    padding: 10px 0 10px 0;
}
.shopIcon01 {
    font-size: 22px;
    color: #888888;
}
.shopIcon02 {
    font-size: 22px;
    color: #888888;
    padding: 0 0 0 25px;
}
.shop_r {
    float: right;
}
.shopAdd {
    width: 595px;
    margin: 0 auto;
}
.shopAdd li {
    float: left;
    padding: 20px 0 0 7px;
}
.shopsec01 {
    width: 595px;
    margin: 30px auto;
}
.shoppara {
    font-size: 22px;
    padding: 35px 0 0 0;
    word-wrap: break-word;
}
.shoptable_tlt {
    font-size: 24px;
    background-color: #decfb8;
    padding: 17px 0 17px 20px;
}
.shoptable_tlt02 {
    font-size: 24px;
    background-color: #decfb8;
    padding: 17px 0 17px 20px;
    background: #decfb8 url(../../img/shopdetail/bg_arw.png) no-repeat 95%;
}
.shopdetail_tb {
    width: 640px;
    margin: 0 auto;
    font-family: "Kozuka Gothic Pr6N";
}
.shopdetail_tb tr {
    border-bottom: 2px solid #e1e1e1;
}
.shopdetail_tb th {
    width: 180px;
    font-size: 24px;
    padding: 20px 0 20px 20px;
    background-color: #f6f1e9;
    font-weight: normal;
    text-align: left;
}
.shopdetail_tb td {
    font-size: 24px;
    padding: 0 20px 20px 20px;
    word-break: break-all;
}
.shop_td {
    padding: 0 0 27px 0 !important;
}
.shopdetail_photo {
    width: 595px;
    margin: 30px auto;
    font-family: "Kozuka Gothic Pr6N";
}
.photo_tlt {
    font-size: 24px;
}
.shopphoto_ul {
    width: 595px;
    margin: 0 auto;
}
.shopphoto_ul li {
    float: left;
    padding: 30px 20px 0 0;
}
.shopphoto_li {
    padding: 30px 0 0 0 !important;
}
.shopdetail_coupon {
    width: 595px;
    margin: 30px auto;
}
.shopcoupontit{
    margin-top: 20px;
    box-shadow: 0px 1px 1px 1px #ccc;
    border-radius: 7px;
    
}
.shopcoupontit .couponpara{
    background: none;
}
.shopcoupontit .coupon_tlt {
    padding: 21px 0 21px 20px;
}
.shopcoupontit .coupon_sp02,.shopcoupontit .coupon_sp03{
    width: 412px;
}
.shopNotetit{
    color: #9a9a9a;
    font-size: 22px;
    padding: 10px 0;
        width: 575px;
    margin: 0 auto;
}
.shopnotetxt{
    color: #989898;
    font-size: 22px;
    word-wrap: break-word;
    padding-bottom: 20px;
        width: 575px;
    margin: 0 auto;
}
.shopreport{
    width: 595px;
    margin: 0 auto;
    padding-bottom: 50px;
}
.viewmenu{
    text-decoration: underline;
    color: #000000;
}
.iconarr{
    background: #333333 url(../../img/shopdetail/icon_arr.png) no-repeat 4%;
}
.footer {
    background: #282828;
    overflow: hidden;
}
.footer li {
    float: left;
}
.footer li a img:hover {
    background: #fc0a87;
    display: block;
}
@media only screen and (max-width: 640px) {
    .wrapperIn, .header, .gNav, .gNav li img, .menuIn, .contentIn, .footerIn, .banner img, 
    .topsecLeft img, .topsecRight img, .footer li img, .couponlistsec, .coupon_img img ,
    .shop_r img,.shopAdd li img,.shopsec01 img,.shopphoto_ul img,.shopreport img{
        max-width: 100%;
    }
    .gNav li.gNav01, .gNav li.gNav03 {
        width: 20%;
    }
    .gNav li.gNav03 {
        float: right !important;
        text-align: right;
    }
    .gNav li.gNav02 {
        width: 50%;
        padding: 0 5%;
    }
    .gNav, .menuIn, .contentIn, .footerIn, .couponlist, .couponpara, .coupon_sp03, .coupon_sp02 ,.shopsec,
    .shopAdd,.shopsec01,.shopdetail_photo,.shopphoto_ul,.shopdetail_coupon,.shopNotetit,.shopnotetxt,.shopreport{
        width: 95%;
    }
    .menuIn li.menu01, .menuIn li.menu03 {
        width: 22%;
    }
    .menuIn li.menu02 {
        width: 45%;
    }
    .topsecLeft, .topsecRight {
        width: 48%;
    }
    .text {
        width: 90%;
    }
    .footer li a img {
        max-width: 100%;
    }
    .footer li {
        width: 25%;
    }
    .areaList li {
        width: 50%;
    }
    .viewbtn {
        width: 95%;
    }
    .areaListIn dt {
        width: 50%;
    }
    .couponpara  li.coupon_img {
        width: 30%;
    }
    .couponpara  li.coupon_sp02 {
        width: 60%;
    }
    .shop_l{
        width: 60%;
    }
    .shopIcon01{
        display: block;
    }
    .shopIcon02{
        padding: 0;
    }
    .shop_r{
        width: 40%;
    }
    .shopAdd li{
        width: 47%;
    }
    .shopdetail_tb{
        width: 100%;
    }
    .shopdetail_tb th{
        width: 20%;
    }
    .shopphoto_ul li{
        width: 18%;
    }
    .shopcoupontit .coupon_sp02, .shopcoupontit .coupon_sp03{
        width: 100%;
    }

    html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

body {
    line-height:1;
}

article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section { 
    display:block;
}

nav ul {
    list-style:none;
}

blockquote, q {
    quotes:none;
}

blockquote:before, blockquote:after,
q:before, q:after {
    content:'';
    content:none;
}

a {
    margin:0;
    padding:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

/* change colours to suit your needs */
ins {
    background-color:#ff9;
    color:#000;
    text-decoration:none;
}

/* change colours to suit your needs */
mark {
    background-color:#ff9;
    color:#000; 
    font-style:italic;
    font-weight:bold;
}

del {
    text-decoration: line-through;
}

abbr[title], dfn[title] {
    border-bottom:1px dotted;
    cursor:help;
}

table {
    border-collapse:collapse;
    border-spacing:0;
}

/* change border colour to suit your needs */
hr {
    display:block;
    height:1px;
    border:0;   
    border-top:1px solid #cccccc;
    margin:1em 0;
    padding:0;
}

input, select {
    vertical-align:middle;
}

    </style>

</head>

<body ng-controller="AppController">
    <!-- Cordova reference -->
    <script src="cordova.js"></script>
    <script src="/design/scripts/index.js"></script>
    <!-- -->


    <?php echo $content; ?>
    

</body>
</html>