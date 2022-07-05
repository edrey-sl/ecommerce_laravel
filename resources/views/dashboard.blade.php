<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de control') }}
        </h2>
    </x-slot>

    <div class="py-12">
   
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-orange-500">Edrey Salinas</h1>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>

 
</x-app-layout>
