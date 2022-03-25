    <!DOCTYPE HTML>
    <head>
    <title>Bigshot</title>
    <meta charset="utf-8">
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
    <!--JS FILES -->
    <script src="js/jquery.tools.min.js"></script>
    <script>
    $(function () {
        $("#prod_nav ul").tabs("#panes > div", {
            effect: 'fade',
            fadeOutSpeed: 400
        });
    });
    </script>
    <script>
    $(document).ready(function () {
        $(".pane-list li").click(function () {
            window.location = $(this).find("a").attr("href");
            return false;
        });
    });
    </script>
    @yield('cssgallery')
    </head>
    <body>
        @include('layouts.header')
        @yield('app_content')
        @include('layouts.footer')
    </body>
    </html>