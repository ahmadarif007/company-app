@extends('admin.adminMaster')

@section('title')
Manage | Contact-Info
@endsection

@section('adminContent')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading text-center lead" style="font-size: 30px; font-weight: bold; color:#fff; background-color: #2F4F4F">
                Manage Contact Information  
                <h3 class="text-center text-white">{{Session::get('message')}}</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <span class="pull-left">{{$allContactInfo->links()}}</span>
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr style="color: green">
                            <th style="text-align: center">SI.</th>
                            <th style="text-align: center">Client Contact Name</th>
                            <th style="text-align: center">Client E-mail </th>
                            <th style="text-align: center">Subject</th>
                            <th style="text-align: center">Message</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($allContactInfo as $contactInfo)
                        <tr class="odd gradeX text-center">           
                            <td>{{$i++}}</td>
                            <td>{{$contactInfo->name}}</td>
                            <td>{{$contactInfo->email}}</td>
                            <td>{{$contactInfo->subject}}</td>
                            <td>{{$contactInfo->message}}</td>
                            <td class="center">
                                <a href="{{url('/edit/contactInfo/'.$contactInfo->id)}}" class="btn btn-info" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{url('/delete/contactInfo/'.$contactInfo->id)}}" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this');">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <span class="pull-right">{{$allContactInfo->links()}}</span>
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