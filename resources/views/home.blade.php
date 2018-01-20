@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    @include('includes.message-block')
                    <div class="panel-body">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>ID Number</th>
                                <th>Phone Number</th>
                                <th>Job Type</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach($jobapplications as $jobapplication)
                                <tr>
                                    <td>{{ $jobapplication->name }}</td>
                                    <td>{{ $jobapplication->id_number }}</td>
                                    <td>{{ $jobapplication->phone_number }}</td>
                                    <td>{{ $jobapplication->job_type }}</td>
                                    <td>{{ $jobapplication->location }}</td>
                                    {{--<td>--}}
                                        {{--@if($jobapplication->status == "1")--}}
                                            {{--<span style="color: green;">Vetted</span>--}}
                                        {{--@else--}}
                                            {{--<span style="color: red;">Not Vetted</span>--}}
                                        {{--@endif--}}
                                    {{--</td>--}}
                                    <td><a href="#" class="btn btn-primary">View</a></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
