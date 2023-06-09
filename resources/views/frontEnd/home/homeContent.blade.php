@extends('frontEnd.master')

@section('title')
Software Company
@endsection

@section('mainContent')

@foreach($publishedHomeSliderInfos as $publishedHomeSliderInfo)
<section id="main-slider" class="no-margin">
    <div class="carousel slide">      
        <div class="carousel-inner">
            <div class="item active" style="background-image: url({{asset($publishedHomeSliderInfo->bgImage)}}">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h2 class="animation animated-item-1">Welcome <span>{{$publishedHomeSliderInfo->title}}</span></h2>
                                <p class="animation animated-item-2">{{$publishedHomeSliderInfo->titleDescription}}</p>
                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="{{asset($publishedHomeSliderInfo->sliderImage)}}" class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->   

        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
</section><!--/#main-slider-->
@endforeach
<div class="feature">
    <div class="container">
        <div class="text-center">
            <div class="col-md-3">
                <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
                    <i class="fa fa-book"></i>	
                    <h2>Full Responsive</h2>
                    <p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                    <i class="fa fa-laptop"></i>	
                    <h2>Retina Ready</h2>
                    <p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
                    <i class="fa fa-heart-o"></i>	
                    <h2>Full Responsive</h2>
                    <p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
                    <i class="fa fa-cloud"></i>	
                    <h2>Friendly Code</h2>
                    <p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about">
    <div class="container">
        <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
            <h2>about us</h2>
            <img src="{{asset('frontEnd/')}}/images/6.jpg" class="img-responsive"/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat 
                libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
                libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
                libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
            </p>
        </div>

        <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
            <h2>Template built with Twitter Bootstrap</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat 
                libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
                libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
                libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat 
                libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
                libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
                libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. 
                Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. 
                Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque </p>
        </div>
    </div>
</div>

<div class="lates">
    <div class="container">
        <div class="text-center">
            <h2>Latest News</h2>
        </div>
        @foreach($publishedHomeNews as $homeNews)
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="{{asset($homeNews->newsImage)}}" class="img-responsive" height="200" width="500"/>
            <h3>{{$homeNews->title}}</h3>
            <p>{{$homeNews->titleDescription}}</p>
        </div>
        @endforeach
    </div>
</div>

<section id="partner">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Our Partners</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>    

        <div class="partners">
            <ul>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset('frontEnd/')}}/images/partners/partner1.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="{{asset('frontEnd/')}}/images/partners/partner2.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="{{asset('frontEnd/')}}/images/partners/partner3.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="{{asset('frontEnd/')}}/images/partners/partner4.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="{{asset('frontEnd/')}}/images/partners/partner5.png"></a></li>
            </ul>
        </div>        
    </div><!--/.container-->
</section><!--/#partner-->

<section id="conatcat-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="pull-left">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h2>Have a question or need a custom quote?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->    
</section><!--/#conatcat-info-->

@endsection