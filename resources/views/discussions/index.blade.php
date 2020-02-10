@extends('layouts.app')

@section('content')

@foreach($discussions as $discussion)
<div class="card mb-3">
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
        {!! $discussion->title !!}
    </div>
</div>
@endforeach

@endsection
