<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatuble" content="IE=edge">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_1.css">
    </head>
    <body>
        <ul class="menu">
            <li><a href="?name=blog_1">Blog</a></li>
            <li><a href="?name=shop_1">Shop</a></li>
            <li><a href="?name=about_1">About</a></li>
        </ul>
        <div class="content">
            <?php
            // подключения файлов с контентом на основе полученного get запроса
            $siteName = $_GET['name']??'0';
            switch ($siteName) {
                case 'blog_1':
                    require_once ("blog_1.php");
                    break;
                case 'shop_1':
                    require_once ("shop_1.php");
                    break;
                case 'about_1':
                    require_once ("about_1.php");
                    break;
                
                default:
                    echo "Страница по умолчанию";
                    break;
            }
            
            ?>
        </div>
    </body>
</html>