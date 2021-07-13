@extends('admin.layout.index')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid mt-5">
            <div class="col-sm-6">
                <h1>Work</h1>
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
                    <form action="{{asset('admin/work')}}{{ isset($work) ? '/'.$work->id : '' }}" method="post"
                          id="form-work"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <p><label>Title</label></p>
                            <input class="form-control input-width" name="title"
                                   value="{{ isset($work) ? $work->title : ''}}"/>
                        </div>

                        <div class="form-group" id="checktextarea">
                            <p><label>Content</label></p>
                            <input name="description" id="content" class="form-control"
                                   value="{{ isset($work) ? $work->content: ''}}" hidden/>
                            <div class="mb-3">
                                <textarea class="textarea" placeholder="Place some text here"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    {{ isset($work) ? $work->content: ''}}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="row">
                                <div class="col-3">
                                    <img style="width: 200px" id="output"
                                         class="mb-2"
                                         src="{{ isset($work) ? asset('upload/work/') . '/'.$work->file : ''}}"/>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="file"
                                                   id="exampleInputFile"
                                                   onchange="loadFile(event, 'custom-file-label', 'output')">
                                            <label class="custom-file-label" id="custom-file-label"
                                                   for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-success btn-work-ct">{{ isset($work) ? 'Update' : 'Create' }}</button>
                        <button type="reset" class="btn btn-danger btn-mleft">Reset</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('scripts')
    <script>
        $('.btn-work-ct').on('click', function (e) {
            e.preventDefault()
            let content = $('.textarea').val();
            $('#content').val(content);
            $('#form-work').submit()
        });
    </script>
@endsection
