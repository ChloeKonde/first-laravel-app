<x-guest-layout>
    <div>
        Comments to this post
    </div> <br>

    <div>
        @foreach($comments as $comment)
            {{ $comment->title }}
            <br>
        @endforeach
    </div>
</x-guest-layout>
