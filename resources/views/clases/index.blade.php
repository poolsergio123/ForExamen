<!-- resources/views/clases/index.blade.php -->
@extends('layouts.app')


@section('content')
<div class="container mx-auto px-4 py-8">

    <div class="overflow-x-auto max-w-full">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-fixed w-full border-separate max-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ciclo</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Carrera</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Curso</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre de Clase</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descripcion Clase</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($clases as $clase)
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $clase->ciclo }}</td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $clase->carrera }}</td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $clase->curso }}</td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $clase->nombre_clase }}</td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $clase->descripcion_clase }}</td>
                        <td class="px-6 py-4 text-sm font-medium">
                            <div class="flex space-x-3">
                                <a href="{{ route('clases.edit', $clase) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                <form action="{{ route('clases.destroy', $clase) }}" method="POST" class="inline" onsubmit="return confirm('¿Está seguro que desea eliminar esta clase?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 text-sm text-gray-500 text-center">No hay clases registrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


    @if($clases->hasPages())
        <div class="mt-4">
            {{ $clases->links() }}
        </div>
    @endif
</div>
@endsection
