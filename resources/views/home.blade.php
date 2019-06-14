@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-sin2-2.cdninstagram.com/vp/4e987efbe93e5e46ea7843649c5cee8e/5D964262/t51.2885-19/10810038_376232952552689_59244960_a.jpg?_nc_ht=scontent-sin2-2.cdninstagram.com&_nc_cat=1"
                class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div>
                    <h1>{{ $user->name }}</h1>

                    {{-- <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button> --}}
                </div>


                {{-- @can('update', $user->profile)
                                    <a href="/p/create">Add New Post</a>
                            @endcan --}}
            </div>

            {{-- @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan --}}


            {{-- <div class="d-flex">
                <div class="pr-5"><strong>{{ $postCount }}</strong> posts
            </div>
            <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
            <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
            </div> --}}
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>

        </div>

    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>

</div>
@endsection
