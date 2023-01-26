@extends('admin_dashboard.layouts.master')

@section('title','Sections')
@section('name-header','Sections')
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
        @if(session('sections'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{session('sections')}}</strong>
            </div>
        @endif

            @if(session('edit'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{session('edit')}}</strong>
            </div>
        @endif

            @if(session('delete'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{session('delete')}}</strong>
            </div>
        @endif

            @error('section_name')
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{__('تم استخدام اسم القسم بالفعل.')}}</strong>
            </div>            @enderror
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-4 col-md-2 col-xl-2">
                            <a class="modal-effect btn btn-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo1">أضافة قسم</a>
                        </div>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>

                 </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">#</th>
                                <th class="wd-15p border-bottom-0">أسم القسم</th>
                                <th class="wd-20p border-bottom-0">الوصف</th>
                                <th class="wd-15p border-bottom-0">العمليات</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $in=1  ?>
                            @foreach($sections as $section)

                                <tr>
                                    <td>{{$in ++}}</td>
                                    <td>{{$section->section_name}}</td>
                                    <td>{{$section->descripion}}</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info"
                                                    data-toggle="dropdown" type="button"><i class="fas fa-caret-down ml-1"></i></button>
                                            <div class="dropdown-menu tx-13">

                                                <a class="dropdown-item"  data-effect="effect-scale" data-toggle="modal" href="#delete{{$section->id}}">حدف</a>

                                                <div class="dropdown-divider"></div>

                                                    <a class="dropdown-item"  data-effect="effect-scale" data-toggle="modal" href="#sections{{$section->id}}">تعديل</a>

                                            </div>
                                        </div>

                                    </td>

                                    <!-- delete modal -->
                                    <div class="modal" id="delete{{$section->id}}">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content modal-content-demo">
                                                <div class="modal-header">
                                                    <h6 class="modal-title">تعديل قسم </h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                        <label>هل انتا متأكد من حدف قسم ؟</label>
                                                        <input  disabled type="text" class="form-control" name="section_name" value="{{$section->section_name}}" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{route('sections.destroy',$section->id)}}" method="post">
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

                                    <!-- Edeit modal -->
                                    <div class="modal" id="sections{{$section->id}}">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content modal-content-demo">
                                                <div class="modal-header">
                                                    <h6 class="modal-title">تعديل قسم </h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="{{route('sections.update',$section->id)}}" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <label>أسم القسم</label>
                                                        <input type="text" class="form-control" name="section_name" value="{{$section->section_name}}" required>


                                                        <label>وصف القسم</label>
                                                        <textarea class="form-control" name="descripion">{{$section->descripion}}</textarea>

                                                    @error('descripion')
                                                    {{$message}}
                                                    @enderror


                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn ripple btn-primary" type="submit">Save changes</button>
                                                    </form>
                                                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Edeit modal -->
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



    <!-- Basic modal -->
    <div class="modal" id="modaldemo1">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">أضافة قسم</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <form action="{{route('sections.store')}}" method="post">
                        @csrf
                        <label>أسم القسم</label>
                        <input type="text" class="form-control" name="section_name" required>


                        <label>وصف القسم</label>
                        <textarea class="form-control" name="descripion"></textarea>

                        @error('descripion')
                    {{$message}}
                    @enderror


                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-primary" name="submit">Save changes</button>
                    </form>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- End Basic modal -->

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

