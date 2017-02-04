@extends('layouts.master')

@section('header')
    @parent
@endsection


@section('content')

         <center>
           <div style="width:500px; ">
           
        {{ Form::open(array('url' => '/Admins/AddProduct','files'=>'true','class'=>'form-horizontal')) }}
              <div class="box-body">
                <!--Start Name Of The Product -->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="inputPassword3" value="{{ $model->name }}" readonly >
                  </div>
                </div>
                 <!--End Name Of The Product -->
                <!--Start Direction  Of The Product -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Year Of Made</label>

                  <div class="col-sm-10">
                    <input type="Text" name="desc" class="form-control" id="inputEmail3" value="{{ $model->year_of_made }}" readonly>
                  </div>
                </div>
                 <!--End Direction  Of The Product -->
           
             
                    <!--Start Show his Status -->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    @if($model->status == 0)
                    <input type="radio"  name="kind" value="0" checked>OFF
                    <input type="radio"  name="kind" value="1" disabled>ON
                    @else
                     <input type="radio" name="kind" value="0" disabled> OFF
                    <input type="radio"  name="kind" value="1" checked >ON
                    @endif
                  </div>
                </div>
                 <!--End Show his Status -->
              </div>
            {{ Form::close() }}
        
           </div>
            </center>
          
            @endsection

    @section('footer')
    @parent 
    @endsection
