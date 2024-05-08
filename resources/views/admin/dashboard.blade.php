<x-admin-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Tableau de bord de l'administrateur -->
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <!-- Accès aux universités -->
                <div class="p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h3 class="text-lg font-semibold mb-4">{{ __("Universities") }}</h3>
                    <a href="{{ route('universities.index') }}" class="text-blue-600 hover:underline">{{ __("View All") }}</a>
                </div>
                <!-- Accès aux utilisateurs -->
                <div class="p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h3 class="text-lg font-semibold mb-4">{{ __("Users") }}</h3>
                    <a href="{{ route('users.index') }}" class="text-blue-600 hover:underline">{{ __("View All") }}</a>
                </div>
                <!-- Accès aux commentaires -->
                <div class="p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h3 class="text-lg font-semibold mb-4">{{ __("Comments") }}</h3>
                    <a href="{{ route('comments.index') }}" class="text-blue-600 hover:underline">{{ __("View All") }}</a>
                </div>
                <!-- Accès aux secteurs -->
                <div class="p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h3 class="text-lg font-semibold mb-4">{{ __("Sectors") }}</h3>
                    <a href="{{ route('sectors.index') }}" class="text-blue-600 hover:underline">{{ __("View All") }}</a>
                </div>
                <!-- Autres fonctionnalités de modération -->
            </div>
        </div>
    </div>
</x-admin-app-layout>
