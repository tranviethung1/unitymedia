@extends('admin.layout.index')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid mt-5">
        <div class="col-sm-6">
            <h1>Library music</h1>
        </div>
        <div class="card card-warning p-5">
            <div class="col-12">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            <strong>{{$err}}</strong><br>
                        @endforeach
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        <strong>{{session('error')}}</strong>
                    </div>
                @endif

                @if(session('message'))
                    <div class="alert alert-success">
                        <strong>{{session('message')}}</strong>
                    </div>
                @endif
                <form action="{{asset('admin/library-music')}}{{ isset($libraryMusic) ? '/'.$libraryMusic->id : '' }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <p><label>Name</label></p>
                        <input class="form-control input-width" name="name" value="{{ isset($libraryMusic) ? $libraryMusic->name : ''}}" />
                    </div>

                    <div class="form-group">
                        <p><label>Description</label></p>
                        <input name="description" id="demo" class="form-control" value="{{ isset($libraryMusic) ? $libraryMusic->description: ''}}"/>

                    </div>


                    <div class="form-group">
                        <p><label>Url</label></p>
                        <input name="url" id="demo2" class="form-control" value="{{ isset($libraryMusic) ? $libraryMusic->url : ''}}"/>

                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="row">
                            <div class="col-3">
                                <img style="width: 200px" id="output"
                                     class="mb-2"
                                     src="{{ isset($libraryMusic) ? asset('upload/library-music/') . '/'.$libraryMusic->file : ''}}"/>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file" id="exampleInputFile" onchange="loadFile(event, 'custom-file-label', 'output')">
                                        <label class="custom-file-label" id="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-success btn-work-ct">{{ isset($libraryMusic) ? 'Update' : 'Create' }}</button>
                    <button type="reset" class="btn btn-danger btn-mleft">Reset</button>
                </form>
            </div>
        </div>
    </div>

        </div>

@endsection