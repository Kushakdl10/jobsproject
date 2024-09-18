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
                            <h3 class="card-title">Job</h3>
                        </div>
                        <form action="{{route('product.store')}}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="jobs_title">Title</label>
                                    <input type="text" class="form-control" id="jobs_title" name="title" placeholder="Job title">
                                </div>
                                <div class="form-group">
                                    <label for="job_description">Description</label>
                                    <input type="text" class="form-control" id="job_description" name="job_description" placeholder="Job description">
                                </div>
                                <div class="form-group">
                                    <label for="company">Company</label>
                                    <input type="text" class="form-control" id="company" name="company" placeholder="Enter company name">
                                </div>

                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="location">
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
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
