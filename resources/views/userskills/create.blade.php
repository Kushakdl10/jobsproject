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
                            <h3 class="card-title">UserSkills</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('userSkills.store')}}" method="post">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="userskills_Id">Userskills Id</label>
                                    <input type="text" class="form-control" id="userskills_Id" name="userskills_Id" placeholder=" Enter userskills Id">
                                </div>
                                <div class="form-group">
                                    <label for="user_Id">User Id</label>
                                    <input type="text" class="form-control" id="user_Id" name="user_Id" placeholder="user Id">
                                </div>

{{--                                <div class="form-group">--}}
{{--                                    <label for="Skills Id ">Status</label>--}}
{{--                                    <input type="text" class="form-control" id="Skills Id" name="Skills Id" placeholder="Skills Id">--}}
{{--                                </div>--}}

                                <div class="form-group">
                                    <label for="Status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="begginer">begginer</option>
                                        <option value="intermediate">intermediate</option>
                                        <option value="proffesional">proffesional</option>
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

