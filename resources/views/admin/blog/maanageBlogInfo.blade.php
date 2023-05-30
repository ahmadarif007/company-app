@extends('admin.adminMaster')

@section('title')
Manage | Blog-Info
@endsection

@section('adminContent')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading text-center lead" style="font-size: 30px; font-weight: bold; color:#fff; background-color: #2F4F4F">
                Manage Blog Information  
                <h3 class="text-center text-white">{{Session::get('message')}}</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <span class="pull-left">{{$allBlogInfo->links()}}</span>
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr style="color: green">
                            <th style="text-align: center">SI.</th>
                            <th style="text-align: center">News Image</th>
                            <th style="text-align: center">Title </th>
                            <th style="text-align: center">Title Description</th>
                            <th style="text-align: center">Publication Status </th>
                            <th style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($allBlogInfo as $blogInfo)
                        <tr class="odd gradeX text-center">           
                            <td>{{$i++}}</td>
                            <td>
                                <img src="{{asset($blogInfo->blogImage)}}" alt="Image Missing" height="100" width="100">
                            </td>
                            <td>{{$blogInfo->blogTitle}}</td>
                            <td>{{$blogInfo->blogDescription}}</td>
                            <td>{{$blogInfo->publicationStatus == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td class="center">
                                <a href="{{url('/edit/blogInfo/'.$blogInfo->id)}}" class="btn btn-info" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{url('/delete/blogInfo/'.$blogInfo->id)}}" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this');">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <span class="pull-right">{{$allBlogInfo->links()}}</span>
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