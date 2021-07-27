<x-guest-layout>
    <div>
    All posts
    </div> <br>

    <div>
        @foreach ($posts as $post)
            {{ $post['name'] }}
            {{ $post['description'] }} <br>

            <div>
                <form action="{{route("deletepost", $post['id'])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>
                        DELETE
                    </button>
                </form>

                <a href="{{route('editpost', $post['id'])}}">
                    Edit
                </a>
                <br>

                <a href="{{route('createcomment', $post['id'])}}">
                    Create comment
                </a>
                <a href="{{route('showallcomments', $post['id'])}}">
                    Show all comments
                </a>

                 <br>
            </div>
        @endforeach
    </div>


</x-guest-layout>
