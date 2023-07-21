
@extends('layout')

@section('content')
    <!-- start section 1 -->
    <section class="section1">
        <div class="container1">
            <div class="top">
                <a href="{{ route('home') }}">HOME </a>
                <a href="#">/ CLOTHING</a>
                <a href="#">/ HOODIES</a>
                <a href="#">/ DECO ORIGINAL T-SHIRT</a>
            </div>
            <div class="center">
                <div class="box1">
                    <a href="#"> <i class="fa fa-plus" aria-hidden="true"></i> </a>
                    <p>ADD TO WISHLIST</p>
                </div>
                <div class="box2">
                    <div class="le">
                        <img src="images/item/w13.jpeg" alt="" width="151" height="195">
                        <img src="images/item/w12.jpeg" alt="" width="151" height="195">
                        <img src="images/item/w11.jpeg" alt="" width="151" height="195">
                        <img src="images/item/w14.jpeg" alt="" width="151" height="195">
                    </div>
                    <div class="cen">
                        <img src="images/item/w14.jpeg" alt="" width="648" height="870">
                    </div>
                    <div class="ri">
                        <div class="b1">
                            <img src="images/item/8.png" alt="" width="100" height="100">
                            <p>ADIDAS ORIGINALS</p>
                        </div>
                        <p class="p1">Deco Original T-Shirt</p>
                        <p class="disc">
                            For over 80 years the adidas Group has been part of the world of
                            sports on every level, delivering state-of-the-art sports
                            footwear, apparel and accessories.
                        </p>
                        <div class="number">
                            <p class="p">11.500 KWD</p>
                            <p class="p2">12.500 KWD</p>
                        </div>
                        <div class="colo">
                            <p>COLOR</p>
                            <span>(BLUE)</span>
                        </div>
                        <div class="color">
                            <div class="box box11">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <div class="box box2"></div>
                            <div class="box box3"></div>
                        </div>
                        <p class="size">SIZE</p>
                        <div class="boxs01">
                            <div class="left">
                                <div class="le">S</div>
                                <div class="le">M</div>
                                <div class="le">L</div>
                                <div class="le le4">XL</div>
                            </div>
                            <p>SIZE CHARTS</p>
                        </div>
                        <div class="icon">
                            <a href="#" class="word">SHARE</a>
                            <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="div13-9">
                            <div class="ha">
                                <p>3 ITEMS</p>
                                <div class="butoom">
                                    <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                    <i class="fa fa-sort-asc" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="hb">
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                <p>ADD TO BAG</p>
                            </div>
                            <p class="pos">QUANTITY</p>
                        </div>
                        <div class="disc">
                            <p>DETAILS</p>
                            <p>- Cotton</p>
                            <p>- Machine wash</p>
                            <p>- Imported</p>
                            <p>Product Sku: 38739298; Color Code: 001</p>
                            <p>
                                Do you believe? T-shirt designed exclusively for Urban
                                Outfitters by Delaware-based graphic designer Josh Balick.
                                Standard crew neck construction featuring an alien graphic
                                front + "Damned if you do, bored if you don't" at the back.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start section 2 -->
    <section class="section2">
        <div class="container1">
            <p class="title">RELATED ITEMS</p>
            <div class="div2-1">
                <div class="box">
                    <img src="images/item/w17.jpeg" alt="" width="267" height="400">
                    <h5>Adidas</h5>
                    <p>Originals Mirror Trefoil Tee</p>
                    <p>$18.00</p>
                </div>
                <div class="box">
                    <img src="images/item/w17.jpeg" alt="" width="267" height="400">
                    <h5>Adidas</h5>
                    <p>Originals Mirror Trefoil Tee</p>
                    <p>$18.00</p>
                </div>
                <div class="box box_dif">
                    <img src="images/item/w17.jpeg" alt="" width="267" height="400">
                    <h5>Adidas</h5>
                    <p>Originals Mirror Trefoil Tee</p>
                    <p>$18.00</p>
                    <p><i class="fa fa-gbp" aria-hidden="true"></i>1.3500</p>
                </div>

                <div class="box">
                    <img src="images/item/w17.jpeg" alt="" width="267" height="400">
                    <h5>Adidas</h5>
                    <p>Originals Mirror Trefoil Tee</p>
                    <p>$18.00</p>
                </div>
            </div>
        </div>
        </div>
    </section>
   @endsection
