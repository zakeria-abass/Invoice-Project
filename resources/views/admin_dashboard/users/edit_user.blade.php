@extends('admin_dashboard.layouts.master')

@section('title','User')
@section('name-header','Users')
@section('css')
@endsection



@section('content')
    <!--Row-->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">

                    <form action="{{route('user.update',$user->id)}}" method="post">
                        @method('put')
                        @csrf

                           <div class="row">
                               <div class="col-sm-6">
                                   <label class="form-control-label">Name User: <span class="tx-danger">*</span></label>
                                   <input class="form-control"  name="name" value="{{$user->name}}"  type="text">
                                   <span class="tx-danger">
                                         @error('name')
                                       {{$message}}
                                       @enderror
                                   </span>

                               </div>

                               <div class="col-sm-6">
                                   <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                   <input class="form-control" id="email" name="email" value="{{$user->email}}" type="email">
                                   <span class="tx-danger">
                                       @error('email')
                                       {{$message}}
                                       @enderror
                                   </span>

                               </div>

                           </div>
{{--                           <div class="row mt-5">--}}
{{--                               <div class="col-sm-6">--}}
{{--                                   <label class="form-control-label">Password: <span class="tx-danger">*</span></label>--}}
{{--                                   <input class="form-control" type="text"  value="{{$user->password}}"  name="password">--}}
{{--                                   <span class="tx-danger">--}}
{{--                                       @error('password')--}}
{{--                                       {{$message}}--}}
{{--                                       @enderror--}}
{{--                                   </span>--}}
{{--                               </div>--}}

{{--                               <div class="col-sm-6">--}}
{{--                                   <label class="form-control-label">confirm password : <span class="tx-danger">*</span></label>--}}
{{--                                   <input class="form-control"   name="confirmed_password" placeholder="Confirme password" type="text">--}}
{{--                               </div>--}}

{{--                           </div>--}}

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

@endsection

