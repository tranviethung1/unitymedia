@extends('admin.layout.index')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid mt-5">
            <div class="col-sm-6">
                <h1>Library music</h1>
            </div>
            <div class="card card-warning pt-2">
                <div class="col-12">
                    @if(session('message'))
                        <div class="alert alert-success">
                            <strong>{{session('message')}}</strong>
                        </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr align="center">
                            <th class="text-center">ID</th>
                            <th class="text-center">File</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Url</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($libraryMusic as $item)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $item->id }}</td>
                                <td>
                                    <img width="100px" src="{{asset('upload/library-music/')}}/{{ $item->file }}">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td><a href="{{ $item->url }}">{{ $item->url }}</a></td>

                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{asset('admin/library-music/')}}/{{ $item->id }}/edit">Edit</a></td>
                                <td class="center">
                                    <i class="fa fa-trash-o  fa-fw"></i>

                                    <input type="hidden" class="hiddenID" value="{{ $item->id }}">

                                    <a href="#" class="btnDel" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#myModal{{$item->id}}">Delete</a>

                                    <div style="text-align: left;" id="myModal{{$item->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>You sure delete library: "{{$item->name}}"?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form method="POST" action="{{ asset('admin/library-music/delete/' .$item->id) }}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger btnConf">Yes</button>

                                                    </form>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!--/.col (right) -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <!-- /.content -->
    </div>

    <!-- /.control-sidebar -->

@endsection