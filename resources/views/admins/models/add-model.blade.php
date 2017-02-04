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
          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
           <div style="width:500px; ">
            <form class="form-horizontal" method="POST" actions="{{url('/Admins/AddModel')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <!--Start Show Model Name -->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="inputPassword3" placeholder="Name" value="{{ old('name') }}">
                  </div>
                </div>
                 <!--End Show Model Name -->
                 <!--Start Show Model Name -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Year Of Made</label>

                  <div class="col-sm-10">
                    <input type="date" name="date" class="form-control" id="inputEmail3">
                  </div>
                </div>
                  <!--Start Show his Mark -->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Marks</label>

                  <div class="col-sm-10">
                    <select name="mark" >
                      @foreach($marks as $mark)
                      <option name="mark" value="{{ $mark->id }}"  >{{ $mark->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <!--  End Show his Mark -->
                 <!--Start Show his Status -->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <input type="radio"  name="status" value="0" >ON
                    <input type="radio"  name="status" value="1" >OFF
                  </div>
                </div>
                 <!--End Show his Status -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Save</button>
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