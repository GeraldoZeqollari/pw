@extends('layouts.app')

@section('feedback')

    <div class="feedback_container">
        @auth
            <form action="{{ route('feedback') }}" class="feedback_form" method="POST">
                @csrf
                <div class="feedback_intro">
                    <h1>Feedback Form</h1>
                    <p>We appreciate your suggestions, thoughts, concerns and criticism. Help us by leaving a review to improve our page!</p>
                </div>

                <h1 class="feedback_q">How was your experience in our website?</h1>

                <div class="fb_emotions">
                    <input type="radio" id="extraAngry" name="fexperience" value="extraAngry">
                    <label for="extraAngry" class="label_exp"> <i class="far fa-angry"></i> </label>
                    <input type="radio" id="angry" name="fexperience" value="angry">
                    <label for="angry" class="label_exp"><i class="far fa-frown"></i></label>
                    <input type="radio" id="neutral" name="fexperience" value="neutral">
                    <label for="neutral" class="label_exp"><i class="far fa-meh"></i></label>
                    <input type="radio" id="happy" name="fexperience" value="happy">
                    <label for="happy" class="label_exp"><i class="far fa-grin"></i></label>
                    <input type="radio" id="extraHappy" name="fexperience" value="extraHappy">
                    <label for="extraHappy" class="label_exp"><i class="far fa-grin-beam"></i></i></label>
                </div>

                <h1 class="feedback_q">Feedback category</h1>

                <div class="feedback_issue">
                    <input type="radio" id="suggestion" name="f_issue" value="suggestion">
                    <label for="suggestion" class="label_exp"> Suggestion </label>

                    <input type="radio" id="bug" name="f_issue" value="bug">
                    <label for="bug" class="label_exp">Bug</label>

                    <input type="radio" id="other" name="f_issue" value="other">
                    <label for="other" class="label_exp">Other</label>
                </div>



                <div class="fb_textarea">
                    
                <h1 class="feedback_q">Describe in a few words</h1>
                    <textarea name="body" id="body" cols="30" rows="4" class="@error('body') border-red-500 @enderror"></textarea>
                    @error('body')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="fb_btn">
                    <button type="submit">Submit</button>
                </div>

            </form>
        
            @endauth


        @if ($feedbacks->count())
            @foreach ($feedbacks as $feedback)
                <div class="reviews">
                    <a href=""> {{ $feedback->user->email }} </a>
                    <span>{{ $feedback->created_at->diffForHumans() }}</span>
                    <p>{{ $feedback->body }}</p>
                </div>
            @endforeach
            {{ $feedbacks->links('pagination.pagination') }}
        @else
            
            <div class="reviews">
                <h1>There are no reviews yet</h1>
            </div>
        @endif

    </div>

@endsection
