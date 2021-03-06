@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
           <img class="rounded-circle" width="150" height="150" src="/storage/{{ $profile->image }}">
        </div>
        <div class="col-md-4 pt-2">
           <h3>{{ $user->name }}</h3>
           <span><strong>{{ $numPosts }}</strong> posts</span>
           {{-- <div class="pt-3">{{$profile->description}}</div>
           <div class="pt-3"><a href="/profile/edit">Edit profile</a></div> --}}
           @if (empty($profile->description))

                    <div class="pt-2"><a href="/profile/edit">Add a description to your profile!</a></div>

                @else:

                    <div class="pt-3">{{ $profile->description }}</div>
                    <div class="pt-2"><a href="/profile/edit">Edit profile</a></div>

                @endif
        </div>
        <div class="col-md-4 pt-2">
            
        </div>
    </div>
    <div class="row pt-5">
        @foreach($posts as $post)
            <div class="col-xs-3 col-md-6 col-lg-4 mb-3">
                <a href="/post/{{$post->id}}">
                    <img id="post-image" src="/storage/{{$post->image}}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection
