@extends('admin_dashboard.layouts.master2')

@section('title','payment')
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
<div class="container mt-4">
    <!-- row -->
    <div class="row bg-white">
        <div class="col-md-6">
            <a href="{{route('main.index')}}" class="btn btn-warning mt-2">الصفحة الرئسية</a>

            <div class="row mb-5 mt-3">
                <div class="col-md-12">
                    <div class="p-3 p-lg-5 border">
                        <table class="table site-block-order-table mb-5">
                            <thead>
                            <tr><th>رقم الفاتورة</th>
                                <th>المجموع الجمالي</th>
                            </tr></thead>
                            <tbody>

                            <tr>
                                <td class="product-name">
                                    <h2 class="h5 text-black">{{$Invoice->invoice_number}}</h2>
                                </td>
                                <td class="product-name">
                                    <h2 class="h5 text-black">{{$Invoice->total}}</h2>
                                </td>

                            </tr>

                            </tbody>
                        </table>

                        <div class="border p-3 mb-3">
                            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                            <div class="collapse" id="collapsebank">
                                <div class="py-2">
                                    <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                </div>
                            </div>
                        </div>

                        <div class="border p-3 mb-3">
                            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

                            <div class="collapse" id="collapsecheque">
                                <div class="py-2">
                                    <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                </div>
                            </div>
                        </div>

                        <div class="border p-3 mb-5">
                            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                            <div class="collapse" id="collapsepaypal">
                                <div class="py-2">
                                    <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='thankyou.html'">Place Order</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 mb-5 mb-md-0">
            <div class="p-3 p-lg-5 border mt-5">
                <script src="https://eu-test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$id}}"></script>
                <form action="{{route('payment_payment',$Invoice->id)}}" class="paymentWidgets"
                      data-brands="VISA MASTER AMEX MADA"></form>


            </div>
        </div>


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
            location.reload();
        }
    </script>

@endsection
