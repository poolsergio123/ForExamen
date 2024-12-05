<!-- resources/views/eventos/form.blade.php -->
<form action="{{ $clase->exists ? route('clases.update', $clase) : route('clases.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @if($clase->exists)
        @method('PUT')
    @endif

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
        <div>
            <label class="block text-sm font-medium text-gray-700">Ciclo</label>
            <input type="number" name="ciclo" value="{{ old('nombre', $clase->ciclo) }}" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @error('ciclo')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Carrera</label>
            <input type="int" name="carrera" value="{{ old('carrera', $clase->carrera) }}" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @error('carrera')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-span-2">
            <label class="block text-sm font-medium text-gray-700">Curso</label>
            <input type="text" name="curso" value="{{ old('curso', $clase->curso) }}" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @error('curso')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Clase</label>
            <input type="text" name="nombre_clase" value="{{ old('nombre_clase', $clase->nombre_clase) }}" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @error('nombre_clase')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Descripcion de Clase</label>
            <input type="text" name="descripcion_clase" value="{{ old('descripcion_clase', $clase->descripcion_clase) }}" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @error('descripcion_clase')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>


    </div>

    <div class="flex justify-end gap-4">
        <!-- <a href="{{ route('clases.index') }}"
           class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Cancelar
        </a> -->
        <button type="submit"
                class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            {{ $clase->exists ? 'Actualizar' : 'Crear' }} Clase
        </button>
    </div>
</form>
