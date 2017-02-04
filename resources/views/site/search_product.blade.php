@extends('layouts.master')

@section('header')
    @parent
@endsection


@section('content')

         <center>
           <div style="width:500px; ">
           	@foreach($products as $product)
        {{ Form::open(array('url' => '/Admins/AddProduct','files'=>'true','class'=>'form-horizontal')) }}
              <div class="box-body">
                <!--Start Name Of The Product -->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="inputPassword3" value="{{ $product->name }}" readonly >
                  </div>
                </div>
                 <!--End Name Of The Product -->
                <!--Start Direction  Of The Product -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10">
                    <input type="Text" name="desc" class="form-control" id="inputEmail3" value="{{ $product->description }}" readonly>
                  </div>
                </div>
                 <!--End Direction  Of The Product -->
                <!--Start Image-->
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Image</label>

                  <div class="col-sm-10">
                 {{ Html::image($product->product_pic, 'a picture', array('width'=>'200','height'=>'150')) }} 
                 </div>
                </div>
                <!--End Image-->
             
                    <!--Start Show his Status -->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    @if($product->status == 0)
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
            @endforeach
           </div>
            </center>
          
            @endsection

    @section('footer')
    @parent 
    @endsection
