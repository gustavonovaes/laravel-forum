@extends('layouts.dash')

@section('content')
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
        <h1>{{ $discussion->title }}</h1>

        {!! $discussion->content !!}
    </div>
</div>


@auth
<div class="card">
    <div class="card-header">
        Add a reply
    </div>

    <div class="card-body">
        <form action="{{ route('replies.store', $discussion->slug) }}"
              method="post">
            @csrf
            <input type="hidden"
                   name="content"
                   id="content">
            <trix-editor input="content"></trix-editor>

        <button type="submit"
                class="btn btn-success btn-sm my-2">Add Reply</button>
        </form>
    </div>
</div>
@else
<a href="{{ route('login') }}"
   class="btn btn-info">Sign in to add a reply</a>
@endauth

@endsection

@section('css')
<link async
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
@endsection

@section('js')
<script defer
        src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
@endsection
