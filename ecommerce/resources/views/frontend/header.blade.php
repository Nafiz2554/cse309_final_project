 <div id="top-header">
     <div class="container">
         <ul class="header-links pull-left">
             <li><a href="#" style="font-size: 20px!important;"><i class="fa fa-phone"></i>+8801764533865</a></li>
             <li><a href="#" style="font-size: 20px!important;"><i class="fa fa-envelope-o"></i>fuadnafiz2554@gmail.com</a></li>
             <li><a href="#" style="font-size: 20px!important;"><i class="fa fa-map-marker"></i>Basundhara R/A</a></li>
         </ul>
         <ul class="header-links pull-right">
             <li><a href="#" style="font-size: 20px!important;"><i class="fa fa-user-o"></i>Taka</a></li>
              
         </ul>
     </div>
 </div>



 <div id="header">
     <!-- container -->
     <div class="container">
         <!-- row -->
         <div class="row">
             <!-- LOGO -->
             <div class="col-md-6">
                 <div class="header-logo">
                     <a href="#" class="logo">
                         <h2 style="color: red;font-weight:bolder;">E-Shop</h2>
                     </a>
                 </div>
             </div>
             <!-- /LOGO -->

             <!-- SEARCH BAR -->
             {{-- <div class="col-md-6">
                <div class="header-search">
                    <form>
                        <select class="input-select">
                            <option value="0">All Categories</option>
                            <option value="1">Category 01</option>
                            <option value="1">Category 02</option>
                        </select>
                        <input class="input" placeholder="Search here">
                        <button class="search-btn">Search</button>
                    </form>
                </div>
            </div> --}}
             <!-- /SEARCH BAR -->

             <!-- ACCOUNT -->
             <div class="col-md-6 clearfix">
                 <div class="header-ctn">
                     <!-- Wishlist -->
                     {{-- <div>
                        <a href="#">
                            <i class="fa fa-heart-o"></i>
                            <span>Your Wishlist</span>
                            <div class="qty">2</div>
                        </a>
                    </div> --}}
                     <!-- /Wishlist -->

                     <!-- Cart -->
                     <div class="dropdown">
                         <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                             <i class="fa fa-shopping-cart"></i>
                             <span>Your Cart</span>
                             <div class="qty">3</div>
                         </a>
                         <div class="cart-dropdown">
                             <div class="cart-list">
                                 @foreach ($cart as $c)
                                     @foreach ($categories as $cate)
                                         @if (Session::getId() == $c['user_id'] && $c['product_id'] == $cate['id'])
                                             <div class="product-widget">
                                                 <div class="product-img">
                                                     <img src="{{ asset('/storage/' . $cate->image) }}" alt="">
                                                 </div>
                                                 <div class="product-body">
                                                     <h3 class="product-name"><a href="#">{{ $cate->name }}</a></h3>
                                                     <h4 class="product-price"><span
                                                             class="qty">1x</span>980.00
                                                         <span class="qty" style="margin-left:3rem;">
                                                             @if ($cate->status == 1)
                                                                 <span class="new label label-success"
                                                                     style="background: green!important;">Active</span>
                                                             @else
                                                                 <span class="new label label-danger">Deactive</span>
                                                             @endif
                                                         </span>
                                                     </h4>

                                                 </div>
                                                 <button class="delete"><i class="fa fa-close"></i></button>
                                             </div>
                                         @endif
                                     @endforeach
                                 @endforeach
                             </div>
                             <div class="cart-summary">
                                 <small>3 Item(s) selected</small>
                                 <h5>SUBTOTAL: 2940.00</h5>
                             </div>
                             <div class="cart-btns">
                                 <a href="#">View Cart</a>
                                 <a href="#">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                             </div>
                         </div>
                     </div>
                     <!-- /Cart -->

                     <!-- Menu Toogle -->
                     <div class="menu-toggle">
                         <a href="#">
                             <i class="fa fa-bars"></i>
                             <span>Menu</span>
                         </a>
                     </div>
                     <!-- /Menu Toogle -->
                 </div>
             </div>
             <!-- /ACCOUNT -->
         </div>
         <!-- row -->
     </div>
     <!-- container -->
 </div>
 <!-- /MAIN HEADER -->
