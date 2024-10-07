<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Vote Information') }}
        </h2>

        <p class="my-3 text-sm text-gray-600">
            {{ __("You have to vote so you can see your vote details") }}
        </p>
    </header>

    @php
    $vote = auth()->user()->vote; // Get the single vote instance
    @endphp

    @if($vote)
        <a href="{{ route('votes.show', ['vote' => $vote->id]) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">My Vote</a>
    @endif
</section>
