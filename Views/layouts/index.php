
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
    ============================================ -->
    <title><?php echo $data['title'] ?></title>
    <meta charset="utf-8">
    <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description" content="Revo is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
    <!-- Mobile specific metas
    ============================================ -->

    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="resources/image/png" href="resources/ico/favicon-16x16.png"/>
  
   
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="resources/css/bootstrap/css/bootstrap.min.css">
    <link href="resources/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="resources/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="resources/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="resources/css/themecss/lib.css" rel="stylesheet">
    <link href="resources/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="resources/js/minicolors/miniColors.css" rel="stylesheet">
    
    <!-- Theme CSS
    ============================================ -->
    <link href="resources/css/themecss/so_searchpro.css" rel="stylesheet">
    <link href="resources/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="resources/css/themecss/so-categories.css" rel="stylesheet">
    <link href="resources/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="resources/css/themecss/so-newletter-popup.css" rel="stylesheet">
    <link href="resources/css/themecss/slick.css" rel="stylesheet">

    <link href="resources/css/footer/footer1.css" rel="stylesheet">
    <link href="resources/css/header/header1.css" rel="stylesheet">
    <link id="color_scheme" href="resources/css/theme.css" rel="stylesheet"> 
    <link href="resources/css/responsive.css" rel="stylesheet">
    <link href="resources/css/style.css" rel="stylesheet">
     <!-- Google web fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel='stylesheet' type='text/css'>
    <style>
        body{font-family:'Open Sans', sans-serif}
        .font-ct, h1, h2, h3, 
        .des_deal,
        .item-time-w,
        .item-time-w .name-time,
        .static-menu a.main-menu, 
        .container-megamenu.vertical .vertical-wrapper ul li > a strong, 
        .container-megamenu.vertical .vertical-wrapper ul.megamenu li .sub-menu .content .static-menu .menu ul li a.main-menu, 
        .horizontal ul.megamenu > li > a, .footertitle, 
        .module h3.modtitle span, .breadcrumb li a, .item-title a, 
        .best-seller-custom .item-info, .product-box-desc, .product_page_price .price-new, 
        .list-group-item a, #menu ul.nav > li > a, .megamenuToogle-pattern, 
        .right-block .caption h4, .price, .box-price {
            font-family: Raleway, sans-serif;
        }
    </style>

</head>

