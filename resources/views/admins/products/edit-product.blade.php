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
        {{ Form::open(array('url' => '/Admins/EditProduct/'.$product->id,'files'=>'true','class'=>'form-horizontal')) }}
              <div class="box-body">
                <!--Start Name Of The Product -->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="inputPassword3" value="{{ $product->name }}" >
                  </div>
                </div>
                 <!--End Name Of The Product -->
                <!--Start Direction  Of The Product -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10">
                    <input type="Text" name="desc" class="form-control" id="inputEmail3" value="{{ $product->description }}" >
                  </div>
                </div>
                 <!--End Direction  Of The Product -->
                <!--Start Image-->
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Image</label>

                  <div class="col-sm-10">
                   {{ Html::image($product->product_pic, 'a picture', array('width'=>'200','height'=>'150')) }} 
                   {{ Form::file('image') }}
                  </div>
                </div>
                <!--End Image-->
                <!--Start Admin -->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Admin</label>

                  <div class="col-sm-10">
                    <select name="admin">
                      @foreach($admins as $admin)
                      <option value="{{ $admin->id }}"
                      <?php if( $product->admin_id == $admin->id ){echo "selected";}?>>
                      {{$admin->name}}
                      </option>
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
                      <option value="{{ $model->id }}"  
                        <?php if( $product->model_id == $model->id ){echo "selected";}?>>
                        {{ $model->name }}
                      </option>
                      @endforeach
                    </select>
                  </div>
                </div>
                   <!--End Model -->
                    <!--Start Show his Status -->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    @if($product->status == 0)
                    <input type="radio"  name="status" value="0" checked>OFF
                    <input type="radio"  name="status" value="1" >ON
                    @else
                     <input type="radio" name="status" value="0" > OFF
                    <input type="radio"  name="status" value="1" checked >ON
                    @endif
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