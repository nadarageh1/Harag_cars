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
        {{ Form::open(array('url' => '/Admins/AddProduct','files'=>'true','class'=>'form-horizontal')) }}
              <div class="box-body">
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="inputPassword3" placeholder="Name" value="{{ old('name') }}" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10">
                    <input type="Text" name="desc" class="form-control" id="inputEmail3" placeholder="Description" value="{{ old('desc') }}">
                  </div>
                </div>
                <!--Start Image-->
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Image</label>

                  <div class="col-sm-10">
                  {{ Form::file('image') }}
                  </div>
                </div>
                <!-- End Image-->
                <!--Start Admin -->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Admin</label>

                  <div class="col-sm-10">
                    <select name="admin">
                      @foreach($admins as $admin)
                      <option value="{{ $admin->id }}">{{$admin->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <!--  End Admin -->
                   <!--Start MOdel -->
                   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Model</label>

                  <div class="col-sm-10">
                    <select name="model">
                      @foreach($models as $model)
                      <option value="{{ $model->id }}">{{ $model->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                   <!--End Model -->
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
            {{ Form::close() }}
           </div>
            </center>
           </section>
            @endsection

    @section('footer')
    @parent 
    @endsection