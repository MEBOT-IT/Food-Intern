<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | Hot 'N' Spicy</title>
    <link rel="stylesheet" href="/assests/css/menu.css">
    <link rel="icon" type="image/png" href="/assests/images/front.png" />
</head>
<body onload="slider()">
    <div class="banner">
        <div class="slider">
            <img src="/assests/images/m2.jpeg" id="slideImg">
        </div>
        <div class="overlay">
            
                <div class="navbar">
                    <div class="logo-container">
                        <div class="logo">
                            <div class="front">
                            <a href="home.php">
                            <img src="/assests/images/front.png" alt="Logo Front">
                            </div></a>
                            <div class="back">
                            <img src="/assests/images/back.png" alt="Logo Back">
                            </div>
                        </div>
                    </div> 
                    <!-- navbar heading -->
                    <header>
                    <nav>
                        <div class="menu-icons">
                            <ul>
                                <li><a href="home.php">HOME</a></li>  
                                <li><a href="#">MENU</a></li>  
                                <li><a href="#main">TODAY'S SPECIAL</a></li>  
                                <li><a href="tablereserve.php">BOOK A TABLE</a></li>  
                                <li><a href="#">ORDER ONLINE</a></li>  
                                <li><a href="#menu">CATEGORY</a></li>  
                                <li><a href="contact.php">CONTACT</a></li>  
                                <li><img src="/assests/images/CART.png" id="cart-icon"></li>
                            </ul> 
                        </div>
                    </nav>
                </div>
            </header>
        </div>
    </div>

    <div class="cart">
        <h2 class="cart-title">Your Cart</h2>

        <div class="cart-content">
            
        </div>

        <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price">₹ 0</div>
        </div>
        <a href="summary.php">
        <button type="button" class="btn-buy">Buy Now</button></a>
    
        <img src="/assests/images/close.png" id="close-cart">


    </div>

<!-- Search Bar-->


    <div class="container-fluid"> <div class="container">
        <div class="search">
            <input type="text" name="" id="find" placeholder=" Search Items Here" onkeyup="search()">
        </div>
    </div>
    </div>
    
    <script src="/assests/js/menu.js"></script>

<!-- Category -->

