@extends('admin.adminMaster')

@section('title')
Edit | Home-Slider-Info
@endsection

@section('adminContent')

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="panel-heading text-center lead" style="font-size: 30px; font-weight: bold; color:#fff; background-color: #2F4F4F">
                Edit Home Slider Information  
                <h3 class="text-center text-white">{{Session::get('message')}}</h3>
            </div>
            <hr/>
            <div class="well">
                <form name="editHomeSliderForm" class="form-horizontal" action="{{url('/update/homeSliderInfo')}}" method="POST" enctype="multipart/form-data"> 
                    @csrf

                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">Background Image</lable>
                        <div class="col-sm-9">
                            <input type="file" name="bgImage" accept="image/*">
                            <img src="{{asset($homeSliderInfoById->bgImage)}}" height="150" width="150">
                            <span class="text-danger">{{$errors->has('bgImage')? $errors->first('bgImage'):''}}</span> 
                        </div>
                    </div>

                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">Title</lable>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="title" value="{{$homeSliderInfoById->title}}">
                            <input type="hidden"  name="homeSliderId" value="{{$homeSliderInfoById->id}}">
                            <span class="text-danger">{{$errors->has('title')? $errors->first('title'):''}}</span> 
                        </div>
                    </div>

                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label"> Description</lable>
                        <div class="col-sm-9">
                            <textarea name="titleDescription" class="form-control" rows="8">{{$homeSliderInfoById->titleDescription}}</textarea>
                            <span class="text-danger">{{$errors->has('titleDescription')? $errors->first('titleDescription'):''}}</span>
                        </div>
                    </div> 

                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">Slider Image</lable>
                        <div class="col-sm-9">
                            <input type="file" name="sliderImage" accept="image/*">
                            <img src="{{asset($homeSliderInfoById->sliderImage)}}" height="150" width="150">
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
                            <button type="submit" name="btn" class="btn btn-success btn-block" >Update Home Slider Info</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.forms['editHomeSliderForm'].elements['publicationStatus'].value = {{$homeSliderInfoById->publicationStatus}}
</script>

@endsection
