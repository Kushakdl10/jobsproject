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
                            <h3 class="card-title">JobSkills</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('jobSkills.update', $jobskills->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="job_id">jobs</label>
                                    <select name="job_id" id="job_id" class="form-control">
                                        <option> Select Options</option>
                                        @foreach ( $data as $id => $job )
                                            <option value="{{ $id }}">{{ $job }}</option>
                                        @endforeach
                                    </select>
                                    @error('job_id')
                                    <p class="text-danger">  This Category is a required filed</p>
                                    @enderror
                                </div>


{{--                                <div class="form-group">--}}
{{--                                    <label for="skill_id">Skills</label>--}}
{{--                                    <select name="skill_id" id="skill_id" class="form-control">--}}
{{--                                        <option> Select Options</option>--}}
{{--                                        @foreach ( $data as $id => $skill )--}}
{{--                                            <option value="{{ $id }}">{{ $skill }} </option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                    @error('skill_id')--}}
{{--                                    <p class="text-danger">  This Category is a required filed</p>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}


                                <div class="form-group">
                                    <label for="Status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value=0>begginer</option>
                                        <option value=1>intermediate</option>
                                        <option value=2>proffesional</option>
                                    </select>
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

