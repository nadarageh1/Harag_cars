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
            <form class="form-horizontal" method="POST" actions="{{url('/Admins/EditMark')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <!-- Start Name -->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="inputPassword3"  value="{{ $mark->name }}" >
                  </div>
                </div>
                  <!-- End Name -->
                 <!--Start Image-->
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Image</label>

                  <div class="col-sm-10">
                   {{ Html::image($mark->mark_pic, 'a picture', array('width'=>'200','height'=>'150')) }} 
                   {{ Form::file('image') }}
                  </div>
                </div>
                <!--End Image-->
                 <!--Start Status-->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    @if($mark->status ==0)
                    <input type="radio"  name="status" value="0" checked >ON
                    <input type="radio"  name="status" value="1" >OFF
                    @else
                     <input type="radio"  name="status" value="0"  >ON
                    <input type="radio"  name="status" value="1" checked >OFF
                    @endif
                  </div>
                </div>
                 <!--End Status-->
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