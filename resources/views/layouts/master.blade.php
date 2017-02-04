 @include('layouts/app')
@section('header')
     <div class="header"><!--Starting Header-->
          <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img src="images/logo2.png" alt=""></a>
                  <div class="english-web">
                      <a class="navbar-brand mob-english" href="#">English</a>
                  </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"> {{ Html::linkAction('EcommerceController@index', 'الرئيسيه','' ) }}
              <span class="sr-only">(current)</span></a></li>
                    <li><a class="insert-bubble" href="#">فكرة الموقع<i class="fa fa-car" aria-hidden="true"></i></a></li>
                    <li><a class="insert-bubble" href="#">تواصل معنا<i class="fa fa-car" aria-hidden="true"></i></a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                  @if (Auth::guest())
                    <li class="registry">
                     <!-- Large modal -->
                    <button type="button" class="btn btn-primary reg" data-toggle="modal" data-target=".bs-example-modal"> تسجيل الدخول</button>

                    <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                    <div class="modal-header">
                      <div class="navbar-brand">ش<span class="color-red">ا</span><span class="color-green">ر</span>ط</div>
                    </div> 
                  <!--- Form to Login-->
                  <div class="modal-body">
                      <form class="row" action="{{url('/Ecommerce/login')}}" method="POST">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                          <div class="col-xs-12 col-sm-6">
                              <div class="float-label">
                                  <label for="txt-1">إسم المستخدم أو رقم الجوال</label>
                                  <input type="text" id="txt-1" name="email">
                              </div>
                          </div>

                          <div class="col-xs-12 col-sm-6">
                              <div class="float-label">
                                  <label for="txt-2">كلمة المرور</label>
                                  <input type="password" id="txt-2" name="password">
                              </div>
                          </div>

                          <div class="col-xs-12 col-sm-6">
                              <button class="btn btn-block btn-blue">تسجيل دخول</button>
                          </div>
                      </form>
                      <!---End Form to Login-->
                  </div>
                    </div>
                    </div>
                    </div>
                    </li>
                    <li><!-- Large modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">تسجيل</button>  
                    </li>
                         @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                   <li>
                                 {{ Html::linkAction('EcommerceController@profile', 
                                 'Profile','', array( 'id'=>'logout-form' )) }}

                                    </li>
                                    <li>
                                   {{ Html::linkAction('EcommerceController@logoutUser', 
                                   'LogOut','', array( 'id'=>'logout-form' )) }}

                                    </li>

                                </ul>
                            </li>
                        @endif

                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
              @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                    <div class="web-logo wow fadeInDown" data-wow-duration="9s">
                            <img src="images/logo.png" alt="">
                      </div>
         </div><!--end Header-->
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                      <div class="navbar-brand">ش<span class="color-red">ا</span><span class="color-green">ر</span>ط</div>
                  </div>
                  <!--- Form to Register-->
                  <div class="modal-body">                       
                  <form class="row" action="{{url('Ecommerce/register')}}" method="POST">
                    {!! csrf_field() !!}

                          <div class="col-xs-12 col-sm-6">
                              <div class="float-label">
                                  <label for="txt-1">إسم المستخدم أو رقم الجوال</label>
                                  <input type="text" id="txt-1" name='name'>
                              </div>
                          </div>
                            <div class="col-xs-12 col-sm-6">
                              <div class="float-label">
                                  <label for="txt-1">الايميل </label>
                                  <input type="text" id="txt-1" name='email'>
                              </div>
                          </div>

                          <div class="col-xs-12 col-sm-6">
                              <div class="float-label">
                                  <label for="txt-2">كلمة المرور</label>
                                  <input type="password" id="txt-2" name='password'>
                              </div>
                          </div>

                           <div class="col-xs-12 col-sm-6">
                              <div class="float-label">
                                  <label for="txt-2">تاكيد كلمه المرور </label>
                                  <input type="password" id="txt-2" name='password_confirmation'>
                              </div>
                          </div>

                            <div class="col-xs-12 col-sm-6">
                              <div class="float-label">
                                  <label for="txt-2">اختر النوع</label>
                                  <input type="radio" name="kind" checked value=0>ذكر
                                  <input type="radio" name="kind" value=1> انثى
                              </div>
                          </div>

                          <div class="col-xs-12 col-sm-6">
                              <button class="btn btn-block btn-success">تسجيل دخول</button>
                          </div>  
                      </form>      
                </div>
              </div>
            </div>
        </div>
      <!--End Header-->
@yield('content')

@section('footer')
  <div class="footer">
          <p>جميع الحقوق محفوطة لقطع غيار<a href="#">سيارتي</a></p>
          <p>تصميم وتنفيذ<a href="#">أوامر الشبكة</a></p>
      </div><!--end-Footer-->
      
      <div class="scroll-top"><!--start scroll-->
           <a><i class="fa fa-arrow-up"></i></a>
     </div><!--End Scroll-->
     <section class="over-lay"><!--start-loading-page-->
         <div class="ybile wow zoomIn"></div>
         <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
     </section><!--end-loading-page--> 


  <!--Start Style Javascript -->
      {!! Html::script('js/jquery-1.12.0.min.js') !!} <!--jquery-1.12.0.min.js-->
      {!! Html::script('js/bootstrap.min.js') !!}  <!--bootstrap.min.js-->
      {!! Html::script('js/plugins.js') !!}   <!--Plugins.js-->
      {!! Html::script('js/jquery.fancybox.pack.js') !!} <!--fancybox.js-->
      {!! Html::script('js/wow.min.js') !!} <!--wow.min.js-->
 <!--End Style Javascript -->



  </body><!--End body-->
    
</html>