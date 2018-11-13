<header id="header">
            <div id="header-wrapper">

                <h1 class="logo">
                    <span>Focus</span>
                    <a href="index.html" title="Trego - Creative Portfolio Template"><img src="<?php echo bloginfo("template_url") ?>/images/logo.png" alt="Trego"></a>
                </h1><!-- End .logo-container -->

                <div class="nav-container">
                    <nav id="nav">
                        <a href="#" id="menu-btn" title="Menu">Menu <span id="menu-btn-icon"></span></a>
                        <ul class="menu">
                                <?php wp_nav_menu( array(
                            'container' => false,
                            'items_wrap' => '<ul class="menu">%3$s</ul>',
                            'theme_location' => 'menu'
                                 )); ?>
                        </ul>
                    </nav>
                </div><!-- End .nav-container -->

                <div id="search-container">
                    <form id="search" method="get" action="#">
                        <input type="text" placeholder="Search...">
                        <button id="search-btn" title="Search" type="submit">Search</button>
                    </form>
                </div><!-- End .search-form-container -->

                <div class="unique-menu-container">
                    <ul class="unique-menu">
                        <li><a href="#unique-latest" title="Latest Products">Latest<span></span></a></li>
                        <li><a href="#unique-featured" title="Featured Products">Featured<span></span></a></li>
                        <li><a href="#unique-special" title="Special Products">Specials<span></span></a></li>
                    </ul>
                </div><!-- End .unique-menu -->

                <div id="unique-menu-content-container">
                    <div class="overlay-wrapper">
                        <div class="overlay-cell">
                            <div id="unique-menu-content">
                                <div class="unique-menu-header">
                                    <h2 class="unique-menu-title"></h2>
                                    <ul class="unique-menu-tab">
                                        <li><a href="#unique-latest" class="active" title="Latest Products">Latest<span></span></a></li>
                                        <li><a href="#unique-featured" title="Featured Products">Featured<span></span></a></li>
                                        <li><a href="#unique-special" title="Special Products">Specials<span></span></a></li>
                                    </ul>

                                    <nav class="unique-menu-nav">
                                        <a id="unique-menu-prev" class="disabled" href="#prev">Previous</a>
                                        <a id="unique-menu-next" href="#next">Next</a>
                                    </nav>
                                    <a href="#" id="unique-menu-close-btn" title="Close"></a>
                                </div><!-- End .unique-menu-header -->

                                <div id="unique-menu-slider-wrapper">
                                    <div class="unique-menu-slider" id="unique-latest">
                                        <div class="row active">
                                            <div class="col-3 product">
                                                <span class="product-discount-box">-35%</span>
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="907b69"></li>
                                                    <li class="colorbox" data-bgcolor="a84e4e"></li>
                                                    <li class="colorbox" data-bgcolor="d6d8d9"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-old-price">$178</span>
                                                        <span class="product-price">$116</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">8</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <span class="product-sale-box">Sale</span>
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="4b577f"></li>
                                                    <li class="colorbox" data-bgcolor="2c2b30"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item2.jpg" class="product-image" alt="product 2">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item2-hover.jpg" class="product-image-hover" alt="product 2 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="60"></span>
                                                    </div><!-- End .ratings-container -->

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$214.5</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">3</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <span class="product-new-box">New</span>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item3.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="80"></span>
                                                    </div><!-- End .ratings-container -->

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$125</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">12</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->

                                        </div><!-- end .row -->

                                        <div class="row">
                                            <div class="col-3 product">
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="c07354"></li>
                                                    <li class="colorbox" data-bgcolor="4b7f7e"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="100"></span>
                                                    </div><!-- End .ratings-container -->
                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$55</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">17</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <span class="product-sale-box">Sale</span>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item5.jpg" class="product-image" alt="product 2">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item2-hover.jpg" class="product-image-hover" alt="product 2 hover">
                                                    </a>

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$67</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">0</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="fff"></li>
                                                    <li class="colorbox" data-bgcolor="2b2b2b"></li>
                                                    <li class="colorbox" data-bgcolor="bb3637"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item6.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="83"></span>
                                                    </div><!-- End .ratings-container -->

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$157</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">5</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                        </div><!-- End .row -->
                                        <div class="row">
                                            <div class="col-3 product">
                                                <span class="product-discount-box">-35%</span>
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="907b69"></li>
                                                    <li class="colorbox" data-bgcolor="a84e4e"></li>
                                                    <li class="colorbox" data-bgcolor="d6d8d9"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-old-price">$178</span>
                                                        <span class="product-price">$116</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">8</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <span class="product-sale-box">Sale</span>
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="4b577f"></li>
                                                    <li class="colorbox" data-bgcolor="2c2b30"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item2.jpg" class="product-image" alt="product 2">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item2-hover.jpg" class="product-image-hover" alt="product 2 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="60"></span>
                                                    </div><!-- End .ratings-container -->

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$214.5</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">3</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <span class="product-new-box">New</span>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item3.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="80"></span>
                                                    </div><!-- End .ratings-container -->

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$125</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">12</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->

                                        </div><!-- end .row -->
                                    </div><!-- End .unique-menu-slider -->

                                    <div class="unique-menu-slider" id="unique-featured">
                                        <div class="row active">
                                            <div class="col-3 product">
                                                <span class="product-discount-box">-35%</span>
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="907b69"></li>
                                                    <li class="colorbox" data-bgcolor="a84e4e"></li>
                                                    <li class="colorbox" data-bgcolor="d6d8d9"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-old-price">$178</span>
                                                        <span class="product-price">$116</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">8</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <span class="product-sale-box">Sale</span>
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="4b577f"></li>
                                                    <li class="colorbox" data-bgcolor="2c2b30"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item2.jpg" class="product-image" alt="product 2">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item2-hover.jpg" class="product-image-hover" alt="product 2 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="60"></span>
                                                    </div><!-- End .ratings-container -->

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$214.5</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">3</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <span class="product-new-box">New</span>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item3.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="80"></span>
                                                    </div><!-- End .ratings-container -->

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$125</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">12</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->

                                        </div><!-- end .row -->

                                        <div class="row">
                                            <div class="col-3 product">
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="c07354"></li>
                                                    <li class="colorbox" data-bgcolor="4b7f7e"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="100"></span>
                                                    </div><!-- End .ratings-container -->
                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$55</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">17</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <span class="product-sale-box">Sale</span>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item5.jpg" class="product-image" alt="product 2">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item2-hover.jpg" class="product-image-hover" alt="product 2 hover">
                                                    </a>

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$67</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">0</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="fff"></li>
                                                    <li class="colorbox" data-bgcolor="2b2b2b"></li>
                                                    <li class="colorbox" data-bgcolor="bb3637"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item6.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="83"></span>
                                                    </div><!-- End .ratings-container -->

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$157</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">5</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                        </div><!-- End .row -->
                                        <div class="row">
                                            <div class="col-3 product">
                                                <span class="product-discount-box">-35%</span>
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="907b69"></li>
                                                    <li class="colorbox" data-bgcolor="a84e4e"></li>
                                                    <li class="colorbox" data-bgcolor="d6d8d9"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-old-price">$178</span>
                                                        <span class="product-price">$116</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">8</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <span class="product-sale-box">Sale</span>
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="4b577f"></li>
                                                    <li class="colorbox" data-bgcolor="2c2b30"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item2.jpg" class="product-image" alt="product 2">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item2-hover.jpg" class="product-image-hover" alt="product 2 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="60"></span>
                                                    </div><!-- End .ratings-container -->

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$214.5</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">3</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <span class="product-new-box">New</span>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item3.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="80"></span>
                                                    </div><!-- End .ratings-container -->

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$125</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">12</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->

                                        </div><!-- end .row -->
                                    </div><!-- End .unique-menu-slider -->

                                    <div class="unique-menu-slider" id="unique-special">
                                        <div class="row active">
                                            <div class="col-3 product">
                                                <span class="product-discount-box">-35%</span>
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="907b69"></li>
                                                    <li class="colorbox" data-bgcolor="a84e4e"></li>
                                                    <li class="colorbox" data-bgcolor="d6d8d9"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-old-price">$178</span>
                                                        <span class="product-price">$116</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">8</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <span class="product-sale-box">Sale</span>
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="4b577f"></li>
                                                    <li class="colorbox" data-bgcolor="2c2b30"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item2.jpg" class="product-image" alt="product 2">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item2-hover.jpg" class="product-image-hover" alt="product 2 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="60"></span>
                                                    </div><!-- End .ratings-container -->

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$214.5</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">3</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <span class="product-new-box">New</span>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item3.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="80"></span>
                                                    </div><!-- End .ratings-container -->

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$125</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">12</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->

                                        </div><!-- end .row -->

                                        <div class="row">
                                            <div class="col-3 product">
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="c07354"></li>
                                                    <li class="colorbox" data-bgcolor="4b7f7e"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="100"></span>
                                                    </div><!-- End .ratings-container -->
                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$55</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">17</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <span class="product-sale-box">Sale</span>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item5.jpg" class="product-image" alt="product 2">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item2-hover.jpg" class="product-image-hover" alt="product 2 hover">
                                                    </a>

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$67</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">0</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="fff"></li>
                                                    <li class="colorbox" data-bgcolor="2b2b2b"></li>
                                                    <li class="colorbox" data-bgcolor="bb3637"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item6.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="83"></span>
                                                    </div><!-- End .ratings-container -->

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$157</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">5</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                        </div><!-- End .row -->
                                        <div class="row">
                                            <div class="col-3 product">
                                                <span class="product-discount-box">-35%</span>
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="907b69"></li>
                                                    <li class="colorbox" data-bgcolor="a84e4e"></li>
                                                    <li class="colorbox" data-bgcolor="d6d8d9"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-old-price">$178</span>
                                                        <span class="product-price">$116</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">8</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <span class="product-sale-box">Sale</span>
                                                <ul class="product-colorbox-list">
                                                    <li class="colorbox" data-bgcolor="4b577f"></li>
                                                    <li class="colorbox" data-bgcolor="2c2b30"></li>
                                                </ul>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item2.jpg" class="product-image" alt="product 2">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item2-hover.jpg" class="product-image-hover" alt="product 2 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="60"></span>
                                                    </div><!-- End .ratings-container -->

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$214.5</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">3</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->
                                            <div class="col-3 product">
                                                <span class="product-new-box">New</span>
                                                <div class="product-image-container">
                                                    <a href="product.html" title="Women's Tulip Dress">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item3.jpg" class="product-image" alt="product 1">
                                                        <img src="<?php echo bloginfo("template_url") ?>/images/products/item1-hover.jpg" class="product-image-hover" alt="product 1 hover">
                                                    </a>
                                                    <div class="ratings-container">
                                                        <span class="ratings" data-rating="80"></span>
                                                    </div><!-- End .ratings-container -->

                                                    <div class="product-action-container">
                                                        <div class="product-action-wrapper">
                                                            <a class="add-btn" href="cart.html" title="Add to Cart">Add to Cart</a>
                                                            <a class="wishlist-btn" href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                            <a class="compare-btn" href="compare.html" title="Add to Compare">Add to Compare</a>
                                                        </div><!-- End .product-action-wrapper -->
                                                    </div><!-- End .product-action-container -->
                                                </div><!-- End .product-image-container -->
                                                <div class="product-meta-container clearfix">
                                                    <div class="product-price-container">
                                                        <span class="product-price">$125</span>
                                                    </div><!-- End .product-price-container -->

                                                    <a href="#" title="8 Like(s)" class="product-like-btn">12</a><!-- End .product-like-btn -->
                                                </div><!-- End .product-meta-container -->
                                                <h3 class="product-name">
                                                    <a href="product.html" title="Women's Tulip Dress">Women's Tulip Dress</a>
                                                </h3>
                                            </div><!-- End .col-3.product -->

                                        </div><!-- end .row -->
                                    </div><!-- End .unique-menu-slider -->

                                </div><!-- End #unique-menu-slider-wrapper -->

                            </div><!-- End #unique-menu-content -->
                        </div><!-- End .overlay-cell -->
                    </div><!-- End .overlay-wrapper -->
                </div><!-- End #unique-menu-content-container -->

                <div id="header-footer">
                    <ul class="social-icons clearfix">
                        <li><a href="#" title="Facebook" target="_blank" class="social-icon facebook"></a></li>
                        <li><a href="#" title="Twitter" target="_blank" class="social-icon twitter"></a></li>
                        <li><a href="#" title="Linkedin" target="_blank" class="social-icon linkedin"></a></li>
                        <li><a href="#" title="Flickr" target="_blank" class="social-icon flickr"></a></li>
                        <li><a href="#" title="Google +" target="_blank" class="social-icon googleplus"></a></li>
                    </ul>
                    <p class="copyright">2013 Trego. All Rights reserved.</p>
                </div>

            </div><!-- End #header-wrapper -->
            <div class="unique-menu-btn-container">
                <a href="#" id="unique-menu-btn">+</a>
            </div><!-- End .unique-menu-btn-container -->
        </header><!-- End #header -->