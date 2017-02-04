      @extends('layouts.master')
        @section('header')
                @parent
        @endsection
        @section('content')
       <section class="content">
         <center>
           <div style="width:500px; ">
            <form class="form-horizontal" method="POST" actions="{{url('/Ecommerce/EditUser/{id}')}}">
              {{ csrf_field() }}
              <div class="box-body">
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="inputPassword3" value="{{ $user->name }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" value="{{ $user->email }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kind</label>

                  <div class="col-sm-10">
                    @if($user->kind == 0)
                    <input type="radio"  name="kind" value="0" checked>Male
                    <input type="radio"  name="kind" value="1" >Female
                    @else
                     <input type="radio" name="kind" value="0"> Male
                    <input type="radio"  name="kind" value="1" checked >Female
                    @endif
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Edit</button>
              </div>
              <!-- /.box-footer -->
            </form>
           </div>
            </center>
           </section>
       @endsection
                @section('footer')
                @parent 
                @endsection
