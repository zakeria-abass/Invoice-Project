@extends('admin_dashboard.layouts.master')

@section('title','Add Invoice')
@section('name-header','Add Invoice')

@section('css')
    <!--- Internal Select2 css-->
    <link href="{{asset('assets_admin_dashboard/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{asset('assets_admin_dashboard/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="{{asset('assets_admin_dashboard/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{asset('assets_admin_dashboard/plugins/sumoselect/sumoselect-rtl.css') }}">
    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="{{asset('assets_admin_dashboard/plugins/telephoneinput/telephoneinput-rtl.css') }}">
@endsection
@section('content')
    <!-- row -->
    <div class="row row-sm">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('payment_update',$invoices->id)}}" method="post" enctype="multipart/form-data"
                          autocomplete="off">
                        @csrf
                        {{-- 1 --}}

                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">رقم الفاتورة</label>
                                <input type="text" class="form-control" id="inputName" name="invoice_number"
                                       value="{{$invoices->invoice_number}}" readonly>
                            </div>

                            <div class="col">
                                <label>تاريخ الفاتورة</label>
                                <input class="form-control " name="invoice_Date"
                                       type="text" value="{{$invoices->	invoice_date}}" readonly>
                            </div>

                            <div class="col">
                                <label>تاريخ الاستحقاق</label>
                                <input class="form-control fc-datepicker" readonly name="Due_date" value="{{$invoices->due_date}}"
                                       type="date" >
                            </div>

                        </div>

                        {{-- 2 --}}
                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">القسم</label>
                                <select name="Section" class="form-control SlectBox" readonly>
                                    <!--placeholder-->
                                        <option  value="{{$invoices->section->id}}">{{$invoices->section->section_name}}</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">المنتج</label>
                                <input type="text" readonly value="{{$invoices->product}}" name="product" class="form-control">
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">مبلغ التحصيل</label>
                                <input type="text" readonly class="form-control" id="inputName" value="{{$invoices->amount_collection}}" name="Amount_collection">
                            </div>
                        </div>


                        {{-- 3 --}}

                        <div class="row">

                            <div class="col">
                                <label for="inputName" class="control-label">مبلغ العمولة</label>
                                <input type="text" class="form-control form-control-lg" id="Amount_Commission"
                                       readonly  name="Amount_Commission" value="{{$invoices->amount_commission}}"
                                       >
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">الخصم</label>
                                <input type="text" class="form-control form-control-lg" id="Discount" name="Discount"
                                       readonly title="يرجي ادخال مبلغ الخصم " value="{{$invoices->discount}}" >
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">نسبة ضريبة القيمة المضافة</label>
                                <input type="text" class="form-control form-control-lg" id="Discount" name="Rate_VAT"
                                       readonly title="يرجي ادخال مبلغ الخصم " value="{{$invoices->rate_vat}}" >
                            </div>

                        </div>

                        {{-- 4 --}}

                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">قيمة ضريبة القيمة المضافة</label>
                                <input type="text" class="form-control" id="Value_VAT" value="{{$invoices->value_vat}}" name="Value_VAT" readonly>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">الاجمالي شامل الضريبة</label>
                                <input type="text" class="form-control" id="Total" name="Total" value="{{$invoices->total}}" readonly >
                            </div>
                        </div>

                        {{-- 5 --}}
                        <div class="row">
                            <div class="col">
                                <label for="exampleTextarea">ملاحظات</label>
                                <textarea class="form-control" id="exampleTextarea" name="note" rows="3" readonly>{{$invoices->note}}</textarea>
                            </div>
                        </div><br>

                        <br>

                        {{-- 6 --}}

                        <div class="row">
                            <div class="col">
                                <label for="exampleTextarea">حالة الدفع</label>
                                <select name="status" class="form-control SlectBox mt-1">
                                    <!--placeholder-->
                                    <option value="" selected disabled>-- اختر --</option>
                                    <option value="1">مدفوعة</option>
                                    <option value="3">مدفوعة جزئيا</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label text-danger">* ان تم سداد جزء من المبلغ يرجا وضع المبلغ المقبوض</label>
                                <input type="text" class="form-control" name="residual" placeholder=" ان تم سداد جزء من المبلغ يرجا وضع المبلغ المقبوض" >
                            </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">حفظ البيانات</button>
                        </div>


                    </form>
                </div>

    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection

@section('js')
    <!-- Internal Select2 js-->
    <script src="{{asset('assets_admin_dashboard/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{asset('assets_admin_dashboard/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!--Internal Fancy uploader js-->
    <script src="{{asset('assets_admin_dashboard/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{asset('assets_admin_dashboard/js/advanced-form-elements.js') }}"></script>
    <script src="{{asset('assets_admin_dashboard/js/select2.js') }}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{asset('assets_admin_dashboard/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{asset('assets_admin_dashboard/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{asset('assets_admin_dashboard/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{asset('assets_admin_dashboard/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
    <!-- Internal form-elements js -->
    <script src="{{asset('assets_admin_dashboard/js/form-elements.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('select[name="Section"]').on('change', function() {
                var SectionId = $(this).val();
                if (SectionId) {
                    $.ajax({
                        url: "{{ URL::to('dashboard/section') }}/" + SectionId,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="product"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="product"]').append('<option value="' +
                                    value + '">' + value + '</option>');
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>
    <script>
        function myFunction() {
            var Amount_Commission = parseFloat(document.getElementById("Amount_Commission").value);
            var Discount = parseFloat(document.getElementById("Discount").value);
            var Rate_VAT = parseFloat(document.getElementById("Rate_VAT").value);
            var Value_VAT = parseFloat(document.getElementById("Value_VAT").value);
            var Amount_Commission2 = Amount_Commission - Discount;
            if (typeof Amount_Commission === 'undefined' || !Amount_Commission) {
                alert('يرجي ادخال مبلغ العمولة ');
            } else {
                var intResults = Amount_Commission2 * Rate_VAT / 100;
                var intResults2 = parseFloat(intResults + Amount_Commission2);
                sumq = parseFloat(intResults).toFixed(2);
                sumt = parseFloat(intResults2).toFixed(2);
                document.getElementById("Value_VAT").value = sumq;
                document.getElementById("Total").value = sumt;
            }
        }
    </script>

@stop
