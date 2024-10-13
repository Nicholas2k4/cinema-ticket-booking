@extends('base.index')

@section('body')
    <div class="w-full">
        <div class="grid grid-cols-12 gap-4 p-4">
            @foreach ($tickets as $ticket)
                <div class="min-h-[100px] col-span-12 sm:col-span-4 md:col-span-3 bg-blue-400 text-center rounded-lg shadow">
                    <h1 class="mt-3 font-bold text-3xl">{{ $ticket->customer_name }}</h1>
                    <h2 class="text-md font-semibold">{{ $ticket->seat_number }}</h2>
                    <h3 class="mt-2">{{ $ticket->is_checked_in }}</h3>
                    <h3 class="mt-2">{{ $ticket->check_in_time }}</h3>
                    {{-- <div class="flex justify-center gap-3 mb-3 mt-4 bottom-0">
                        <a href="{{ Route('tickets.create', $movie->id) }}" class="bg-red-300 px-5 py-2 rounded font-bold">Book</a>
                        <a href="{{ Route('movies.show', $movie->id) }}" class="bg-red-300 px-5 py-2 rounded font-bold">View</a>
                    </div> --}}
                </div>
            @endforeach
        </div>
    </div>
@endsection
