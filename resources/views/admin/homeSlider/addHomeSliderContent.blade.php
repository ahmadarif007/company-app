@extends('admin.adminMaster')
@section('title')
Add | Home-Slider-Info
@endsection
@section('adminContent')

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="panel-heading text-center lead" style="font-size: 30px; font-weight: bold; color:#fff; background-color: #2F4F4F">
                Add Home Slider Information  
                <h3 class="text-center text-white">{{Session::get('message')}}</h3>
            </div>
            <hr/>
            <div class="well">
                <form class="form-horizontal" action="{{url('/save/homeSliderInfo')}}" method="POST" enctype="multipart/form-data"> 
                    @csrf

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Background Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="bgImage" accept="image/*" required="">
                            <span class="text-danger">{{$errors->has('bgImage')? $errors->first('bgImage'):''}}</span> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="title" required="">
                            <span class="text-danger">{{$errors->has('title')? $errors->first('title'):''}}</span> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label"> Title Description</label>
                        <div class="col-sm-9">
                            <textarea name="titleDescription" class="form-control" rows="8" required=""></textarea>
                            <span class="text-danger">{{$errors->has('titleDescription')? $errors->first('titleDescription'):''}}</span>
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Slider Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="sliderImage" accept="image/*" required="">
                            <span class="text-danger">{{$errors->has('sliderImage')? $errors->first('sliderImage'):''}}</span> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">Publication Status</label>
                        <div class="col-sm-9">
                            <select name="publicationStatus" class="form-control">
                                <option>---Select Publication Status---</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" name="btn" class="btn btn-success btn-block" >Save Home Slider Info</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
