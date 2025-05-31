@if ($title == 'home')
    <div class=" position-relative p-0">
        <div class=" bg-primary hero-header">
            <div class="container px-lg-5">
                <div class="row g-5 align-items-end">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="text-white mb-4 animated slideInDown">A Digital Agency Of Inteligents & Creative
                            People</h1>
                        <p class="text-white pb-3 animated slideInDown">Tempor rebum no at dolore lorem clita rebum
                            rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam
                            sit justo amet ipsum vero ipsum clita lorem</p>
                        <a href=""
                            class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Read
                            More</a>
                        <a href=""
                            class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact
                            Us</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-start">
                        <img class="{{ asset('front-assets') }}/img-fluid animated zoomIn"
                            src="{{ asset('front-assets') }}/img/hero.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <!-- Hero Start -->
    <div class=" position-relative p-0">
        <div class=" py-5 bg-primary hero-header">
            <div class="container my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    <div class="col-12 text-center">
                        <h1 class="text-white animated slideInDown">{{ $title }}</h1>
                        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">{{ $title }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
@endif
