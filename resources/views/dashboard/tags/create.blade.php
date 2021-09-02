<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tags') }}
        </h2>
    </x-slot>

    <x-slot name="nav">
        <div class="flex px-4  mx-auto space-x-8 max-w-7xl sm:px-6 lg:px-8">
            <x-jet-nav-link href="{{ route('tags.index') }}" :active="request()->routeIs('tags.index')">
                {{ __('Index') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="{{ route('tags.create') }}" :active="request()->routeIs('tags.create')">
                {{ __('Create') }}
            </x-jet-nav-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6">
                    <form action="{{ route('tags.store') }}" method="POST">
                        @csrf

                       
                        <div>
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-jet-input-error for="name" class="mt-2" />
                        </div>

                        <x-jet-button class="mt-10">
                            {{ __('Create') }}
                        </x-jet-button>



                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
