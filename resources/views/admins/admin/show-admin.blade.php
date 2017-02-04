@extends('admins.layouts.master')

@section('header')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
 <section class="content">
         <center>
           <div style="width:500px; ">
            <form class="form-horizontal" method="POST" actions="{{url('Admins/dashboard')}}">
              {{ csrf_field() }}
              
              <div class="box-body">
                   <div class="form-group">
                  <label  for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name"  id="inputEmail3" value="{{ $admin->name }}" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" value="{{ $admin->email }}" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" readonly>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kind</label>

                  <div class="col-sm-10">
                    @if($admin->kind == 0)
                    <input type="radio"  name="kind"  value="0" readonly checked>Male
                    <input type="radio"  name="kind"  value="1" readonly disabled>Female
                    @else
                     <input type="radio" name="kind"  value="0" readonly disabled> Male
                    <input type="radio"  name="kind"  value="1" readonly checked>Female
                    @endif
                  </div>
                </div>
              </div>
            </form>
           </div>
            </center>
           </section>
            @endsection

    @section('footer')
    @parent 
    @endsection