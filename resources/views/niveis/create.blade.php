@extends('layouts.app')

@section('title', 'Create Nível')

@section('content')

<h1>INDEX NIVEIS   </h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

<form action="{{ route('niveis.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>

    <a>

    <button type="submit" class="btn btn-primary">Submit</button>
    <button class="btn btn-secondary" onclick="window.location.href='{{route('niveis.index')}}'"> Return</button>

</form>
@endsection
