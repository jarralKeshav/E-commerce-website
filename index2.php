
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Balance Store</title>


    <link rel="stylesheet" href="webStyle.css">
    <link rel="shortcut icon" href="web dev/img/logo 1.png" class="invert">
    <link rel="stylesheet"
    
    
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">


        <!-- ----------------------------------------------------------------------- -->
        
    <!-- ----------------------------------------------------------------------- -->

    </head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="web dev/img/logo 1.png" width="200px">
                </div>
                <nav>
                    <ul>
                    <li><a href="#">Home</a></li>
                    <?php
                        echo'<li><a href="product all.php">Products</a></li>';
                        ?>
                    
                    <li><a href="#footer0">About</a></li>
                        
                        <li><a href="#footer0">Contact</a></li>

                        <?php
                      echo  '<li><a href="logout.php">Log out</a></li>';
                      ?>
                      
                    </ul>
                </nav>
            </div>

               <!-- ----------------------------------------------------------------------- -->
            <!-- ----------------------------------------------------------------------- -->
            <!-- ----------------------------------------------------------------------- -->


            <div class="slideshow-container">
                <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <a href="https://www.google.com/" target="_blank">
                    <img src="web dev/img/Footwear-pc-header-eng.jpg" style="width:100%">
                  </a>
                  <div class="text"></div>
                </div>
                <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
            
            
                  <!-- add slider photo link here -->
                  <a href="https://www.google.com/" target="_blank"> 
                  <img src="web dev/img/61nZ2Iu3WfL._SX1500_.jpg" style="width:100%">
                </a>
                  <div class="text"></div>
                </div>
                <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
            
            <!-- add slider photo link here -->
                  <a href="https://www.google.com/" target="_blank">
                  <img src="web dev/img/61SuG9XXD6L._SX1500_.jpg" style="width:100%">
                </a>
            
                  <div class="text"></div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
              <br>
              <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
              </div>
            
            
            
            
            
            
            
            <!-- ----------------------------------------------------------------------- -->
            <!-- ----------------------------------------------------------------------- -->
            <!-- ----------------------------------------------------------------------- -->
            
            <div class="row">
                <div class="col-2">
                    <h1>Put your best<br> feet forward!! </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing <br>elit. Maiores, accusamus!</p>
                </div>
                <div class="col-2">
                    <img src="web dev/img/model 6.png">

                </div>
            </div>
        </div>
    </div>


    <div class="categories">
        <div class="small container">
            <div class="row">
                <div class="col-3">
                                  
                    <img src="web dev/img/sports11.jpeg">';
                    
                </a>
                </div>
                <div class="col-3">
                    <img src="web dev/img/ex 1.jpg">


                </div>
                <div class="col-3">
                    <img src="web dev/img/shoe 2.jpg">

                </div>
            </div>
        </div>

    </div>

    <div class="small container">
        <h2 class="title"> Featured Products <br>&#9472&#9472&#9472</h2>

        <div class="row">
            <div class="col-4">


            <a href="productDetails.php">
                <img src="web dev/img/sneaker 1.jpg">
                </a>
                <h4> Women Printed Synthetic Casual Ankle Sneaker Boots</h4>
                <div class="rating">
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                </div>
                <p>$20.00</p>
            </div>
            <div class="col-4">
                <img src="web dev/img/sneaker 4.jpg">
                <h4> Men's Drop-Type Hbr Sneakers</h4>
                <div class="rating">
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9734</b>
                </div>
                <p>$200.00</p>
            </div>
            <div class="col-4">
                
            <a href="productDetails2.php">
              <img src="web dev/img/sneaker 7.jpg">
              </a>
        

                
                <h4> Women Multicolor Canvas Upper Polka Dots Printed Artwork</h4>
                <div class="rating">
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9734</b>
                </div>
                <p>$20.00</p>

            </div>
            <div class="col-4">
                <img src="web dev/img/sneaker 8.jpg">
                <h4> Women Printed Synthetic Casual Ankle Sneaker Boots</h4>
                <div class="rating">
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                </div>
                <p>$100.00</p>
            </div>
        </div>

        <h2 class="title"> Latest Products <br>&#9472&#9472&#9472</h2>

        <div class="row">
            <div class="col-4">
                <img src="web dev/img/la 1.jpg">
                <h4> Oxford Class Designer Patent Leatherette Shining Lace-Up Party Formal Shoes</h4>
                <div class="rating">
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                </div>
                <p>$100.00</p>
            </div>
            <div class="col-4">
                <img src="web dev/img/la 2.jpg">
                <h4> Men's Drop-Type Hbr Sneakers</h4>
                <div class="rating">
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9734</b>
                </div>
                <p>$200.00</p>
            </div>
            <div class="col-4">
                <img src="web dev/img/la 6.jpg">
                <h4> Men's High Ankle Boot Shoes with PVC Sole</h4>
                <div class="rating">
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9734</b>
                </div>
                <p>$260.00</p>

            </div>
            <div class="col-4">
                <img src="web dev/img/la 5.jpg">
                <h4> ALICON Sports Shoes for Men | Lace up Lightweight Shoes</h4>
                <div class="rating">
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                </div>
                <p>$100.00</p>
            </div>
            <div class="col-4">
                <img src="web dev/img/la 7.jpg">
                <h4> TRASE Running Shoes for Men Sports</h4>
                <div class="rating">
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                </div>
                <p>$100.00</p>
            </div>
            <div class="col-4">
                <img src="web dev/img/la 8.jpg">
                <h4> XYMBOLIC Men's Mesh Sports Running Shoess</h4>
                <div class="rating">
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                </div>
                <p>$100.00</p>
            </div>
            <div class="col-4">
                <img src="web dev/img/la 10.jpg">
                <h4>Creattoes Women Boots</h4>
                <div class="rating">
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                </div>
                <p>$100.00</p>
            </div>
            <div class="col-4">
                <img src="web dev/img/la 9.jpg">
                <h4> Sparx
                    Men's Sm-651 Running Shoe</h4>
                <div class="rating">
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                </div>
                <p>$100.00</p>
            </div>

        </div>

    </div>

    </div>
    <div class="offer">
        <div class="small container">
            <div class="row">
                <div class="col-2">
                    <img src="web dev/img/ex 4.png" class="offer img">
                </div>
                <div class="col-2">
                    <p>Exclusively at our Store</p>
                    
                    <h2>Puma Men's Scuderia Ferrari Race Kart Cat-x Mid Motorsport Shoes sneaker</h2>
                    <br>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem mollitia odit perferendis
                        tempore delectus, accusamus quidem corporis veniam ducimus nesciunt cum enim esse animi rerum.
                        <br>
                    </small>
                    <br>
                    <a href="https://in.puma.com/in/en/pd/rs-dreamer-unisex-basketball-shoes/4064533237742.html" class="btn"> Buy Now</a>
                </div>

            </div>
        </div>
    </div>



    <div class="testimonial">
        <div class="small container">
            <div class="row">
                <div class="col-3">
                    <p class=" quote">"</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus doloribus animi accusamus
                        expedita magnam voluptatem debitis hic. Ducimus, consequatur doloribus!</p>
                    <div class="rating">
                        <b>&#9733</b>
                        <b>&#9733</b>
                        <b>&#9733</b>
                        <b>&#9733</b>
                        <b>&#9733</b>
                    </div>
                    <img src="web dev/img/user 3.jpg" alt="">
                    <h3>steve smith</h3>
                </div>
                <div class="col-3">
                    <p class=" quote">"</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus doloribus animi accusamus
                        expedita magnam voluptatem debitis hic. Ducimus, consequatur doloribus!</p>
                    <div class="rating">
                        <b>&#9733</b>
                        <b>&#9733</b>
                        <b>&#9733</b>
                        <b>&#9733</b>
                        <b>&#9733</b>
                    </div>
                    <img src="web dev/img/user 4.jpg" alt="">
                    <h3>steve smith</h3>
                </div>
                <div class="col-3">
                    <p class=" quote">"</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus doloribus animi accusamus
                        expedita magnam voluptatem debitis hic. Ducimus, consequatur doloribus!</p>
                    <div class="rating">
                        <b>&#9733</b>
                        <b>&#9733</b>
                        <b>&#9733</b>
                        <b>&#9733</b>
                        <b>&#9733</b>
                    </div>
                    <img src="web dev/img/user 5.jpg" alt="">
                    <h3>steve smith</h3>
                </div>

            </div>


        </div>



        <div class="brands">
            <div class="small container">
                <div class="row">
                    <div class="col-5">
                        <a href="https://in.puma.com/" target="blank"><img src="web dev/img/puma1.png" alt=""> </a>

                    </div>
                    <div class="col-5">
                        <a href="https://www.woodlandworldwide.com/" target="blank"> <img
                                src="web dev/img/woodland.jpg" alt=""></a>

                    </div>
                    <div class="col-5">
                        <a href="https://www.nike.com/in/" target="blank"> <img src="web dev/img/nike.png" alt=""></a>

                    </div>
                    <div class="col-5">
                        <a href="https://www.adidas.co.in/" target="blank"><img src="web dev/img/addidas.png"
                                alt=""></a>

                    </div>
                    <div class="col-5">
                        <a href="https://www.redchief.in/" target="blank"><img src="web dev/img/red chief.jpg"
                                alt=""></a>

                    </div>
                </div>
            </div>
        </div>




        <div class="footer" id="footer0">
            <div class="container">
                <div class="row">
                    <div class="footer1">
                        <h3>Download Our App</h3>
                        <p>Download App for Android and ios mobile phone</p>
                        <br>
                        <div class="app logo">
                            <img src="web dev/img/appstore.jpg" alt="">
                        </div>
                    </div>
                    <div class="footer2">
                        <img src="web dev/img/logo 1.png" class="invert">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, expedita! </p>
                    </div>
                    <div class="footer3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Coupans</li>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li>
                        </ul>
                    </div>
                    <div class="footer4">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Instagram</li>
                            <li>Twitter</li>
                            <li>Youtube</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


<!-- Invoking js script after the html code -->
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
<!-- <script>
    showSlides(slideIndex);
  </script> -->



</body>

</html>