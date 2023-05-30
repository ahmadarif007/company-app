@extends('admin.adminMaster')

@section('title')
Edit | Home-News-Info
@endsection

@section('adminContent')

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="panel-heading text-center lead" style="font-size: 30px; font-weight: bold; color:#fff; background-color: #2F4F4F">
                Edit Home News Information  
                <h3 class="text-center text-white">{{Session::get('message')}}</h3>
            </div>
            <hr/>
            <div class="well">
                <form name="editHomeNewsForm" class="form-horizontal" action="{{url('/update/homeNewsInfo')}}" method="POST" enctype="multipart/form-data"> 
                    @csrf

                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">News Image</lable>
                        <div class="col-sm-9">
                            <input type="file" name="newsImage" accept="image/*">
                            <img src="{{asset($homeNewsInfoById->newsImage)}}" height="150" width="150">
                            <span class="text-danger">{{$errors->has('newsImage')? $errors->first('newsImage'):''}}</span> 
                        </div>
                    </div>

                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">Title</lable>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="title" value="{{$homeNewsInfoById->title}}">
                            <input type="hidden"  name="homeNewsId" value="{{$homeNewsInfoById->id}}">
                            <span class="text-danger">{{$errors->has('title')? $errors->first('title'):''}}</span> 
                        </div>
                    </div>

                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">Title Description</lable>
                        <div class="col-sm-9">
                            <textarea name="titleDescription" class="form-control" rows="8">{{$homeNewsInfoById->titleDescription}}</textarea>
                            <span class="text-danger">{{$errors->has('titleDescription')? $errors->first('titleDescription'):''}}</span>
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
                            <button type="submit" name="btn" class="btn btn-success btn-block" >Update Home News Info</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.forms['editHomeNewsForm'].elements['publicationStatus'].value = {{$homeNewsInfoById->publicationStatus}}
</script>

@endsection
