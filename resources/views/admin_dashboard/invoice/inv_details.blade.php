@extends('admin_dashboard.layouts.master')

@section('title','Invoice Details')
@section('name-header','Invoice Details')

@section('css')
    <!-- Internal Data table css -->
    <link href="{{asset('assets_admin_dashboard/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets_admin_dashboard/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets_admin_dashboard/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets_admin_dashboard/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets_admin_dashboard/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets_admin_dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--- Internal Sweet-Alert css-->
    <link href="{{asset('assets_admin_dashboard/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">
@endsection

@section('content')
    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <!-- div -->
            <div class="card" id="tabs-style4">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        رقم الفاتورة/{{$Invoices->invoice_number}}
                    </div>

                    <div class="panel panel-primary tabs-style-2 mt-5">
                        <div class=" tab-menu-heading">
                            <div class="tabs-menu1">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs main-nav-line">
                                    <li><a href="#tab4" class="nav-link active" data-toggle="tab">معلومات الفاتورة</a></li>
                                    <li><a href="#tab5" class="nav-link" data-toggle="tab">حالات الدفع</a></li>
                                    <li><a href="#tab6" class="nav-link" data-toggle="tab">المرفقات</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body tabs-menu-body main-content-body-right border">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab4">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mg-b-0 text-md-nowrap">
                                                <tbody>
                                                <tr>
                                                    <td class="bg-primary text-white">رقم الفاتورة</td>
                                                    <td>{{$Invoices->invoice_number}}</td>
                                                    <td class="bg-primary text-white">تاريخ الاصدار</td>
                                                    <td>{{$Invoices->invoice_date}}</td>
                                                    <td class="bg-primary text-white">تاريخ الاستحقاق</td>
                                                    <td>{{$Invoices->due_date}}</td>
                                                    <td class="bg-primary text-white">القسم</td>
                                                    <td>{{$Invoices->section->section_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-primary text-white">المنتج</td>
                                                    <td>{{$Invoices->product}}</td>
                                                    <td class="bg-primary text-white">مبلغ التحصيل</td>
                                                    <td>{{$Invoices->amount_collection}}</td>
                                                    <td class="bg-primary text-white">مبلغ العمولة</td>
                                                    <td>{{$Invoices->amount_commission}}</td>
                                                    <td class="bg-primary text-white">الخصم</td>
                                                    <td>{{$Invoices->discount}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-primary text-white">نسبة الضريبة</td>
                                                    <td>{{$Invoices->rate_vat}}</td>
                                                    <td class="bg-primary text-white">قيمة الضريبة</td>
                                                    <td>{{$Invoices->value_vat}}</td>
                                                    <td class="bg-primary text-white">الاجمالي مع الضريبة</td>
                                                    <td>{{$Invoices->total}}</td>
                                                    <td class="bg-primary text-white">حالة الدفع</td>
                                                    <td >
                                                        <span class="{{$Invoices->status == 1?' text-success':''}}">{{$Invoices->status == 1?' مدفوعة':''}}</span>
                                                        <span class="{{$Invoices->status == 2?'text-danger':''}}">{{$Invoices->status == 2?'غير مدفوعة':''}}</span>
                                                        <span class="{{$Invoices->status == 3?' text-warning':''}}">{{$Invoices->status == 3?'مدفوعة جزئيأ':''}}</span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="bg-primary text-white">المستخدم</td>
                                                    <td>{{$Invoices->user}}</td>
                                                    <td class="bg-primary text-white">ملاحضات</td>
                                                    <td>{{$Invoices->note}}</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane" id="tab5">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mg-b-0 text-md-nowrap">
                                                <thead>
                                                <tr>
                                                    <th>رقم الفاتورة</th>
                                                    <th>نوع المنتج</th>
                                                    <th>القسم</th>
                                                    <th>حالة الدفع</th>
                                                    <th>تاريخ الدفع</th>
                                                    <th> المبلغ المتبقي</th>
                                                    <th>ملاحضات</th>
                                                    <th>تاريخ الاضافة</th>
                                                    <th>المستخدم</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($Details as $Detail)
                                                    <tr>
                                                        <td>{{$Detail->invoice->invoice_number}}</td>
                                                        <td>{{$Detail->product}}</td>
                                                        <td>{{$Detail->section->section_name}}</td>
                                                        <td >
                                                            <span class="{{$Detail->status == 1?' text-success':''}}">{{$Detail->status == 1?' مدفوعة':''}}</span>
                                                            <span class="{{$Detail->status == 2?'text-danger':''}}">{{$Detail->status == 2?'غير مدفوعة':''}}</span>
                                                            <span class="{{$Detail->status == 3?' text-warning':''}}">{{$Detail->status == 3?'مدفوعة جزئيأ':''}}</span>
                                                        </td>
                                                        <td>{{$Detail->payment_date}}</td>
                                                        <td>
                                                            @if($Detail->residual)
                                                               {{$Invoices->total - $Detail->residual}}

                                                            @endif
                                                        </td>
                                                        <td>{{$Detail->note}}</td>
                                                        <td>{{$Detail->created_at}}</td>
                                                        <td>{{$Detail->name_user}}</td>
                                                    </tr>

                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab6">
                                    <div class="col-sm-12">
                                        <form action="{{route('add_details',$Invoices->id)}}" method="post" enctype="multipart/form-data" >
                                            @csrf
                                            <p>Custom file:</p>
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input" id="customFile" name="pic">
                                                <label class="custom-file-label col-sm-8" for="customFile">Choose file</label>
                                            </div>
                                            <button class="btn btn-primary " type="submit"><i class="fa fa-upload"></i></button>
                                        </form>
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mg-b-0 text-md-nowrap">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th> اسم الملف</th>
                                                    <th>تم رقعه بواسطة</th>
                                                    <th> تاريخ الاضافة</th>
                                                    <th> العمليات</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $i=1 ?>

                                                @foreach($Attachments as $Attachment)
                                                    <tr>

                                                        <td>{{$i ++}}</td>
                                                        <td>{{$Attachment->file_name}}</td>
                                                        <td>{{$Attachment->name_user}}</td>
                                                        <td>{{$Attachment->created_at}}</td>
                                                        <td>
                                                            <a class="btn btn-info" href="{{asset('Attachments/'.$Attachment->invoice->invoice_number."/".$Attachment->file_name)}}">
                                                                <i class="fa fa-download"></i>
                                                            </a>
                                                     <!============================================================================>
                                                            <a class="btn btn-warning" href="#">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                         <!============================================================================>

                                                                <a  data-target="#modaldemo{{$Attachment->id}}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-blind"></i></a>

                                                        </td>
                                                    </tr>

                                                    <div class="modal" id="modaldemo{{$Attachment->id}}">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content tx-size-sm">
                                                                <div class="modal-body tx-center pd-y-20 pd-x-20">
                                                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> <i class="icon icon ion-ios-close-circle-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                                                                    <h4 class="tx-danger mg-b-20">تحدير:هل انتا متأكد من الحدف ؟</h4>
                                                                    <p class="mg-b-20 mg-x-20">يمكنك التراجع عن عملية الحدف بضفط علا الغاء!</p>

                                                                    <form action="{{route('details.destroy',$Attachment->id)}}" method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button aria-label="Close" class="btn ripple btn-warning pd-x-25" data-dismiss="modal" type="button">الغاء</button>
                                                                        <button class="btn ripple btn-danger pd-x-25"  type="submit"  id='swal-success'>تأكيد</button>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /div -->
            </div>
        </div>
    </div>

    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection

@section('js')
    <!-- Internal Data tables -->
    <script src="{{asset('assets_admin_dashboard/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <!--Internal  Sweet-Alert js-->
    <script src="{{asset('assets_admin_dashboard/plugins/sweet-alert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/plugins/sweet-alert/jquery.sweet-alert.js')}}"></script>
    <!-- Sweet-alert js  -->
    <script src="{{asset('assets_admin_dashboard/plugins/sweet-alert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/js/sweet-alert.js')}}"></script>
    <script src="{{asset('assets_admin_dashboard/js/table-data.js')}}"></script>

    <script>


        //Success Message
        $('#swal-success').click(function () {
            swal(
                {
                    title: 'تم بنجاح',
                    text: 'تم بنجاح حدف العنصر',
                    type: 'success',
                    confirmButtonColor: '#57a94f'
                }
            )
        });
    </script>


    <script>
        //fille uploud
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endsection
