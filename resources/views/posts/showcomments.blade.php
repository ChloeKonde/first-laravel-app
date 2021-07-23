<x-guest-layout>
    <div>
        All comments
    </div> <br>
    @foreach ($comments as $comment)
        {{ $comment['user_id'] }}
        {{ $comment['title'] }} <br>
    @endforeach

</x-guest-layout>
