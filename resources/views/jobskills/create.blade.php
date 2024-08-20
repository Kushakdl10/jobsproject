@extends('admin_layout.dir_layout.main')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('jobSkills.store')}}" method="post">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="jobskills_Id">jobskills Id</label>
                                    <input type="text" class="form-control" id="jobskills_Id" name="jobskills_Id" placeholder=" Enter jobskills Id">
                                </div>
                                <div class="form-group">
                                    <label for="Job_Id">Job Id</label>
                                    <input type="text" class="form-control" id="Job_Id" name="Job_Id" placeholder="Job Id">
                                </div>

                                <div class="form-group">
                                    <label for="Skills_Id ">Skills Id</label>
                                    <input type="text" class="form-control" id="Skills_Id" name="Skills_Id" placeholder="Skills Id">
                                </div>

                                <div class="form-group">
                                    <label for="Status">Status</label>
                                    <input type="text" class="form-control" id="Status" name="Status" placeholder="Status">
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