<body class="common-home res layout-1">
    
    <div id="wrapper" class="wrapper-fluid banners-effect-7">
    
    <!-- Header Container  -->
    <header id="header" class=" typeheader-1">
        <!-- Header Top -->
        <div class="header-top hidden-compact">
            <div class="container">
                <div class="row">
                    <div class="header-top-left  col-lg-6 col-sm-5 col-md-6 hidden-xs">
                        <ul class="list-inlines">
                            <li class="hidden-xs">
                            <span class="hidden-sm">
                            Free 3 day delirery and free returns within the US
                            </span>
                            <a class="link-lg" href="register.html">Register </a> or 
                            <a class="link-lg" href="login.html">Login </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-top-right collapsed-block col-lg-6 col-md-6 col-sm-7 col-xs-12">
                        <ul class="top-link list-inline">
                            <li class="log login"><a class="link-lg" href="login.html">Login </a></li>
                            <li class="account" id="my_account">
                            <a href="my-account.html" title="My Account " class="btn-xs dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs">My Account </span> <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu ">
                                    <li><a href="my-account.html">My Account </a></li>
                                    <li><a href="order-history.html">Order History </a></li>
                                    <li><a href="horder-history.html">Transactions </a></li>
                                    <li><a href="order-information.html">Order Information </a></li>
                                    <li class="checkout"><a href="checkout.html" class="btn-link" title="Checkout "><span>Checkout </span></a></li>
                                     
                                </ul>
                            </li>
                              
                            <li class="language">
                                <div class="btn-group languages-block ">
                                    <form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
                                        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <img src="resources/image/catalog/flags/gb.png" alt="English" title="English">
                                            <span class="">English</span>
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.html"><img class="image_flag" src="resources/image/catalog/flags/gb.png" alt="English" title="English" /> English </a></li>
                                            <li> <a href="index.html"> <img class="image_flag" src="resources/image/catalog/flags/ar.png" alt="Arabic" title="Arabic" /> Arabic </a> </li>
                                        </ul>
                                    </form>
                                </div>
                                
                            </li>
                            <li class="currency">
                                <div class="btn-group currencies-block">
                                    <form action="index.html" method="post" enctype="multipart/form-data" id="currency">
                                        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <span class="icon icon-credit "></span> $ US Dollar  <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu btn-xs">
                                            <li> <a href="#">(€)&nbsp;Euro</a></li>
                                            <li> <a href="#">(£)&nbsp;Pounds    </a></li>
                                            <li> <a href="#">($)&nbsp;US Dollar </a></li>
                                        </ul>
                                    </form>
                                </div>
                            </li> 
                        </ul>
                        

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- //Header Top -->

        <!-- Header center -->
        <div class="header-center">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="navbar-logo col-md-2 col-sm-3 col-xs-10">
                        <div class="logo"><a href="index.html"><img src="resources/image/catalog/logo.png" title="Your Store" alt="Your Store" /></a></div>
                    </div>
                    <!-- //end Logo -->

                    <!-- Main menu -->
                    <div class="header-center-right main-menu  col-md-10 col-sm-9 col-xs-2">
                       <div class="megamenu-style-dev megamenu-dev">
                            <div class="responsive so-megamenu megamenu-style-dev">
                                <nav class="navbar-default">
                                    <div class=" container-megamenu  horizontal open ">
                                        <div class="navbar-header">
                                            <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        
                                        <div class="megamenu-wrapper">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                        <li class="menu-home with-sub-menu hover">
                                                            <a href="index.html">Home <b class="caret"></b></a>
                                                            <div class="sub-menu" style="width:100%;" >
                                                                <div class="content" >
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <a href="index.html" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="resources/image/catalog/menu/home-1.jpg" alt="">
                                                                                    
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - (Default)</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home2.html" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="resources/image/catalog/menu/home-2.jpg" alt="">
                                                                                   
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page 2</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home3.html" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="resources/image/catalog/menu/home-3.jpg" alt="">
                                                                                   
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page 3</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home4.html" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="resources/image/catalog/menu/home-4.jpg" alt="">
                                                                                    
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page 4</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home5.html" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="resources/image/catalog/menu/home-5.jpg" alt="">
                                                                                    
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page 5</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home6.html" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="resources/image/catalog/menu/home-6.jpg" alt="">
                                                                                    
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page 6</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="resources/image/catalog/menu/home-7.jpg" alt="">
                                                                                    
                                                                                </span> 
                                                                                <h3 class="figcaption">Coming Soon</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="resources/image/catalog/menu/home-8.jpg" alt="">
                                                                                    
                                                                                </span> 
                                                                                <h3 class="figcaption">Coming Soon</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        
                                                                        <!-- <div class="col-md-15">
                                                                            <a href="#" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="resources/image/demo/feature/comming-soon.png" alt="">
                                                                                    
                                                                                </span> 
                                                                                <h3 class="figcaption">Comming soon</h3> 
                                                                            </a> 
                                                                            
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Features</strong>
                                                                <img class="label-hot" src="resources/image/catalog/menu/new-icon.png" alt="icon items">
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; right: auto;">
                                                                <div class="content" >
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#" class="title-submenu">Listing pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="category.html">Category Page 1 </a></li>
                                                                                        <li><a href="category-v2.html">Category Page 2</a></li>
                                                                                        <li><a href="category-v3.html">Category Page 3</a></li>
                                                                                    </ul>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#" class="title-submenu">Product pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="product.html">Product page 1</a></li>
                                                                                        <li><a href="product-v2.html">Product page 2</a></li>
                                                                                        <li><a href="product-v3.html">Product page 3</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#" class="title-submenu">Shopping pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="cart.html">Shopping Cart Page</a></li>
                                                                                        <li><a href="checkout.html">Checkout Page</a></li>
                                                                                        <li><a href="compare.html">Compare Page</a></li>
                                                                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                                                                    
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#" class="title-submenu">My Account pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="login.html">Login Page</a></li>
                                                                                        <li><a href="register.html">Register Page</a></li>
                                                                                        <li><a href="my-account.html">My Account</a></li>
                                                                                        <li><a href="order-history.html">Order History</a></li>
                                                                                        <li><a href="order-information.html">Order Information</a></li>
                                                                                        <li><a href="return.html">Product Returns</a></li>
                                                                                        <li><a href="gift-voucher.html">Gift Voucher</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Pages</strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 40%; ">
                                                                <div class="content" >
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <ul class="row-list">
                                                                                <li><a class="subcategory_item" href="faq.html">FAQ</a></li>
                                                                                
                                                                                <li><a class="subcategory_item" href="sitemap.html">Site Map</a></li>
                                                                                <li><a class="subcategory_item" href="contact.html">Contact us</a></li>
                                                                                <li><a class="subcategory_item" href="banner-effect.html">Banner Effect</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <ul class="row-list">
                                                                                <li><a class="subcategory_item" href="about-us.html">About Us 1</a></li>
                                                                                <li><a class="subcategory_item" href="about-us-2.html">About Us 2</a></li>
                                                                                <li><a class="subcategory_item" href="about-us-3.html">About Us 3</a></li>
                                                                                <li><a class="subcategory_item" href="about-us-4.html">About Us 4</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Categories</strong>
                                                                <img class="label-hot" src="resources/image/catalog/menu/hot-icon.png" alt="icon items">
                                                      
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; display: none;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-3 img img1">
                                                                                    <a href="#"><img src="resources/image/catalog/menu/megabanner/image-1.jpg" alt="banner1"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img2">
                                                                                    <a href="#"><img src="resources/image/catalog/menu/megabanner/image-2.jpg" alt="banner2"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img3">
                                                                                    <a href="#"><img src="resources/image/catalog/menu/megabanner/image-3.jpg" alt="banner3"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img4">
                                                                                    <a href="#"><img src="resources/image/catalog/menu/megabanner/image-4.jpg" alt="banner4"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Automotive</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"  class="main-menu">Car Alarms and Security</a></li>
                                                                                            <li><a href="#"  class="main-menu">Car Audio &amp; Speakers</a></li>
                                                                                            <li><a href="#"  class="main-menu">Gadgets &amp; Auto Parts</a></li>
                                                                                            <li><a href="#"  class="main-menu">More Car Accessories</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Funitures</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"  class="main-menu">Bathroom</a></li>
                                                                                            <li><a href="#"  class="main-menu">Bedroom</a></li>
                                                                                            <li><a href="#"  class="main-menu">Decor</a></li>
                                                                                            <li><a href="#"  class="main-menu">Living room</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Jewelry &amp; Watches</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"  class="main-menu">Earings</a></li>
                                                                                            <li><a href="#"  class="main-menu">Wedding Rings</a></li>
                                                                                             <li><a href="#"  class="main-menu">Women Watches</a></li>
                                                                                            <li><a href="#"  class="main-menu">Men Watches</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Electronics</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"  class="main-menu">Computer</a></li>
                                                                                            <li><a href="#"  class="main-menu">Smartphone</a></li>
                                                                                            <li><a href="#"  class="main-menu">Tablets</a></li>
                                                                                            <li><a href="#"  class="main-menu">Monitors</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Accessories</strong>
                                             
                                                            </a>
                                                
                                                        </li>
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="blog-page.html" class="clearfix">
                                                                <strong>Blog</strong>
                                                                <span class="label"></span>
                                                            </a>
                                                        </li>
                                                        
                                                        
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                       </div>  
                       <div class="phone-header pull-right">
                            <div class="telephone hidden-xs">
                            <div class="contact-us">    
                                <span class="text">call us now:</span> 
                                <span class="phone">0123-444-666</span><br>  Email:<a href="mailto:contact@revo.com"> contact@revo.com</a> 
                            </div>
                            </div>
                        </div>   
                    </div>
                    <!-- //end Main menu -->
                </div>
            </div>
        </div>
        <!-- //Header center -->

        <!-- Header Bottom -->
        <div class="header-bottom hidden-compact">
            <div class="container">
                <div class="header-bottom-inner">
                    <div class="row">
                        <div class="header-bottom-left menu-vertical col-md-3 col-sm-2 col-xs-2">
                            <div class="responsive so-megamenu megamenu-style-dev ">
                                <div class="so-vertical-menu ">
                                    <nav class="navbar-default">    
                                        
                                        <div class="container-megamenu vertical">
                                            <div id="menuHeading">
                                                <div class="megamenuToogle-wrapper">
                                                    <div class="megamenuToogle-pattern">
                                                        <div class="container">
                                                            <div>
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </div>
                                                            <span class="title-mega">All Departments</span>              
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                            <div class="navbar-header">
                                                <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                            <div class="vertical-wrapper">
                                                <span id="remove-verticalmenu" class="fa fa-times"></span>
                                                <div class="megamenu-pattern">
                                                    <div class="container-mega">
                                                        <ul class="megamenu">
                                                            <?php echo MenuWidget::render("departament_menu");?>     
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>

                        </div>
                        <div class="header-bottom-right col-md-9 col-sm-10 col-xs-10">
                            <!-- Search -->
                            <div class="header_search col-lg-6 col-md-8 col-sm-9 col-xs-4">
                               
                                <button id="dropdownSearch" class="dropdown-toggle bt-search hidden"><i class="fa fa-search" aria-hidden="true"></i></button>                         
                                <div class="dropdown-menu dropdown-menu-search"> 
                                    <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                                        <form method="GET" action="index.html">
                                            <div id="search0" class="search input-group form-group">
                                                <div class="select_category filter_type  icon-select hidden-xs">
                                                    <select class="no-border" name="category_id">
                                                        <option value="0">All Categories</option>
                                                        <option value="78">Apparel</option>
                                                        <option value="77">Cables &amp; Connectors</option>
                                                        <option value="82">Cameras &amp; Photo</option>
                                                        <option value="80">Flashlights &amp; Lamps</option>
                                                        <option value="81">Mobile Accessories</option>
                                                        <option value="79">Video Games</option>
                                                        <option value="20">Jewelry &amp; Watches</option>
                                                        <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option>
                                                        <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings</option>
                                                        <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option>
                                                    </select>
                                                </div>

                                                <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Keyword here..." name="search">
                                                <span class="input-group-btn">
                                                <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                            <input type="hidden" name="route" value="product/search" />
                                        </form>
                                    </div>
                                </div>
                                 
                            </div>
                            <!-- //end Search -->
                            <!-- Secondary menu -->
                            <div class="header-right col-lg-3 col-md-3 col-sm-3 col-xs-8 pull-right">
                                
                                <!--cart-->
                                <div class="block-cart">
                                    <div class="shopping_cart">
                                        <div id="cart" class="btn-shopping-cart">

                                            <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                                <div class="shopcart">
                                                    <span class="icon-c hidden">
                                            <i class="fa fa-shopping-bag"></i>
                                          </span>
                                                    <div class="shopcart-inner">
                                                        <p class="text-shopping-cart hidden">

                                                            My cart
                                                        </p>

                                                        <span class="total-shopping-cart cart-total-full">
                                               <span class="items_cart">02</span><span class="items_cart2 hidden"> item(s)</span><span class="items_carts hidden"> - $162.00 </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>

                                            <ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
                                                <li>
                                                    <table class="table table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center" style="width:70px">
                                                                    <a href="product.html">
                                                                        <img src="resources/image/catalog/demo/product/80/1.jpg" style="width:70px" alt="Yutculpa ullamcon" title="Yutculpa ullamco" class="preview">
                                                                    </a>
                                                                </td>
                                                                <td class="text-left"> <a class="cart_product_name" href="product.html">Yutculpa ullamco</a> 
                                                                </td>
                                                                <td class="text-center">x1</td>
                                                                <td class="text-center">$80.00</td>
                                                                <td class="text-right">
                                                                    <a href="product.html" class="fa fa-edit"></a>
                                                                </td>
                                                                <td class="text-right">
                                                                    <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center" style="width:70px">
                                                                    <a href="product.html">
                                                                        <img src="resources/image/catalog/demo/product/80/2.jpg" style="width:70px" alt="Xancetta bresao" title="Xancetta bresao" class="preview">
                                                                    </a>
                                                                </td>
                                                                <td class="text-left"> <a class="cart_product_name" href="product.html">Xancetta bresao</a> 
                                                                </td>
                                                                <td class="text-center">x1</td>
                                                                <td class="text-center">$60.00</td>
                                                                <td class="text-right">
                                                                    <a href="product.html" class="fa fa-edit"></a>
                                                                </td>
                                                                <td class="text-right">
                                                                    <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </li>
                                                <li>
                                                    <div>
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-left"><strong>Sub-Total</strong>
                                                                    </td>
                                                                    <td class="text-right">$140.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left"><strong>Eco Tax (-2.00)</strong>
                                                                    </td>
                                                                    <td class="text-right">$2.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left"><strong>VAT (20%)</strong>
                                                                    </td>
                                                                    <td class="text-right">$20.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left"><strong>Total</strong>
                                                                    </td>
                                                                    <td class="text-right">$162.00</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p class="text-center total-carts"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> 
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <!--//cart-->
                                <div class="header_custom_link">
                                    <ul class="">
                                        <li class="wishlist"><a href="wishlist.html" id="wishlist-total" class="top-link-wishlist" title="Wish List (0) "><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li class="compare"><a href="compare.html" class="top-link-compare" title="Compare "><i class="fa fa-refresh"></i></a>
                                        </li>
                                    </ul>  
                                </div>   
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- //Header Container  -->
    
       
    <!-- Main Container  -->
    <div class="main-container">
            <div class="slider-full">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-md-offset-3 block-slide">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 block-left">
                                    <div class="module sohomepage-slider ">
                                        <div class="yt-content-slider"  data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                            <div class="yt-content-slide">
                                                <a title="slide1" href="#"><img src="resources/image/catalog/demo/slideshow/home1/slide1.jpg" alt="slide img" class="responsive"></a>
                                            </div>
                                            <div class="yt-content-slide">
                                                <a title="slide2" href="#"><img src="resources/image/catalog/demo/slideshow/home1/slide2.jpg" alt="slide img" class="responsive"></a>
                                            </div>
                                            <div class="yt-content-slide">
                                                <a title="slide3" href="#"><img src="resources/image/catalog/demo/slideshow/home1/slide3.jpg" alt="slide img" class="responsive"></a>
                                            </div>
                                        </div>
                                        <div class="loadeding"></div>
                                    </div>  
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 block-right">
                                    <div class="module">
                                        <div class="block-image-1">
                                            <ul class="static-image">
                                                <li><a title="Static Image" href="#"><img src="resources/image/catalog/demo/banners/home1/1.jpg" alt="Static Image"></a></li>
                                                <li><a title="Static Image" href="#"><img src="resources/image/catalog/demo/banners/home1/2.jpg" alt="Static Image"></a></li>
                                                <li><a title="Static Image" href="#"><img src="resources/image/catalog/demo/banners/home1/3.jpg" alt="Static Image"></a></li>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                           
            </div>
            <div class="main-content">
                <div class="container">
                    <div class="block block_0">
                        <div class="block-categories module">
                            <h3 class="modtitle"><span>Featured Categories</span></h3>
                            <div class="yt-content-slider cate-content"  data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="5" data-items_column1="4" data-items_column2="4"  data-items_column3="3" data-items_column4="2" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                <div class="cate cate1">
                                    <div class="inner"><a href="#"><img src="resources/image/catalog/demo/banners/home1/cate1.jpg" alt="Static Image"></a><a class="title-cate" href="#">Watches</a></div>
                                </div>
                                <div class="cate cate2">
                                <div class="inner"><a href="#"><img src="resources/image/catalog/demo/banners/home1/cate2.jpg" alt="Static Image"></a><a class="title-cate" href="#">Bags</a></div>
                                </div>
                                <div class="cate cate3">
                                <div class="inner"><a href="#"><img src="resources/image/catalog/demo/banners/home1/cate3.jpg" alt="Static Image"></a><a class="title-cate" href="#">Swimwears</a></div>
                                </div>
                                <div class="cate cate4">
                                <div class="inner"><a href="#"><img src="resources/image/catalog/demo/banners/home1/cate4.jpg" alt="Static Image"></a><a class="title-cate" href="#">Shoes</a></div>
                                </div>
                                <div class="cate cate5">
                                <div class="inner"><a href="#"><img src="resources/image/catalog/demo/banners/home1/cate5.jpg" alt="Static Image"></a><a class="title-cate" href="#">Fashion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block block_1">
                        <div class="row products-listing grid">
                            <div class="column small-11 small-centered product-layout col-md-9">
                                <div class="custom_deals_featured">
                                    <h2 class="modtitle font-ct"><span>Today Deals</span></h2>
                                    <div class="modcontent">
                                        <div class="slider slider-img slider-single">
                                            <div class="slick-slide" data-slick-index="1">
                                                <div class="product-item">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="product.html" target="_self" title="Pastrami bacon">
                                                                    <img src="resources/image/catalog/demo/product/300/1.jpg" class="img-1 img-responsive" alt="Pastrami bacon">
                                                                </a>
                                                            </div>
                                                            <div class="box-label">
                                                                <span class="label-product label-sale">-20%</span>
                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <h4><a href="#" target="_self" title="Deserunt mollitia" tabindex="0">Deserunt mollitia</a></h4>
                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>
                                                                <p class="des_deal">
                                                                The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this dis..</p>
                                                                <p class="price font-ct">
                                                                    <span class="price-new">$98.00</span>
                                                                    <span class="price-old">$122.00</span>
                                                                </p>
                                                                <!--countdown box-->
                                                                <div class="item-time-w">
                                                                    <div class="item-time">
                                                                        <div class="item-timer">
                                                                            <div class="defaultCountdown-30"></div>
                                                                        </div>
                                                                    </div>                                                                                              
                                                                </div>                                                    
                                                                <!--end countdown box-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="2">
                                                <div class="product-item">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="product.html" target="_self" title="Pastrami bacon">
                                                                    <img src="resources/image/catalog/demo/product/300/2.jpg" class="img-1 img-responsive" alt="Pastrami bacon">
                                                                    
                                                                </a>
                                                            </div>
                                                            <div class="box-label">
                                                                <span class="label-product label-sale">-18%</span>
                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <h4><a href="#" target="_self" title="Deserunt mollitia" tabindex="0">Cuid densinteu</a></h4>
                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>
                                                                <p class="des_deal">
                                                                The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this dis..</p>
                                                                <p class="price font-ct">
                                                                    <span class="price-new">$198.00</span>
                                                                    <span class="price-old">$222.00</span>
                                                                </p>
                                                                <!--countdown box-->
                                                                <div class="item-time-w">
                                                                    <div class="item-time">
                                                                        <div class="item-timer">
                                                                            <div class="defaultCountdown-30"></div>
                                                                        </div>
                                                                    </div>                                                                                              
                                                                </div>                                                    
                                                                <!--end countdown box-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="slick-slide" data-slick-index="3">
                                                <div class="product-item">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="product.html" target="_self" title="Pastrami bacon">
                                                                    <img src="resources/image/catalog/demo/product/300/3.jpg" class="img-1 img-responsive" alt="Pastrami bacon">
                                                                </a>
                                                            </div>
                                                            <div class="box-label">
                                                                <span class="label-product label-sale">-10%</span>
                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <h4><a href="#" target="_self" title="Deserunt mollitia" tabindex="0">Dail mirentukan</a></h4>
                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>
                                                                <p class="des_deal">
                                                                The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this dis..</p>
                                                                <p class="price font-ct">
                                                                    <span class="price-new">$100.00</span>
                                                                    <span class="price-old">$110.00</span>
                                                                </p>
                                                                <!--countdown box-->
                                                                <div class="item-time-w">
                                                                    <div class="item-time">
                                                                        <div class="item-timer">
                                                                            <div class="defaultCountdown-30"></div>
                                                                        </div>
                                                                    </div>                                                                                              
                                                                </div>                                                    
                                                                <!--end countdown box-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="slick-slide" data-slick-index="4">
                                                <div class="product-item">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="product.html" target="_self" title="Pastrami bacon">
                                                                    <img src="resources/image/catalog/demo/product/300/4.jpg" class="img-1 img-responsive" alt="Pastrami bacon">
                                                                </a>
                                                            </div>
                                                            <div class="box-label">
                                                                <span class="label-product label-sale">-15%</span>
                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <h4><a href="#" target="_self" title="Deserunt mollitia" tabindex="0">Salmon Sokara</a></h4>
                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>
                                                                <p class="des_deal">
                                                                The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this dis..</p>
                                                                <p class="price font-ct">
                                                                    <span class="price-new">$160.00</span>
                                                                    <span class="price-old">$190.00</span>
                                                                </p>
                                                                <!--countdown box-->
                                                                <div class="item-time-w">
                                                                    <div class="item-time">
                                                                        <div class="item-timer">
                                                                            <div class="defaultCountdown-30"></div>
                                                                        </div>
                                                                    </div>                                                                                              
                                                                </div>                                                    
                                                                <!--end countdown box-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="slick-slide" data-slick-index="5">
                                                <div class="product-item">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="product.html" target="_self" title="Pastrami bacon">
                                                                    <img src="resources/image/catalog/demo/product/300/5.jpg" class="img-1 img-responsive" alt="Pastrami bacon">
                                                                </a>
                                                            </div>
                                                            <div class="box-label">
                                                                <span class="label-product label-sale">-20%</span>
                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <h4><a href="#" target="_self" title="Molliti Deserunt" tabindex="0">Molliti Deserunt</a></h4>
                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>
                                                                <p class="des_deal">
                                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  the creative professional, this dis..</p>
                                                                <p class="price font-ct">
                                                                    <span class="price-new">$98.00</span>
                                                                    <span class="price-old">$122.00</span>
                                                                </p>
                                                                <!--countdown box-->
                                                                <div class="item-time-w">
                                                                    <div class="item-time">
                                                                        <div class="item-timer">
                                                                            <div class="defaultCountdown-30"></div>
                                                                        </div>
                                                                    </div>                                                                                              
                                                                </div>                                                    
                                                                <!--end countdown box-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="slick-slide" data-slick-index="6">
                                                <div class="product-item">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="product.html" target="_self" title="Pastrami bacon">
                                                                    <img src="resources/image/catalog/demo/product/300/6.jpg" class="img-1 img-responsive" alt="Pastrami bacon">
                                                                </a>
                                                            </div>
                                                            <div class="box-label">
                                                                <span class="label-product label-sale">-5%</span>
                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <h4><a href="#" target="_self" title="Delivers Deserunt" tabindex="0">Delivers Deserunt</a></h4>
                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>
                                                                <p class="des_deal">
                                                                The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this dis..</p>
                                                                <p class="price font-ct">
                                                                    <span class="price-new">$200.00</span>
                                                                    <span class="price-old">$210.00</span>
                                                                </p>
                                                                <!--countdown box-->
                                                                <div class="item-time-w">
                                                                    <div class="item-time">
                                                                        <div class="item-timer">
                                                                            <div class="defaultCountdown-30"></div>
                                                                        </div>
                                                                    </div>                                                                                              
                                                                </div>                                                    
                                                                <!--end countdown box-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="slick-slide" data-slick-index="7">
                                                <div class="product-item">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="product.html" target="_self" title="Pastrami bacon">
                                                                    <img src="resources/image/catalog/demo/product/300/7.jpg" class="img-1 img-responsive" alt="Pastrami bacon">
                                                                </a>
                                                            </div>
                                                            <div class="box-label">
                                                                <span class="label-product label-sale">-12%</span>
                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <h4><a href="#" target="_self" title="Pastrami mollitia" tabindex="0">Pastrami mollitia</a></h4>
                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>
                                                                <p class="des_deal">
                                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration the creative professional, this dis..</p>
                                                                <p class="price font-ct">
                                                                    <span class="price-new">$118.00</span>
                                                                    <span class="price-old">$142.00</span>
                                                                </p>
                                                                <!--countdown box-->
                                                                <div class="item-time-w">
                                                                    <div class="item-time">
                                                                        <div class="item-timer">
                                                                            <div class="defaultCountdown-30"></div>
                                                                        </div>
                                                                    </div>                                                                                              
                                                                </div>                                                    
                                                                <!--end countdown box-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="slick-slide" data-slick-index="8">
                                                <div class="product-item">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="product.html" target="_self" title="Fession molliti">
                                                                    <img src="resources/image/catalog/demo/product/300/3.jpg" class="img-1 img-responsive" alt="Fession molliti">
                                                                </a>
                                                            </div>
                                                            <div class="box-label">
                                                                <span class="label-product label-sale">-16%</span>
                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <h4><a href="#" target="_self" title="Fession molliti" tabindex="0">Fession molliti</a></h4>
                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>
                                                                <p class="des_deal">
                                                                The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this dis..</p>
                                                                <p class="price font-ct">
                                                                    <span class="price-new">$98.00</span>
                                                                    <span class="price-old">$122.00</span>
                                                                </p>
                                                                <!--countdown box-->
                                                                <div class="item-time-w">
                                                                    <div class="item-time">
                                                                        <div class="item-timer">
                                                                            <div class="defaultCountdown-30"></div>
                                                                        </div>
                                                                    </div>                                                                                              
                                                                </div>                                                    
                                                                <!--end countdown box-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="slider slider-item slider-nav">
                                            <div class="item-slick" data-slick-index="1">
                                                <div class="item-img">
                                                    <img src="resources/image/catalog/demo/product/80/1.jpg" class="img-1 img-responsive" alt="Pastrami bacon">
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">-20%</span>
                                                    </div>
                                                </div>
                                                <span class="title">Deserunt mollitia</span>
                                            </div>
                                            <div class="item-slick" data-slick-index="2">
                                                <div class="item-img">
                                                    <img src="resources/image/catalog/demo/product/80/2.jpg" class="img-1 img-responsive" alt="Pastrami bacon">
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">-18%</span>
                                                    </div>
                                                </div>
                                                <span class="title">Cuid densinteu</span>
                                            </div>
                                            <div class="item-slick" data-slick-index="3">
                                                <div class="item-img">
                                                    <img src="resources/image/catalog/demo/product/80/3.jpg" class="img-1 img-responsive" alt="Pastrami bacon">
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">-10%</span>
                                                    </div>
                                                </div>
                                                <span class="title">Dail mirentukan</span>
                                            </div>
                                            <div class="item-slick" data-slick-index="4">
                                                <div class="item-img">
                                                    <img src="resources/image/catalog/demo/product/80/4.jpg" class="img-1 img-responsive" alt="Pastrami bacon">
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">-15%</span>
                                                    </div>
                                                </div>
                                                <span class="title">Salmon Sokara</span>
                                            </div>
                                            <div class="item-slick" data-slick-index="5">
                                                <div class="item-img">
                                                    <img src="resources/image/catalog/demo/product/80/5.jpg" class="img-1 img-responsive" alt="Pastrami bacon">
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">-20%</span>
                                                    </div>
                                                </div>
                                                <span class="title">Molliti Deserunt</span>
                                            </div>
                                            <div class="item-slick" data-slick-index="6">
                                                <div class="item-img">
                                                    <img src="resources/image/catalog/demo/product/80/6.jpg" class="img-1 img-responsive" alt="Pastrami bacon">
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">-5%</span>
                                                    </div>
                                                </div>
                                                <span class="title">Delivers Deserunt</span>
                                            </div>
                                            <div class="item-slick" data-slick-index="7">
                                                <div class="item-img">
                                                    <img src="resources/image/catalog/demo/product/80/7.jpg" class="img-1 img-responsive" alt="Pastrami mollitia">
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">-12%</span>
                                                    </div>
                                                </div>
                                                <span class="title">Pastrami mollitia</span>
                                            </div>
                                            <div class="item-slick" data-slick-index="8">
                                                <div class="item-img">
                                                    <img src="resources/image/catalog/demo/product/80/8.jpg" class="img-1 img-responsive" alt="Fession molliti">
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">-16%</span>
                                                    </div>
                                                </div>
                                                <span class="title">Fession molliti</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                
                                <div class="module best-seller best-seller-custom">
                                    <h3 class="modtitle">
                                         <span><i class="fa fa-diamond fa-hidden"></i>Best Sellers</span>
                                    </h3>
                                    <div class="modcontent">
                                        <div id="so_extra_slider_1" class="so-extraslider" >
                                            <!-- Begin extraslider-inner -->
                                            <div class="yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                                <div class="item ">
                                                    <div class="item-wrap style1">
                                                        <div class="item-wrap-inner">
                                                            <div class="media-left">
                                                                <div class="item-image">
                                                                    <div class="item-img-info">
                                                                        <a href="#" target="_self" title="Mandouille short ">
                                                                            <img src="resources/image/catalog/demo/product/80/10.jpg" alt="Mandouille short">
                                                                            </a>
                                                                    </div>                                                             
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="item-info">
                                                                    <div class="item-title">
                                                                        <a href="#" target="_self" title="Mandouille short">Mandouille short </a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    </div>
                                                                    <div class="content_price price">
                                                                        <span class="price-new product-price">$55.00 </span>&nbsp;&nbsp;

                                                                        <span class="price-old">$76.00 </span>&nbsp;

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End item-info -->
                                                            <!-- End item-wrap-inner -->
                                                        </div>
                                                    </div>
                                                    <!-- End item-wrap -->
                                                    <div class="item-wrap style1">
                                                        <div class="item-wrap-inner">
                                                            <div class="media-left">
                                                                <div class="item-image">
                                                                    <div class="item-img-info">
                                                                        <a href="#" target="_self" title="Xancetta bresao ">
                                                                        <img src="resources/image/catalog/demo/product/80/9.jpg" alt="Xancetta bresao">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="item-info">
                                                                    <div class="item-title">
                                                                        <a href="#" target="_self" title="Xancetta bresao">
                                                                                    Xancetta bresao 
                                                                                </a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    </div>
                                                                    <div class="content_price price">
                                                                        <span class="price-new product-price">$80.00 </span>&nbsp;&nbsp;

                                                                        <span class="price-old">$89.00 </span>&nbsp;



                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End item-info -->
                                                            <!-- End item-wrap-inner -->
                                                        </div>
                                                    </div>
                                                    <!-- End item-wrap -->
                                                    <div class="item-wrap style1">
                                                        <div class="item-wrap-inner">
                                                            <div class="media-left">
                                                                <div class="item-image">
                                                                    <div class="item-img-info">
                                                                        <a href="#" target="_self" title="Sausage cowbee ">
                                                                                    <img src="resources/image/catalog/demo/product/80/8.jpg" alt="Sausage cowbee">
                                                                                    </a>
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="item-info">
                                                                    <div class="item-title">
                                                                        <a href="#" target="_self" title="Sausage cowbee">
                                                                                    Sausage cowbee 
                                                                                </a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    </div>
                                                                   
                                                                    <div class="content_price price">
                                                                        <span class="price product-price">
                                                                                        $66.00 
                                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End item-info -->
                                                            <!-- End item-wrap-inner -->
                                                        </div>
                                                    </div>
                                                    <!-- End item-wrap -->
                                                    <div class="item-wrap style1">
                                                        <div class="item-wrap-inner">
                                                            <div class="media-left">
                                                                <div class="item-image">
                                                                    <div class="item-img-info">
                                                                        <a href="#" target="_self" title="Chicken swinesha ">
                                                                                        <img src="resources/image/catalog/demo/product/80/4.jpg" alt="Chicken swinesha">
                                                                                        </a>
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="item-info">
                                                                    <div class="item-title">
                                                                        <a href="#" target="_self" title="Chicken swinesha">
                                                                                    Chicken swinesha 
                                                                                </a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <span class="fa fa-stack">
                                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                                        </span>
                                                                        <span class="fa fa-stack">
                                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                                        </span>
                                                                        <span class="fa fa-stack">
                                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                                        </span>
                                                                        <span class="fa fa-stack">
                                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                                        </span>
                                                                        <span class="fa fa-stack">
                                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                                        </span>
                                                                    </div>
                                                                    <div class="content_price price">
                                                                        <span class="price-new product-price">$45.00 </span>&nbsp;&nbsp;

                                                                        <span class="price-old">$56.00 </span>&nbsp;



                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End item-info -->
                                                            <!-- End item-wrap-inner -->
                                                        </div>
                                                    </div>
                                                    <div class="item-wrap style1">
                                                        <div class="item-wrap-inner">
                                                            <div class="media-left">
                                                                <div class="item-image">
                                                                    <div class="item-img-info">
                                                                        <a href="#" target="_self" title="Chicken swinesha ">
                                                                                        <img src="resources/image/catalog/demo/product/80/7.jpg" alt="Chicken swinesha">
                                                                                        </a>
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="item-info">
                                                                    <div class="item-title">
                                                                        <a href="#" target="_self" title="Swinesha Sokana">
                                                                                    Swinesha Sokana  
                                                                                </a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <span class="fa fa-stack">
                                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                                        </span>
                                                                        <span class="fa fa-stack">
                                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                                        </span>
                                                                        <span class="fa fa-stack">
                                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                                        </span>
                                                                        <span class="fa fa-stack">
                                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                                        </span>
                                                                        <span class="fa fa-stack">
                                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                                        </span>
                                                                    </div>
                                                                    <div class="content_price price">
                                                                        <span class="price-new product-price">$45.00 </span>&nbsp;&nbsp;

                                                                        <span class="price-old">$56.00 </span>&nbsp;



                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End item-info -->
                                                            <!-- End item-wrap-inner -->
                                                        </div>
                                                    </div>
                                                    <!-- End item-wrap -->
                                                </div>
                                                <div class="item ">
                                                    <div class="item-wrap style1">
                                                        <div class="item-wrap-inner">
                                                            <div class="media-left">
                                                                <div class="item-image">
                                                                    <div class="item-img-info">
                                                                        <a href="#" target="_self" title="Qeserunt shortloin ">
                                                                        <img src="resources/image/catalog/demo/product/80/5.jpg" alt="Qeserunt shortloin">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="item-info">
                                                                    <div class="item-title">
                                                                        <a href="#" target="_self" title="Qeserunt shortloin">
                                                                            Qeserunt shortloin 
                                                                        </a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                                    <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                                    <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                                    <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                                    <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="content_price price">
                                                                        <span class="price product-price">
                                                                            $88.00 
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End item-wrap -->
                                                    <div class="item-wrap style1">
                                                        <div class="item-wrap-inner">
                                                            <div class="media-left">
                                                                <div class="item-image">
                                                                    <div class="item-img-info">
                                                                        <a href="#" target="_self" title="Consecte quichuck ">
                                                                        <img src="resources/image/catalog/demo/product/80/6.jpg" alt="Consecte quichuck">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="item-info">
                                                                    <div class="item-title">
                                                                        <a href="#" target="_self" title="Consecte quichuck">
                                                                            Consecte quichuck 
                                                                        </a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                                <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                                <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                                <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                                <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="content_price price">
                                                                        <span class="price-new product-price">$55.00 </span>&nbsp;&nbsp;
                                                                        <span class="price-old">$61.00 </span>&nbsp;
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End item-info -->
                                                            <!-- End item-wrap-inner -->
                                                        </div>
                                                    </div>
                                                    <!-- End item-wrap -->
                                                    <div class="item-wrap style1">
                                                        <div class="item-wrap-inner">
                                                            <div class="media-left">
                                                                <div class="item-image">
                                                                    <div class="item-img-info">
                                                                        <a href="#" target="_self" title="Neatball bresaola ">
                                                                    <img src="resources/image/catalog/demo/product/80/7.jpg" alt="Neatball bresaola">
                                                                    </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="item-info">
                                                                    <div class="item-title">
                                                                        <a href="#" target="_self" title="Neatball bresaola">
                                                                            Neatball bresaola 
                                                                        </a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <span class="fa fa-stack">
                                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                                    </span>
                                                                        <span class="fa fa-stack">
                                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                                    </span>
                                                                        <span class="fa fa-stack">
                                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                                    </span>
                                                                        <span class="fa fa-stack">
                                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                                    </span>
                                                                        <span class="fa fa-stack">
                                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                                    </span>
                                                                    </div>
                                                                    <div class="content_price price">
                                                                        <span class="price-new product-price">$65.00 </span>&nbsp;&nbsp;

                                                                        <span class="price-old">$71.00 </span>&nbsp;
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End item-info -->
                                                            <!-- End item-wrap-inner -->
                                                        </div>
                                                    </div>
                                                    <!-- End item-wrap -->
                                                    <div class="item-wrap style1">
                                                        <div class="item-wrap-inner">
                                                            <div class="media-left">
                                                                <div class="item-image">
                                                                    <div class="item-img-info">
                                                                        <a href="#" target="_self" title="Yutculpa ullamco ">
                                                                        <img src="resources/image/catalog/demo/product/80/8.jpg" alt="Yutculpa ullamco">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="item-info">
                                                                    <div class="item-title">
                                                                        <a href="#" target="_self" title="Yutculpa ullamco">
                                                                            Yutculpa ullamco 
                                                                        </a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                        <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                        <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                        <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                        <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="content_price price">
                                                                        <span class="price-new product-price">$60.00 </span>&nbsp;&nbsp;

                                                                        <span class="price-old">$77.00 </span>&nbsp;

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End item-info -->
                                                            <!-- End item-wrap-inner -->
                                                        </div>
                                                    </div>
                                                    <!-- End item-wrap -->
                                                    <div class="item-wrap style1">
                                                        <div class="item-wrap-inner">
                                                            <div class="media-left">
                                                                <div class="item-image">
                                                                    <div class="item-img-info">
                                                                        <a href="#" target="_self" title="Mandouille short ">
                                                                            <img src="resources/image/catalog/demo/product/80/1.jpg" alt="Mandouille short">
                                                                            </a>
                                                                    </div>                                                             
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="item-info">
                                                                    <div class="item-title">
                                                                        <a href="#" target="_self" title="Mandouille short">Mandouille short </a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    </div>
                                                                    <div class="content_price price">
                                                                        <span class="price-new product-price">$55.00 </span>&nbsp;&nbsp;

                                                                        <span class="price-old">$76.00 </span>&nbsp;

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End item-info -->
                                                            <!-- End item-wrap-inner -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End extraslider-inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>             
                    </div>
                    <div class="block block_2">
                        <div class="h1-banner2">
                            <div class="row banners">
                                <div class="banner21 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="#">
                                        <img src="resources/image/catalog/demo/banners/home1/4.jpg" alt="Image Client">
                                    </a>
                                </div>
                                <div class="banner21 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="#">
                                        <img src="resources/image/catalog/demo/banners/home1/5.jpg" alt="Image Client">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block block_3">
                        <!-- Listing tabs -->
                        <div class="module custom-listingtab default-nav">
                            <div class="box-title font-ct">
                                <h2 class="modtitle">Fashion</h2>
                            </div>
                            <div class="modcontent">
                                <div id="so_listing_tabs_1" class="so-listing-tabs first-load">
                                    <div class="loadeding"></div>
                                    <div class="ltabs-wrap">
                                        <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="4" data-sm="3"  data-xxs="3" data-xs="1" data-margin="0">
                                            <!--Begin Tabs-->
                                            <div class="ltabs-tabs-wrap"> 
                                            <span class="ltabs-tab-selected">Best sellers</span> <span class="ltabs-tab-arrow">▼</span>
                                                <ul class="ltabs-tabs cf font-ct list-sub-cat">
                                                    <li class="ltabs-tab tab-sel" data-category-id="11" data-active-content=".items-category-11"> <span class="ltabs-tab-label">Best sellers</span> </li>
                                                    <li class="ltabs-tab" data-category-id="12" data-active-content=".items-category-12"> <span class="ltabs-tab-label">Most Rating</span> </li>
                                                    <li class="ltabs-tab" data-category-id="13" data-active-content=".items-category-13"> <span class="ltabs-tab-label">New Arrivals</span> </li>
                                                </ul>
                                                
                                            </div>
                                            <!-- End Tabs-->
                                        </div>
                                        <div class="wap-listing-tabs products-list grid">
                                            <div class="item-cat-image banners">
                                                <div>
                                                    <a href="#" title="" target="_self">
                                                        <img class="categories-loadimage" title="" alt="" src="resources/image/catalog/demo/banners/home1/6-196x540.jpg">
                                                        
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ltabs-items-container">
                                                <!--Begin Items-->
                                                <div class="ltabs-items ltabs-items-selected items-category-11" data-total="16">
                                                    <div class="ltabs-items-inner ltabs-slider">
                                                        
                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a  href="product.html" target="_self" title="Cupim should">
                                                                                <img src="resources/image/catalog/demo/product/300/fashion/1.jpg"  class="img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                       
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Cupim should " target="_self">Cupim should </a></h4>
                                                                            <div class="price">
                                                                                <span class="price-new">$254.00 </span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Drutick lanaeger">
                                                                                <img src="resources/image/catalog/demo/product/300/fashion/7.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Drutick lanaeger" target="_self">Drutick lanaeger</a></h4>
                                                                            <div class="price"> <span class="price-new">$80.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Drutick lanaeger">
                                                                                <img src="resources/image/catalog/demo/product/300/fashion/2.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                       
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Ercitation incididunt" target="_self">Ercitat incidi</a></h4>
                                                                            <div class="price"> <span class="price-new">$180.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item-inner product-thumb transition product-layout">
                                                               <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Fatback picanha">
                                                                                <img src="resources/image/catalog/demo/product/300/fashion/8.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"> <span class="label-product label-sale"> -13% </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Fatback picanha" target="_self">Fatback picanha</a></h4>
                                                                            <div class="price"> <span class="price-new">$166.00</span>
                                                                                <span class="price-old">$186.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- item listing tab -->
                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-card__gallery product-card__left">
                                                                            <div class="item-img" data-src="resources/image/catalog/demo/product/300/fashion/5-2.jpg"><img src="resources/image/catalog/demo/product/80/fashion/5-2.jpg"  alt="image"></div>
                                                                            <div class="item-img thumb-active" data-src="resources/image/catalog/demo/product/300/fashion/5-3.jpg"><img src="resources/image/catalog/demo/product/80/fashion/5-3.jpg"  alt="image"></div>
                                                                            <div class="item-img" data-src="resources/image/catalog/demo/product/300/fashion/5-4.jpg"><img src="resources/image/catalog/demo/product/80/fashion/5-4.jpg"  alt="image"></div>
                                                                        </div>
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Chicken swinesha">
                                                                                <img src="resources/image/catalog/demo/product/300/fashion/5-2.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"> <span class="label-product label-sale"> -16% </span></div>
                                                                        <!--countdown box-->
                                                                        <div class="countdown_box hidden-xs">
                                                                            <div class="countdown_inner">
                                                                                <div class="item-timer">
                                                                                    <div class="defaultCountdown-30"></div>
                                                                                </div>
                                                                            </div>                                                                                              
                                                                        </div>                                                    
                                                                        <!--end countdown box-->
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->         
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                         <ul class="colorswatch">
                                                                            <li class="item-img" data-src="resources/image/catalog/demo/product/300/fashion/5-3.jpg"><a href="javascript:void(0);" title="green"><img src="resources/image/demo/colors/green.jpg"  alt="image"></a></li>
                                                                            <li class="item-img active" data-src="resources/image/catalog/demo/product/300/fashion/5-2.jpg"><a href="javascript:void(0);" title="red"><img src="resources/image/demo/colors/red.jpg"  alt="image"></a></li>
                                                                            <li class="item-img" data-src="resources/image/catalog/demo/product/300/fashion/5-4.jpg"><a href="javascript:void(0);" title="gray"><img src="resources/image/demo/colors/gray.jpg"  alt="image"></a></li>
                                                                            
                                                                        </ul>
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Bicola sausagop" target="_self">Bicola sausagop</a></h4>
                                                                            <div class="price"> <span class="price-new">$120.00</span>
                                                                                <span class="price-old">$160.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Doenpuis consuat ">
                                                                                <img src="resources/image/catalog/demo/product/300/fashion/11.jpg" class="img-1 img-responsive" alt="image">
                                                                                
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"> <span class="label-product label-sale"> -13% </span><span class="label-product label-new"> New </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Doenpuis consuat " target="_self">Doenpuis consuat </a></h4>
                                                                             <div class="price"> <span class="price-new">$66.00</span>
                                                                                <span class="price-old">$76.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- end item listing tab -->
                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Jalapeno dolore">
                                                                                <img src="resources/image/catalog/demo/product/300/fashion/3.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"><span class="label-product label-new"> New </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Jalapeno dolore" target="_self">Jalapeno dolore</a></h4>
                                                                            <div class="price"> <span class="price-new">$60.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Pariatur porking">
                                                                                <img src="resources/image/catalog/demo/product/300/fashion/9.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Pariatur porking" target="_self">Pariatur porking</a></h4>
                                                                            <div class="price"> <span class="price-new">$78.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Ullamco occaeca">
                                                                                <img src="resources/image/catalog/demo/product/300/fashion/4.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="label-stock label label-success ">Free Order</div>
                                                                        <div class="box-label"> <span class="label-product label-sale"> -13% </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Ullamco occaeca" target="_self">Ullamco occaeca</a></h4>
                                                                            
                                                                            <div class="price"> <span class="price-new">$66.00</span>
                                                                                <span class="price-old">$76.00</span>
                                                                            </div>
                                                                            
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Doenpuis consuat">
                                                                                <img src="resources/image/catalog/demo/product/300/fashion/10.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"> <span class="label-product label-sale"> -9% </span><span class="label-product label-new"> New </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                            
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Doenpuis consuat" target="_self">Doenpuis consuat</a></h4>
                                                                            
                                                                             <div class="price"> <span class="price-new">$86.00</span>
                                                                                <span class="price-old">$96.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                    
                                                        </div>

                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="dolore Jalapeno">
                                                                                <img src="resources/image/catalog/demo/product/300/fashion/6.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Dolore Jalapeno" target="_self">Dolore Jalapeno</a></h4>                                                                            
                                                                            <div class="price"> <span class="price-new">$98.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Mapicola incididuv">
                                                                                <img src="resources/image/catalog/demo/product/300/fashion/12.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"><span class="label-product label-new"> New </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Mapicola incididuv" target="_self">Mapicola incididuv</a></h4>                                                                            
                                                                            <div class="price"> <span class="price-new">$180.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    
                                                </div>
                                                <div class="ltabs-items items-category-12 grid" data-total="16">
                                                    <div class="ltabs-loading"></div>
                                                    
                                                </div>
                                                <div class="ltabs-items  items-category-13 grid" data-total="16">
                                                    <div class="ltabs-loading"></div>
                                                </div>
                                                <!--End Items-->
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                        <!-- end Listing tabs -->
                    </div>
                    <div class="block block_4">
                        <!-- Listing tabs -->
                        <div class="module custom-listingtab default-nav clearfix img-float">
                            <div class="box-title font-ct">
                                <h2 class="modtitle">Electronics</h2>
                            </div>
                            <div class="modcontent">
                                <div id="so_listing_tabs_2" class="so-listing-tabs first-load">
                                    <div class="loadeding"></div>
                                    <div class="ltabs-wrap">
                                        <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="4" data-sm="3"  data-xxs="3" data-xs="1" data-margin="0">
                                            <!--Begin Tabs-->
                                            <div class="ltabs-tabs-wrap"> 
                                            <span class="ltabs-tab-selected">Best sellers</span> <span class="ltabs-tab-arrow">▼</span>
                                                <div class="ltabs-tabs cf font-ct list-sub-cat">
                                                    <ul class="ltabs-tabs cf">
                                                        <li class="ltabs-tab tab-sel" data-category-id="14" data-active-content=".items-category-14"> <span class="ltabs-tab-label">Best sellers</span> </li>
                                                        <li class="ltabs-tab " data-category-id="15" data-active-content=".items-category-15"> <span class="ltabs-tab-label">New Arrivals</span> </li>
                                                        <li class="ltabs-tab " data-category-id="16" data-active-content=".items-category-16"> <span class="ltabs-tab-label">Most Rating</span> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Tabs-->
                                        </div>
                                        <div class="wap-listing-tabs products-list grid">
                                            <div class="item-cat-image banners">
                                                <div>
                                                    <a href="#" title="" target="_self">
                                                        <img class="categories-loadimage" title="" alt="" src="resources/image/catalog/demo/banners/home1/7-196x540.jpg">
                                                        
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ltabs-items-container">
                                                <!--Begin Items-->
                                                <div class="ltabs-items ltabs-items-selected items-category-14" data-total="16">
                                                    <div class="ltabs-items-inner ltabs-slider">
                                                        <!-- item listing tab -->
                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-card__gallery product-card__left">
                                                                            <div class="item-img thumb-active" data-src="resources/image/catalog/demo/product/electronic/600x600/1.jpg"><img src="resources/image/catalog/demo/product/electronic/90x90/1.jpg"  alt="image"></div>
                                                                            <div class="item-img" data-src="resources/image/catalog/demo/product/electronic/600x600/2-2.jpg"><img src="resources/image/catalog/demo/product/electronic/90x90/2-2.jpg"  alt="image"></div>
                                                                            <div class="item-img" data-src="resources/image/catalog/demo/product/electronic/600x600/2-1.jpg"><img src="resources/image/catalog/demo/product/electronic/90x90/2-1.jpg"  alt="image"></div>
                                                                        </div>
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Chicken swinesha">
                                                                                <img src="resources/image/catalog/demo/product/electronic/600x600/1.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"> <span class="label-product label-sale"> -16% </span></div>
                                                                        <!--countdown box-->
                                                                        <div class="countdown_box hidden-xs">
                                                                            <div class="countdown_inner">
                                                                                <div class="item-timer">
                                                                                    <div class="defaultCountdown-30"></div>
                                                                                </div>
                                                                            </div>                                                                                              
                                                                        </div>                                                    
                                                                        <!--end countdown box-->
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->         
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Bicola sausagop" target="_self">Bicola sausagop</a></h4>
                                                                            <div class="price">
                                                                                <span class="price-new">$114.00 </span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Doenpuis consuat ">
                                                                                <img src="resources/image/catalog/demo/product/electronic/600x600/21.jpg" class="img-1 img-responsive" alt="image">
                                                                                
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"> <span class="label-product label-sale"> -13% </span><span class="label-product label-new"> New </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Doenpuis consuat " target="_self">Doenpuis consuat </a></h4>
                                                                             <div class="price"> <span class="price-new">$66.00</span>
                                                                                <span class="price-old">$76.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end item listing tab -->
                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-card__gallery product-card__left">
                                                                            <div class="item-img thumb-active" data-src="resources/image/catalog/demo/product/electronic/600x600/9.jpg"><img src="resources/image/catalog/demo/product/electronic/90x90/9.jpg"  alt="image"></div>
                                                                            <div class="item-img" data-src="resources/image/catalog/demo/product/electronic/600x600/10.jpg"><img src="resources/image/catalog/demo/product/electronic/90x90/10.jpg"  alt="image"></div>
                                                                            <div class="item-img" data-src="resources/image/catalog/demo/product/electronic/600x600/11.jpg"><img src="resources/image/catalog/demo/product/electronic/90x90/11.jpg"  alt="image"></div>
                                                                        </div>
                                                                        <div class="product-image-container">
                                                                            <a  href="product.html" target="_self" title="Cupim should">
                                                                                <img src="resources/image/catalog/demo/product/electronic/600x600/9.jpg"  class="img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        <ul class="colorswatch">
                                                                            <li class="item-img active" data-src="resources/image/catalog/demo/product/electronic/600x600/9.jpg"><a href="javascript:void(0);" title="gray"><img src="resources/image/demo/colors/gray.jpg"  alt="image"></a></li>
                                                                            <li class="item-img" data-src="resources/image/catalog/demo/product/electronic/600x600/10.jpg"><a href="javascript:void(0);" title="pink"><img src="resources/image/demo/colors/pink.jpg"  alt="image"></a></li>
                                                                            <li class="item-img" data-src="resources/image/catalog/demo/product/electronic/600x600/11.jpg"><a href="javascript:void(0);" title="black"><img src="resources/image/demo/colors/black.jpg"  alt="image"></a></li>
                                                                        </ul>
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Cupim should " target="_self">Cupim should </a></h4>
                                                                            <div class="price">
                                                                                <span class="price-new">$254.00 </span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Drutick lanaeger">
                                                                                <img src="resources/image/catalog/demo/product/electronic/600x600/3.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Drutick lanaeger" target="_self">Drutick lanaeger</a></h4>
                                                                            <div class="price"> <span class="price-new">$80.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Drutick lanaeger">
                                                                                <img src="resources/image/catalog/demo/product/electronic/600x600/4.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                       
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Ercitation incididunt" target="_self">Ercitat incidi</a></h4>
                                                                            <div class="price"> <span class="price-new">$180.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item-inner product-thumb transition product-layout">
                                                               <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Fatback picanha">
                                                                                <img src="resources/image/catalog/demo/product/electronic/600x600/5.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"> <span class="label-product label-sale"> -13% </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Fatback picanha" target="_self">Fatback picanha</a></h4>
                                                                            <div class="price"> <span class="price-new">$210.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Jalapeno dolore">
                                                                                <img src="resources/image/catalog/demo/product/electronic/600x600/6.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"><span class="label-product label-new"> New </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Jalapeno dolore" target="_self">Jalapeno dolore</a></h4>
                                                                            <div class="price"> <span class="price-new">$60.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-card__gallery product-card__left">
                                                                            <div class="item-img thumb-active" data-src="resources/image/catalog/demo/product/electronic/600x600/9.jpg"><img src="resources/image/catalog/demo/product/electronic/90x90/9.jpg"  alt="image"></div>
                                                                            <div class="item-img" data-src="resources/image/catalog/demo/product/electronic/600x600/13.jpg"><img src="resources/image/catalog/demo/product/electronic/90x90/13.jpg"  alt="image"></div>
                                                                            
                                                                        </div>
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Pariatur porking">
                                                                                <img src="resources/image/catalog/demo/product/electronic/600x600/12.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Pariatur porking" target="_self">Pariatur porking</a></h4>
                                                                            <div class="price"> <span class="price-new">$78.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Ullamco occaeca">
                                                                                <img src="resources/image/catalog/demo/product/electronic/600x600/11.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="label-stock label label-success ">Free Order</div>
                                                                        <div class="box-label"> <span class="label-product label-sale"> -13% </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Ullamco occaeca" target="_self">Ullamco occaeca</a></h4>
                                                                            
                                                                            <div class="price"> <span class="price-new">$66.00</span>
                                                                                <span class="price-old">$76.00</span>
                                                                            </div>
                                                                            
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Doenpuis consuat">
                                                                                <img src="resources/image/catalog/demo/product/electronic/600x600/18.jpg" class="img-1 img-responsive" alt="image">
                                                                                
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"> <span class="label-product label-sale"> -9% </span><span class="label-product label-new"> New </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                            
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Doenpuis consuat" target="_self">Doenpuis consuat</a></h4>
                                                                            
                                                                             <div class="price"> <span class="price-new">$86.00</span>
                                                                                <span class="price-old">$96.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                    
                                                        </div>

                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-card__gallery product-card__left">
                                                                            <div class="item-img thumb-active" data-src="resources/image/catalog/demo/product/electronic/600x600/7-1.jpg"><img src="resources/image/catalog/demo/product/electronic/90x90/7-1.jpg"  alt="image"></div>
                                                                            <div class="item-img" data-src="resources/image/catalog/demo/product/electronic/600x600/7-2.jpg"><img src="resources/image/catalog/demo/product/electronic/90x90/7-2.jpg"  alt="image"></div>
                                                                            <div class="item-img" data-src="resources/image/catalog/demo/product/electronic/600x600/7-3.jpg"><img src="resources/image/catalog/demo/product/electronic/90x90/7-3.jpg"  alt="image"></div>
                                                                        </div>
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="dolore Jalapeno">
                                                                                <img src="resources/image/catalog/demo/product/electronic/600x600/7.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Dolore Jalapeno" target="_self">Dolore Jalapeno</a></h4>                                                                            
                                                                            <div class="price"> <span class="price-new">$98.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Mapicola incididuv">
                                                                                <img src="resources/image/catalog/demo/product/electronic/600x600/8.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"><span class="label-product label-new"> New </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Mapicola incididuv" target="_self">Mapicola incididuv</a></h4>                                                                            
                                                                            <div class="price"> <span class="price-new">$180.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ltabs-items items-category-15 grid" data-total="16">
                                                    <div class="ltabs-loading"></div>
                                                    
                                                </div>
                                                <div class="ltabs-items  items-category-16 grid" data-total="16">
                                                    <div class="ltabs-loading"></div>
                                                </div>
                                                <!--End Items-->
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                        <!-- end Listing tabs -->
                    </div>
                    <div class="block block_5">
                        <!-- Listing tabs -->
                        <div class="module custom-listingtab default-nav">
                            <div class="box-title font-ct">
                                <h2 class="modtitle">Sports</h2>
                            </div>
                            <div class="modcontent">
                                <div id="so_listing_tabs_3" class="so-listing-tabs first-load">
                                    <div class="loadeding"></div>
                                    <div class="ltabs-wrap">
                                        <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="4" data-sm="3"  data-xxs="3" data-xs="1" data-margin="0">
                                            <!--Begin Tabs-->
                                            <div class="ltabs-tabs-wrap"> 
                                            <span class="ltabs-tab-selected">Bathroom</span> <span class="ltabs-tab-arrow">▼</span>
                                                <div class="ltabs-tabs cf font-ct list-sub-cat">
                                                    <ul class="ltabs-tabs cf">
                                                        <li class="ltabs-tab tab-sel" data-category-id="17" data-active-content=".items-category-17"> <span class="ltabs-tab-label">Best sellers</span> </li>
                                                        <li class="ltabs-tab " data-category-id="18" data-active-content=".items-category-18"> <span class="ltabs-tab-label">New Arrivals</span> </li>
                                                        <li class="ltabs-tab " data-category-id="19" data-active-content=".items-category-19"> <span class="ltabs-tab-label">Most Rating</span> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Tabs-->
                                        </div>
                                        <div class="wap-listing-tabs products-list grid">
                                            <div class="item-cat-image banners">
                                                <div>
                                                    <a href="#" title="" target="_self">
                                                        <img class="categories-loadimage" title="" alt="" src="resources/image/catalog/demo/banners/home1/8-196x540.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ltabs-items-container">
                                                <!--Begin Items-->
                                                <div class="ltabs-items ltabs-items-selected items-category-17" data-total="16">
                                                    <div class="ltabs-items-inner ltabs-slider">
                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Ullamco occaeca">
                                                                                <img src="resources/image/catalog/demo/product/300/sport/1.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="label-stock label label-success ">Free Order</div>
                                                                        <div class="box-label"> <span class="label-product label-sale"> -13% </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Ullamco occaeca" target="_self">Ullamco occaeca</a></h4>
                                                                            
                                                                            <div class="price"> <span class="price-new">$66.00</span>
                                                                                <span class="price-old">$76.00</span>
                                                                            </div>
                                                                            
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Doenpuis consuat">
                                                                                <img src="resources/image/catalog/demo/product/300/sport/7.jpg" class="img-1 img-responsive" alt="image">
                                                                                
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"> <span class="label-product label-sale"> -9% </span><span class="label-product label-new"> New </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                            
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Doenpuis consuat" target="_self">Doenpuis consuat</a></h4>
                                                                            
                                                                             <div class="price"> <span class="price-new">$86.00</span>
                                                                                <span class="price-old">$96.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                    
                                                        </div>

                                                        
                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Drutick lanaeger">
                                                                                <img src="resources/image/catalog/demo/product/300/sport/2.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                       
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Ercitation incididunt" target="_self">Ercitat incidi</a></h4>
                                                                            <div class="price"> <span class="price-new">$180.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item-inner product-thumb transition product-layout">
                                                               <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Fatback picanha">
                                                                                <img src="resources/image/catalog/demo/product/300/sport/8.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"> <span class="label-product label-sale"> -13% </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Fatback picanha" target="_self">Fatback picanha</a></h4>
                                                                            <div class="price"> <span class="price-new">$210.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        
                                                                        <div class="product-image-container">
                                                                            <a  href="product.html" target="_self" title="Cupim should">
                                                                                <img src="resources/image/catalog/demo/product/300/sport/3.jpg"  class="img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                       
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Cupim should " target="_self">Cupim should </a></h4>
                                                                            <div class="price">
                                                                                <span class="price-new">$254.00 </span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Drutick lanaeger">
                                                                                <img src="resources/image/catalog/demo/product/300/sport/9.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Drutick lanaeger" target="_self">Drutick lanaeger</a></h4>
                                                                            <div class="price"> <span class="price-new">$80.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Jalapeno dolore">
                                                                                <img src="resources/image/catalog/demo/product/300/sport/4.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"><span class="label-product label-new"> New </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Jalapeno dolore" target="_self">Jalapeno dolore</a></h4>
                                                                            <div class="price"> <span class="price-new">$60.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                       
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Pariatur porking">
                                                                                <img src="resources/image/catalog/demo/product/300/sport/10.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Pariatur porking" target="_self">Pariatur porking</a></h4>
                                                                            <div class="price"> <span class="price-new">$78.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- item listing tab -->
                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                       
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Chicken swinesha">
                                                                                <img src="resources/image/catalog/demo/product/300/sport/5.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"> <span class="label-product label-sale"> -16% </span></div>
                                                                        <!--countdown box-->
                                                                        <div class="countdown_box hidden-xs">
                                                                            <div class="countdown_inner">
                                                                                <div class="item-timer">
                                                                                    <div class="defaultCountdown-30"></div>
                                                                                </div>
                                                                            </div>                                                                                              
                                                                        </div>                                                    
                                                                        <!--end countdown box-->
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->         
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Bicola sausagop" target="_self">Bicola sausagop</a></h4>
                                                                            <div class="price">
                                                                                <span class="price-new">$114.00 </span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Doenpuis consuat ">
                                                                                <img src="resources/image/catalog/demo/product/300/sport/11.jpg" class="img-1 img-responsive" alt="image">
                                                                                
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"> <span class="label-product label-sale"> -13% </span><span class="label-product label-new"> New </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Doenpuis consuat " target="_self">Doenpuis consuat </a></h4>
                                                                             <div class="price"> <span class="price-new">$66.00</span>
                                                                                <span class="price-old">$76.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end item listing tab -->

                                                        <div class="ltabs-item">
                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="dolore Jalapeno">
                                                                                <img src="resources/image/catalog/demo/product/300/sport/6.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Dolore Jalapeno" target="_self">Dolore Jalapeno</a></h4>                                                                            
                                                                            <div class="price"> <span class="price-new">$98.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item-inner product-thumb transition product-layout">
                                                                <div class="product-item-container">
                                                                    <div class="left-block left-b">
                                                                        <div class="product-image-container">
                                                                            <a href="product.html" target="_self" title="Mapicola incididuv">
                                                                                <img src="resources/image/catalog/demo/product/300/sport/12.jpg" class="img-1 img-responsive" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label"><span class="label-product label-new"> New </span></div>
                                                                        <!--quickview-->                                                      
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                        <!--end quickview-->                                                                                                                                                                                    
                                                                    </div>
                                                                    <div class="right-block right-b">
                                                                        
                                                                        <div class="caption">
                                                                            <h4><a href="product.html" title="Mapicola incididuv" target="_self">Mapicola incididuv</a></h4>                                                                            
                                                                            <div class="price"> <span class="price-new">$180.00</span>
                                                                            </div>
                                                                            <div class="button-group so-quickview cartinfo--static">
                                                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                                    <span>Add to cart </span>   
                                                                                </button>
                                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span></span>
                                                                                </button>
                                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span></span>
                                                                                </button>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="ltabs-items items-category-18 grid" data-total="16">
                                                    <div class="ltabs-loading"></div>
                                                    
                                                </div>
                                                <div class="ltabs-items  items-category-19 grid" data-total="16">
                                                    <div class="ltabs-loading"></div>
                                                </div>
                                                <!--End Items-->
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                        <!-- end Listing tabs -->
                    </div>
                    <div class="block block_6">
                        <div class="banners">
                            <?php include_once($page); ?>
                            <!-- <div>
                               <a href="#">
                                 <img src="resources/image/catalog/demo/banners/home1/9.jpg" alt="Image Client">
                               </a>
                            </div> -->
                        </div>
                    </div>
                    <div class="block block_7">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 block-nsn">
                                <div class="moduletable module custom_bestseler default-nav">
                                    <h3 class="modtitle"><span>Weekly Products</span></h3>
                                    <div class="modcontent">
                                        <div class="so-extraslider">
                                            <div class="image-slide banners">
                                                <div>
                                                    <a href="#" title="" target="_self">
                                                        <img class="categories-loadimage" title="" alt="" src="resources/image/catalog/demo/banners/home1/10.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="so_extra_slider_2" class="so-extraslider" >
                                                <!-- Begin extraslider-inner -->
                                                <div class="yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                                    <div class="item ">
                                                        <div class="item-wrap style1">
                                                            <div class="item-wrap-inner">
                                                                <div class="left-block">
                                                                    <div class="item-image">
                                                                        <div class="item-img-info">
                                                                            <a href="#" target="_self" title="Mandouille short ">
                                                                                <img src="resources/image/catalog/demo/product/80/fashion/1.jpg" alt="Mandouille short">
                                                                                </a>
                                                                        </div>                                                             
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="item-info">
                                                                        <div class="item-title">
                                                                            <a href="#" target="_self" title="Mandouille short">Short Mandouille</a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        </div>
                                                                        <div class="content_price price">
                                                                            <span class="price-new product-price">$85.00 </span>&nbsp;

                                                                            <span class="price-old">$96.00 </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End item-info -->
                                                                <!-- End item-wrap-inner -->
                                                            </div>
                                                        </div>
                                                        <!-- End item-wrap -->
                                                        <div class="item-wrap style1">
                                                            <div class="item-wrap-inner">
                                                                <div class="left-block">
                                                                    <div class="item-image">
                                                                        <div class="item-img-info">
                                                                            <a href="#" target="_self" title="Xancetta bresao ">
                                                                            <img src="resources/image/catalog/demo/product/80/fashion/2.jpg" alt="Xancetta bresao">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="item-info">
                                                                        <div class="item-title">
                                                                            <a href="#" target="_self" title="Xancetta bresao">
                                                                                Sokara Xancetta 
                                                                            </a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        </div>
                                                                        <div class="content_price price">
                                                                            <span class="price-new product-price">$60.00 </span>&nbsp;

                                                                            <span class="price-old">$79.00 </span>



                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End item-info -->
                                                                <!-- End item-wrap-inner -->
                                                            </div>
                                                        </div>
                                                        <!-- End item-wrap -->
                                                        <div class="item-wrap style1">
                                                            <div class="item-wrap-inner">
                                                                <div class="left-block">
                                                                    <div class="item-image">
                                                                        <div class="item-img-info">
                                                                            <a href="#" target="_self" title="Sausage cowbee ">
                                                                            <img src="resources/image/catalog/demo/product/80/fashion/3.jpg" alt="Sausage cowbee">
                                                                            </a>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="item-info">
                                                                        <div class="item-title">
                                                                            <a href="#" target="_self" title="Sausage cowbee">
                                                                                Nolamra Sausage 
                                                                            </a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        </div>
                                                                       
                                                                        <div class="content_price price">
                                                                            <span class="price product-price">
                                                                                $86.00 
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End item-info -->
                                                                <!-- End item-wrap-inner -->
                                                            </div>
                                                        </div>
                                                        <!-- End item-wrap -->
                                                    </div>
                                                    <div class="item ">
                                                        <div class="item-wrap style1">
                                                            <div class="item-wrap-inner">
                                                                <div class="left-block">
                                                                    <div class="item-image">
                                                                        <div class="item-img-info">
                                                                            <a href="#" target="_self" title="Qeserunt shortloin ">
                                                                            <img src="resources/image/catalog/demo/product/80/fashion/5-2.jpg" alt="Qeserunt shortloin">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="item-info">
                                                                        <div class="item-title">
                                                                            <a href="#" target="_self" title="Qeserunt shortloin">
                                                                                Qeserunt shortloin 
                                                                            </a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                                        <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                                        <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                                        <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                                        <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                        </div>
                                                                        <div class="content_price price">
                                                                            <span class="price product-price">
                                                                                $88.00 
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-wrap -->
                                                        <div class="item-wrap style1">
                                                            <div class="item-wrap-inner">
                                                                <div class="left-block">
                                                                    <div class="item-image">
                                                                        <div class="item-img-info">
                                                                            <a href="#" target="_self" title="Consecte quichuck ">
                                                                            <img src="resources/image/catalog/demo/product/80/fashion/5-3.jpg" alt="Consecte quichuck">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="item-info">
                                                                        <div class="item-title">
                                                                            <a href="#" target="_self" title="Consecte quichuck">
                                                                                Consecte quichuck 
                                                                            </a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                                    <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                                    <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                                    <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                                    <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                        </div>
                                                                        <div class="content_price price">
                                                                            <span class="price-new product-price">$55.00 </span>&nbsp;
                                                                            <span class="price-old">$61.00 </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End item-info -->
                                                                <!-- End item-wrap-inner -->
                                                            </div>
                                                        </div>
                                                        <!-- End item-wrap -->
                                                        <div class="item-wrap style1">
                                                            <div class="item-wrap-inner">
                                                                <div class="left-block">
                                                                    <div class="item-image">
                                                                        <div class="item-img-info">
                                                                            <a href="#" target="_self" title="Neatball bresaola ">
                                                                        <img src="resources/image/catalog/demo/product/80/fashion/5-4.jpg" alt="Neatball bresaola">
                                                                        </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="item-info">
                                                                        <div class="item-title">
                                                                            <a href="#" target="_self" title="Neatball bresaola">
                                                                                Neatball bresaola 
                                                                            </a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                            <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                            <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                            <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                            <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                        </div>
                                                                        <div class="content_price price">
                                                                            <span class="price-new product-price">$65.00 </span>

                                                                            <span class="price-old">$71.00 </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End item-info -->
                                                                <!-- End item-wrap-inner -->
                                                            </div>
                                                        </div>
                                                        <!-- End item-wrap -->
                                                    </div>
                                                </div>
                                                <!--End extraslider-inner -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="moduletable module custom_bestseler default-nav">
                                    <h3 class="modtitle"><span>Featured Products</span></h3>
                                    <div class="modcontent">
                                        <div class="so-extraslider">
                                            <div class="image-slide banners">
                                                <div>
                                                    <a href="#" title="" target="_self">
                                                        <img class="categories-loadimage" title="" alt="" src="resources/image/catalog/demo/banners/home1/11.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="so_extra_slider_3" class="so-extraslider" >
                                                <!-- Begin extraslider-inner -->
                                                <div class="yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                                    <div class="item ">
                                                        <div class="item-wrap style1">
                                                            <div class="item-wrap-inner">
                                                                <div class="left-block">
                                                                    <div class="item-image">
                                                                        <div class="item-img-info">
                                                                            <a href="#" target="_self" title="Mandouille short ">
                                                                                <img src="resources/image/catalog/demo/product/80/1.jpg" alt="Mandouille short">
                                                                                </a>
                                                                        </div>                                                             
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="item-info">
                                                                        <div class="item-title">
                                                                            <a href="#" target="_self" title="Mandouille short">Mandouille short </a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        </div>
                                                                        <div class="content_price price">
                                                                            <span class="price-new product-price">$55.00 </span>&nbsp;

                                                                            <span class="price-old">$76.00 </span>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End item-info -->
                                                                <!-- End item-wrap-inner -->
                                                            </div>
                                                        </div>
                                                        <!-- End item-wrap -->
                                                        <div class="item-wrap style1">
                                                            <div class="item-wrap-inner">
                                                                <div class="left-block">
                                                                    <div class="item-image">
                                                                        <div class="item-img-info">
                                                                            <a href="#" target="_self" title="Xancetta bresao ">
                                                                            <img src="resources/image/catalog/demo/product/80/2.jpg" alt="Xancetta bresao">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="item-info">
                                                                        <div class="item-title">
                                                                            <a href="#" target="_self" title="Xancetta bresao">
                                                                                Xancetta bresao 
                                                                            </a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                        </div>
                                                                        <div class="content_price price">
                                                                            <span class="price-new product-price">$80.00 </span>&nbsp;
                                                                            <span class="price-old">$89.00 </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End item-info -->
                                                                <!-- End item-wrap-inner -->
                                                            </div>
                                                        </div>
                                                        <!-- End item-wrap -->
                                                        <div class="item-wrap style1">
                                                            <div class="item-wrap-inner">
                                                                <div class="left-block">
                                                                    <div class="item-image">
                                                                        <div class="item-img-info">
                                                                            <a href="#" target="_self" title="Sausage cowbee ">
                                                                            <img src="resources/image/catalog/demo/product/80/3.jpg" alt="Sausage cowbee">
                                                                            </a>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="item-info">
                                                                        <div class="item-title">
                                                                            <a href="#" target="_self" title="Sausage cowbee">
                                                                                Sausage cowbee 
                                                                            </a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        </div>
                                                                       
                                                                        <div class="content_price price">
                                                                            <span class="price product-price">
                                                                                $66.00 
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End item-info -->
                                                                <!-- End item-wrap-inner -->
                                                            </div>
                                                        </div>
                                                        <!-- End item-wrap -->
                                                    </div>
                                                    <div class="item ">
                                                        <div class="item-wrap style1">
                                                            <div class="item-wrap-inner">
                                                                <div class="left-block">
                                                                    <div class="item-image">
                                                                        <div class="item-img-info">
                                                                            <a href="#" target="_self" title="Qeserunt shortloin ">
                                                                            <img src="resources/image/catalog/demo/product/80/5.jpg" alt="Qeserunt shortloin">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="item-info">
                                                                        <div class="item-title">
                                                                            <a href="#" target="_self" title="Qeserunt shortloin">
                                                                                Qeserunt shortloin 
                                                                            </a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                                        <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                                        <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                                        <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                                        <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                        </div>
                                                                        <div class="content_price price">
                                                                            <span class="price product-price">
                                                                                $88.00 
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-wrap -->
                                                        <div class="item-wrap style1">
                                                            <div class="item-wrap-inner">
                                                                <div class="left-block">
                                                                    <div class="item-image">
                                                                        <div class="item-img-info">
                                                                            <a href="#" target="_self" title="Consecte quichuck ">
                                                                            <img src="resources/image/catalog/demo/product/80/6.jpg" alt="Consecte quichuck">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="item-info">
                                                                        <div class="item-title">
                                                                            <a href="#" target="_self" title="Consecte quichuck">
                                                                                Consecte quichuck 
                                                                            </a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                                    <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                                    <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                                    <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                                    <span class="fa fa-stack">
                                                                                <i class="fa fa-star fa-stack-2x"></i>
                                                                            </span>
                                                                        </div>
                                                                        <div class="content_price price">
                                                                            <span class="price-new product-price">$55.00 </span>&nbsp;
                                                                            <span class="price-old">$61.00 </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End item-info -->
                                                                <!-- End item-wrap-inner -->
                                                            </div>
                                                        </div>
                                                        <!-- End item-wrap -->
                                                        <div class="item-wrap style1">
                                                            <div class="item-wrap-inner">
                                                                <div class="left-block">
                                                                    <div class="item-image">
                                                                        <div class="item-img-info">
                                                                            <a href="#" target="_self" title="Neatball bresaola ">
                                                                        <img src="resources/image/catalog/demo/product/80/7.jpg" alt="Neatball bresaola">
                                                                        </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="item-info">
                                                                        <div class="item-title">
                                                                            <a href="#" target="_self" title="Neatball bresaola">
                                                                                Neatball bresaola 
                                                                            </a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                            <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                            <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                            <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                            <span class="fa fa-stack">
                                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                                        </span>
                                                                        </div>
                                                                        <div class="content_price price">
                                                                            <span class="price-new product-price">$65.00 </span>&nbsp;
                                                                            <span class="price-old">$71.00 </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End item-info -->
                                                                <!-- End item-wrap-inner -->
                                                            </div>
                                                        </div>
                                                        <!-- End item-wrap -->
                                                    </div>
                                                </div>
                                                <!--End extraslider-inner -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block block_8">
                        <div class="module so-latest-blog custom-ourblog clearfix default-nav">
                            <h3 class="modtitle"><span>from our blog</span></h3>
                            <div class="modcontent clearfix">
                                <div class="so-blog-external">
                                    <div class="yt-content-slider blog-external" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="3" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">

                                        <div class="media">
                                            <div class="item">
                                                <div class="content-img">
                                                    <a href="blog-detail.html" target="_self">
                                                        <img src="resources/image/catalog/blog/370x256/3.jpg" alt="Kire tuma feugiat" />
                                                    </a>
                                                     <div class="entry-date font-ct">
                                                        <div class="day-time">14</div>
                                                        <div class="month-time">Jan</div>
                                                    </div>
                                                </div>
                                                <div class="content-detail">
                                                    <div class="media-content">                                           
                                                        <h4 class="media-heading font-ct head-item">
                                                            <a href="blog-detail.html" title="Kire tuma feugiat" target="_self">Kire tuma feugiat  ipsum dolor</a>
                                                        </h4>
                                                        <div class="media-subcontent">
                                                            <span class="media-author"><i class="fa fa-book"></i>Ytcdemo</span>
                                                            <span class="media-comment"><i class="fa fa-comments"></i>2  Comments</span>
                                                            <span class="media-view"><i class="fa fa-eye"></i>1  View</span>
                                                        </div>                                        
                                                        <div class="readmore">
                                                            <a href="blog-detail.html" target="_self">Read more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="item">
                                                <div class="content-img">
                                                    <a href="blog-detail.html" target="_self">
                                                        <img src="resources/image/catalog/blog/370x256/4.jpg" alt="Kire tuma demons vel eum iriure" />
                                                    </a>
                                                     <div class="entry-date font-ct">
                                                        <div class="day-time">12</div>
                                                        <div class="month-time">Nov</div>
                                                    </div>
                                                </div>
                                                <div class="content-detail">
                                                    <div class="media-content">                                           
                                                        <h4 class="media-heading font-ct head-item">
                                                            <a href="blog-detail.html" title="Kire tuma demons vel eum iriure" target="_self">Kire tuma demons vel eum iriure</a>
                                                        </h4>
                                                        <div class="media-subcontent">
                                                            <span class="media-author"><i class="fa fa-book"></i>Ytcdemo</span>
                                                            <span class="media-comment"><i class="fa fa-comments"></i>2  Comments</span>
                                                            <span class="media-view"><i class="fa fa-eye"></i>1  View</span>
                                                        </div>                                        
                                                        <div class="readmore">
                                                            <a href="blog-detail.html" target="_self">Read more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="item">
                                                <div class="content-img">
                                                    <a href="blog-detail.html" target="_self">
                                                        <img src="resources/image/catalog/blog/370x256/5.jpg" alt="minim veniam  justo duo dolores" />
                                                    </a>
                                                     <div class="entry-date font-ct">
                                                        <div class="day-time">10</div>
                                                        <div class="month-time">Feb</div>
                                                    </div>
                                                </div>
                                                <div class="content-detail">
                                                    <div class="media-content">                                           
                                                        <h4 class="media-heading font-ct head-item">
                                                            <a href="blog-detail.html" title="Minim veniam  justo duo dolores" target="_self">Lorem ipsum dolor sit amet</a>
                                                        </h4>
                                                        <div class="media-subcontent">
                                                            <span class="media-author"><i class="fa fa-book"></i>Ytcdemo</span>
                                                            <span class="media-comment"><i class="fa fa-comments"></i>2  Comments</span>
                                                            <span class="media-view"><i class="fa fa-eye"></i>1  View</span>
                                                        </div>                                        
                                                        <div class="readmore">
                                                            <a href="blog-detail.html" target="_self">Read more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <div class="item">
                                                <div class="content-img">
                                                    <a href="blog-detail.html" target="_self">
                                                        <img src="resources/image/catalog/blog/370x256/6.jpg" alt="Duis autem vel eum tempor inviduntt" />
                                                    </a>
                                                     <div class="entry-date font-ct">
                                                        <div class="day-time">10</div>
                                                        <div class="month-time">Nov</div>
                                                    </div>
                                                </div>
                                                <div class="content-detail">
                                                    <div class="media-content">                                           
                                                        <h4 class="media-heading font-ct head-item">
                                                            <a href="blog-detail.html" title="Duis autem vel eum tempor invidunt" target="_self">Duis autem vel eum tempor invidunt</a>
                                                        </h4>
                                                        <div class="media-subcontent">
                                                            <span class="media-author"><i class="fa fa-book"></i>Ytcdemo</span>
                                                            <span class="media-comment"><i class="fa fa-comments"></i>2  Comments</span>
                                                            <span class="media-view"><i class="fa fa-eye"></i>1  View</span>
                                                        </div>                                        
                                                        <div class="readmore">
                                                            <a href="blog-detail.html" target="_self">Read more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block block_9">
                        <div class="slider-brands">
                            <div class="top-brand arrow-default yt-content-slider contentslider" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="6" data-items_column1="5" data-items_column2="3" data-items_column3="3" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                                <div class="item">
                                    <a href="#">
                                        <img src="resources/image/catalog/demo/brand/b1.png" alt="brand">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="resources/image/catalog/demo/brand/b2.png" alt="brand">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="resources/image/catalog/demo/brand/b3.png" alt="brand">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="resources/image/catalog/demo/brand/b4.png" alt="brand">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="resources/image/catalog/demo/brand/b5.png" alt="brand">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="resources/image/catalog/demo/brand/b6.png" alt="brand">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="resources/image/catalog/demo/brand/b4.png" alt="brand">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="resources/image/catalog/demo/brand/b5.png" alt="brand">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="resources/image/catalog/demo/brand/b6.png" alt="brand">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Main Container -->
       
   

    <!-- Footer Container -->
    <footer class="footer-container typefooter-1">
        <!-- Footer Top Container -->
        <div class="footer-top">
            <div class="container ftop">
                <div class="module footer-services ">
                    <div class="block-infos">
                        <div class="info info1">
                            <div class="inner">
                                <i class="fa fa-truck"></i>
                                <div class="info-cont">
                                    <span class="font-ct">free delivery</span>
                                    <p>From 275 AED</p>
                                </div>
                            </div>
                        </div>
                        <div class="info info2">
                            <div class="inner">
                                <i class="fa fa-money"></i>
                                <div class="info-cont">
                                    <span class="font-ct">cash delivery</span>
                                    <p>From 275 AED</p>
                                </div>
                            </div>
                        </div>
                        <div class="info info3">
                            <div class="inner">
                                <i class="fa fa-gift"></i>
                                <div class="info-cont">
                                    <span class="font-ct">free gift box</span>
                                    <p>&amp; gift note</p>
                                </div>
                            </div>
                        </div>
                        <div class="info info4">
                            <div class="inner">
                                <i class="fa fa-phone-square"></i>
                                <div class="info-cont">
                                    <span class="font-ct">contact us</span>
                                    <p>123 456 789</p>
                                </div>
                            </div>
                        </div>
                        <div class="info info5">
                            <div class="inner">
                                <i class="fa fa-diamond"></i>
                                <div class="info-cont">
                                    <span class="font-ct">Loyalty</span>
                                    <p>Rewarded</p>
                                </div>
                            </div>
                        </div>
                    </div>                                            
                </div>
            </div>
        </div>
        <!-- /Footer Top Container -->
        
        <div class="footer-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xxs-6 col-xs-12 col-style">
                        <div class="module custom_link ">
                            <div class="module clearfix">
                                <h3 class="footertitle">Our Shops</h3>
                                <ul id="menu-our-shops" class="menu">
                                    <li class="menu-product-support"><a class="item-link" href="#"><span class="menu-title">Product Support</span></a></li>
                                    <li class="menu-pc-setup-support"><a class="item-link" href="#"><span class="menu-title">Setup &amp; Support</span></a></li>
                                    <li class="menu-services"><a class="item-link" href="#"><span class="menu-title">Services</span></a></li>
                                    <li class="menu-extended-service-plans"><a class="item-link" href="#"><span class="menu-title">Extended Plans</span></a></li>
                                    <li class="menu-community"><a class="item-link" href="#"><span class="menu-title">Community</span></a></li>
                                </ul>
                            </div>                                        
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xxs-6 col-xs-12 col_q1wn  col-style">
                        <div class="module  ">
                            <div class="footer-block">
                                <div class="footer-block-title">
                                    <h3 class="footertitle">My Account</h3>
                                </div>
                                <div class="footer-block-content">
                                    <ul class="links-footer">
                                        <li><a title="Account" href="my-account.html">My Account</a></li>
                                        <li><a title="Checkout" href="checkout.html">Checkout</a></li>
                                        <li><a title="History" href="order-history.html">Order History</a></li>
                                        <li><a title="Help Center" href="#">Help Center</a></li>
                                        <li><a title="Privacy Policy" href="#">Privacy Policy</a></li>      
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xxs-6 col-xs-12 col-style">
                        <div class="box-information box-footer">
                            <div class="module clearfix">
                                <h3 class="footertitle">Support</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="#">Forums</a></li>
                                        <li><a href="#">Faqs Center</a></li>
                                        <li><a href="#">24/7 support</a></li>
                                        <li><a href="#">Free tools</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xxs-6 col-xs-12 col-style">
                        <div class="box-service box-footer">
                            <div class="module clearfix">
                                <h3 class="footertitle">Services</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="gift-voucher.html">Gift Voucher</a></li>
                                        <li><a href="order-history.html">Order History</a></li>
                                        <li><a href="sitemap.html">Sitemap</a></li>
                                        <li><a href="return.html">Return</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-style footer-contact">
                        <div class="module">
                            <div class="module footer-contact clearfix">
                                <h3 class="footertitle">Contact Us</h3>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i><span>Address : No 40 Baria Sreet 133/2 NewYork City,NY, United States</span></li>
                                    <li class="email"><i class="fa fa-envelope-o"></i>Email : contact@revo.com</li>
                                    <li><i class="fa fa-mobile"></i><span>Phone 1 : (+0123456789)</span><span>Phone 2 : (+0123456789)</span></li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-style">
                        <div class="module custom_categories ">
                            <div class="categories-footer">
                                <div class="footer-cates-w">
                                    <nav class="footer_menu">
                                        <?php echo MenuWidget::render("footer_menu");?>
                                    </nav>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                </div>      
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-center-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12 col-style footer-newsletter">
                        <div class="module news-letter">
                            <div class="so-custom-default newsletter">
                                <div class="btn-group title-block">
                                    <div class="popup-title page-heading">
                                    SIGN UP FOR NEWSLETTER
                                    </div>
                                    <div class="newsletter_promo">Duis at ante non massa consectetur iaculis id non tellus</div>
                                </div>
                                <div class="modcontent block_content">
                                    <form method="post" id="signup" name="signup" class="form-group form-inline signup send-mail">
                                        <div class="input-group ">
                                            <div class="input-box">
                                            <input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail2" name="txtemail2" size="55">
                                            </div>
                                            <div class="input-group-btn subcribe">
                                            <button class="btn btn-primary" type="submit" onclick="return subscribe_newsletter();" name="submit">
                                            Subscribe
                                            </button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!--/.modcontent-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12 col-style footer-socials-wrap">
                        <div class="module">
                            <div class="socials-wrap">
                                <h3 class="title-follow footertitle">Follow Us</h3>
                                <ul>
                                    <li class="li-social facebook-social">
                                    <a title="Facebook" href="http://www.facebook.com/MagenTech" target="_blank"> 
                                    <span class="fa fa-facebook icon-social"></span><span class="name-social">Facebook</span> 
                                    </a>
                                    </li>

                                    <li class="li-social twitter-social">
                                    <a title="Twitter" href="https://twitter.com/magentech" target="_blank"> 
                                    <span class="fa fa-twitter icon-social"></span> <span class="name-social">Twitter</span> 
                                    </a>
                                    </li>

                                    <li class="li-social google-social">
                                    <a title="Google+" href="https://plus.google.com/u/0/+Smartaddons" target="_blank"> 
                                    <span class="fa fa-google-plus icon-social"></span> <span class="name-social">Google+</span> 
                                    </a>
                                    </li>

                                    <li class="li-social linkedin-social">
                                    <a title="Linkedin" href="#" target="_blank"> 
                                    <span class="fa fa-linkedin icon-social"></span> <span class="name-social">Linkedin</span> 
                                    </a>
                                    </li>

                                    <li class="li-social pinterest-social">
                                    <a title="Pinterest" href="#" target="_blank"> 
                                    <span class="fa fa-pinterest icon-social"></span> <span class="name-social">Pinterest</span> 
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- Footer Bottom Container -->
        <div class="footer-bottom ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 copyright">
                        HTML Revo © 2017 - 2018. All Rights Reserved. Designed by <a href="http://www.opencartworks.com/" target="_blank">OpenCartWorks.Com  </a>
                    </div>
                    <div class="col-sm-12 payment">
                        <img src="resources/image/catalog/demo/payment/payment.png" alt="imgpayment">
                    </div>
                </div>
            </div>
        </div>
        <!-- /Footer Bottom Container -->
        <!--Back To Top-->
        <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
    </footer>
    <!-- //end Footer Container -->

    </div>
    <div class="model-popup">
        <div id="container-module-newletter" class="hidden-md hidden-sm hidden-xs">
            <div class="so_newletter_custom_popup_bg popup_bg"></div> 
            <div class="module main-newsleter-popup so_newletter_custom_popup so_newletter_oca_popup" id="so_newletter_custom_popup"> <div class="so-custom-popup so-custom-oca-popup" style="width: 850px; background: url('image/catalog/banners/newletter-bg.jpg') no-repeat white;  "> 
                <div class="modcontent"> 
                    <div class="oca_popup" id="test-popup"> <div class="popup-content"> <p class="newsletter_promo">Daily Promotion</p> 
                        <div class="popup-title">SIGN UP FOR NEWSLETTER                 </div>
                        <form method="post" name="signup" class="form-group signup"> 
                            <div class="input-control"> <div class="email"> <input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail"> </div> <button class="btn btn-default" type="submit" onclick="return subscribe_newsletter();" name="submit">Subscribe  </button> </div> 
                        </form> 
                        <label class="hidden-popup"> <input type="checkbox" value="1" name="hidden-popup"> <span class="inline">&nbsp;&nbsp;Don't show this popup again</span> </label> </div> 
                    </div> 
                </div> <!--/.modcontent--> 
                <button title="Close" type="button" class="popup-close">×</button> </div> 
            </div> 
        </div>
    </div>   



<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script  src="resources/js/jquery-2.2.4.min.js"></script>
<script  src="resources/js/bootstrap.min.js"></script>
<script  src="resources/js/owl-carousel/owl.carousel.js"></script>
<script  src="resources/js/themejs/libs.js"></script>
<script  src="resources/js/unveil/jquery.unveil.js"></script>
<script  src="resources/js/countdown/jquery.countdown.min.js"></script>
<script  src="resources/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script  src="resources/js/datetimepicker/moment.js"></script>
<script  src="resources/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script  src="resources/js/jquery-ui/jquery-ui.min.js"></script>
<script  src="resources/js/modernizr/modernizr-2.6.2.min.js"></script>
<script  src="resources/js/minicolors/jquery.miniColors.min.js"></script>

<!-- Theme files
============================================ -->

<script  src="resources/js/themejs/application.js"></script>

<script  src="resources/js/themejs/homepage.js"></script>


<script  src="resources/js/themejs/so_megamenu.js"></script>
<script  src="resources/js/themejs/addtocart.js"></script>  
<script  src="resources/js/themejs/cpanel.js"></script>



</body>
</html>