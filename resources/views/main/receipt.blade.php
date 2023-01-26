@extends('admin_dashboard.layouts.master2')

@section('title','Print Invoice')
@section('name-header','Print Invoice')

@section('css')
    <style>
        @media print {
            #print_Button{
                display: none;
            }

            .img {
                margin-top: -130px;
            }

            .bod {
                border-bottom: 3px solid black;
            }

        }
    </style>

@endsection

@section('content')
<div class="container mt-4">
    <!-- row -->
    <div class="row ">
        <div class="col-md-12 col-xl-12">
            <div class=" main-content-body-invoice" id="print">
                <div class="card card-invoice">
                    <div class="card-body bod">
                        <div class="invoice-header border-bottom">
                            <div class="col-sm-4 text-left ">
                                <img  src="{{asset('assets_admin_dashboard/img/Stamp.png')}}" width="100px" height="100px">

                            </div>
                            <div class="col-sm-4 text-center ">
                                <h2> سند قبض</h2>
                                <h2>RECEIPT INVOICE</h2>
                            </div>
                            <div class="col-sm-4 ">
                                <h2>شركة فواتيري </h2>
                                <h2>لتحصيل جميع المعاملات</h2>
                            </div>

                        </div>

                        <div class="row mt-4 align-items-center">
                            <div class="col-sm-4  d-flex align-items-center">
                                <h4> رقم الفاتورة :</h4>
                                <h3 class=" mr-2 ">{{$details->invoice->invoice_number}}</h3>
                            </div>
                            <div class="col-sm-4  text-center">
                                   <h4 class="text-danger">
                            {!! QrCode::color(255, 0, 0, 100)->size(70)->style('square')->generate($transaction_id); !!}
                                   </h4>
                            </div>
                            <div class="col-sm-4  text-md-right d-flex">
                                <h4> تاريخ الاستلام  :</h4>
                                 <h5>{{date('Y/m/d')}}</h5>
                            </div>

                        </div>

                        <div class="row mt-4 align-items-center d-flex">
                            <div class="col-sm-3">
                                <h4>  أسم الشركة او المؤوسسة :</h4>
                            </div>
                            <div class="col-sm-9  border-bottom">
                                <h4 class="">{{$details->section->section_name}}</h4>
                            </div>
                        </div>
                        <div class="row mt-4 align-items-center d-flex">
                            <div class="col-sm-3">
                                <h4>المبلغ وقدره :</h4>
                            </div>
                            <div class="col-sm-9  border-bottom">
                                <h4 class=""> {{$details->invoice->total}} <span >دولارا</span></h4>
                            </div>

                            <img class="pos-lg-fixed img " style="margin-right:60% ; "  src="{{asset('assets_admin_dashboard/img/Stamp.png')}}" width="200px" height="200px">
                        </div>
                        <hr class="mg-b-40 " style="margin-top: 100px;">

                        <button class="btn btn-danger  float-left mt-3 mr-2" id="print_Button" onclick="printDiv()"> <i
                                class="mdi mdi-printer ml-1"></i>طباعة</button>

                        <a href="{{route('main.index')}}" class="btn btn-success float-left mt-3" id="print_Button">
                            <i class="mdi mdi-telegram ml-1"></i> العودة لصفحة الرئيسية
                        </a>

                        <a href="{{route('review',$details->section->section_name)}}" class="btn btn-warning  float-left mt-3 ml-2 text-white " id="print_Button" > <i
                                class="mdi mdi-star ml-1"></i>تقيم شكركة فواتيري</a>


                        <p id="print_Button" class="text-danger">* ملاحضة : عليك طباعة سند قبض ان حصل خطأ في عملية دفع لتتمكن من المراجعة</p>
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
@endsection

@section('js')
    <!--Internal  Chart.bundle js -->
    <script src="{{asset('assets_admin_dashboard/plugins/chart.js/Chart.bundle.min.js')}}"></script>

    <script type="text/javascript">
        function printDiv() {
            var printContents = document.getElementById('print').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>

@endsection
