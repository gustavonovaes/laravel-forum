@extends('layouts.base')

@section('app')
<main class="container py-4">
    <div class="row">
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>
</main>
@endsection
