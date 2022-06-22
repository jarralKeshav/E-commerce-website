<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All products</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo 1.png" class="invert">
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
                    <a href="index2.php">
                    <img src="web dev/img/logo 1.png" width="200px">
                    </a>
                </div>
                <nav>
                    <ul>
                        <?php

                        echo'<li><a href="index2.php">Home</a></li>';
                        ?>
                        <li><a href="">Product</a></li>

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


        </div>
    </div>




    <div class="small container">
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
            <option>Default shorting</option>
            <option>Short by price</option>
            <option>Short by popularity</option>
            <option>Short by rating</option>
            <option>Short bty sale</option>
            </select>
        </div>

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
                <p>$100.00</p>
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
                <p>$260.00</p>

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

        <div class="row">
            <div class="col-4">
                <img src="web dev/img/sneaker 1.jpg">
                <h4> Women Printed Synthetic Casual Ankle Sneaker Boots</h4>
                <div class="rating">
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                    <b>&#9733</b>
                </div>
                <p>$100.00</p>
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
                <img src="web dev/img/sneaker 7.jpg">
                <h4> Women Multicolor Canvas Upper Polka Dots Printed Artwork</h4>
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

        <div class="page-btn">
            <span>1</span>
            
            <span>2</span>
            
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
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