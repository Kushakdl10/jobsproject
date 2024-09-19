@extends('admin_layout.dir_layout.main')

@section('content')

{{--    <section class="content">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <!-- left column -->--}}
{{--                <div class="col-md-9">--}}
{{--                    <!-- general form elements -->--}}
{{--                    <div class="card card-primary">--}}
{{--                        <div class="card-header">--}}
{{--                            <h3 class="card-title">Quick Example</h3>--}}
{{--                        </div>--}}
{{--                        <!-- /.card-header -->--}}
{{--                        <!-- form start -->--}}
{{--                        <form action="{{route('product.store')}}}" method="post">--}}
{{--                            @csrf--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="jobs_title">Title</label>--}}
{{--                                    <input type="text" class="form-control" id="jobs_title" name="title" placeholder="Job title">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="job_description">Description</label>--}}
{{--                                    <input type="text" class="form-control" id="job_description" name="job_description" placeholder="Job description">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="company">Company</label>--}}
{{--                                    <input type="text" class="form-control" id="company" name="company" placeholder="Enter company name">--}}
{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="location">Location</label>--}}
{{--                                    <input type="text" class="form-control" id="location" name="location" placeholder="location">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body -->--}}

{{--                            <div class="card-footer">--}}
{{--                                <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <!-- /.card -->--}}

{{--                </div>--}}
{{--                <!--/.col (left) -->--}}
{{--                <!-- right column -->--}}
{{--                <!--/.col (right) -->--}}
{{--            </div>--}}
{{--            <!-- /.row -->--}}
{{--        </div><!-- /.container-fluid -->--}}
{{--    </section>--}}



<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-9">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Job</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-9"><div class="dt-buttons btn-group flex-wrap">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                        <thead>
                                        <tr>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">users_id</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">jobs_id</th>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column descending" aria-sort="ascending">Application Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">status</th>
                                        {{--                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th>--}}
                                        {{--                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th></tr>--}}
                                        </thead>
                                        <tbody>
                                        <tr class="odd">
                                        @foreach( $data as $i=>$cat)
                                            <tr class="odd">
                                                <td class="dtr-control sorting_1" >{{$cat->id}}</td>

                                                <td>{{$cat->title}}</td>
                                                <td>{{$cat->company}}</td>
                                                <td>{{$cat->location}}</td>
                                                <td>

                                                    @if($cat->status === 1)

                                                        <p class="text-success">Active</p>

                                                    @else<p class="text-danger">De-Active</p>
                                                    @endif
                                                </td>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>



                        </div>
                        <!-- /.card -->

                        <!-- general form elements -->

                        <!-- Input addon -->
                        <!-- /.card -->
                        <!-- Horizontal Form -->
                        <!-- /.card -->

                        {{--                </div>--}}
                        <!--/.col (left) -->
                        <!-- right column -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

@endsection
