@extends('layouts.app', [
    'title' => 'Portofolio',
    'desc' => '',
])

@section('bg', '807A0440.jpg')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title pb-2">
                    <h3 class="title mt-3 mb-3">Project Kami</h3>
                    <p class="text-muted para-desc mb-0 mx-auto">Berikut beberapa project yang telah kami kerjakan.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <section class="section">
        <div class="container">
            <div class="row">
                <!-- WORK START -->
                <div class="col-lg-5 col-md-6">
                    <div class="port-images sticky-sidebar">
                        <img src="{{ asset('images/bg/beranda.jpg') }}" class="img-fluid mx-auto d-block rounded"
                            alt="img">
                        <img src="{{ asset('images/bg/beranda.jpg') }}" class="img-fluid mx-auto d-block rounded mt-4"
                            alt="img">
                        <img src="{{ asset('images/bg/beranda.jpg') }}" class="img-fluid mx-auto d-block rounded mt-4"
                            alt="img">
                    </div>
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="sticky-bar">
                        <div class="row ms-lg-4">
                            <div class="col-lg-12">
                                <div class="work-details">
                                    <h4 class="title mb-3 border-bottom pb-3">Project Name :</h4>
                                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                                        totam atque dignissimos porro, exercitationem, neque alias ea aliquid quibusdam
                                        voluptates impedit maxime aut asperiores consequatur iste. Corporis fuga ducimus
                                        dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci non
                                        dolorem consequatur vitae hic.</p>
                                    <p class="text-muted mb-0">Suscipit totam atque dignissimos porro, exercitationem,
                                        neque
                                        alias ea aliquid quibusdam voluptates impedit maxime aut asperiores consequatur
                                        iste. Corporis fuga ducimus dignissimos.</p>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-7 mt-4 pt-2">
                                <div class="card work-details rounded bg-light border-0">
                                    <div class="card-body">
                                        <h5 class="card-title border-bottom pb-3 mb-3">Project Info :</h5>
                                        <dl class="row mb-0">
                                            <dt class="col-md-4 col-5">Client :</dt>
                                            <dd class="col-md-8 col-7 text-muted">Calvin Carlo</dd>

                                            <dt class="col-md-4 col-5">Category :</dt>
                                            <dd class="col-md-8 col-7 text-muted">Web Design</dd>

                                            <dt class="col-md-4 col-5">Date :</dt>
                                            <dd class="col-md-8 col-7 text-muted">23rd Sep, 2021</dd>

                                            <dt class="col-md-4 col-5">Website :</dt>
                                            <dd class="col-md-8 col-7 text-muted">www.yourdomain.com</dd>

                                            <dt class="col-md-4 col-5">Location :</dt>
                                            <dd class="col-md-8 col-7 text-muted">3/2/64 Mongus Street, UK</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <!-- PAGINATION START -->
                <div class="col-12 mt-4 pt-2">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a>
                        </li>
                    </ul>
                </div><!--end col-->
                <!-- PAGINATION END -->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-3">Latest News &amp; Blog</h4>
                        <p class="text-muted mx-auto para-desc mb-0">Obviously I'm a Web Designer. Experienced with all
                            stages of the development cycle for dynamic web projects.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('images/bg/fokus.jpg') }}" class="card-img-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Smartest Applications for
                                    Business</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                            class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i
                                                class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="text-muted readmore">Read More <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('images/bg/fokus.jpg') }}" class="card-img-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Design your apps in your
                                    own way</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                            class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="text-muted readmore">Read More <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('images/bg/fokus.jpg') }}" class="card-img-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Smartest Applications for
                                    Business</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                            class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="text-muted readmore">Read More <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
@endsection
