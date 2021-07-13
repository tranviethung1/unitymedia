@extends('admin.layout.index')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6 mt-2">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">SEO setting</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form"
                              action="{{asset('admin/general-setting/')}}"
                              method="post"
                              enctype="multipart/form-data"
                              autocomplete="off">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title page</label>
                                    <input value="{{$generalSetting[0]->content}}" type="text" class="form-control" name="title_page" autocomplete="new-title" placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <input value="{{$generalSetting[1]->content}}" type="text" class="form-control" name="Description" autocomplete="new-title" placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Og:title</label>
                                    <input value="{{$generalSetting[2]->content}}"type="text" class="form-control" name="og:title" placeholder="Og:title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Og:type</label>
                                    <input value="{{$generalSetting[3]->content}}" type="text" class="form-control" name="og:type" placeholder="Og:type">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Og:url</label>
                                    <input value="{{$generalSetting[4]->content}}" type="text" class="form-control" name="og:url" placeholder="Og:url">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Og:image</label>
                                    <input value="{{$generalSetting[5]->content}}" type="text" class="form-control" name="og:image" placeholder="Og:image">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Og:description</label>
                                    <input value="{{$generalSetting[6]->content}}" type="text" class="form-control" name="og:description" placeholder="Og:description">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Favicon</label>
                                    <div class="row ml-1">
                                        <img style="width: 200px" id="output"
                                             class="mb-2"
                                             src="{{ isset($generalSetting[7]) ? asset('upload/favicon/') . '/'.$generalSetting[7]->content : ''}}"/>
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="favicon" class="custom-file-input" id="exampleInputFile" onchange="loadFile(event, 'custom-file-label', 'output')">
                                            <label class="custom-file-label" id="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Logo</label>
                                    <div class="row ml-1">
                                        <img style="width: 200px" id="outputLogo"
                                             class="mb-2"
                                             src="{{ isset($generalSetting[8]) ? asset('upload/logo/') . '/'.$generalSetting[8]->content : ''}}"/>
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="logo" class="custom-file-input" id="exampleInputFile2" onchange="loadFile(event, 'custom-file-logo', 'outputLogo')">
                                            <label class="custom-file-label" id="custom-file-logo" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6 mt-2">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Profile company</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form"
                                  action="{{asset('admin/general-setting/')}}"
                                  method="post"
                                  enctype="multipart/form-data"
                                  autocomplete="off">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Full name company</label>
                                            <input value="{{$generalSetting[10]->content}}" type="text" class="form-control" name="full_name" placeholder="Full name company.." autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input value="{{$generalSetting[11]->content}}" type="text" class="form-control" name="address" placeholder="Address..">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input value="{{$generalSetting[12]->content}}" type="mail" class="form-control" name="email" placeholder="Email ..." autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone number</label>
                                            <input value="{{$generalSetting[13]->content}}" type="number" name="phone_number" class="form-control" placeholder="Phone number ...">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- general form elements disabled -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Home setting</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form
                                    action="{{asset('admin/general-setting/')}}"
                                    method="post"
                                    enctype="multipart/form-data"
                            >
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Library represent</label>
                                            <select class="custom-select" name="library_represent">
                                                @foreach($library as $item)
                                                    <option value="{{$item->id}}"
                                                            {{$generalSetting[14]->content == $item->id ? 'selected' : ''}}
                                                    >{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        <!-- /.content -->
    </div>

    <!-- /.control-sidebar -->

@endsection