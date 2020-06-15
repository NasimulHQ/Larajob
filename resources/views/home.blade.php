@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Favorites job</div>
                @if(Auth::user()->user_type=='seeker')
                @foreach($jobs as $job)
                <div class="card-body">
                    <div class="card-header"><b>{{$job->title}}</b></div>
                    <div class="card-body">
                        {{$job->description}}
                    </div>
                    <div class="card-footer">
                        <span>
                            <a href="{{route('jobs.show',[$job->id,$job->slug])}}">
                                read More
                            </a>
                        </span>
                        <span class="float-right">Application Deadline:{{$job->last_date}}</span>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
