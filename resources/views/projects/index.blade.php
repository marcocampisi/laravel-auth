@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-semibold mb-6">Elenco dei Progetti</h1>

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
        <p class="text-gray-600">Nessun progetto disponibile al momento.</p>
    @endif
</div>
@endsection