<!-- Search Bar Over -->
    <div id="Starters">
        <h1 class="hhh">Starters</h1>
        <div class="cards">
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/panneer65.png">
                        <p class="label">Panner 65</p>
                        <p class="price">₹ 149</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/panneer65.png">
                        <div class="label-back">Panner 65</div>
                        <div class="price-back">₹ 149</div>
                        <div class="desc">
                            This dish is made with Paneer, rice flour, yogurt, garam masala, curry leaves.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/gobi65.jpeg">
                        <p class="label">Gobi 65</p>
                        <p class="price">₹ 149</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/gobi65.jpeg">
                        <div class="label-back">Gobi 65</div>
                        <div class="price-back">₹ 149</div>
                        <div class="desc">
                            This dish is made with Cauliflower, rice flour, wheat flour, garam masala.
                        </div>
                        <button class="submit">Add to Cart</button>               
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/chilligobi.jpg">
                        <p class="label">Chilli Gobi</p>
                        <p class="price">₹ 149</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/chilligobi.jpg">
                        <div class="label-back">Chilli Gobi</div>
                        <div class="price-back">₹ 149</div>
                        <div class="desc">
                            This dish is made with Sweet chilli garlic, soy sauce, spring onion, corn flour, toasted.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/pannertikka.jpg">
                        <p class="label">Paneer Tikka</p>
                        <p class="price">₹ 149</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/pannertikka.jpg">
                        <div class="label-back">Paneer Tikka</div>
                        <div class="price-back">₹ 149</div>
                        <div class="desc">
                            This dish is made with fresh Paneer, greek yogurt, lemon, peppers, garam masala.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/chicken65.jpg">
                        <p class="label">Chicken 65</p>
                        <p class="price">₹ 219</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/chicken65.jpg">
                        <div class="label-back">Chicken 65</div>
                        <div class="price-back">₹ 219</div>
                        <div class="desc">
                            This dish is made with Rice flour, soy sauce, boneless chicken, spring onion.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/prawn65.jpg">
                        <p class="label">Prawn 65</p>
                        <p class="price">₹ 219</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/prawn65.jpg">
                        <div class="label-back">Prawn 65</div>
                        <div class="price-back">₹ 219</div>
                        <div class="desc">
                            Prawn 65 is made with fresh Prawns, corn flour, egg white, ginger, curry leaves.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/chickensteak.jpg">
                        <p class="label">Chicken Steak</p>
                        <p class="price">₹ 199</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/chickensteak.jpg">
                        <div class="label-back">Chicken Steak</div>
                        <div class="price-back">₹ 199</div>
                        <div class="desc">
                            This dish is made with fresh Chicken, garam masala, ginger,lemon juice.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/chickentandoori.jpg">
                        <p class="label">Chicken Tandoori</p>
                        <p class="price">₹ 349</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/chickentandoori.jpg">
                        <div class="label-back">Chicken Tandoori</div>
                        <div class="price-back">₹ 349</div>
                        <div class="desc">
                            This dish is made with fresh yogurt, garam masala, kasuri methi, chicken, lemon.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Soup -->
    <div id="Soup">
        <h1 class="hhh">Soup</h1>
        <div class="cards">
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/vegsoup.jpg">
                        <p class="label">Vegetable Soup</p>
                        <p class="price">₹ 119</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/vegsoup.jpg">
                        <div class="label-back">Vegetable Soup</div>
                        <div class="price-back">₹ 119</div>
                        <div class="desc">
                            This is made with Sweet corn, apple cider, french beans, spring onion.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/tomatosoup.jpg">
                        <p class="label">Tomato Soup</p>
                        <p class="price">₹ 149</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/tomatosoup.jpg">
                        <div class="label-back">Tomato Soup</div>
                        <div class="price-back">₹ 149</div>
                        <div class="desc">
                            Tomato Soup is made with Heavy cream, olive oil, bread cubes, tomatoes.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/chickensoup.jpg">
                        <p class="label">Chicken Soup</p>
                        <p class="price">₹ 179</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/chickensoup.jpg">
                        <div class="label-back">Chicken Soup</div>
                        <div class="price-back">₹ 179</div>
                        <div class="desc">
                            Chicken Soup is made with Whole chicken, carrots, chicken bouillon, celery.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/muttonsoup.jpg">
                        <p class="label">Mutton Soup</p>
                        <p class="price">₹ 179</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/muttonsoup.jpg">
                        <div class="label-back">Mutton Soup</div>
                        <div class="price-back">₹ 179</div>
                        <div class="desc">
                            Mutton Soup is made with Mutton, olive oil, green chilies, kali mirch, black pepper.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Main Course-->
    <div id="maincourse">
        <h1 class="hhh">Main Course</h1>
        <div class="cards">
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/chickenfriedrice.jpg">
                        <p class="label">Chicken Fried Rice</p>
                        <p class="price">₹ 169</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/chickenfriedrice.jpg">
                        <div class="label-back">Chicken Fried Rice</div>
                        <div class="price-back">₹ 169</div>
                        <div class="desc">
                            This is made with Bell peppers,cooked rice, spring onions, garlic, Egg, Chicken.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/eggfriedrice.jpg">
                        <p class="label">Egg Fried Rice</p>
                        <p class="price">₹ 119</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/eggfriedrice.jpg">
                        <div class="label-back">Egg Fried Rice</div>
                        <div class="price-back">₹ 119</div>
                        <div class="desc">
                            This is made with Bell peppers,cooked rice, spring onions, garlic,Egg.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/prawnfriedrice.jpg">
                        <p class="label">Prawn Fried Rice</p>
                        <p class="price">₹ 219</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/prawnfriedrice.jpg">
                        <div class="label-back">Prawn Fried Rice</div>
                        <div class="price-back">₹ 219</div>
                        <div class="desc">
                            This is made with Bell peppers, cooked rice, spring onions, garlic,Egg,Prawns.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/eggbriyani.jpg">
                        <p class="label">Egg Briyani</p>
                        <p class="price">₹ 219</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/eggbriyani.jpg">
                        <div class="label-back">Egg Briyani</div>
                        <div class="price-back">₹ 219</div>
                        <div class="desc">
                            Egg Briyani is made with Basmati rice, lemon, garam masala, ginger, tomato,Egg.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/vegpulav.jpg">
                        <p class="label">Vegetable Pulav</p>
                        <p class="price">₹ 199</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/vegpulav.jpg">
                        <div class="label-back">Vegetable Pulav</div>
                        <div class="price-back">₹ 199</div>
                        <div class="desc">
                            This dish is made withBasmati rice, green peas, french beans,  tomato,potato.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/plainbriyani.jpg">
                        <p class="label">Plain Briyani</p>
                        <p class="price">₹ 199</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/plainbriyani.jpg">
                        <div class="label-back">Plain Briyani</div>
                        <div class="price-back">₹ 199</div>
                        <div class="desc">
                            Plain Briyani is made with Basmati rice, biryani masala, star anise, tomato,onion.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/chickenbriyani.jpg">
                        <p class="label">Chicken Briyani</p>
                        <p class="price">₹ 249</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/chickenbriyani.jpg">
                        <div class="label-back">Chicken Briyani</div>
                        <div class="price-back">₹ 249</div>
                        <div class="desc">
                            Chicken Briyani is made with Basmati rice, skinless chicken pieces, tomatoes, garlic.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/prawnbriyani.jpg">
                        <p class="label">Prawn Briyani</p>
                        <p class="price">₹ 299</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/prawnbriyani.jpg">
                        <div class="label-back">Prawn Briyani</div>
                        <div class="price-back">₹ 299</div>
                        <div class="desc">
                            This dish is made with Basmati rice, dahi, star anise, prawns, lemon.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Breads -->
    <div id="breads">
        <h1 class="hhh">Breads</h1>
        <div class="cards">
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/bunparotta.jpg">
                        <p class="label">Bun parotta</p>
                        <p class="price">₹ 29</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/bunparotta.jpg">
                        <div class="label-back">Bun parotta</div>
                        <div class="price-back">₹ 29</div>
                        <div class="desc">
                            This dish is made with Milk, baking soda, maida, sugar.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/parotta.jpg">
                        <p class="label">Parotta</p>
                        <p class="price">₹ 49</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/parotta.jpg">
                        <div class="label-back">Parotta</div>
                        <div class="price-back">₹ 49</div>
                        <div class="desc">
                            This dish is made with fresh Rava, plain flour, sugar, clarified butter.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/naan.jpg">
                        <p class="label">Naan (Butter/Plain)</p>
                        <p class="price">₹ 49</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/naan.jpg">
                        <div class="label-back">Naan (Butter/Plain)</div>
                        <div class="price-back">₹ 49</div>
                        <div class="desc">
                            This dish is made with Wheat flour, garlic, plain yogurt, baking soda, baking powder.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/chappathii.jpg">
                        <p class="label">Chappathi</p>
                        <p class="price">₹ 49</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/chappathii.jpg">
                        <div class="label-back">Chappathi</div>
                        <div class="price-back">₹ 49</div>
                        <div class="desc">
                            This dish is made with Wheat flour,Vegetable gravy.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- SALADS -->
    <div id="salads">
        <h1 class="hhh">Salads</h1>
        <div class="cards">
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/fruitsalad.jpg">
                        <p class="label">Fruit salad</p>
                        <p class="price">₹ 149</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/fruitsalad.jpg">
                        <div class="label-back">Fruit salad</div>
                        <div class="price-back">₹ 149</div>
                        <div class="desc">
                            This dish is made with Chikoo, papaya, sweet, honey, figs.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/vegetablesalad.jpg">
                        <p class="label">Vegetable Salad</p>
                        <p class="price">₹ 169</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/vegetablesalad.jpg">
                        <div class="label-back">Vegetable Salad</div>
                        <div class="price-back">₹ 169</div>
                        <div class="desc">
                            This dish is made with Beetroot, cabbage, balsamic vinegar, cucumber, sesame seed.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/mixedsalad.jpg">
                        <p class="label">Mixed Salad</p>
                        <p class="price">₹ 179</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/mixedsalad.jpg">
                        <div class="label-back">Mixed Salad</div>
                        <div class="price-back">₹ 179</div>
                        <div class="desc">
                            Mixed Salad is made with Vinaigrette salad dressing, green bell pepper, chicken.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/honeysalad.jpg">
                        <p class="label">Honey Salad</p>
                        <p class="price">₹ 169</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/honeysalad.jpg">
                        <div class="label-back">Honey Salad</div>
                        <div class="price-back">₹ 169</div>
                        <div class="desc">
                            This dish is made with Wheat flour,Vegetable gravy.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Desserts -->
    <div id="desserts">
        <h1 class="hhh">Desserts</h1>
        <div class="cards">
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/gulabjamun.jpg">
                        <p class="label">Gulab Jamun</p>
                        <p class="price">₹ 49</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/gulabjamun.jpg">
                        <div class="label-back">Gulab Jamun</div>
                        <div class="price-back">₹ 49</div>
                        <div class="desc">
                            This dish is made with Dried milk powder, rose water, fine semolina flour.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/elaneerpayasam.jpg">
                        <p class="label">Elaneer Payasam</p>
                        <p class="price">₹ 139</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/elaneerpayasam.jpg">
                        <div class="label-back">Elaneer Payasam</div>
                        <div class="price-back">₹ 139</div>
                        <div class="desc">
                            This dish is made with tender coconut flesh, tender coconut water, coconut milk.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/rasamalai.jpg">
                        <p class="label">Rasamalai</p>
                        <p class="price">₹ 119</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/rasamalai.jpg">
                        <div class="label-back">Rasamalai</div>
                        <div class="price-back">₹ 119</div>
                        <div class="desc">
                            This dish is made with Saffron, lemon juice, pista, white sugar, ice cubes.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/Badamkheer.jpg">
                        <p class="label">Badam Kheer</p>
                        <p class="price">₹ 149</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/Badamkheer.jpg">
                        <div class="label-back">Badam Kheer</div>
                        <div class="price-back">₹ 149</div>
                        <div class="desc">
                            This dish is made with Milk powder, kaju, badam, saffron, raisins.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/chocolavacake.jpg">
                        <p class="label">Choco Lava Cake</p>
                        <p class="price">₹ 119</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/chocolavacake.jpg">
                        <div class="label-back">Choco Lava Cake</div>
                        <div class="price-back">₹ 119</div>
                        <div class="desc">
                            This dish is made with Vanilla ice cream, cocoa powder, sweet chocolate chips.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/chocolatecake.jpg">
                        <p class="label">Chocolate Cake</p>
                        <p class="price">₹ 149</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/chocolatecake.jpg">
                        <div class="label-back">Chocolate Cake</div>
                        <div class="price-back">₹ 149</div>
                        <div class="desc">
                            This dish is made with Brown sugar, cocoa powder, eggs, baking soda, all purpose flour.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/buttersocth.jpg">
                        <p class="label">Butterscotch cake</p>
                        <p class="price">₹ 149</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/buttersocth.jpg">
                        <div class="label-back">Butterscotch cake</div>
                        <div class="price-back">₹ 149</div>
                        <div class="desc">
                            This dish is made with Brown sugar, butterscotch sauce, yogurt, butter, fresh.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-front">
                        <img class="product-img" src="/assests/images/redvelvet.jpg">
                        <p class="label">Red Velvet Cake</p>
                        <p class="price">₹ 119</p>
                    </div>
                    <div class="card-back">
                        <img class="product-img" src="/assests/images/redvelvet.jpg">
                        <div class="label-back">Red Velvet Cake</div>
                        <div class="price-back">₹ 119</div>
                        <div class="desc">
                            Red Velvet Cake is made with Cream cheese, cocoa powder, cake flour.
                        </div>
                        <button class="submit">Add to Cart</button>                
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main id="main">
        <p id="s">Today's Special</p>
        <div id="spl">
            <div class="inside j">
                <img >
            </div>
            <div class="inside">
                <p>Prawn Briyani</p>
                <img src="/assests/images/prawnbriyani.jpg">
            </div>
            <div class="inside">
                <p>Chicken 65</p>
                <img src="/assests/images/chicken65.jpg">
            </div>
            <div class="inside">
                <p>Elaneer Payasam </p>
                <img src="/assests/images/elaneerpayasam.jpg">
            </div>
        </div>
    </main>

