<a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md" style="margin-bottom: 15px;"><i class="fa fa-bars"></i>Sidebar</a>
<div class="sidebar-overlay "></div>
<div class="products-category">
    <h3 class="title-category "><?php echo $data['title']; ?></h3>
    <!-- Filters -->
    <div class="product-filter product-filter-top filters-panel">
        <div class="row">
            <div class="col-md-5 col-sm-3 col-xs-12 view-mode">
                
                    <div class="list-view">
                        <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th"></i></button>
                        <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                    </div>
        
            </div>
            <div class="short-by-show form-inline text-right col-md-7 col-sm-9 col-xs-12">
                <div class="form-group short-by">
                    <label class="control-label" for="input-sort">Sort By:</label>
                    <select id="input-sort" class="form-control" onchange="location = this.value;">
                        <option value="" selected="selected">Default</option>
                        <option value="">Name (A - Z)</option>
                        <option value="">Name (Z - A)</option>
                        <option value="">Price (Low &gt; High)</option>
                        <option value="">Price (High &gt; Low)</option>
                        <option value="">Rating (Highest)</option>
                        <option value="">Rating (Lowest)</option>
                        <option value="">Model (A - Z)</option>
                        <option value="">Model (Z - A)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="input-limit">Show:</label>
                    <select id="input-limit" class="form-control" onchange="location = this.value;">
                        <option value="" selected="selected">15</option>
                        <option value="">25</option>
                        <option value="">50</option>
                        <option value="">75</option>
                        <option value="">100</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- //end Filters -->
    <!--changed listings-->
    <div class="products-list row nopadding-xs so-filter-gird grid">

        <?php foreach ($data['products'] as $product):
            ?>

            <div class="product-layout col-lg-3 col-md-4 col-sm-4 col-xxs-6 col-xs-12">
                <div class="product-item-container">
                    <div class="left-block left-b">
                        <div class="product-card__gallery product-card__left">
                            <div class="item-img thumb-active" data-src="resources/image/products/<?php echo $product['img'];?>">
                                <img src="resources/image/products/<?php echo $product['img'];?>"  alt="image">
                            </div>
                            <div class="item-img" data-src="resources/image/products/<?php echo $product['img_little_2'];?>">
                                <img src="resources/image/products/<?php echo $product['img_little_2'];?>"  alt="image">
                            </div>
                            <div class="item-img" data-src="resources/image/products/<?php echo $product['img_little_3'];?>">
                                <img src="resources/image/products/<?php echo $product['img_little_3'];?>"  alt="image">
                            </div>
                        </div>
                        <div class="product-image-container">
                            <a href="product.html" target="_self" title="Chicken swinesha" class="img_a">
                                <img src="resources/image/products/<?php echo $product['img'];?>" class="img-1 img-responsive" alt="image">
                            </a>
                        </div>
                        <!-- -->
                        <span class="iframe-link btn-button quickview quickview_handler visible-lg" title="Quick view" data-fancybox-type="iframe" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye"></i></span>
                        

                    </div>
                    <div class="right-block right-b">
                        <div class="caption">
                            <h4><a href="product.html" title="Bicola sausagop" target="_self"><?php echo $product['name'];?></a></h4>
                            <div class="rate-history">    
                                <div class="ratings">
                                    <div class="rating-box">                       
                                        <span class="fa fa-stack"><i class="fa fa-star-o  fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>                       
                                        <span class="fa fa-stack"><i class="fa fa-star-o  fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>                    
                                        <span class="fa fa-stack"><i class="fa fa-star-o  fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>                    
                                        <span class="fa fa-stack"><i class="fa fa-star-o  fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>                      
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    </div>
                                    <a class="rating-num" href="#" target="_blank">(0)</a>
                                </div>
                                <div class="order-num">Orders (0)</div>
                            </div>
                            <div class="price">
                                <span class="price-new"><?php echo $product['price'];?> &#8381;</span>
                                <?php if($product['old_price'] != null): ?>
                                <span class="price-old"><?php echo $product['old_price'];?> &#8381;</span>
                                <?php endif; ?>
                            </div>
                            <div class="description item-desc">
                                <p><?php echo $product['description'];?></p>
                            </div>
                            <div class="button-group so-quickview cartinfo--static">
                                <form action="?route=index/cartadd" method="POST">
                                    <input type="hidden" value="<?php echo $product['id'];?>" name="id_product">
                                    <button class="addToCart" title="Add to cart" type="submit"><i class="fa fa-shopping-basket"></i> Add to cart</button>
                                   
                                    <button type="button" class="wishlist btn-button" title="Add to Wish List"><i class="fa fa-heart"></i><span></span>
                                    </button>
                                    <button type="button" class="compare btn-button" title="Compare this Product"><i class="fa fa-refresh"></i><span></span>
                                    </button>
                                </form>
                            </div>       
                            
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach;?>


        <!--
        <div class="product-layout col-lg-3 col-md-4 col-sm-4 col-xxs-6 col-xs-12">
            <div class="product-item-container">
                <div class="left-block left-b">
                    <div class="product-card__gallery product-card__left">
                        <div class="item-img thumb-active" data-src="resources/image/catalog/demo/product/electronic/600x600/9.jpg"><img src="resources/image/catalog/demo/product/electronic/90x90/9.jpg" alt="image"></div>
                        <div class="item-img" data-src="resources/image/catalog/demo/product/electronic/600x600/10.jpg"><img src="resources/image/catalog/demo/product/electronic/90x90/10.jpg" alt="image"></div>
                        <div class="item-img" data-src="resources/image/catalog/demo/product/electronic/600x600/11.jpg"><img src="resources/image/catalog/demo/product/electronic/90x90/11.jpg" alt="image"></div>
                    </div>
                    <div class="product-image-container">
                        <a href="product.html" target="_self" title="Cupim should">
                            <img src="resources/image/catalog/demo/product/electronic/600x600/9.jpg" class="img-responsive" alt="image">
                        </a>
                    </div>
                    
                                                    
                    <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span></span></a>
                                                                                                                                                                                    
                </div>
                <div class="right-block right-b">
                    <ul class="colorswatch">
                        <li class="item-img active" data-src="resources/image/catalog/demo/product/electronic/600x600/9.jpg"><a href="javascript:void(0);" title="gray"><img src="resources/image/demo/colors/gray.jpg" alt="image"></a></li>
                        <li class="item-img" data-src="resources/image/catalog/demo/product/electronic/600x600/10.jpg"><a href="javascript:void(0);" title="pink"><img src="resources/image/demo/colors/pink.jpg" alt="image"></a></li>
                        <li class="item-img" data-src="resources/image/catalog/demo/product/electronic/600x600/11.jpg"><a href="javascript:void(0);" title="black"><img src="resources/image/demo/colors/black.jpg" alt="image"></a></li>
                    </ul>
                    <div class="caption">
                        <h4><a href="product.html" title="Cupim should " target="_self">Cupim should </a></h4>
                        <div class="rate-history">    
                            <div class="ratings">
                                <div class="rating-box">                       
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>                       
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>                    
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>                    
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>                      
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                </div>
                                <a class="rating-num" href="#" target="_blank">(1)</a>
                            </div>
                            <div class="order-num">Orders (0)</div>
                        </div>
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
                        <div class="description item-desc hidden">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                        </div>
                        <div class="list-block hidden">
                            <button class="addToCart btn-button" type="button" title="Add to Cart" onclick="cart.add('101', '1');"><i class="fa fa-shopping-basket"></i>
                            </button>
                            <button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('101');"><i class="fa fa-heart"></i>
                            </button>
                            <button class="compare btn-button" type="button" title="Compare this Product" onclick="compare.add('101');"><i class="fa fa-refresh"></i>
                            </button>
                                                                            
                            <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>                                                        
                           
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        -->

    </div>
    <!--// End Changed listings-->
    <!-- Filters -->
    <div class="product-filter product-filter-bottom filters-panel">
        <div class="row">
            <div class="col-sm-6 text-left">
                <ul class="pagination">
                    <li class="active">
                    <span>1</span>
                    </li>
                    <li>
                    <a href="#">2</a>
                    </li>
                    <li>
                    <a href="#">3</a>
                    </li>
                    <li><a href="#">&gt;</a></li>
                </ul>
            </div>
            <div class="col-sm-6 text-right text-show">Showing 1 to 15 of 15 (1 Pages)</div>
        </div>
    </div>
    <!-- //end Filters -->
    
</div>

