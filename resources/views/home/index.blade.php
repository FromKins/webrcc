<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('Front_End_Web_RCC/css/style.css') }}">
    <!-- responsive style -->
    <link rel="stylesheet" href="{{ asset('Front_End_Web_RCC/css/responsive.css') }}">
    <!-- title logo -->
    <link rel="icon" href="{{ asset('Front_End_Web_RCC/asset/img/Logo RCC-01.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('Front_End_Web_RCC/asset/img/Logo RCC-01.png') }}" type="image/x-icon">
    <title>Research Collaboration Community</title>
</head>

<body>
    <!-- navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('Front_End_Web_RCC/asset/img/Logo RCC-01.png') }}" alt="" width="50px"
                    class="d-inline-block align-text-center me-3">
                Research Collaboration Community</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    <a class="nav-link" href="abouts">About</a>
                    <a class="nav-link" href="services">Services</a>
                    <a class="nav-link" href="publications">Publications</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Resources <i class="fa-solid fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" target="_blank" href="/references">References International</a>
                            </li>
                            <li><a class="dropdown-item" target="_blank" href="/references">References National</a></li>
                            <li><a class="dropdown-item" target="_blank" href="/book-publications">Book Publications</a>
                            </li>
                        </ul>
                    </li>
                    <a class="nav-link" href="contacts">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- hero section -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 tagline-hero my-auto">
                    <h1>Publish Your Research Today!</h1>
                    <p><span class="fw-bold">RCC</span> help your scientific work reach a global audience with our
                        top-notch journal publication services.</p>

                    <button class="button-lg-primary">Visit Now</button>
                    <a href="publications">
                        <img src="{{ asset('Front_End_Web_RCC/asset/img/btn-arrow.png') }}" alt="">
                    </a>
                </div>
            </div>
            <img src="{{ asset('Front_End_Web_RCC/asset/img/banner-hero.png') }}" alt=""
                class="position-absolute end-0 bottom-0 img-hero">
        </div>
    </section>

    <!-- Top Journal Section -->
    <section id="top-journal">
        <div class="container">
            <div class="row text-center mb-5">
                <h2>Top Journal</h2>
                <div class="row-journal"></div>
            </div>
            <div class="row justify-content-center">
                @foreach ($sliders as $slider)
                <div class="col-md-4 mb-4 d-flex justify-content-center">
                    <div class="card-journal text-center">
                        <a href="{{ $slider->link }}" target="_blank">
                            <img src="/image/{{ $slider->image }}" class="img-fluid" alt="{{ $slider->title }}">
                        </a>
                        <h5 class="mt-3">{{ $slider->title }}</h5>
                        <p class="journal-text">Publish By: {{ $slider->publish }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>About Us</h2>
                    <div class="row-about"></div>
                    <div><img src="{{ asset('Front_End_Web_RCC/asset/img/Logo RCC-01.png') }}" alt="" width="200px"
                            class="company-logo"></div>
                    <span class="company-profile text-center">
                        {{$abouts->description_history}}
                    </span>
                </div>
                <div class="position-relative readmore">
                    <button class="button-readmore ">
                        Read More</button>
                    <a href="abouts">
                        <img src="{{ asset('Front_End_Web_RCC/asset/img/btn-arrow.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Our Services</h2>
                    <div class="row-services mb-lg-5"></div>
                    <span class="sub-title text-center">Advising on research & publications, data processing & analysis,
                        formatting &
                        submitting the manuscripts to international journals, training & workshop of
                        scientific writing, translating & proofing the manuscripts, cooperation held of
                        symposiums, seminars, & scientific conferences, and others</span>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                <div class="col-md-4 text-center">
                    <div class="card-services">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="/image/{{$service->image}}" width="150px" alt=""
                                class="position-absolute to-50 start-50 translate-middle image-services">
                        </div>
                        <h3 class="mt-4">{{$service->title}}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Publication section-->
    <section id="publication">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Publications</h2>
                    <div class="row-publication mb-lg-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="card-services">
                            <div class="circle-icon position-relative mx-auto">
                                <img src="{{ asset('Front_End_Web_RCC/asset/img/icon-rescollacom-01.png') }}"
                                    width="150px" alt=""
                                    class="position-absolute to-50 start-50 translate-middle image-services">
                            </div>
                            <h3 class="mt-4">Journal Rescollacomm</h3>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="card dark">
                                    <img src="{{ asset('Front_End_Web_RCC/asset/img/Logo RCC-01.png') }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body position-relative">
                                        <div class="text-section">
                                            <h5 class="card-title">Publish your research today!</h5>
                                            <p class="card-text">Let your scientific work reach a global audience.</p>
                                        </div>
                                        <div class="cta-section">
                                            <a href="publications">
                                                <button class="button-publication">Visit Now</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <!-- contact section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Contact Us</h2>
                    <div class="row-publication mb-lg-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-contact mt-5">
                            <h3>Address :</h3>
                            <p class="mt-4"><i class="bi bi-geo-alt-fill me-2 fs-4"
                                    style="color: #E83036;"></i>{{$contacts->address}}</p>

                            <h3 class="mt-5">Phone :</h3>
                            <p class="mt-4"><i class="bi bi-telephone-fill me-2 fs-4"
                                    style="color: #E83036;"></i>{{$contacts->phone}}</p>

                            <h3 class="mt-5">Email :</h3>
                            <p class="mt-4"><i class="bi bi-envelope-fill me-2 fs-4"
                                    style="color: #E83036;"></i>{{$contacts->email}}</p>

                        </div>
                        <!-- Feedback Form -->
                        <div class="mt-5">
                            <h4 class="feedback-heading">Send Us Your Feedback</h4>

                            @if(session('success'))
                            <div class=" alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                            @endif

                            <form action="{{ route('feedback.store') }}" method="POST" class="mt-3">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea class="form-control" id="message" name="message" rows="4"
                                        required></textarea>
                                    @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <button type="submit" class="btn btn-danger">Send Feedback</button>
                            </form>
                        </div>

                    </div>
                    <div class="col-md-6 mt-5">
                        <iframe src="https://www.google.com/maps/embed?pb={{$contacts->maps_embed}}" width="600"
                            height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="d-flex align-items-center position-relative">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <img src="{{ asset('Front_End_Web_RCC/asset/img/Logo RCC-01.png') }}" alt="" width="50px">
                        <a href="#" class="ms-3">Research Collaboration Community</a>
                    </div>
                    <div class="col-md-5 d-flex justify-content-evenly">
                        <a href="#hero">Home</a>
                        <a href="#about">About</a>
                        <a href="#services">Services</a>
                        <a href="#publication">Publication</a>
                        <a href="#">Resources</a>
                        <a href="#contact">Contact</a>
                    </div>
                </div>
                <div class="row position-absolute copyright start-50 translate-middle">
                    <div class="col-12">
                        <p>Copyright {{ date('Y')}} © Research Collaboration Community | All right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('Front_End_Web_RCC/js/script.js') }}">
    </script>

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>



</html>