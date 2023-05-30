@extends('admin.adminMaster')

@section('title')
Edit | Blog-Info
@endsection

@section('adminContent')

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="panel-heading text-center lead" style="font-size: 30px; font-weight: bold; color:#fff; background-color: #2F4F4F">
                Edit Blog Information  
                <h3 class="text-center text-white">{{Session::get('message')}}</h3>
            </div>
            <hr/>
            <div class="well">
                <form class="form-horizontal" action="{{url('/update/blogInfo')}}" method="POST" enctype="multipart/form-data" name="editBlogInfoFrom"> 
                    @csrf

                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">Blog Image :</lable>
                        <div class="col-sm-9">
                            <input type="file" name="blogImage" accept="image/*">
                            <img src="{{asset($blogInfoById->blogImage)}}" alt="Image Missing" height="150" width="200">
                            <span class="text-danger">{{$errors->has('blogImage')? $errors->first('blogImage'):''}}</span> 
                        </div>
                    </div>

                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">Blog Title :</lable>
                        <div class="col-sm-9">
                            <input type="text" value="{{$blogInfoById->blogTitle}}" class="form-control" name="blogTitle">
                            <input type="hidden" value="{{$blogInfoById->id}}" name="blogId">
                            <span class="text-danger">{{$errors->has('blogTitle')? $errors->first('blogTitle'):''}}</span> 
                        </div>
                    </div>

                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label"> Blog Description :</lable>
                        <div class="col-sm-9">
                            <textarea name="blogDescription" class="form-control" rows="8">{{$blogInfoById->blogDescription}}</textarea>
                            <span class="text-danger">{{$errors->has('blogDescription')? $errors->first('blogDescription'):''}}</span>
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-sm-3">Publication Status :</label>
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
                            <button type="submit" name="btn" class="btn btn-success btn-block" >Update Blog Info</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.forms['editBlogInfoFrom'].elements['publicationStatus'].value = {{$blogInfoById->publicationStatus}}
</script>

@endsection
