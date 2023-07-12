<header>
    <div class="container">
        <div class="headLogo">
        <img src="{{ asset('img/dc-logo.png') }}" alt="logo">
        </div>

        <nav>
        <ul>
            {{-- <li v-for="link in links" :key="link.id">
            <a :class="link.current ? 'active' : ''" :href="link.url">{{ link.text }}</a>
            </li> --}}

            @foreach ($links as $link)

            <li>
                <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
            </li>
                
            @endforeach
        </ul>
        </nav>
    </div>
</header>