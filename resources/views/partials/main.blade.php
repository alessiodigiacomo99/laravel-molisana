<main id="site_main">
    <h2>le lunghe</h2>
    <section class="pasta">
        @foreach( $data as $pasta )
            @if( $pasta['tipo'] === 'lunga')
                <div class="formato">
                    <img src="{{ $pasta['src'] }}" alt="">
                    <img class="forchetta" src="{{ asset('img/icon.svg') }}" alt="">
                    <div class="scheda">
                        <div>{{ $pasta['titolo'] }}</div>
                        <div>Cottura : {{ $pasta['cottura'] }}</div>
                    </div>
                </div>
                <!-- /.formato -->
            @endif
        @endforeach
    </section>
    <h2>le corte</h2>
    <section class="pasta">
        @foreach( $data as $pasta )
            @if( $pasta['tipo'] === 'corta')
                <div class="formato">
                    <img src="{{ $pasta['src'] }}" alt="">
                    <img class="forchetta" src="{{ asset('img/icon.svg') }}" alt="">
                    <div class="scheda">
                        <div>{{ $pasta['titolo'] }}</div>
                        <div>Cottura : {{ $pasta['cottura'] }}</div>
                    </div>
                </div>
                <!-- /.formato -->
            @endif
        @endforeach
    </section>
    <h2>le cortissime</h2>
    <section class="pasta">
        @foreach( $data as $pasta )
            @if( $pasta['tipo'] === 'cortissima')
                <div class="formato">
                    <img src="{{ $pasta['src'] }}" alt="">
                    <img class="forchetta" src="{{ asset('img/icon.svg') }}" alt="">
                    <div class="scheda">
                        <div>{{ $pasta['titolo'] }}</div>
                        <div>Cottura : {{ $pasta['cottura'] }}</div>
                    </div>
                </div>
                <!-- /.formato -->
            @endif
        @endforeach
    </section>
</main>
<!-- /#site_main -->
