@extends('layouts.main')

@section('content')
    <hr>
    <div class="site-section">
        <div class="container mt-3">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <h2>{{$categoryName->name}}</h2>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tbody>
                    @foreach($jobs as $job)
                        <tr>
                            <td>
                                <img src="{{asset('avatar/apple.png')}}" width="80">
                            </td>
                            <td>
                                Position: {{$job->position}}<br>
                                Job Type: <i class="fa fa-clock"></i>&nbsp;{{$job->type}}
                            </td>
                            <td>
                                <i class="fa fa-map-marker"></i>&nbsp;Address: {{$job->address}}
                            </td>
                            <td>
                                <i class="fa fa-calendar-check"></i>&nbsp;Date: {{$job->created_at->diffForHumans()}}
                            </td>
                            <td>
                                <a href="{{route('jobs.show',[$job->id,$job->slug])}}">
                                    <button class="btn btn-success btn-sm">Apply</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$jobs->links()}}
            </div>


        </div>
    </div>

@endsection
