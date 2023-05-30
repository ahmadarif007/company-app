
@extends('frontEnd.master')

@section('title')
contact
@endsection

@section('mainContent')

<div id="breadcrumb mb-5">
    <div class="container">	
        <div class="breadcrumb">							
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Contact</li>			
        </div>		
    </div>	
</div>

<section id="contact-page">
    <div class="container">
        <div class="center">        
            <h2>Drop Your Message Here...</h2>
            <p>{{Session::get('message')}}</p>
        </div> 
        <div class="row contact-wrap"> 
            <div class="status alert alert-success" style="display: none"></div>
            <div class="col-md-6 col-md-offset-3">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="{{url('/save/contactInfo')}}" method="post" role="form" class="contactForm">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  required=""/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"  required=""/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"  required=""/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required=""></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="btn" class="btn btn-block btn-primary btn-lg" required="required">Submit Message</button>
                    </div>
                </form>                       
            </div>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->

@endsection