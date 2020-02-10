@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-content-center">
            <div>
                <img style="width: 49px; height: 49px;"
                     class="rounded-circle"
                     src="{{ Gravatar::src($discussion->author->email) }}"
                     alt="" />
                <strong class="ml-2 text-uppercase">{{ $discussion->author->name }}</strong>
            </div>

            <div>
                <a href="{{ route('discussions.show', $discussion->slug) }}"
                   class="btn btn-success btn-sm">View</a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <h1>{{ $discussion->title }}</h1>

        {!! $discussion->content !!}
    </div>
</div>
@endsection
