@extends('base.index')

@section('body')
    <div class="w-full">
        <div class="grid grid-cols-12 gap-4 p-4">
            @foreach ($movies as $movie)
                <div class="min-h-[100px] col-span-12 sm:col-span-4 md:col-span-3 bg-blue-400 text-center rounded-lg shadow">
                    <h1 class="mt-3 font-bold text-3xl">{{ $movie->movie_title }}</h1>
                    <h2 class="text-md font-semibold">{{ $movie->duration }} minutes</h2>
                    <h3 class="mt-2">Released: {{ $movie->release_date }}</h3>
                    <div class="flex justify-center gap-3 mb-3 mt-4 bottom-0">
                        <a href="{{ Route('tickets.create', $movie->id) }}" class="bg-red-300 px-5 py-2 rounded font-bold">Book</a>
                        <a href="{{ Route('movies.show', $movie->id) }}" class="bg-red-300 px-5 py-2 rounded font-bold">View</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
