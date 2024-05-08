<!-- dashboard.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3>{{ __("Liste des universités") }}</h3>
                    <ul>
                        @foreach(App\Models\University::all() as $university)
                            <li>
                                <h4>{{ $university->name }}</h4>
                                <p>{{ $university->description }}</p>
                                <p>Note moyenne : {{ $university->average_rating }}</p>
                                <ul>
                                    @foreach($university->comments as $comment)
                                        <li>
                                            @if ($comment->content)
                                                {{ $comment->content }}
                                            @elseif ($comment->notation)
                                                Note : {{ $comment->notation }}
                                            @endif
                                        </li>
                                        <!-- Afficher d'autres détails du commentaire si nécessaire -->
                                    @endforeach
                                </ul>
                                <!-- Formulaire pour poster un commentaire et noter l'université -->
                                <form method="POST" action="{{ route('comments.store') }}">
                                    @csrf
                                    <input type="hidden" name="university_id" value="{{ $university->id }}">
                                    <label for="content">Votre commentaire :</label>
                                    <textarea id="content" name="content" required></textarea>
                                    <label for="rating">Votre note (1-5) :</label>
                                    <input type="number" id="rating" name="rating" min="1" max="5" required>
                                    <button type="submit">Poster</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
