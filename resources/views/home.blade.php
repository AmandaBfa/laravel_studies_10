<x-layouts.main-layout>
    <div class="container">
        <div class="row">
            <div class="col">

                @guest
                    <ul class="display-6">

                        <a href="{{ route('login') }}">Login</a>
                    </ul>
                @endguest

            </div>
        </div>
    </div>
</x-layouts.main-layout>
