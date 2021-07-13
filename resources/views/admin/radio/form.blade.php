@extends('admin.layout.index')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid mt-5">
            <div class="col-sm-6">
                <h1>Radio</h1>
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
                    <form action="/admin/radio{{ isset($radio) ? '/'.$radio->id : '' }}" method="post"
                          id="form-work"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <p><label>Name</label></p>
                            <input class="form-control input-width" name="name"
                                   value="{{ isset($radio) ? $radio->name : ''}}"/>
                        </div>

                        <div class="form-group">
                            <p><label>Album</label></p>
                            <input class="form-control input-width" name="album"
                                   value="{{ isset($radio) ? $radio->album : ''}}"/>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="row">
                                <div class="col-3">
                                    <img style="width: 200px" id="output"
                                         class="mb-2"
                                         src="{{ isset($radio) ? asset('upload/radio/') . '/'.$radio->file : ''}}"/>
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

                        <div class="form-group">
                            <label for="exampleInputFile">Radio</label>
                            <div class="row">
                                <div class="col-3">
                                    <img style="width: 200px; display: none" id="output2"
                                         class="mb-2"
                                         src="{{ isset($radio) ? asset('upload/radio/') . '/'.$radio->radio : ''}}"/>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="radio"
                                                   id="exampleInputFile"
                                                   onchange="loadFile(event, 'custom-file-label2', 'output2')">
                                            <label class="custom-file-label" id="custom-file-label2"
                                                   for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-success btn-work-ct">{{ isset($radio) ? 'Update' : 'Create' }}</button>
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
