@extends('layout')

@section('title', 'Content')

@section('content')
    <div class="my-4">
        <div class="my-4">
            <h2>Wellcome, {{ $user['name'] }}</h2>
        </div>
        <div class="row g-2">
            @foreach ($data as $item)
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p class="card-text">{{ $item['description'] }}</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                            @if ($user['role_id'] === 1)
                                <a href="#" class="btn btn-success">Edit</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
