@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
           <img class="rounded-circle" width="150" src="/storage/{{ $profile->image }}">
       </div>
       <div class="col-md-9 pt-4">
           <h3>{{ $user->name }}</h3>
           <span><strong>0</strong> posts</span>
           <div class="pt-3">{{$profile->description}}</div>
       </div>
   </div>
</div>

@endsection
