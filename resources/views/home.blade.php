<x-layouts.main-layout>
    <div class="container">
        <div class="row">
            <div class="col">

                <ul class="display-6">
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @else
                        <li><a href="{{ route('only_admin') }}">Só admins</a></li>
                    @endguest
                </ul>

            </div>
        </div>
    </div>
</x-layouts.main-layout>
