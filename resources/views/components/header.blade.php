<header class="bg-white border-bottom border-2 flex justify-between p-4">

    {{-- LOGO --}}
    <div>Logo</div>


    {{-- GitHub --}}
    <div>GitHub</div>

    @auth
        <form action="{{ route('auth.logout') }}" method="POST" class="inline">
            @csrf  
        
            <button
                type="submit"
                class="bg-white p-2 border-2"
            >
                Sair
            </button>
        </form>
    @endauth

    @guest
        <a href="{{ route('site.login') }}" class="bg-white p-2 border-2">
            Login
        </a>
    @endguest

</header>