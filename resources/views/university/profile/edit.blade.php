<x-university-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('University Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Formulaire pour mettre à jour les informations de profil -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-semibold mb-4">{{ __("Mettre à jour les informations de profil") }}</h3>
                    @include('university.profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Formulaire pour mettre à jour le mot de passe -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-semibold mb-4">{{ __("Changer le mot de passe") }}</h3>
                    @include('university.profile.partials.update-password-form')
                </div>
            </div>

            <!-- Formulaire pour supprimer le compte -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-semibold mb-4">{{ __("Supprimer le compte") }}</h3>
                    @include('university.profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-university-app-layout>
