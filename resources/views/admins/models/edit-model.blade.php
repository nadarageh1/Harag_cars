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
            <form class="form-horizontal" method="POST" actions="{{url('/Admins/EditModel')}}">
              {{ csrf_field() }}
              <div class="box-body">
                 <!--Start Name Of This Model -->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="inputPassword3"  value="{{ $model->name }}" >
                  </div>
                </div>
                <!--End Name Of This Model -->
                <!--Start year of made of This Model-->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Year Of Made</label>

                  <div class="col-sm-10">
                    <input type="date" name="date" class="form-control" id="inputEmail3" value="{{ $model->year_of_made}}" >
                  </div>
                </div>
                 <!--End year of made Of This Model -->
                  <!--Start Show his Mark -->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Marks</label>

                  <div class="col-sm-10">
                    <select name="mark" >
                      @foreach($marks as $mark)
                      <!--This Code To Selected his Mark Of this Model -->
                      <option name="mark" value="{{ $mark->id }}" 
                       <?php if( $model->mark_id == $mark->id ){echo "selected";}?>>
                        {{ $mark->name }}
                      </option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <!--  End Show his Mark -->
                <!--- Start show his Status of this Model-->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Status</label>
    
                  <div class="col-sm-10">
                    @if($model->status ==0)
                    <input type="radio"  name="status" value="0" checked >ON
                    <input type="radio"  name="status" value="1" >OFF
                    @else
                     <input type="radio"  name="status" value="0"  >ON
                    <input type="radio"  name="status" value="1" checked >OFF
                    @endif
                  </div>
                </div>
                <!--- End show his Status of this Model-->
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