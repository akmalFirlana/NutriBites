<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>NutriBites</title>
</head>

<body>
    <div class="navigation">
        <div class="nav-center container d-flex">
            <a href="index.html" class="logo d-flex">
                <img class="logo-img mb-2" src="{{ asset('images/logo1.png') }}" style="height: 50px;" alt="Logo">
                <h2>NutriBites</h2>
            </a>

            <ul class="nav-list d-flex mt-2">
                <li class="nav-item">
                    <a href="/" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="product.html" class="nav-link">Toko</a>
                </li>
                <li class="nav-item">
                    <a href="#terms" class="nav-link">Tentang kami</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">Terlaris</a>
                </li>
            </ul>
            <li class="nav-item">
                <form class="form-s">
                    <button>
                        <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-labelledby="search">
                            <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                                stroke="currentColor" stroke-width="1.333" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <input class="input" placeholder="Cari Produk Kamu" required="" type="text">
                    <button class="reset" type="reset">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </form>
            </li>
            <div class="icons d-flex mt-2">
                <a href="cart.html" class="icon">
                    <i class="bx bx-cart"></i>
                    <span class="d-flex">0</span>
                </a>
                <a href="login.html" class="icon">
                    <i class="bx bx-user"></i>
                </a>

            </div>

            <div class="hamburger">
                <i class="bx bx-menu-alt-left"></i>
            </div>
        </div>
    </div>
    <hr class="hr mt-4">
    <!-- Product Details -->
    <section class="section product-detail">
        <div class="details container">
            <div class="left image-container">
                <div class="main">
                    <img src="{{ asset('images/produk.svg') }}" id="zoom" alt="" />
                </div>
            </div>
            <div class="right">
                <span>Home/Snack</span>
                <h1>Snack sehat</h1>
                <div class="price">Rp 50.000</div>
                <form class="form">
                    <input type="text" placeholder="1" />
                    <a href="cart.html" class="addCart">Tambahkan</a>
                </form>
                <h3>Detail Produk</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero minima
                    delectus nulla voluptates nesciunt quidem laudantium, quisquam
                    voluptas facilis dicta in explicabo, laboriosam ipsam suscipit!
                </p>
                <form>
                    <div>
                    <legend style="font-size: 14px; color: #7d7d7d;">Varian Rasa:</legend><br>
                        <fieldset>
                            
                            <div class="button-group">
                                <input type="radio" id="svelt" name="frameworks" checked="" />
                                <label for="svelt">Manis</label>
                            </div>

                            <div class="button-group">
                                <input type="radio" id="react" name="frameworks" />
                                <label for="react">Asam</label>
                            </div>

                            <div class="button-group">
                                <input type="radio" id="vue" name="frameworks" />
                                <label for="vue">Pedas</label>
                            </div>
                        </fieldset>
                    </div>
                </form>
            </div>
            
        </div>
    </section>

    <!-- Related -->
    <section class="section featured">
        <div class="top container">
            <h1>Related Products</h1>
            <a href="#" class="view-more">View more</a>
        </div>
        <div class="product-center container">
            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="{{ asset('images/produk.svg') }}" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <span>Kripik Nangka</span>
                    <a href="">Kripik nangka sehat</a>
                    <h4>Rp 15.000</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><i class="bx bx-search"></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="{{ asset('images/produk.svg') }}" alt="" />
                    </a>
                    <span class="discount">40%</span>
                </div>
                <div class="product-info">
                    <span>Kripik nangka sehat</span>
                    <a href="">Kripik nangka sehat</a>
                    <h4>Rp 20.000</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><i class="bx bx-search"></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="{{ asset('images/produk.svg') }}" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <span>Kripik nangka sehat</span>
                    <a href="">Kripik nangka sehat</a>
                    <h4>Rp 8.000</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><i class="bx bx-search"></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="{{ asset('images/produk.svg') }}" alt="" />
                    </a>
                    <span class="discount">40%</span>
                </div>
                <div class="product-info">
                    <span>Kripik nangka sehat</span>
                    <a href="">Kripik nangka sehat</a>
                    <h4>50.000</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><i class="bx bx-search"></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
        </div>
    </section>

  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #45526e"
          >
    <div class="container p-4 pb-0">
      <section class="">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">NutriBites</h5>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Molestiae modi cum ipsam ad, illo possimus laborum ut
              reiciendis obcaecati. Ducimus, quas. Corrupti, pariatur eaque?
              Reiciendis assumenda iusto sapiente inventore animi?
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Company</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Tentang kami</a>
              </li>
              <li>
                <a href="#!" class="text-white">Fitur</a>
              </li>
              <li>
                <a href="#!" class="text-white">E-mail</a>
              </li>
              <li>
                <a href="#!" class="text-white">Dukung kami</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Bantuan</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Cusstomer support</a>
              </li>
              <li>
                <a href="#!" class="text-white">Metode pengiriman</a>
              </li>
              <li>
                <a href="#!" class="text-white">Syarat & ketentuan</a>
              </li>
              <li>
                <a href="#!" class="text-white">Privacy Policy</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Faq</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Akun</a>
              </li>
              <li>
                <a href="#!" class="text-white">Atur Pengiriman</a>
              </li>
              <li>
                <a href="#!" class="text-white">Pesanan</a>
              </li>
              <li>
                <a href="#!" class="text-white">Pembayaran</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Resources</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Sumber Informasi</a>
              </li>
              <li>
                <a href="#!" class="text-white">Komunitas</a>
              </li>
              <li>
                <a href="#!" class="text-white">Dukungan</a>
              </li>
              <li>
                <a href="#!" class="text-white">Free course</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Social media -->
      <section class="mb-4 text-center">
        <!-- Facebook -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fab fa-facebook-f"></i
          ></a>

        <!-- Twitter -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fab fa-twitter"></i
          ></a>

        <!-- Google -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fab fa-google"></i
          ></a>

        <!-- Instagram -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fab fa-instagram"></i
          ></a>

        <!-- Linkedin -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fab fa-linkedin-in"></i
          ></a>

        <!-- Github -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fab fa-github"></i
          ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >MDBootstrap.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
<!-- End of .container -->
    <!-- Custom Script -->
    <script src="./js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"
        integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6"
        crossorigin="anonymous"></script>
    <script src="./js/zoomsl.min.js"></script>
    <script>
        $(function () {
            console.log("hello");
            $("#zoom").imagezoomsl({
                zoomrange: [4, 4],
            });
        });
    </script>
</body>

</html>