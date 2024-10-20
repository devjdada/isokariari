<div class="section-clients">
    <div class="container">
        <div class="owl-carousel owl-theme clients" id="clients">
            @foreach ($clients as $c)
                <div class="item">
                    <img src="{{ $c->client_logo }}" />
                </div>
            @endforeach

        </div>
    </div>
</div>
