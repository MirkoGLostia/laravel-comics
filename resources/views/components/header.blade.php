<header>
    <div class="container">
        <div class="headLogo">
        <img src="{{ asset('img/dc-logo.png') }}" alt="logo">
        </div>

        <nav>
        <ul>

            @foreach ($links as $link)

            <li>
                <a @class([
                    'active' => $link['current']
                ]) href="{{ $link['url'] }}">
                    {{ $link['text'] }}
                </a>
            </li>
                
            @endforeach
        </ul>
        </nav>
    </div>
</header>