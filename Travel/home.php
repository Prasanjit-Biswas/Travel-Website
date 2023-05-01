<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='./components/style.css' />";

   //include a javascript file
   echo "<script type='text/javascript' src='path-to-javascript-file'></script>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>


<body>
    <?php
        require './components/header.php'
        ?>
    <!-- carosul start -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src=".\components\img\birds-7790506_1920.jpg" class="d-block" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Your Journey Begins</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, dignissimos? Possimus, amet. Ea
                        voluptas suscipit vitae, eos deserunt nesciunt molestias inventore quia. Soluta, sed quisquam.
                        Natus maiores omnis iusto dignissimos.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="	https://cdn.pixabay.com/photo/2015/10/30/20/13/sunrise-1014712_960_720.jpg"
                    class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Your Journey Begins</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, dignissimos? Possimus, amet. Ea
                        voluptas suscipit vitae, eos deserunt nesciunt molestias inventore quia. Soluta, sed quisquam.
                        Natus maiores omnis iusto dignissimos.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src=".\components\img\1.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Your Journey Begins</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, dignissimos? Possimus, amet. Ea
                        voluptas suscipit vitae, eos deserunt nesciunt molestias inventore quia. Soluta, sed quisquam.
                        Natus maiores omnis iusto dignissimos.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src=".\components\img\2.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Your Journey Begins</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, dignissimos? Possimus, amet. Ea
                        voluptas suscipit vitae, eos deserunt nesciunt molestias inventore quia. Soluta, sed quisquam.
                        Natus maiores omnis iusto dignissimos.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2017/12/15/13/51/polynesia-3021072_1280.jpg"
                    class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Your Journey Begins</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, dignissimos? Possimus, amet. Ea
                        voluptas suscipit vitae, eos deserunt nesciunt molestias inventore quia. Soluta, sed quisquam.
                        Natus maiores omnis iusto dignissimos.</p>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carosul end -->
    <!-- Top Places section -->
    <div class="content container mx-auto my-5">
        <div class="row">
            <div class="col-md-7 col-12 ">
                <img src="https://cdn.pixabay.com/photo/2016/11/08/05/16/boy-1807518_960_720.jpg" class="img-fluid"
                    alt="mm">

            </div>
            <div class="col-md-5 col-12 d-flex justify-content-center flex-column">
                <h1>A Simply Perfect Place To Get Lost </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, deleniti vel? Molestias voluptas totam
                    dolorem ducimus? Sit voluptas accusantium rerum explicabo aut fugiat, quam laudantium, tempora
                    eligendi corrupti neque quisquam.
                </p>
                <div class="clo-12">
                    <button type="button" class="btn btn-outline-primary">SEE MORE</button>
                </div>
            </div>
        </div>
    </div>
    <section class="top_places my-5 container">
        <div class="heading pb-5">
            <h1 class=" text-center">Top Places</h1>
            <hr class="w-25 mx-auto">
        </div>
        <div class="">
            <div class="swiper mySwiper row">
                <div class="swiper-wrapper col-md-12 col-12">
                    <div class="swiper-slide">
                        <img src="https://imageio.forbes.com/specials-images/dam/imageserve/1171238184/0x0.jpg?format=jpg&width=1200" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://assets.traveltriangle.com/blog/wp-content/uploads/2016/07/limestone-rock-phang-nga-1-Beautiful-limestone-rock-in-the-ocean.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://www.akshartours.com/wp-content/uploads/2022/08/blue-villa-beautiful-sea-hotel-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="http://www.travelcharacter.com/wp-content/uploads/2020/05/Bora-Bora.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://www.tourmyindia.com/blog//wp-content/uploads/2022/10/Best-Places-to-Visit-in-Bhutan-Tourism.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- Top Places section -->
    <!-- review section -->
    <section class="review my-5">
        <div class="row gy-3">
            <div class="col-md-6 col-11 mx-auto">
                <img src="https://cdn.pixabay.com/photo/2016/11/14/04/36/boy-1822614_960_720.jpg" alt=""
                    class="img-fluid">
            </div>
            <div class="col-md-6 col-10 review_image mx-auto">
                <h1 class="text-center py-2 text-white">Our Top Reviews</h1>
                <div id="carouselExampleSlidesOnly" class="carousel slide mx-2 " data-bs-ride="carousel">
                    <div class="carousel-inner container text-center review_content py-5">
                        <div class="carousel-item active">
                            <h3 class="text-white">place</h3>
                            <div class="star">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere sed
                                officiis et earum
                                fugit eius impedit aliquam, quasi blanditiis nisi maiores vero consectetur harum.
                                Aperiam a sequi quae quasi in.</p>
                            <h4 class="text-white">Prasanjit Biswas</h4>
                            <img src="https://www.shareicon.net/data/2016/06/25/786544_people_512x512.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <h3 class="text-white">place</h3>
                            <div class="star">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere sed
                                officiis et earum
                                fugit eius impedit aliquam, quasi blanditiis nisi maiores vero consectetur harum.
                                Aperiam a sequi quae quasi in.</p>
                            <h4 class="text-white">Prasanjit Biswas</h4>
                            <img src="	https://cdn-icons-png.flaticon.com/512/3884/3884864.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <h3 class="text-white">place</h3>
                            <div class="star">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere sed
                                officiis et earum
                                fugit eius impedit aliquam, quasi blanditiis nisi maiores vero consectetur harum.
                                Aperiam a sequi quae quasi in.</p>
                            <h4 class="text-white">Prasanjit Biswas</h4>
                            <img src="https://cdn-icons-png.flaticon.com/512/3532/3532381.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- review section -->
    <!-- exotic places -->
    <section class="exotic_place container">

        <div class="content mb-5">
            <h1 class="text-center my-3 ">Go Exotic Places</h1>
            <p class="text-center mx-auto">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.Quis quia provident
                assumenda veniam, laudantium necessitatibus, dignissimos itaque?
            </p>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 col-lg-12 mb-3">
                        <img src="	https://cdn.pixabay.com/photo/2020/02/06/10/08/sunrise-4823732_1280.jpg"
                            class=" img_1" alt="">
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="row gy-3 mb-3">
                            <div class="col-md-6"><img
                                    src="https://imgcld.yatra.com/ytimages/image/upload/v1473154691/Koh_Samui_Overview.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="col-md-6"><img
                                    src="https://cdn.mos.cms.futurecdn.net/GVyaP4bd3dY7dHFyNyY4AX.jpg" class="img-fluid"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-3 ">
                <img src="https://www.sundayguardianlive.com/wp-content/uploads/2021/08/Noor-Ladakh-Kashmir-tourism-edited.jpg"
                    class="img_3" alt="">
            </div>
            <div class="col-md-12 col-12 text-center my-4">
                <button type="button" class="btn btn-outline-success">Success</button>
            </div>
        </div>
    </section>
    <!-- exotic places -->
    <!-- dare place -->
    <div class=" my-5">
        <div class="row gy-3 ">
            <div class="col-md-6 col-10 dare_place mx-auto d-flex justify-content-center align-item-center flex-column">
                <h1 class="text-center py-2 text-primary">Dare To Explore
                </h1>
                <p class="text-white font-weight-bold">Exploring means learning. Bring new experiences from each
                    journey. Meet different cultures,
                    traditions
                    and landscapes. Choose your next destination and start your trip.
                </p>
                <a href="" class="text-center text-success">See More</a>
            </div>
            <div class="col-md-6 col-11 mx-auto">
                <img src="https://cdn.pixabay.com/photo/2019/01/24/21/27/pyramids-3953371_960_720.jpg 1x, https://cdn.pixabay.com/photo/2019/01/24/21/27/pyramids-3953371_1280.jpg"
                    alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- dare place -->
    <!-- offers  -->
    <section class="offers container">

        <div class="content mb-5">
            <h1 class="text-center my-3 ">Last Minute Offers</h1>
            <p class="text-center mx-auto">
                Book a memorable tour at great price! Grab our last minute offer and pack the things for the journey you
                dream about. See our recommendations.
            </p>
        </div>

        <div class="row gy-4">

            <div class="col-md-4 col-lg-4 parent_dare">
                <img src="https://asiadiscoverytour.com/wp-content/uploads/2021/12/uhbllotelsldkmh5ce5j.jpg"
                    class="img-fluid" alt="">
                <div class="content child_dare">
                    <h2>Asian Dicovery</h2>
                    <p class="prize">$4000</p>

                </div>
            </div>

            <div class="col-md-4 col-lg-4  parent_dare">
                <img src="https://cdn.pixabay.com/photo/2016/11/14/03/32/elephant-1822492_960_720.jpg 1x, https://cdn.pixabay.com/photo/2016/11/14/03/32/elephant-1822492_1280.jpg"
                    class="img-fluid" alt="">
                <div class="content child_dare">
                    <h2>
                        Action Safari </h2>
                    <p class="prize">$3400</p>

                </div>
            </div>
            <div class="col-md-4 col-lg-4 parent_dare">
                <img src="https://ncoae.org/wp-content/uploads/2022/01/backpacking-outdoor-educator-alaska.jpg"
                    class="img-fluid" alt="">
                <div class="content child_dare">
                    <h2>Adventure Alaska</h2>
                    <p class="prize">$4000</p>

                </div>
            </div>


            <div class="col-md-4 col-lg-4 parent_dare">
                <img src="https://hurghadalovers.com/wp-content/uploads/2020/06/Giza-Pyramids-Egypt-complex-history-secrets05c81e4054f2a09fd18e2aa17a0e0e0c.jpg"
                    class="img-fluid" alt="">
                <div class="content child_dare">
                    <h2>Ancient Pyramids</h2>
                    <p class="prize">$3500</p>

                </div>
            </div>
            <div class="col-md-4 col-lg-4  parent_dare">
                <img src="https://assets.bwbx.io/images/users/iqjWHBFdfxIU/itiU.jJleW1I/v4/1200x-1.jpg"
                    class="img-fluid" alt="">
                <div class="content child_dare">
                    <h2>Antique Europe</h2>
                    <p class="prize">$5000</p>

                </div>
            </div>
            <div class="col-md-4 col-lg-4  parent_dare">
                <img src="https://www.travelandleisure.com/thmb/5R9bFSANt_omAnaJoF9_xSTOI4Q=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/best-mexico-resort-hotel-Viceroy-Riviera-Maya-00-MXRESHOTWB21jpg-f32ab547d1d849369066e55312dc4440.jpg"
                    class="img-fluid" alt="">
                <div class="content child_dare">
                    <h2>Awesome Mexico</h2>
                    <p class="prize">$4200</p>

                </div>
            </div>
        </div>
    </section>
    <!-- offers  -->
    <!-- choos tour -->
    <section class="container chose-place my-5 ">
        <div class="text-center py-5">
            <h2 class="pb-2">Choose Tour</h2>
            <p>Find your next travel adventure and make it memorable. Explore wildlife, enjoy seaside or book a
                cruise
                tour. Check out our popular destinations.</p>
        </div>
        <div class="row text-center content gy-5 d-flex justify-content-center align-item-center">
            <div class="col-md-3 col-6"><img src="./components/icons/plane-icon-9.png" alt="">
                <p>Self Guided</p>
            </div>
            <div class="col-md-3 col-6"><img src="./components/icons/2017278.png" alt="">
                <p>Adventure</p>
            </div>
            <div class="col-md-3 col-6"><img src="./components/icons/1090663.png" alt="">
                <p>wildlife</p>
            </div>
            <div class="col-md-3 col-6"><img src="./components/icons/3175199.png" alt="">
                <p>seaside</p>
            </div>

        </div>
        </div>
    </section>
    <!-- choos tour -->
    <!-- posts -->
    <section class="posts container">

        <div class="heading mb-5">
            <h1 class="text-center my-3 ">Journeys Are Best Measured In New Friends</h1>
            <p class="text-center mx-auto">
                One inspiring story is worth traveling. Discover more about local food, tradition and history. Read the
                stories that make you want to travel.
            </p>
        </div>

        <div class="row gy-4">

            <div class="col-md-4 content">
                <img src="https://5.imimg.com/data5/FJ/RR/TM/SELLER-54859694/sky-lanterns-500x500.jpg" class="img-fluid"
                    alt="">
                <h4 class="my-3">A Lot Of Traveling Turns You Into A Storyteller

                </h4>
                <div class="text">
                    <div class="date">February 1, 2018</div>
                    <div class="message d-flex">
                        <img src="./components/icons/Message-Icon-SVG-orik3d.png" alt="Pineapple"
                            style="width:20px;height:20px;margin-left:15px;">
                        <p class="ps-2">1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 content">
                <img src="http://contourtravels.co.in/wp-content/uploads/2018/02/blog-post-5.jpg" class="img-fluid"
                    alt="">
                <h4 class="my-3">Travel Makes One Modest And Opened To Ideas

                </h4>
                <div class="text">
                    <div class="date">February 1, 2018</div>
                    <div class="message d-flex">
                        <img src="./components/icons/Message-Icon-SVG-orik3d.png" alt="Pineapple"
                            style="width:20px;height:20px;margin-left:15px;">
                        <p class="ps-2">1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 content">
                <img src="https://stories.durham.ac.uk/journeys/assets/QLg2kGD33q/fallback-750x422.jpeg"
                    class="img-fluid" alt="">
                <h4 class="my-3">Discover New Oceans By Losing Sight Of The Shore
                </h4>
                <div class="text">
                    <div class="date">February 1, 2018</div>
                    <div class="message d-flex">
                        <img src="./components/icons/Message-Icon-SVG-orik3d.png" alt="Pineapple"
                            style="width:20px;height:20px;margin-left:15px;">
                        <p class="ps-2">1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 content">
                <img src="https://i0.wp.com/generation-journey.com/wp-content/uploads/2018/02/blog-post-3.jpg?fit=1300%2C720&ssl=1"
                    class="img-fluid" alt="">
                <h4 class="my-3">Don’t Be Disappointed By The Things You Didn’t Do
                </h4>
                <div class="text">
                    <div class="date">February 1, 2018</div>
                    <div class="message d-flex">
                        <img src="./components/icons/Message-Icon-SVG-orik3d.png" alt="Pineapple"
                            style="width:20px;height:20px;margin-left:15px;">
                        <p class="ps-2">1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 content">
                <img src="https://andrewstrav.com/wp-content/uploads/2018/02/blog-post-6.jpg" class="img-fluid" alt="">
                <h4 class="my-3">Think Of How Things Should Be And Act Upon
                </h4>
                <div class="text">
                    <div class="date">February 1, 2018</div>
                    <div class="message d-flex">
                        <img src="./components/icons/Message-Icon-SVG-orik3d.png" alt="Pineapple"
                            style="width:20px;height:20px;margin-left:15px;">
                        <p class="ps-2">1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 content">
                <img src="https://nayuexpeditions.com/wp-content/uploads/2018/02/blog-title-img.jpg" class="img-fluid"
                    alt="">
                <h4 class="my-3">Live Now As If You’d Drop Dead In Ten Seconds

                </h4>
                <div class="text">
                    <div class="date">February 1, 2018</div>
                    <div class="message d-flex">
                        <img src="./components/icons/Message-Icon-SVG-orik3d.png" alt="Pineapple"
                            style="width:20px;height:20px;margin-left:15px;">
                        <p class="ps-2">1</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- posts -->

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-black text-light text-muted pt-3 mt-5">
        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 text-secondary"></i>logo
                        </h6>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, illum, sapiente quia
                            asperiores iste repellat ut recusandae neque nostrum doloribus quas corrupti suscipit
                            commodi quam dolorum deleniti perspiciatis, nulla cupiditate.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Latest Posts
                        </h6>
                        <p>
                            Traveling – It Leaves You Speechless, Then Turns You Into A Storyteller
                        </p>
                        <p>
                            February 21, 2018
                        </p>
                        <p>
                            A Journey Is Always Best Measured In New Friends, Rather Than MilesA Journey Is Always Best
                            Measured In New Friends, Rather Than Miles
                        </p>
                        <p>
                            February 21, 2018
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Twitter Feed
                        </h6>
                        <p>
                            @kingedeborg @Google Hey, Thanks for writing in! Please
                            submit a ticket on our helpcenter, and our agents will be… https://t.co/EaiWOIGEmo

                        </p>
                        <p>
                            @aliasadadm Hi @aliasadadm , can you please submit a ticket at https://t.co/JLV61aXG7d
                            and one of our support agent… https://t.co/yk57k1S9bS

                        </p>
                        <p>
                            @HenrySefaBoaky1 Check out our theme Gioia which has all necessary elements to build a
                            multi vendor marketplace. https://t.co/c9BlYxZBlL
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Instagram Feed</h6>
                        <div class="row gy-3">
                            <div class="col-md-4"><img
                                    src="https://cdn.pixabay.com/photo/2016/11/14/03/32/elephant-1822492_960_720.jpg 1x, https://cdn.pixabay.com/photo/2016/11/14/03/32/elephant-1822492_1280.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="col-md-4"><img
                                    src="https://cdn.pixabay.com/photo/2016/11/14/03/32/elephant-1822492_960_720.jpg 1x, https://cdn.pixabay.com/photo/2016/11/14/03/32/elephant-1822492_1280.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="col-md-4"><img
                                    src="https://cdn.pixabay.com/photo/2016/11/14/03/32/elephant-1822492_960_720.jpg 1x, https://cdn.pixabay.com/photo/2016/11/14/03/32/elephant-1822492_1280.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="col-md-4"><img
                                    src="https://cdn.pixabay.com/photo/2016/11/14/03/32/elephant-1822492_960_720.jpg 1x, https://cdn.pixabay.com/photo/2016/11/14/03/32/elephant-1822492_1280.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="col-md-4"><img
                                    src="https://cdn.pixabay.com/photo/2016/11/14/03/32/elephant-1822492_960_720.jpg 1x, https://cdn.pixabay.com/photo/2016/11/14/03/32/elephant-1822492_1280.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="col-md-4"><img
                                    src="https://cdn.pixabay.com/photo/2016/11/14/03/32/elephant-1822492_960_720.jpg 1x, https://cdn.pixabay.com/photo/2016/11/14/03/32/elephant-1822492_1280.jpg"
                                    class="img-fluid" alt=""></div>
                        </div>
                        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                            <div>
                                <a href="" class="me-4 link-secondary">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" class="me-4 link-secondary">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="" class="me-4 link-secondary">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="" class="me-4 link-secondary">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="" class="me-4 link-secondary">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="" class="me-4 link-secondary">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                            <!-- Right -->
                        </section>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- footer -->
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="">Prasanjit Biswas</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>