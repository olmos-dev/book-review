@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2x1">Add Review for {{$book->title}}</h1>

    <form action="{{ route('books.reviews.store',$book) }}" method="post" novalidate>
        @csrf
        <label for="review">Review</label>
        <div class="mb-4">
            <textarea name="review" required id="review" class="input"  rows="6">{{ old('review') }}</textarea>
            @error('review')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        <div class="mb-4">
            <label for="rating">Rating</label>
            <select name="rating" id="rating" class="input" required>
                <option value="" disabled selected>Select a rating</option>
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i}}</option>
                @endfor
            </select>
            @error('rating')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        <button class="btn" type="submit">Add review</button>

    </form>



@endsection
