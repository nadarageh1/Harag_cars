      @extends('layouts.master')
        @section('header')
                @parent
        @endsection
        @section('content')
         <div class="panel">
                <div class="panel-body">

                    <div class="col-xs-12 col-sm-5 col-md-4">
                 {{ Html::linkAction('EcommerceController@editUser', 'Edit Profile',array('id' => $user->id ), array('class'=>'btn btn-info' )) }}
                    </div>


                    <div class="col-xs-12 col-sm-7 col-md-8 text-align-right">
                        <ul class="list-unstyled list-padding">
                            <li><strong class="right-fa">الاسم:</strong>  {{ $user->name }}</li>
                            <li><strong class="right-fa">البريد الالكتروني:</strong> {{ $user->email }} </li>
                           
                            <li>
                                <div class="col-sm-10">
                                        @if($user->kind == 0)
                                        <input type="radio"  name="kind" value="0" checked>Male
                                        <input type="radio"  name="kind" value="1" disabled>Female
                                        @else
                                         <input type="radio" name="kind" value="0" disabled> Male
                                        <input type="radio"  name="kind" value="1" checked >Female
                                        @endif
                                </div>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                  </div>
                </div>
       @endsection
                @section('footer')
                @parent 
                @endsection
