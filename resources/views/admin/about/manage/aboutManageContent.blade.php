@extends('admin.adminMaster')

@section('title')
Manage | About
@endsection

@section('adminContent')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading text-center lead" style="font-size: 30px; font-weight: bold; color:#fff; background-color: #2F4F4F">
                Manage About Information  
                <h3 class="text-center text-white">{{Session::get('message')}}</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="pull-right">
                    <h2>Total : {{$abouts->total()}}</h2>
                    <h3>({{$abouts->count()}}) in this page</h3>
                </div>
                <span class="pull-left">{{$abouts->links()}}</span>
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr style="color: green">
                            <th style="text-align: center">SI.</th>
                            <th style="text-align: center">Heading</th>
                            <th style="text-align: center">Title Picture</th>
                            <th style="text-align: center">Title </th>
                            <th style="text-align: center">Title Description</th>
                            <th style="text-align: center">Team Member Picture </th>
                            <th style="text-align: center">Team Member Name </th>
                            <th style="text-align: center">Team Member Description </th>
                            <th style="text-align: center">Publication Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($abouts as $about)
                        <tr class="odd gradeX text-center">           
                            <td>{{$i++}}</td>
                            <td>{{$about->heading}}</td>
                            <td>
                                <img src="{{asset($about->titleImage)}}" alt="Image Missing" height="100" width="100">
                            </td>
                            <td>{{$about->title}}</td>
                            <td>{{$about->titleDescription}}</td>
                            <td>
                                <img src="{{asset($about->teamMemberImage)}}" alt="Immage Missing" height="100" width="100">
                            </td>
                            <td>{{$about->teamMemberName}}</td>
                            <td>{{$about->teamMemberDescription}}</td>
                            <td>{{$about->publicationStatus == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td class="center">
                                <a href="{{url('/edit/aboutInfo/'.$about->id)}}" class="btn btn-info" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{url('/delete/aboutInfo/'.$about->id)}}" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this');">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <span class="pull-right">{{$abouts->links()}}</span>
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