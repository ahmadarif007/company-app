@extends('admin.adminMaster')

@section('title')
Edit | Company-Info
@endsection

@section('adminContent')

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="panel-heading text-center lead" style="font-size: 30px; font-weight: bold; color:#fff; background-color: #2F4F4F">
                Edit Company Information  
                <h3 class="text-center text-white">{{Session::get('message')}}</h3>
            </div>
            <hr/>
            <div class="well">
                <form class="form-horizontal" action="{{url('/update/companyInfo')}}" method="POST" enctype="multipart/form-data" name="editCompanyForm"> 
                    @csrf
                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">Heading</lable>
                        <div class="col-sm-9">
                            <input type="text" value="{{$companyInfoById->heading}}" class="form-control" name="heading">
                            <input type="hidden" value="{{$companyInfoById->id}}" class="form-control" name="companyInfoId">
                            <span class="text-danger">{{$errors->has('heading')? $errors->first('heading'):''}}</span> 
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">Picture</lable>
                        <div class="col-sm-9">
                            <input type="file"  name="titleImage" accept="image/*">
                            <img src="{{asset($companyInfoById->titleImage)}}" height="100" width="100">
                            <span class="text-danger">{{$errors->has('titleImage')? $errors->first('titleImage'):''}}</span> 
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">Title</lable>
                        <div class="col-sm-9">
                            <input type="text" value="{{$companyInfoById->title}}" class="form-control" name="title">
                            <span class="text-danger">{{$errors->has('title')? $errors->first('title'):''}}</span> 
                        </div>
                    </div>

                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label"> Description</lable>
                        <div class="col-sm-9">
                            <textarea name="titleDescription" class="form-control" rows="8">{{$companyInfoById->titleDescription}}</textarea>
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
                            <button type="submit" name="btn" class="btn btn-success btn-block" >Save Company Info</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.forms['editCompanyForm'].elements['publicationStatus'].value = {{$companyInfoById -> publicationStatus}}
</script>
@endsection
