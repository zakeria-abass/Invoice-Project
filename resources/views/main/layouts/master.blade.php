<!DOCTYPE html>
<html lang="en-US" dir="ltr">

@include('main.layouts.head')


<body>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
@include('main.layouts.header')

    @yield('begin')
    <section class="py-5">
        <div class="container-lg bg-info p-5 p-md-5 p-xl-7 rounded-3">
            <div class="row flex-center">
                <div class="col-12">
                    <h2 class="text-light fw-bold">Testimonials</h2>
                </div>
            </div>
            <div class="carousel slide pt-6" id="carouselExampleDark" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="row h-100">
                       @foreach($reviews as $review)

                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card h-100 py-3">
                                        <div class="card-body my-2">
                                            <div class="d-flex align-items-center">
                                                <img class="img-fluid me-3 me-md-2 me-lg-3" src="https://ui-avatars.com/api/?name={{$review->name}}" width="70" alt="" />
                                                <div class="flex-1 align-items-center">
                                                    <h6 class="mb-0 fs--1 text-1000 fw-medium">{{$review->name}}</h6>
                                                    <p class="mb-0 fs--1 text-1000 fw-medium text-success">{{$review->created_at->format('Y/m/d')}}</p>
                                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

                                                    @php $rating = $review->star; @endphp

                                                    @foreach(range(1,5) as $i)
                                                        <span class="fa-stack text-warning" style="width:1em">
                                                             <i class="far fa-star fa-stack-1x"></i>

                                                             @if($rating >0)
                                                                @if($rating >0.5)
                                                                    <i class="fas fa-star fa-stack-1x"></i>
                                                                @else
                                                                    <i class="fas fa-star-half fa-stack-1x"></i>
                                                                @endif
                                                            @endif
                                                            @php $rating--; @endphp
                                                         </span>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <p class="card-text ps-7 ps-md-0 ps-xl-7 pt-md-4 pt-lg-3 pt-xl-0">
                                                {{$review->body}}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>

                </div>
                <div class="row px-3 px-md-0 mt-4">
                    <div class="col-6 position-relative">
                        <ol class="carousel-indicators">
                            <li class="active" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                        </ol>
                    </div>
                    <div class="col-6 position-relative"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-6 pb-0">

        <div class="container">
            <hr class="text-info opacity-25" />
            <div class="row py-7 justify-content-sm-between text-center text-md-start">
                <div class="col-md-6">
                    <h1 class="fw-bold">Try for free!</h1>
                    <p>Get limited 1 week free try our features!</p>
                </div>
                <div class="col-md-6 text-lg-end"><a class="btn btn-lg btn-danger rounded-pill me-4 me-md-3 me-lg-4" href="#" role="button">Learn more</a><a class="btn btn-light rounded-pill shadow fw-bold" href="#" role="button">Request Demo
                        <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9C69E2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg></a></div>
            </div>
            <div class="row justify-content-lg-around">
                <div class="col-12 col-sm-12 col-lg-3 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img class="img-fluid me-3" src="{{asset('asset_main/assets/img/icons/logo.png')}}" alt="" /><span class="fw-bold fs-1 text-1000">DataWarehouse</span></a>
                    <p class="mt-4">Warehouse Society, 234 <br />Bahagia Ave Street PRBW 29281</p>
                    <p>info@warehouse.project<br />1-232-3434 (Main) </p>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 mb-3 order-2 order-sm-1">
                    <h6 class="lh-lg fw-bold mb-4">About</h6>
                    <ul class="list-unstyled mb-md-4 mb-lg-0">
                        <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Profile</a></li>
                        <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Features</a></li>
                        <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Careers</a></li>
                        <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">DW News</a></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
                    <h6 class="lh-lg fw-bold mb-4"> Help </h6>
                    <ul class="list-unstyled mb-md-4 mb-lg-0">
                        <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Support</a></li>
                        <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Sign Up </a></li>
                        <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Guide</a></li>
                        <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Reports</a></li>
                        <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Q&amp;A</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-4 col-lg-3 mb-3 order-1 order-sm-3">
                    <h6 class="lh-lg fw-bold mb-4">Social Media </h6>
                    <ul class="list-unstyled mb-md-4 mb-lg-0">
                        <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="#!"><img class="img-fluid" src="{{asset('asset_main/assets/img/icons/f.png')}}" width="40" alt="" /></a></li>
                        <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="#!"><img class="img-fluid" src="{{asset('asset_main/assets/img/icons/t.png')}}" width="40" alt="" /></a></li>
                        <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="#!"><img class="img-fluid" src="{{asset('asset_main/assets/img/icons/i.png')}}" width="40" alt="" /></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-6">

        <div class="container">
            <div class="row flex-center px-3">
                <div class="col-12 col-md-6 px-md-0 order-1 order-md-0">
                    <div class="text-center text-md-start">
                        <p class="mb-0">This template is made with&nbsp;
                            <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9C69E2" viewBox="0 0 16 16">
                                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                            </svg>&nbsp;by&nbsp;<a class="text-1000" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-center text-md-end mb-3 mb-md-0"> <a href="#"><img class="img-fluid" src="{{asset('asset_main/assets/img/icons/pre-footer.png')}}" height="14" alt="" /></a></div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->




<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="{{asset('asset_main/vendors/@popperjs/popper.min.js')}}"></script>
<script src="{{asset('asset_main/vendors/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('asset_main/vendors/is/is.min.js')}}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="{{asset('asset_main/asset_main/assets/js/theme.js')}}"></script>

<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,700;1,900&amp;display=swap" rel="stylesheet">
</body>

</html>
