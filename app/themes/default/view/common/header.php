<!-- .info-head -->
<div class="info-head">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline">
                <li class="hidden-xs"><i class="fa fa-phone"></i> <strong>+100 (021) 702 6939</strong></li>
                <li><a href="#">My account</a></li>
                <li>
                    <select class="input-select">
                        <option value="1">USD</option>
                        <option value="2">EUR</option>
                        <option value="3">GBP</option>
                    </select>
                </li>
                <li>
                    <select class="input-select">
                        <option value="1">English</option>
                        <option value="2">German</option>
                        <option value="3">French</option>
                    </select>
                </li>
            </ul>
        </div>
            
        <div class="pull-right" >
            <ul class="list-inline">
                <?php if(isset($_SESSION['app'][id])&&!empty($_SESSION['app'][id])):?>
                <li><a href="javascript:void(0);"><i class="fa fa-lock"></i> <?php echo $_SESSION['app']['app_name']?> </a></li>
                <?php else:?>
                <li><a href="<?php echo $this->config->app_url_root.'/Login'; ?>"><i class="fa fa-lock"></i> 登录|注册</a></li>
                <?php endif;?>
                <li class="hidden-xs">
                    <form class="search-form">
                        <input type="text" placeholder="搜索" />
                        <button type="submit"><span class="sr-only">搜索</span> <i class="fi flaticon-magnifying-glass"></i></button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /.info-head -->
    
<!-- .header.sticky.header-small.dark-blue -->
<header class="header sticky header-small dark-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-4 logo">
                <a href="index.html">
                    <img class="hidden-xs" src="<?php echo $this->getThemesUrl(); ?>/images/logo-store-light-222x27.png" alt="AP68 logo" />
                    <img class="visible-xs" src="<?php echo $this->getThemesUrl(); ?>/images/logo-light-mobile-137x52.png" alt="AP68 logo" />
                </a>
            </div>
            
            <div class="col-md-9 col-sm-6 col-xs-8">
                <!-- .default-menu.menu-icons -->
                <div class="pull-right default-menu menu-icons">
                    <ul>
                        <li>
                            <a class="option-icon cart-icon" href="#">
                                <span class="sr-only">Shop</span>
                                <span class="cart-count">
                                    <i class="fi flaticon-paper-bag"></i>
                                    <span>2</span>
                                </span>
                                <span class="cart-amount">$250.00</span>
                            </a>
                            
                            <!-- .submenu.cart-submenu -->
                            <div class="submenu cart-submenu">
                                
                                <!-- .cart-item -->
                                <div class="row small-gap cart-item">
                                    <div class="col-sm-4">
                                        <div class="figure">
                                            <a class="hidden-xs" href="shop-detail.html"><img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-4-1.jpg" alt="" /></a>
                                            <button type="button" class="close" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="content">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>

                                            <h5 class="title"><a href="shop-detail.html">Colorful <strong>women towel</strong></a></h5>

                                            <ul class="list-inline text">
                                                <li>$20.00</li>
                                                <li>QTY: 1</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.cart-item -->
                                
                                <!-- .cart-item -->
                                <div class="row small-gap cart-item">
                                    <div class="col-sm-4">
                                        <div class="figure">
                                            <a class="hidden-xs" href="shop-detail.html"><img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-4-2.jpg" alt="" /></a>
                                            <button type="button" class="close" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="content">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>

                                            <h5 class="title"><a href="shop-detail.html">Colorful <strong>women towel</strong></a></h5>

                                            <ul class="list-inline text">
                                                <li>$20.00</li>
                                                <li>QTY: 1</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.cart-item -->
                                
                                <div class="subtotal clearfix">
                                    <div class="pull-left text-uppercase">Sub<span class="weight-bold">total</span></div>
                                    <div class="pull-right big weight-bold">$40.00</div>
                                </div>
                                
                                <div class="row small-gap">
                                    <div class="col-sm-6">
                                        <a class="btn btn-block btn-angular btn-sm btn-border-to-simple btn-light-gray" href="shopping-cart.html">Your cart</a>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <a href="checkout.html" class="btn btn-block btn-angular btn-sm btn-simple-to-border btn-primary">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.submenu.cart-submenu -->
                            
                        </li>
                        <li class="hidden-lg hidden-md">
                            <a href="#" class="option-icon menu-button">
                                <span class="sr-only">Menu</span> <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.default-menu.menu-icons -->
                
                <!-- .default-menu -->
                <nav class="pull-right hidden-sm hidden-xs default-menu text-right">
                    <ul>
                        <li class="has-children"><a href="<?php echo $this->config->app_url_root.'/Index'; ?>">主页</a>
                            <div class="submenu">
                                <ul>
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index2.html">Home 2</a></li>
                                    <li><a href="index3.html">Home 3</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li class="has-children active"><a href="#">Shop</a>
                            <div class="submenu">
                                <ul>
                                    <li><a href="shop1.html">Shop 1</a></li>
                                    <li><a href="shop2.html">Shop 2</a></li>
                                    <li class="active"><a href="shop-detail.html">Shop detail</a></li>
                                    <li><a href="shopping-cart.html">Shopping cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Men</a></li>
                        <li class="has-children"><a href="#">Accessories</a>
                            <div class="submenu has-cover clearfix">
                                <div class="pull-left cover">
                                    <img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/man.jpg" alt="" />
                                </div>
                                
                                <div class="pull-left menuitems">
                                    <h4 class="title">Men's <strong>category</strong></h4>

                                    <ul>
                                        <li><a href="#">Colourful <strong>men towel</strong></a></li>
                                        <li><a href="#">Denim <strong>dress</strong></a></li>
                                        <li><a href="#">Men <strong>accessories</strong></a></li>
                                        <li><a href="#">Fragrance <strong>for men</strong></a></li>
                                        <li><a href="#">Electronic <strong>&amp; gadget</strong></a></li>
                                        <li><a href="#">Jeans <strong>for men</strong></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="has-children"><a href="#">Blog</a>
                            <div class="submenu">
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-detail.html">Blog detail</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <!-- /.default-menu -->
            </div>
        </div>
    </div>
</header>
<!-- /.header.sticky.header-small.dark-blue -->