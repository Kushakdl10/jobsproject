@extends('admin_layout.dir_layout.main')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-9">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Applications</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('Applications.update',$Applications->id)}}"  method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" class="form-control" id="id" name="id"  value="{{ ( $Applications->id) }}">
                            <div class="card-body">
                                {{--                                <div class="form-group">--}}
                                {{--                                    <label for="Application_Id">Application Id</label>--}}
                                {{--                                    <input type="text" class="form-control" id="application_id" name="Application_Id" placeholder=" Enter Application Id">--}}
                                {{--                                </div>--}}
                                <div class="form-group">
                                    <label for="Status">User</label>
                                    <select name="user_id" id="user_id" class="form-control" >
                                        @foreach($user as $i=> $u)
                                            <option value="{{$i}}">{{$u}}</option>

                                        @endforeach
                                    </select>
                                </div>
                                {{--                                <div class="form-group">--}}
                                {{--                                    <label for="Job_Id">Job Id</label>--}}
                                {{--                                    <input type="text" class="form-control" id="Job_Id" name="Job_Id" placeholder="Enter Job Id">--}}
                                {{--                                </div>--}}

                                <div class="form-group">
                                    <label for="Status">Job</label>
                                    <select name="job_id" id="job_id" class="form-control">
                                        {{$jobs}}
                                        @foreach($jobs as $id=>$j)
                                            <option value="{{$id}}">{{$j}}</option>

                                        @endforeach
                                    </select>
                                </div>


                                {{--                                <div class="form-group">--}}
                                {{--                                    <label for="Applied_At">Applied At</label>--}}
                                {{--                                    <input type="text" class="form-control" id="Applied_At" name="Applied_At" placeholder="Applied At">--}}
                                {{--                                </div>--}}

                                <div class="form-group">
                                    <label for="Status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value=0>begginer</option>
                                        <option value=1>intermediate</option>
                                        <option value=2>proffesional</option>
                                    </select>
                                </div>

                                {{--                                <div class="form-group">--}}
                                {{--                                    <label for="exampleInputFile">File input</label>--}}
                                {{--                                    <div class="input-group">--}}
                                {{--                                        <div class="custom-file">--}}
                                {{--                                            <input type="file" class="custom-file-input" id="exampleInputFile">--}}
                                {{--                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="input-group-append">--}}
                                {{--                                            <span class="input-group-text">Upload</span>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="form-check">--}}
                                {{--                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
                                {{--                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
                                {{--                                </div>--}}
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
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
