@extends('admin_dashboard.layouts.master')

@section('title','User')
@section('name-header','Users')
@section('css')
    <!---Internal Fileupload css-->
    <link href="{{URL::asset('assets_admin_dashboard/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
@endsection



@section('content')
    <!--Row-->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">

                    <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                           <div class="row">
                               <div class="col-sm-6">
                                   <label class="form-control-label">Name User: <span class="tx-danger">*</span></label>
                                   <input class="form-control"  name="name" placeholder="Enter firstname"  type="text">
                                   <span class="tx-danger">
                                         @error('name')
                                       {{$message}}
                                       @enderror
                                   </span>

                               </div>

                               <div class="col-sm-6">
                                   <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                   <input class="form-control" id="email" name="email" placeholder="Enter email address" ="" type="email">
                                   <span class="tx-danger">
                                       @error('email')
                                       {{$message}}
                                       @enderror
                                   </span>

                               </div>

                           </div>
                           <div class="row mt-5">
                               <div class="col-sm-6">
                                   <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
                                   <input class="form-control" type="password"  placeholder="Enter Password"  name="password">
                                   <span class="tx-danger">
                                       @error('password')
                                       {{$message}}
                                       @enderror
                                   </span>

                               </div>

                               <div class="col-sm-6">
                                   <label class="form-control-label">confirm password : <span class="tx-danger">*</span></label>
                                   <input class="form-control"   name="confirmed_password" placeholder="Confirme password" type="password">
                               </div>

                           </div>

                        <div class="row mt-4">
                            <p class="text-danger">* صيغة المرفق pdf, jpeg ,.jpg , png </p>
                            <h5 class="card-title">المرفقات</h5>

                            <div class="col-sm-12 col-md-12">

                                <input type="file" class="dropify" data-height="150" name="img">

                            </div>
                            <br>
                        </div>

                        <div class="row">
                               <button type="submit" class="btn btn-primary col-sm-12 mt-3">Create User</button>


                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <!-- row closed  -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->




@endsection
@section('js')

    <!--Internal Fileuploads js-->
    <script src="{{URL::asset('assets_admin_dashboard/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{URL::asset('assets_admin_dashboard/plugins/fileuploads/js/file-upload.js')}}"></script>
    <!--Internal Fancy uploader js-->

@endsection

