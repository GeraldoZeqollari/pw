@extends('layouts.app')

@section('content')

    <form action="{{route('feedback')}}" method="POST" style="padding-top: 120px" >
        @csrf
                <div class="mb-4">
                     <label for="body" class="sr-only">Body</label>
                        <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Feedback"></textarea>

                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Feedback</button>
                    </div>

    </form>

    @if($feedbacks->count())
    @foreach ($feedbacks as $feedback)
        <div style="">
            <a href=""> {{ $feedback->user->email  }} </a> <span>{{$feedback->created_at->diffForHumans()}}</span>
            <p>{{$feedback->body}}</p>
        </div>
    @endforeach
        {{ $feedbacks->links() }}
    @else
        <p>There are no feedbacks</p>

    @endif
@endsection