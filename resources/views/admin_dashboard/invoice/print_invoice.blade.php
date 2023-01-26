@extends('admin_dashboard.layouts.master')

@section('title','Print Invoice')
@section('name-header','Print Invoice')

@section('css')
    <style>
        @media print {
            #print_Button {
                display: none;
            }
        }
    </style>
@endsection

@section('content')

    <!-- row -->
    <div class="row ">
        <div class="col-md-12 col-xl-12">
            <div class=" main-content-body-invoice" id="print">
                <div class="card card-invoice">
                    <div class="card-body">
                        <div class="invoice-header align-items-center">
                            <h1 class="invoice-title">فاتورة التحصيل</h1>

                            <div class="billed-from d-flex align-items-center">
                                    <img  src="{{asset('assets_admin_dashboard/img/Stamp.png')}}" width="100px" height="100px">
                                <h2 class="invoice-title  mr-2">شركة فواتيري</h2>
                            </div><!-- billed-from -->
                        </div><!-- invoice-header -->
                        <div class="row mg-t-20">
                            <div class="col-md">
                                <div class="billed-to">
                                        جوال :0597768366<br>
                                    <h6>الايميل :youremail@companyname.com</h6>

                                     </p>
                                </div>
                            </div>
                            <div class="col-md">
                                <label class="tx-gray-600">معلومات الفاتورة </label>
                                <p class="invoice-info-row"><span> رقم الفاتورة :</span> <span>{{$print->invoice_number}}</span></p>
                                <p class="invoice-info-row"><span>تاريخ الاصدار :</span> <span>{{date('Y/m/d')}}</span></p>
                                <p class="invoice-info-row"><span>تاريخ الاستحقاق :</span> <span>{{$print->due_date}}</span></p>
                                <p class="invoice-info-row"><span>القسم :</span> <span>{{$print->section->section_name}}</span></p>
                            </div>
                        </div>
                        <div class="table-responsive mg-t-40">
                            <table class="table table-invoice border text-md-nowrap mb-0">
                                <thead>
                                <tr>
                                    <th class="wd-20p">#</th>
                                    <th class="wd-40p">المنتج</th>
                                    <th class="tx-center">مبلغ التحصيل</th>
                                    <th class="tx-right">مبلغ العمولة</th>
                                    <th class="tx-right">الاجمالي</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $total=$print->amount_collection + $print->amount_commission  ?>
                                <tr>
                                    <td>1</td>
                                    <td class="tx-12">{{$print->product}}</td>
                                    <td class="tx-center">{{number_format($print->amount_collection,2)}}</td>
                                    <td class="tx-right">{{number_format($print->amount_commission,2)}}</td>


                                    <td class="tx-right">
                                         {{number_format($total,1)}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="valign-middle " colspan="2" rowspan="4">

                                        <div class="d-flex">
                                            <div class="invoice-notes ">
                                                <label class="main-content-label tx-13">دفع الفاتورة ببطاقة الانتماء</label>
                                                <div>
                                                    {!! QrCode::size(100)->eyeColor(0, 19, 94, 147, 0, 1, 2)->eyeColor(1, 19, 94, 147, 0, 1, 2)
                                                          ->eyeColor(2, 19, 94, 147, 0, 1, 2)->style('square')->generate(route('check_out',$print->id)); !!}

                                                </div>
                                            </div><!-- invoice-notes -->

                                            <div class="invoice-notes  text-center">
                                                <label class="main-content-label tx-13">التحقق من الفاتورة</label>
                                                <div>
                                        {!! QrCode::size(100)->eyeColor(0, 243, 202, 23)->eyeColor(1, 243, 202, 23)
                                                          ->eyeColor(2, 243, 202, 23)->style('square')->generate(route('check_invoice',$print->id))!!}

                                                </div>
                                            </div><!-- invoice-notes -->
                                        </div>
                                    </td>

                                    <td class="tx-right">الاجمالي</td>
                                    <td class="tx-right" colspan="2">
                                        {{number_format($total)}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tx-right">نسبة الضريبة </td>
                                    <td class="tx-right" colspan="2">{{$print->rate_vat}}</td>
                                </tr>
                                <tr>
                                    <td class="tx-right">قيمة الخصم</td>
                                    <td class="tx-right" colspan="2">{{number_format($print->discount ,2)}}</td>

                                </tr>
                                <tr>
                                    <td class="tx-right tx-uppercase tx-bold tx-inverse">الاجمالي شامل الضريبة</td>
                                    <td class="tx-right" colspan="2">
                                        <h4 class="tx-primary tx-bold">{{number_format($total)}}</h4>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <hr class="mg-b-40">

                        <button class="btn btn-danger  float-left mt-3 mr-2" id="print_Button" onclick="printDiv()"> <i
                                class="mdi mdi-printer ml-1"></i>طباعة</button>

                        <a href="#" class="btn btn-success float-left mt-3" id="print_Button">
                            <i class="mdi mdi-telegram ml-1"></i>Send Invoice
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- COL-END -->
    </div>
    <!-- row closed -->
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
            location.reload();
        }
    </script>

@endsection
