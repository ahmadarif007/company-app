@extends('admin.adminMaster')

@section('title')
Manage | Team-Info
@endsection

@section('adminContent')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading text-center lead" style="font-size: 30px; font-weight: bold; color:#fff; background-color: #2F4F4F">
                Manage Team Information  
                <h3 class="text-center text-white">{{Session::get('message')}}</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <span class="pull-left">{{$allTeamInfo->links()}}</span>
                <div class="pull-right">
                    <h2 class="text-danger">Total:-{{$allTeamInfo->total()}}</h2>
                    <h3>({{$allTeamInfo->count()}}) in this page</h3>
                </div>
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr style="color: green">
                            <th style="text-align: center">SI.</th>
                            <th style="text-align: center"> ID</th>
                            <th style="text-align: center">Team Member Picture </th>
                            <th style="text-align: center">Team Member Name </th>
                            <th style="text-align: center">Team Member Description </th>
                            <th style="text-align: center">Publication Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($allTeamInfo as $teamInfo)
                        <tr class="odd gradeX text-center">           
                            <td>{{$i++}}</td>
                            <td>{{$teamInfo->id}}</td>
                            <td>
                                <img src="{{asset($teamInfo->teamMemberImage)}}" alt="Immage Missing" height="100" width="100">
                            </td>
                            <td>{{$teamInfo->teamMemberName}}</td>
                            <td>{{$teamInfo->teamMemberDescription}}</td>
                            <td>{{$teamInfo->publicationStatus == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td class="center">
                                <a href="{{url('/edit/teamInfo/'.$teamInfo->id)}}" class="btn btn-info" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{url('/delete/teamInfo/'.$teamInfo->id)}}" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this');">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <span class="pull-right">{{$allTeamInfo->links()}}</span>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

<hr>

@endsection