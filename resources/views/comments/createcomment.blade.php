<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form action="{{route('storecomment')}}" method="POST">
            @csrf
            <div>
                <x-label for="title" :value="__('Title')" />
                <x-input id="title" class="block mt-1 w-full" type="title" name="title" :value="old('title')" required autofocus />
                <input type="hidden" name="post_id" value="{{$post_id}}"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Create comment') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