<!-- Category -->

    <div>
        <div id="menu">
            <h2>Select Yours !</h2>
            <nav>
                <a href="#Starters"><img src="/assests/images/panneer65.png" alt="" >Starters</a>
                <a href="#Soup"><img src="/assests/images/vegsoup.jpg" alt="" >Soup</a>
                <a href="#maincourse"><img src="/assests/images/plainbriyani.jpg" alt="" >Main Course</a>
                <a href="#breads"><img src="/assests/images/parotta.jpg" alt="" >Breads</a>
                <a href="#salads"><img src="/assests/images/vegetablesalad.jpg" alt="" >Salads</a>
                <a href="#desserts"><img src="/assests/images/buttersocth.jpg" alt="" >Desserts</a>
            </nav>
        </div>
    </div>

    <!--
        FOOTER
    -->
    <div id="dumb"></div>
    <footer>
        <div class="waves">
            <div class="waves" id="wave1"> </div>
            <div class="waves" id="wave2"> </div>
            <div class="waves" id="wave3"> </div>
            <div class="waves" id="wave4"> </div>
        </div>
       <div class="div">
        <ul class="menu11">
            <li><a href='home.php' class="underline-hover-effect">HOME</a></li>
            <li><a href='Aboutus.php' class="underline-hover-effect">ABOUT US</a></li>
            <li><a href='services.php' class="underline-hover-effect">SERVICES</a></li>
            <li><a href='tablereserve.php' class="underline-hover-effect">BOOK TABLE</a></li>
            <li><a href='contact.php' class="underline-hover-effect">CONTACT US</a></li>
        </ul>
        <div class="div">
        <ul class="menu1">
            <li><a href='menu.php' class="underline-hover-effect">MENU</a></li>
            <li><a href='application.php' class="underline-hover-effect">CAREER</a></li>
            <li><a href='menu.php' class="underline-hover-effect">ORDER NOW</a></li>
            <li><a href='terms&condition.php' class="underline-hover-effect">PRIVACY POLICY</a></li>
            <li><a href='terms&condition.php' class="underline-hover-effect">TERMS & CONDITIONS</a></li>
        </ul>
        </div class="div">
        <footer class="footh" id="contact">
            <div class="foot">
              <div id="video">
                <video src="/assests/images/Video Poster.mp4" autoplay loop controls muted width="420px">
                    Your browser does not support the video tag.
                </video>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15544.58337206321!2d80.1988317765176!3d13.089942002451888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5264078822719b%3A0xbda01077b89581e2!2sAnna%20Nagar%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1678468867344!5m2!1sen!2sin" width="420" height="200" style="border:0;padding-left: 100px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
             
            </div>
       </div>    
       </footer>
    </footer>
   
    <div id="copy">
        <ul class="social_icon">
            <li><a href="https://instagram.com/hot'N'spicy-restaurant"><img class="icon-img" src="/assests/images/ig-1.png" ></a></li>
            <li><a href="https://facebook.com/hot'N'spicy-restaurant"><img src="/assests/images/fb-1.png" width="45px"></a></li>
            <li><a href="#"><img class="icon-img" src="/assests/images/yt-1.png"></a></li>
            <li><a href="https://twitter.com/hot'N'spicy-restaurant"><img  src="/assests/images/twi-1.png" width="45px"></a></li>
        </ul>
       
       <p id="margin">Copyright &copy; 2023 HOT 'N' SPICY</p>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script>
        const options = {
  bottom: '32px', // default: '32px'
  right: 'unset', // default: '32px'
  left: '32px', // default: 'unset'
  time: '0.5s', // default: '0.3s'
  mixColor: '#fff', // default: '#fff'
  backgroundColor: '#fff',  // default: '#fff'
  buttonColorDark: '#100f2c',  // default: '#100f2c'
  buttonColorLight: '#fff', // default: '#fff'
  saveInCookies: true, // default: true,
  label: '🌓', // default: ''
  autoMatchOsTheme: true // default: true
}

const darkmode = new Darkmode(options);
darkmode.showWidget();
    </script>

      <!-- SCROLL TOP -->
      <img src="/assests/images/scroll up btn.png" alt="" id="scroll-top-btn">
      <script src="assests/js/scroll.js"></script>
</body>
</php>