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
                            <h3 class="card-title">Recommendations</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('Recommendation.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="recommendation">Application Id</label>
                                    <input type="text" class="form-control" id="recommendation" name=recommendation" placeholder=" RecommendationId">
                                </div>
                                <div class="form-group">
                                    <label for="User_Id">User Id</label>
                                    <input type="text" class="form-control" id="User_Id" name="User_Id" placeholder=" Enter User Id">
                                </div>
                                <div class="form-group">
                                    <label for="recommended at">recommended_at</label>
                                    <input type="text" class="form-control" id="recommended_at" name="recommended_at" placeholder="recommended at">
                                </div>

                                <div class="form-group">
                                    <label for="Applied_At">Applied At</label>
                                    <input type="text" class="form-control" id="Applied_At" name="Applied_At" placeholder="Applied At">
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

