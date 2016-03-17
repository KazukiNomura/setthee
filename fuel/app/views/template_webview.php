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
        .item {
            padding: 10px;
            line-height: 1;
        }

        .item-thum {
            background-color: #ccc;
            width: 50px;
            height: 50px;
            border-radius: 4px;
        }

        .item-title {
            font-size: 15px;
            font-weight: 500;
        }

        .item-desc {
            font-size: 14px;
            color: #666;
            line-height: 1.3;
            margin: 4px 0 0 0;
            padding: 0 30px 0 0;
        }

        .item-label {
            font-size: 12px;
            color: #999;
            float: right;
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