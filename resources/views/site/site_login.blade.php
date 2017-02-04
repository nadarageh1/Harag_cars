     <!--Split  The Page -->
     @extends('layouts.master')
      <!--Title   The Page -->
     @section('title')
     حراج سيارتى
     @endsection

    <!--Header The Page -->
    @section('header')
    @parent
    @endsection


    <!--content The Page -->
     @section('content')
     @parent
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"><!--start slider-->
          <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/01.png" alt="...">
              <div class="carousel-caption">
                <p>هـذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى ، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق، إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد .</p>
                <a href="#">مشاهدة المزيد من العروض</a>
              </div>
            </div>
            <div class="item">
              <img src="images/02.jpg" alt="...">
              <div class="carousel-caption">
                <p>هـذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى ، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق، إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد .</p>
                <a href="#">مشاهدة المزيد من العروض</a>
              </div>
            </div>
            <div class="item">
              <img src="images/03.jpg" alt="...">
              <div class="carousel-caption">
                <p>هـذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى ، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق، إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد .</p>
                <a href="#">مشاهدة المزيد من العروض</a>
              </div>
            </div>
            <div class="item">
              <img src="images/04.jpg" alt="...">
              <div class="carousel-caption">
                <p>هـذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى ، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق، إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد .</p>
                <a href="#">مشاهدة المزيد من العروض</a>
              </div>
            </div>
            <div class="item">
              <img src="images/05.jpg" alt="...">
              <div class="carousel-caption">
                <p>هـذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى ، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق، إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد .</p>
                <a href="#">مشاهدة المزيد من العروض</a>
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div><!--end slider-->
      
      <div class="prodects-search wow bounceInUp"><!--start prodects-search-->
          <div class="web-header">
                <img src="images/header.png" alt="">
               <h2>أبحث عن ما تريد</h2>
          </div>    
          <form class="form-horizontal" action="{{ url('Ecommerce/search') }}" method="POST">
              {{ csrf_field() }}
           
              <select id="car-type" name="model" title="">
                  <option value="model" selected disabled>الموديل</option>
                    @foreach($models as $model)
                  <option value="{{ $model->name }}">{{ $model->name }}</option>
                  @endforeach
              </select>
              <input type="text" name ="product" placeholder="إسم القطعه">
              <input type="submit" value="بحث">
          </form>
      </div><!--end prodects-search-->
      
      <div class="cars-type wow bounceInUp"><!--start cars-type-->
          <div class="web-header">
                <img src="images/header.png" alt="">
               <h2>أشهر الماركات</h2>
          </div>
          <div class="img-type">
            @foreach($marks as $mark )
              <div class="wow zoomInUp"><a class="fancybox" rel="group" href="{{$mark->mark_pic}}"><img src="{{$mark->mark_pic}}" alt=""></a></div>
            @endforeach
          </div>
      </div><!--end cars-type-->
      
      <div class="prodects-search wow bounceInUp"><!--start prodects-search-->
          <div class="prodects-logo">
              <div class="web-header prodects col-md-2 col-xs-12">
                <img rel="group" href="images/car4.png" class="fancybox" src="images/car4.png" alt="">
              </div>
              <div class="web-header prodects-header col-md-10 col-xs-12">
                    <img src="images/header.png" alt="">
                    <h2>بعض المودلات</h2>
              </div>
          </div>
          <div class="cars-brand">
             @foreach($models as $model )
              <div class="brand-type col-md-3 col-xs-12">
                  <ul>
                      <li>{{ Html::linkAction('EcommerceController@modelPage', $model->name,array('id' => $model->id ), array('' )) }}</li>
                  </ul>
              </div>
              @endforeach
           
             
          </div>
        </div><!--end prodects-search-->
  @endsection

     <!--Footer The Page -->
      @section('footer')
      @parent
      @endsection


    
