@props(['feedback' => $feedback])

<div class="mb-4">
    <a href="{{ route('users.feedback', $feedback->user) }}" class="font-bold">{{ $feedback->user->name }}</a> <span class="text-gray-600 text-sm">{{ $feedback->created_at->diffForHumans() }}</span>

    <p class="mb-2">{{ $feedback->body }}</p>

    @can('delete', $feedback)
        <form action="{{ route('feedbacks.destroy', $feedback) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-blue-500">Delete</button>
        </form>
    @endcan

    <div class="flex items-center">
        @auth
            @if (!$feedback->likedBy(auth()->user()))
                <form action="{{ route('feedbacks.likes', $post) }}" method="post" class="mr-1">
                    @csrf
                    <button type="submit" class="text-blue-500">Like</button>
                </form>
            @else
                <form action="{{ route('feedbacks.likes', $post) }}" method="post" class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-blue-500">Unlike</button>
                </form>
            @endif
        @endauth

        <span>{{ $feedback->likes->count() }} {{ Str::plural('like', $feedback->likes->count()) }}</span>
    </div>
</div>