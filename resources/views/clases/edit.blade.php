<!-- resources/views/eventos/edit.blade.php -->
@extends('layouts.app')


@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <h1 class="text-2xl font-semibold text-gray-900">Editar Clase</h1>
            @include('clases.form', ['clase' => $clase])
        </div>
    </div>
@endsection
