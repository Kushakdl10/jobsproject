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
                            <h3 class="card-title">Job</h3>
                        </div>
                        <form action="{{route('product.update',$job->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" class="form-control" id="id" name="id"  value="{{ ( $job->id) }}">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="jobs_title">Title</label>
                                    <input type="text" class="form-control" id="jobs_title" name="title" placeholder="Job title" value="{{old('title', $job->title)}}">
                                </div>
                                <div class="form-group">
                                    <label for="job_description">Description</label>
                                    <input type="text" class="form-control" id="job_description" name="description" placeholder="Job description" value="{{old('description', $job->description)}}">
                                </div>
                                <div class="form-group">
                                    <label for="company">Company</label>
                                    <input type="text" class="form-control" id="company" name="company" placeholder="Enter company name" value="{{old('company', $job->company)}}">
                                </div>

                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="location" value="{{old('location', $job->location)}}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">update</button>
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
