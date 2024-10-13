@extends('base.index')

@section('body')
    <form class="max-w-sm mx-auto mt-5" action="{{ Route('tickets.store') }}" method="POST">
        @csrf
        <input type="number" name="movie_id" value="{{ $movie->id }}" class="hidden">
        <div class="mb-5">
            <label for="customer_name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama</label>
            <input type="text" name="customer_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                required />
        </div>
        <div class="mb-5">
            <label for="seat_number" class="block mb-2 text-sm font-medium text-gray-900 ">Seat Number</label>
            <input type="text" name="seat_number"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                required />
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
@endsection
