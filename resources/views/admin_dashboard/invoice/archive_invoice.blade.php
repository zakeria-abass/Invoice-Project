@extends('admin_dashboard.layouts.master')

@section('title','Archive Invoice')
@section('name-header','Archive Invoice')

@section('css')
    <!-- Internal Data table css -->
    <link href="{{asset('assets_admin_dashboard/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets_admin_dashboard/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets_admin_dashboard/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets_admin_dashboard/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets_admin_dashboard/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets_admin_dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection

@section('content')
    <!-- row -->
    <div class="row row-sm">

        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">#</th>
                                <th class="wd-15p border-bottom-0">رقم الفاتورة</th>
                                <th class="wd-20p border-bottom-0">تاريخ الفاتورة</th>
                                <th class="wd-15p border-bottom-0">تاريخ الاستحقاق</th>
                                <th class="wd-25p border-bottom-0">القسم</th>
                                <th class="wd-10p border-bottom-0">المنتج</th>
                                <th class="wd-20p border-bottom-0">الخصم</th>
                                <th class="wd-15p border-bottom-0">نسبة الضريبة</th>
                                <th class="wd-10p border-bottom-0">الاجمالي</th>
                                <th class="wd-25p border-bottom-0">الحالة</th>
                                <th class="wd-25p border-bottom-0">ملاحضات</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $i=1 ?>

                            @foreach($Invoices as $Invoice)
                                <tr>
                                    <td>{{$i ++}}</td>
                                    <td>
                                        <a href="{{route('details.edit',$Invoice->id)}}">
                                            {{$Invoice->invoice_number}}
                                        </a>


                                    </td>
                                    <td>{{$Invoice->invoice_date}}</td>
                                    <td>{{$Invoice->due_date}}</td>
                                    <td>{{$Invoice->section->section_name}}</td>
                                    <td>{{$Invoice->product}}</td>
                                    <td>{{$Invoice->discount}}</td>
                                    <td>{{$Invoice->rate_vat}}</td>
                                    <td>{{$Invoice->total}}</td>

                                    <td >
                                        <span class="{{$Invoice->status == 1?' text-success':''}}">{{$Invoice->status == 1?' مدفوعة':''}}</span>
                                        <span class="{{$Invoice->status == 2?'text-danger':''}}">{{$Invoice->status == 2?'غير مدفوعة':''}}</span>
                                        <span class="{{$Invoice->status == 3?' text-warning':''}}">{{$Invoice->status == 3?'مدفوعة جزئيأ':''}}</span>
                                    </td>
                                    <td>{{$Invoice->note}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
                                            </button>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" data-effect="effect-scale" data-toggle="modal" href="#back{{$Invoice->id}}">استرجاع</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item bg-danger text-white"  data-effect="effect-scale" data-toggle="modal" href="#delete_all{{$Invoice->id}}"> حدف</a>

                                            </div>
                                        </div>

                                        <!-- back modal -->
                                        <div class="modal" id="back{{$Invoice->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content modal-content-demo">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title">استعادة</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label>هل انتا متأكد من استعادة الفاتورة  ؟</label>
                                                        <input  disabled type="text" class="form-control" name="section_name" value="{{$Invoice->invoice_number}}" required>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{route('archive.update',$Invoice->id)}}" method="post">
                                                            @csrf
                                                            @method('put')
                                                            <button class="btn ripple btn-danger" type="submit">OK</button>
                                                        </form>
                                                        <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End back modal -->

                                        <!-- delete_all modal -->
                                        <div class="modal" id="delete_all{{$Invoice->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content modal-content-demo">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title">تعديل قسم </h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label>هل انتا متأكد من حدف فاتورة ؟</label>
                                                        <input  disabled type="text" class="form-control" name="section_name" value="{{$Invoice->invoice_number}}" required>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{route('archive.destroy',$Invoice->id)}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn ripple btn-danger" type="submit">delete</button>
                                                        </form>
                                                        <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End delet modal -->

                                    </td>

                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
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
    <script src="{{asset('assets_admin_dashboard/js/table-data.js')}}"></script>
@endsection
