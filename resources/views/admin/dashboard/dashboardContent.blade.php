@extends('admin.adminMaster')

@section('title')
Dashboard | Home
@endsection

@section('adminContent')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-info">Welcome to the company dashboard.....</h1>
    </div>
</div>
<div class="row">
    <img src="{{asset('admin')}}/welcome.jpg" class="img-responsive" width="100%" style="height:450px"/>
</div>

@endsection

