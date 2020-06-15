@extends('layouts.main')

@section('content')
    <hr>
   <div class="site-section">
       <div class="container mt-3">
           <div class="col-lg-12 col-md-12 col-sm-12">
               <div class="row">
                  <form class="form-inline" action="{{route('alljobs')}}" method="get">
                       <div class="form-inline">
                           <div class="form-group">
                               <input type="text" name="title" class="form-control" placeholder="Keyword">
                           </div>&nbsp;&nbsp;
                           <div class="form-group">
                               <select name="type" class="form-control">
                                   <option>Employment-type</option>
                                   <option value="fulltime">Full time</option>
                                   <option value="parttime">Part time</option>
                                   <option value="casual">Casual</option>
                               </select>
                           </div>&nbsp;&nbsp;
                           <div class="form-group">
                               <select name="category_id" class="form-control">
                                   <option>Select Category</option>
                                   @foreach(App\Category::all() as $cat)
                                       <option value="{{$cat->id}}">{{$cat->name}}</option>
                                   @endforeach
                               </select>
                           </div>&nbsp;&nbsp;
                           <div class="form-group">
                               <input type="text" name="address" class="form-control" placeholder="Address">
                           </div>&nbsp;
                           <button class="btn btn-success">Search</button>
                       </div>
                   </form>
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
