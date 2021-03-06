<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{route("posts.store")}}">
            @csrf
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name')" required autofocus />
            </div>

            <div>
                <x-label for="description" :value="__('Description')" />
                <x-input id="description" class="block mt-1 w-full" type="description" name="description" :value="old('name')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Create post') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
