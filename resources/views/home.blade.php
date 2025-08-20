<x-layouts.main-layout>
    <div class="container">
        <div class="row">
            <div class="col">

                <ul class="display-6">
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @else
                        @can('user_is_admin')
                            <li><a href="{{ route('only_admin') }}">Só admins</a></li>
                        @endcan

                        @can('user_is_user')
                            <li><a href="{{ route('only_user') }}">Só usuários</a></li>
                        @endcan

                    @endguest
                </ul>

            </div>
        </div>

        <div class="row">
            <div class="col">

                @can('user_is_admin')
                    <p>ADMIN</p>
                @endcan

                @can('user_is_admin')
                    <p>ADMIN</p>
                @else
                    <p>Outro!...</p>
                @endcan

                @cannot('user_is_admin')
                    <p>OK</p>
                @endcannot

                @canany(['user_is_admin', 'user_is_user'])
                    <p>Olá!</p>
                @endcanany

            </div>
        </div>

    </div>
</x-layouts.main-layout>
