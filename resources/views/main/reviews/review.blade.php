@extends('admin_dashboard.layouts.master2')


@section('content')

    <div class="container mt-4">
        <!-- row -->
        <div class="row ">
            <div class="col-md-12 col-xl-12">
                <div class=" main-content-body-invoice" id="print">
                    <div class="card card-invoice">
                        <div class="card-body bod">
                            <div class="invoice-header border-bottom">
                                <div class="col-sm-12 text-center ">
                                     <h2 class="text-success">شكرا لتعاملك معنا يرجي تقيمنا لتحسين برنامجنا</h2>
                                </div>
                            </div>


                            <div class="container mt-5">
                                <form action="{{route('store')}}" method="post">
                                    @csrf
                                    <div class="row">

                                        <div class="col-sm-6">

                                            <input type="text" class="form-control" name="star">
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="text" hidden class="form-control" name="name" value="{{$id}}" >
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mt-3">
                                        <h2>كيف كانت تجربتك معنا : </h2>
                                        <textarea class="form-control" name="body"  rows="10"></textarea>
                                        <p>
                                            @error('body')
                                            {{$message}}
                                            @enderror
                                        </p>
                                    </div>

                                    <div class="col-sm-12 mt-3">
                                        <button class="btn btn-primary col-sm-6" type="submit">sed</button>

                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- COL-END -->
        </div>

        <!-- row closed -->
    </div>

    </div>
    <!-- Container closed -->

    </div>
    <!-- main-content closed -->

@stop

