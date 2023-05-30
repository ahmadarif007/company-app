@extends('frontEnd.master')

@section('title')
about
@endsection

@section('mainContent')

<div id="breadcrumb">
    <div class="container">	
        <div class="breadcrumb">							
            <li><a href="{{url('/')}}">Home</a></li>
            <li>About Us</li>			
        </div>		
    </div>	
</div>

<div class="aboutus">
    <div class="container">
        @foreach($publishedCompanyInfos as $publishedCompanyInfo)
        <h3>{{$publishedCompanyInfo->heading}}</h3>
        <hr>
        <div class="col-md-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="{{asset($publishedCompanyInfo->titleImage)}}" class="img-responsive">
            <h4>{{$publishedCompanyInfo->title}}</h4>
            <p>{{$publishedCompanyInfo->titleDescription}}</p>
        </div>
        
        <div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="skill">
                <h2>Our Skills</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <div class="progress-wrap">
                    <h3>Graphic Design</h3>
                    <div class="progress">
                        <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                            <span class="bar-width">85%</span>
                        </div>

                    </div>
                </div>

                <div class="progress-wrap">
                    <h4>HTML</h4>
                    <div class="progress">
                        <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                            <span class="bar-width">95%</span>
                        </div>
                    </div>
                </div>

                <div class="progress-wrap">
                    <h4>CSS</h4>
                    <div class="progress">
                        <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="bar-width">80%</span>
                        </div>
                    </div>
                </div>

                <div class="progress-wrap">
                    <h4>Wordpress</h4>
                    <div class="progress">
                        <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                            <span class="bar-width">90%</span>
                        </div>
                    </div>
                </div>
            </div>				
        </div>
        @endforeach
    </div>
</div>

<div class="our-team">
    <div class="container">
        <h3>Our Team {{$name}}</h3>	
        <div class="text-center">
            @foreach($publishedTeamInfos as $publishedTeamInfo)
            <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <img src="{{asset($publishedTeamInfo->teamMemberImage)}}" alt="Missing Image" height="300" width="300" >
                <h4>{{$publishedTeamInfo->teamMemberName}}</h4>
                <p>{{$publishedTeamInfo->teamMemberDescription}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection