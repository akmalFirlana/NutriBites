<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>{{ config('app.name', 'NutriBites') }}</title>
</head>

<body>
    <!-- Header -->
    <header class="header" id="header">
        <div class="navigation">
            <div class="nav-center container d-flex">
                <a href="{{ url('/') }}" class="logo">
                    <h1>{{ config('app.name', 'NutriBites') }}</h1>
                </a>

                <ul class="nav-list d-flex">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('shop') }}" class="nav-link">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a href="#terms" class="nav-link">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                    <form class="form">
                        <button>
                            <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-labelledby="search">
                                <path
                                    d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                                    stroke="currentColor" stroke-width="1.333" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <input class="input" placeholder="Type your text" required="" type="text">
                        <button class="reset" type="reset">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </form>
                    </li>
                    <li class="icons d-flex">
                        <a href="{{ route('login') }}" class="icon">
                            <i class="bx bx-user"></i>
                        </a>
                        <div class="icon">
                            <i class="bx bx-search"></i>
                        </div>
                        <div class="icon">
                            <i class="bx bx-heart"></i>
                            <span class="d-flex">0</span>
                        </div>
                        <a href="{{ route('cart') }}" class="icon">
                            <i class="bx bx-cart"></i>
                            <span class="d-flex">0</span>
                        </a>
                    </li>
                </ul>

                <div class="hamburger">
                    <i class="bx bx-menu-alt-left"></i>
                </div>
            </div>
        </div>

        <div class="hero">
            <div class="glide" id="glide_1">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="center">
                                <div class="left">
                                    <span class="">Snack sehat pilihan keluarga</span>
                                    <h1 class="">BARU</h1>
                                    <p>Makan snack tanpa takut resiko penyakit</p>
                                    <a href="#" class="hero-btn">Beli sekarang</a>
                                </div>
                                <div class="right">
                                    <img class="img1" src="{{ asset('images/hero-1.png') }}" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="center">
                                <div class="left">
                                    <span>Snack sehat pilihan keluarga</span>
                                    <h1>Pilihan terbaik</h1>
                                    <p>Makan snack tanpa takut resiko penyakit</p>
                                    <a href="#" class="hero-btn">Beli Sekarang</a>
                                </div>
                                <div class="right">
                                    <img class="img2" src="{{ asset('images/hero-2.png') }}" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Categories Section -->
    <section class="section category">
        <div class="cat-center">
            <div class="cat">
                <img src="{{ asset('images/cat3.jpg') }}" alt="" />
                <div>
                    <p>Snack</p>
                </div>
            </div>
            <div class="cat">
                <img src="{{ asset('images/cat2.jpg') }}" alt="" />
                <div>
                    <p>Minuman</p>
                </div>
            </div>
            <div class="cat">
                <img src="{{ asset('images/cat1.jpg') }}" alt="" />
                <div>
                    <p>Makanan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- New Arrivals -->
    <section class="section new-arrival">
        <div class="title">
            <h1>NEW ARRIVALS</h1>
            <p>All the latest picked from designer of our store</p>
        </div>

        <div class="product-center">
            @foreach($newArrivals as $product)
                <div class="product-item">
                    <div class="overlay">
                        <a href="{{ route('productDetails', $product->id) }}" class="product-thumb">
                            <img src="{{ asset('images/' . $product->image) }}" alt="" />
                        </a>
                        @if($product->discount)
                            <span class="discount">{{ $product->discount }}%</span>
                        @endif
                    </div>
                    <div class="product-info">
                        <span>{{ $product->category->name }}</span>
                        <a href="{{ route('productDetails', $product->id) }}">{{ $product->name }}</a>
                        <h4>${{ $product->price }}</h4>
                    </div>
                    <ul class="icons">
                        <li><i class="bx bx-heart"></i></li>
                        <li><i class="bx bx-search"></i></li>
                        <li><i class="bx bx-cart"></i></li>
                    </ul>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Promo -->

    <section class="section banner">
        <div class="left">
            <span class="trend">Trend Design</span>
            <h1>New Collection 2021</h1>
            <p>New Arrival <span class="color">Sale 50% OFF</span> Limited Time Offer</p>
            <a href="#" class="btn btn-1">Discover Now</a>
        </div>
        <div class="right">
            <img src="{{ asset('images/banner.png') }}" alt="">
        </div>
    </section>

    <!-- Featured -->

    <section class="section new-arrival">
        <div class="title">
            <h1>Featured</h1>
            <p>All the latest picked from designer of our store</p>
        </div>

        <div class="product-center">
            @foreach($featuredProducts as $product)
                <div class="product-item">
                    <div class="overlay">
                        <a href="{{ route('productDetails', $product->id) }}" class="product-thumb">
                            <img src="{{ asset('images/' . $product->image) }}" alt="" />
                        </a>
                        @if($product->discount)
                            <span class="discount">{{ $product->discount }}%</span>
                        @endif
                    </div>
                    <div class="product-info">
                        <span>{{ $product->category->name }}</span>
                        <a href="{{ route('productDetails', $product->id) }}">{{ $product->name }}</a>
                        <h4>${{ $product->price }}</h4>
                    </div>
                    <ul class="icons">
                        <li><i class="bx bx-heart"></i></li>
                        <li><i class="bx bx-search"></i></li>
                        <li><i class="bx bx-cart"></i></li>
                    </ul>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Contact -->
    <section class="section contact">
        <div class="row">
            <div class="col">
                <h2>EXCELLENT SUPPORT</h2>
                <p>We love our customers and they can reach us any time of day we will be at your service 24/7</p>
                <a href="{{ route('contact') }}" class="btn btn-1">CONTACT US</a>
            </div>
        </div>
    </section>
    
    <!-- Glide js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <!-- Custom Script -->
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>