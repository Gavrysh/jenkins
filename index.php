<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Інтернет магазин</title>
  <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
  <header>
    <div id="headerInside">
      <div id="logo"></div>
      <div id="companyName">Brand</div>
      <div id="navWrap">
        <a href="/">Головна</a>
        <a href="index.php?page=shop">Магазин</a>
      </div>
    </div>
  </header>
  <div id="content">
    <?php
    $goods = [
        [
            'id' => 1,
            'name' => 'iPhone',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'img' => '/img/goods/iphone.jpg',
            'price' => '2000 $'
        ],
        [
            'id' => 2,
            'name' => 'HTC',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'img' => '/img/goods/htc.jpg',
            'price' => '1200 $'
        ],
        [
            'id' => 3,
            'name' => 'Samsung',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'img' => '/img/goods/samsung.jpg',
            'price' => '1400 $'
        ]
    ];
        if (isset($_GET['page'])) {
            $page = $_GET['page'];  
        }
        if (!isset($page)) {
            require('templates/main.php');
        } elseif ($page == 'shop') {
            require('templates/shop.php');
        } elseif ($page == 'product') {
            $id = $_GET['id'];
            $good = [];
            foreach ($goods as $product) {
                if($product['id'] == $id) {
                    $good = $product;
                    break;
                }
            }
            require('templates/openProduct.php');
        }
    ?>
  </div>
  <footer>

    <div id="footerInside">
      <div id="contacts">
        <div class="contactWrap">
            <img src="img/envelope.svg" class="contactIcon">
            info@brandshop.ua
        </div>
        <div class="contactWrap">
            <img src="img/phone-call.svg" class="contactIcon">
            3 800 555 77 77
        </div>
        <div class="contactWrap">
            <img src="img/placeholder.svg" class="contactIcon">
            Lyman, Kyivska,77
        </div>
      </div>

      <div id="footerNav">
        <a href="/">Головна</a>
        <a href="index.php?page=shop">Магазин</a>
      </div>

      <div id="social">
        <img class="socialItem" src="img/vk-social-logotype.svg">
        <img class="socialItem" src="img/google-plus-social-logotype.svg">
        <img class="socialItem" src="img/facebook-logo.svg">
      </div>

      <div id="copyrights">&copy; Brand</div>
    </div>

  </footer>
</body>
</html>