@extends('admin_dashboard.layouts.master')

@section('title','User')
@section('name-header','Users')
@section('css')
@endsection

@section('content')
    <!--Row-->
    <div class="row row-sm">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">USERS TABLE</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>

                    <div class="col-sm-4 col-md-2 col-xl-2 mt-3">
                        <a class="modal-effect btn btn-primary btn-block" href="{{route('user.create')}}">أضافة مستخدمين</a>
                    </div>

                    <div class="col-sm-12 mt-3">
                        <form method="get" class="d-flex">
                            <input type="text" class="form-control col-sm-8" name="search" value="{{request()->search}}" >
                            <button class="btn btn-primary-gradient col-sm-2">Search</button>
                        </form>
                          @error('search')
                               {{$message}}
                          @enderror
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive border-top userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                            <thead>
                            <tr>
                                <th class="wd-lg-8p"><span>#</span></th>
                                <th class="wd-lg-20p"><span>صور المستخدمين</span></th>
                                <th class="wd-lg-20p"><span>الاسم</span></th>
                                <th class="wd-lg-20p"><span>تاريخ التسجيل</span></th>
                                <th class="wd-lg-20p"><span>حالة المستخدم</span></th>
                                <th class="wd-lg-20p"><span>الايميل</span></th>
                                <th class="wd-lg-20p">العمليات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if($users->count() >0)
                             <?php $i=1 ?>
                            @foreach($users as $user)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>
                                        <img alt="" class="rounded-circle avatar-md mr-2" src="
                                        		@if($user->img)
							                   {{asset('users/'.$user->img)}}
							                 @else
							                   https://ui-avatars.com/api/?name={{$user->name}}
							                 @endif
                                        ">
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->created_at->format('Y-m-d')}}</td>
                                    <td class="text-center">
                                        <span class="label text-muted d-flex"><div class="dot-label bg-gray-300 ml-1"></div>Inactive</span>
                                    </td>
                                    <td>

                                        <a data-effect="effect-scale" data-toggle="modal" href="#modaldemo1">{{$user->email}}</a>
                                    </td>
                                    <td>
                                        @if($user->type == 'admin')
                                           <button type="submit" class="btn btn-sm btn-danger col-sm-12"><i class="fa fa-lock"></i></button>
                                        @else
                                            @if($user->check == 1)

                                                <form action="{{route('edit_check',$user->id)}}" method="post" class="d-inline-block">
                                                    @csrf
                                                    @method('put')
                                                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check"></i></button>
                                                </form>
                                            @else
                                                <form action="{{route('blocked',$user->id)}}" method="post" class="d-inline-block">
                                                    @csrf
                                                    @method('put')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></button>
                                                </form>
                                            @endif
                                                <a href="{{route('user.edit',$user->id)}}" class="btn btn-sm btn-info">
                                                    <i class="las la-pen"></i>
                                                </a>
                                                <form class="d-inline-block" action="{{route('user.destroy',$user->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-sm btn-danger"> <i class="las la-trash"></i></button>
                                                </form>

                                        @endif



                                    </td>
                                </tr>

                                <!-- Basic modal -->
                                <div class="modal" id="modaldemo1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content modal-content-demo">
                                            <div class="modal-header">
                                                <h6 class="modal-title">أضافة قسم</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">

                                                <form action="{{route('email_user',$user->id)}}" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <label>عنوان الرسالة</label>
                                                            <input type="text" class="form-control" name="title">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label>أسم القسم</label>
                                                           <textarea class="form-control" name="body"></textarea>
                                                        </div>
                                                    </div>



                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn ripple btn-primary" type="submit">Save changes</button>
                                                </form>
                                                <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- End Basic modal -->

                            @endforeach
                            @else
                                <tr class="text-center bg-info text-white bold">
                                    <td colspan="7">لايوجد بيانات</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
    </div>
    <!-- row closed  -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->




@endsection
@section('js')

    <!--Internal  Datepicker js -->
    <script src="{{asset('assets_admin_dashboard/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!-- Internal Select2 js-->
    <script src="{{asset('assets_admin_dashboard/plugins/select2/js/select2.min.js')}}"></script>


@endsection

