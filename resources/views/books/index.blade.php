@extends('layouts.app')

@section('content')
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">ISBN</th>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Author</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td class="border px-4 py-2">{{ $book->id }}</td>
                    <td class="border px-4 py-2">{{ $book->isbn }}</td>
                    <td class="border px-4 py-2">{{ $book->title }}</td>
                    <td class="border px-4 py-2">{{ $book->author }}</td>
                    <td class="border px-4 py-2">{{ $book->description }}</td>
                    <td class="border px-4 py-2">{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
