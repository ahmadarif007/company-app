@extends('admin.adminMaster')

@section('title')
Edit | Team-Info
@endsection

@section('adminContent')

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="panel-heading text-center lead" style="font-size: 30px; font-weight: bold; color:#fff; background-color: #2F4F4F">
                Edit Team Information  
                <h3 class="text-center text-white">{{Session::get('message')}}</h3>
            </div>
            <hr/>
            <div class="well">
                <form name="editTeamIfoForm" class="form-horizontal" action="{{url('/update/teamInfo')}}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">Team Member Picture</lable>
                        <div class="col-sm-9">
                            <input type="file"  name="teamMemberImage" accept="image/*">
                            <img src="{{asset($teamInfoById->teamMemberImage)}}" alt="Img Missing" height="150" width="150">
                            <span class="text-danger">{{$errors->has('teamMemberImage')? $errors->first('teamMemberImage'):''}}</span> 
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">Team Member Name</lable>
                        <div class="col-sm-9">
                            <input type="text" value="{{$teamInfoById->teamMemberName}}" class="form-control" name="teamMemberName">
                            <input type="hidden" value="{{$teamInfoById->id}}" class="form-control" name="teamInfoId">
                            <span class="text-danger">{{$errors->has('teamMemberName')? $errors->first('teamMemberName'):''}}</span> 
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">Team Member Description</lable>
                        <div class="col-sm-9">
                            <textarea name="teamMemberDescription" class="form-control" rows="5">{{$teamInfoById->teamMemberDescription}}</textarea>
                            <span class="text-danger">{{$errors->has('teamMemberDescription')? $errors->first('teamMemberDescription'):''}}</span>
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
                            <button type="submit" name="btn" class="btn btn-success btn-block" >Update Team Info</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.forms['editTeamIfoForm'].elements['publicationStatus'].value = {{$teamInfoById->publicationStatus}}
</script>

@endsection
