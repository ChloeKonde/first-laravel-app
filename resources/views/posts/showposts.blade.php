<x-guest-layout>
    <div>
    All posts
    </div> <br>

    <div>
        @foreach ($posts as $post)
            {{ $post['name'] }}
            {{ $post['description'] }} <br>

            <div>
                <form action="{{route("posts.destroy", $post['id'])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>
                        DELETE
                    </button>
                </form>

                <a href="{{route('posts.edit', $post['id'])}}">
                    Edit
                </a>`
                <br>

                <a href="{{route('comments.create', $post['id'])}}">
                    Create comment
                </a>
                <a href="{{route('comments.index', $post['id'])}}">
                    Show all comments
                </a>

                 <br>
            </div>
        @endforeach
    </div>


</x-guest-layout>
