<!-- resources/views/clases/create.blade.php -->


@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <h1 class="text-2xl font-semibold text-gray-900">Crear Nueva Clase</h1>
            @include('clases.form', ['clase' => new App\Models\ClaseModel])
        </div>
    </div>
@endsection
