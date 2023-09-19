<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Elenco dei Progetti') }}
        </h2>
    </x-slot>

    <!-- Contenuto della pagina Projects -->
    <div class="container mx-auto p-6">
        @if(count($projects) > 0)
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($projects as $project)
                    <li class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold mb-2">{{ $project->title }}</h2>
                            <p class="text-gray-600">{{ $project->description }}</p>
                        </div>
                        <div class="bg-gray-100 p-4 border-t border-gray-200">
                            <a href="{{ route('projects.show', ['project' => $project]) }}" class="text-blue-500 hover:underline">Dettagli</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Nessun progetto disponibile.") }}
                </div>
            </div>
        </div>
        @endif
    </div>
</x-app-layout>
