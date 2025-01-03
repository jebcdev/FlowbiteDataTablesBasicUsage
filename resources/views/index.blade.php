<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    {{-- MainContent --}}
                    <div>

                        {{-- Users Table --}}
                        @includeIf('users.table')
                        {{-- Users Table --}}

                    </div>
                    {{-- MainContent --}}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
