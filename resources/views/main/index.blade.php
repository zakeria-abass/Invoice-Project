@extends('main.layouts.master')


@section('begin')

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-5">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-7 order-md-1 pt-8"><img class="img-fluid" src="{{asset('asset_main/assets/img/illustrations/hero-header.png')}}" alt="" /></div>
                <div class="col-md-7 col-lg-5 text-center text-md-start pt-5 pt-md-9">
                    <h1 class="mb-4 display-2 fw-bold">Save your data <br class="d-block d-lg-none d-xl-block" />storage here.</h1>
                    <p class="mt-3 mb-4">Data Warehouse is a data storage area that <br />has been tested for security, so you can store<br />your data here safely but not be afraid of <br />being stolen by others.</p><a class="btn btn-lg btn-info rounded-pill" href="#" role="button">Learn more</a>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-4">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3 bg-soft-danger rounded-3">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-5 col-lg-6 text-md-center"><img class="img-fluid" src="{{asset('asset_main/assets/img/illustrations/about.png')}}" alt="" /></div>
                            <div class="col-md-7 col-lg-6 px-md-2 px-xl-6 text-center text-md-start">
                                <div class="card-body px-4 py-5 p-lg-3 p-md-4">
                                    <h1 class="mb-4 fw-bold">We are a high-level data<br class="d-md-none d-xxl-block" />storage bank</h1>
                                    <p class="card-text">The place to store various data that you can access at any<br class="d-none d-xxl-block" />time through the internet and where you can carry it. <br class="d-none d-xxl-block" />This very flexible storage area has a high level of security.<br class="d-none d-xxl-block" />To enter into your own data you must enter the password<br class="d-none d-xxl-block" />that you created when you registered in this Data <br class="d-none d-xxl-block" />Warehouse. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <section class="py-6">
        <div class="container-lg">
            <div class="row flex-center mb-5">
                <div class="col-auto text-center my-4">
                    <h1 class="mb-4 fw-bold">Features</h1>
                    <p>Some of the features and advantages that we provide for those of you <br />who store data in this Data Warehouse.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card px-5 px-md-3 py-lg-5">
                        <div class="row flex-center">
                            <div class="bg-holder z-index-1 d-none d-lg-block" style="background-image:url(asset_main/assets/img/illustrations/feature-bg-2.png);background-position:center;background-size:contain;">
                            </div>
                            <!--/.bg-holder-->

                            <div class="bg-holder z-index-1 d-block d-lg-none" style="background-image:url(asset_main/assets/img/illustrations/feature-bg-2.png);background-position:center;background-size:cover;">
                            </div>
                            <!--/.bg-holder-->

                            <div class="col-md-4 pe-0 pe-md-0 text-center"><img class="img-fluid" src="{{asset('asset_main/assets/img/illustrations/feature-search.png')}}" alt="" /></div>
                            <div class="col-md-8 ps-md-3 pe-md-2 text-center text-md-start z-index-2">
                                <div class="card-body px-0">
                                    <h4 class="card-title pt-md-5">Search Data</h4>
                                    <p class="mb-0">Don’t worry if your data is very <br class="d-none d-lg-block"> large, the Data Warehoue <br class="d-none d-lg-block"> provides a search engine, <br class="d-none d-lg-block"> which is useful for making it <br class="d-none d-lg-block"> easier to find data effectively<br class="d-none d-lg-block">saving time. </p>
                                    <div><a class="btn btn-lg ps-0 pe-3" href="#" role="button">Learn more</a>
                                        <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9C69E2" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card px-5 px-md-3 py-lg-5">
                        <div class="row flex-center">
                            <div class="bg-holder z-index-1 d-none d-lg-block" style="background-image:url(asset_main/assets/img/illustrations/feature-bg-2.png);background-position:center;background-size:contain;">
                            </div>
                            <!--/.bg-holder-->

                            <div class="bg-holder z-index-1 d-block d-lg-none" style="background-image:url(asset_main/assets/img/illustrations/feature-bg-2.png);background-position:center;background-size:cover;">
                            </div>
                            <!--/.bg-holder-->

                            <div class="col-md-4 pe-0 pe-md-0 text-center"><img class="img-fluid" src="{{asset('asset_main/assets/img/illustrations/feature-hour.png')}}" alt="" /></div>
                            <div class="col-md-8 ps-md-3 pe-md-2 text-center text-md-start z-index-2">
                                <div class="card-body px-0">
                                    <h4 class="card-title pt-md-5">24 Hours Access </h4>
                                    <p class="mb-0">Don’t worry if your data is very <br class="d-none d-lg-block"> large, the Data Warehoue <br class="d-none d-lg-block"> provides a search engine, <br class="d-none d-lg-block"> which is useful for making it <br class="d-none d-lg-block"> easier to find data effectively<br class="d-none d-lg-block">saving time. </p>
                                    <div><a class="btn btn-lg ps-0 pe-3" href="#" role="button">Learn more</a>
                                        <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9C69E2" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card px-5 px-md-3 py-lg-5">
                        <div class="row flex-center">
                            <div class="bg-holder z-index-1 d-none d-lg-block" style="background-image:url(asset_main/assets/img/illustrations/feature-bg-3.png);background-position:center;background-size:contain;">
                            </div>
                            <!--/.bg-holder-->

                            <div class="bg-holder z-index-1 d-block d-lg-none" style="background-image:url(asset_main/assets/img/illustrations/feature-bg-3.png);background-position:center;background-size:cover;">
                            </div>
                            <!--/.bg-holder-->

                            <div class="col-md-4 pe-0 pe-md-0 text-center"><img class="img-fluid" src="{{asset('asset_main/assets/img/illustrations/feature-print.png')}}" alt="" /></div>
                            <div class="col-md-8 ps-md-3 pe-md-2 text-center text-md-start z-index-2">
                                <div class="card-body px-0">
                                    <h4 class="card-title pt-md-5">Print Out</h4>
                                    <p class="mb-0">Don’t worry if your data is very <br class="d-none d-lg-block"> large, the Data Warehoue <br class="d-none d-lg-block"> provides a search engine, <br class="d-none d-lg-block"> which is useful for making it <br class="d-none d-lg-block"> easier to find data effectively<br class="d-none d-lg-block">saving time. </p>
                                    <div><a class="btn btn-lg ps-0 pe-3" href="#" role="button">Learn more</a>
                                        <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9C69E2" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card px-5 px-md-3 py-lg-5">
                        <div class="row flex-center">
                            <div class="bg-holder z-index-1 d-none d-lg-block" style="background-image:url(asset_main/asset_main/assets/img/illustrations/feature-bg-4.png);background-position:center;background-size:contain;">
                            </div>
                            <!--/.bg-holder-->

                            <div class="bg-holder z-index-1 d-block d-lg-none" style="background-image:url(asset_main/asset_main/assets/img/illustrations/feature-bg-4.png);background-position:center;background-size:cover;">
                            </div>
                            <!--/.bg-holder-->

                            <div class="col-md-4 pe-0 pe-md-0 text-center"><img class="img-fluid" src="{{asset('asset_main/assets/img/illustrations/feature-security.png')}}" alt="" /></div>
                            <div class="col-md-8 ps-md-3 pe-md-2 text-center text-md-start z-index-2">
                                <div class="card-body px-0">
                                    <h4 class="card-title pt-md-5">Security Code</h4>
                                    <p class="mb-0">Don’t worry if your data is very <br class="d-none d-lg-block"> large, the Data Warehoue <br class="d-none d-lg-block"> provides a search engine, <br class="d-none d-lg-block"> which is useful for making it <br class="d-none d-lg-block"> easier to find data effectively<br class="d-none d-lg-block">saving time. </p>
                                    <div><a class="btn btn-lg ps-0 pe-3" href="#" role="button">Learn more</a>
                                        <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9C69E2" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@stop
