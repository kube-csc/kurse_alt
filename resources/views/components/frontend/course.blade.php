<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Kurse</h2>
        </div>

        <div class="row">

            @foreach($courses as $course)

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up">
                        <h4 class="title">{{ $course->kursName }}</h4>
                        <p class="description">
                            {!! $course->kursBeschreibung !!}
                        </p>
                    </div>
                </div>

            @endforeach

        </div>

    </div>
</section><!-- End Services Section -->
