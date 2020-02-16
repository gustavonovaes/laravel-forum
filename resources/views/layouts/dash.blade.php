@extends('layouts.base')

@section('app')
<main class="container py-4">
    <div class="row">
        <div class="col-md-4">
            @auth
            <div class="mb-2">
                <a href="{{ route('discussions.create') }}"
                   class="btn btn-info btn-block">Create Discussion</a>
            </div>
            @else

            <div class="mb-2">
                <a href="{{ route('login') }}"
                   class="btn btn-info btn-block">Sign in to discussion</a>
            </div>
            @endauth


            <div class="card">
                <div class="card-header">Channels</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($channels as $channel)
                        <li class="list-group-item">{{ $channel->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            @yield('content')
        </div>
    </div>
</main>
@endsection
