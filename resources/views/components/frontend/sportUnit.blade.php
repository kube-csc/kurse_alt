<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Sportgeräte</h2>
            <p>Es stehen  {{ $countSportEquipments }} Sportgeräte für die Kurse zur Verfügung.</p>
        </div>

        <div class="row">

            @foreach($sportEquipments as $sportEquipment)

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up">
                        <h4 class="title">{{ $sportEquipment->sportgeraet }}</h4>
                        @if($sportEquipment->bild != Null)
                            @if (!is_file('/storage/sportgeraet/'.$sportEquipment->bild))
                                <img src="/storage/sportgeraet/{{ $sportEquipment->bild }}" width="100%" alt="{{ $sportEquipment->sportgeraet }}"/>
                            @else
                                @auth
                                    <p class="text-danger">Bild {{ $sportEquipment->bild }} ist nicht auf dem Server vorhanden.</p>
                                @endauth
                            @endif
                        @endif
                        <p class="description">
                            {!! $sportEquipment->typ !!}
                        </p>
                        <p class="description">
                          Masse (L/B/H): {{ $sportEquipment->laenge }} x {{ $sportEquipment->breite }} x {{ $sportEquipment->hoehe }} m<br>
                          Gewicht: {{ $sportEquipment->gewicht }} kg<br>
                          Tragkraft: {{ $sportEquipment->tragkraft }} kg<br>
                        </p>
                    </div>
                </div>

@endforeach

</div>

</div>
</section><!-- End Services Section -->
