<x-guest-layout>
    <form action="{{route("updatepost", $post->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <x-label for="name" :value="__('Name')" />
            <x-input id="name" class="block mt-1 w-full" type="name" name="name" :value="$post->name" required autofocus />
        </div>

        <div>
            <x-label for="description" :value="__('Description')" />
            <x-input id="description" class="block mt-1 w-full" type="description" name="description" :value="$post->description" required autofocus />
        </div>

        <button>
            SAVE
        </button>
    </form>
</x-guest-layout>
