@extends('layout.app')

@section('content')
    <h1 class="text-bold">{{ $title }}</h1>
    @if (count($services) > 0)
        <ul>
            @foreach ($services as $service)
                <li class="text-sm">{{ $service }}</li>
            @endforeach
        </ul>
    @endif
@endsection
