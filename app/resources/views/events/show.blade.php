<!-- Display a particular event -->
@extends('templates.master')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/events.css') }}">
@endsection

@section('content')
    <div class="container" style="margin-block: 10rem">
        <div class="row gx-5">
            <div class="col-12 col-lg-6">
                <img src="{{ asset($event->image_url) }}" style="border-radius: 0.5rem">
            </div>

            <div class="col mt-5 mt-lg-0">
                <h1 class="mb-5">{{$event->name}}</h1>

                <p>{{$event->description}}</p>

                <div class="card-meta d-flex justify-content-between mt-3">
                    <div class="d-flex gap-3">
                        <div class="card-likes">
                            3<i class="fa-solid fa-heart mx-1"></i>
                        </div>

                        <div class="card-comments">
                            5<i class="fa-solid fa-comment mx-1"></i>
                        </div>
                    </div>

                    <div class="card-date">
                        <time datetime="{{$event->date}}">{{$event->date}}</time>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-6 col-lg-2">
                <button class="btn btn-like-bg btn-round">
                    <i class="fas fa-heart"></i>
                    Like
                </button>
            </div>

            <div class="col-6 col-lg-2">
                <button class="btn btn-secondary btn-round">Subscribe</button>
            </div>
        </div>

        <hr>
        
        <div class="container">
            <div class="row">
                <section class="gallery py-5" id="gallery">
                    <div class="container">
                        <!-- section title -->
                        <div class="row mb-5">
                            <div class="col d-flex flex-wrap text-uppercase justify-content-center">
                                <h2>Gallery</h2>
                            </div>
                        </div>
                        <!-- end of section title -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="gallery-item">
                                    <img src="{{ asset('images/clubs.jpg') }}" alt="car" class="img-fluid gallery-img">
                                </div>
                            </div>
                            <!-- end of first column -->
                            <div class="col-sm-6 d-flex flex-column justify-content-between">
                                <div class="row">
                                    <!-- first item -->
                                    <div class="col-sm-6">
                                        <div class="gallery-item">
                                            <img src="{{ asset('images/cards/card-1.png') }}" alt="car" class="img-fluid gallery-img">
                                        </div>
                                    </div>
                                    <!-- second item -->
                                    <div class="col-sm-6">
                                        <div class="gallery-item">
                                            <img src="{{ asset('images/cards/card-5.png') }}" alt="car"
                                                class="img-fluid gallery-img">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- first item -->
                                    <div class="col-sm-6">
                                        <div class="gallery-item">
                                            <img src="{{ asset('images/summary.jpg') }}" alt="car"
                                                class="img-fluid gallery-img">
                                        </div>
                                    </div>
                                    <!-- second item -->
                                    <div class="col-sm-6">
                                        <div class="gallery-item">
                                            <img src="{{ asset('images/sports.jpg') }}" alt="car" class="img-fluid gallery-img">
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                            <!-- end of second column -->
                        </div>
                        <!-- end of row -->
                    </div>
                </section>
            </div>

            <div class="row px-4">
                <form action="" class="form">
                    <div class="mb-4">
                        <label for="formFile" class="form-label">You can upload photos for this event</label>
                        <input class="form-control" type="file" id="formFile" accept=".jpg,.png,.gif">
                    </div>
                </form>
            </div>
        </div>


        <hr>

        <div class="container-fluid px-5">
            <div class="row">
                <h2><span>2</span> Comments</h2>
            </div>

            <div class="row mt-5">
                <div class="col-2 col-md-1">
                    <img src="{{ asset('images/avatar2.jpeg') }}" alt="" style="border-radius: 50%">
                </div>
                <div class="col">
                    <h3>Paul-henry Ngounou</h3>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero cumque voluptates harum voluptatem,
                        rem veniam est quisquam dolor suscipit reprehenderit. Blanditiis ut eius impedit vitae ratione dicta
                        voluptate distinctio obcaecati?
                    </p>
                </div>
            </div>

            <hr>

            <div class="row mt-5">
                <div class="col-2 col-md-1">
                    <img src="{{ asset('images/avatar1.webp') }}" alt="" style="border-radius: 50%">
                </div>
                <div class="col">
                    <h3>Sonia Rykiel Toukam</h3>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero cumque voluptates harum voluptatem,
                        rem veniam est quisquam dolor suscipit reprehenderit. Blanditiis ut eius impedit vitae ratione dicta
                        voluptate distinctio obcaecati?
                    </p>
                </div>
            </div>

            <hr>
        </div>

        <div class="row d-flex px-5" style="margin-top: 7rem;">
            <div class="col">
                <form class="form">
                    <div class="form-outline">
                        <textarea name="comment" id="comment" cols="50" rows="10" placeholder="Leave a comment" class="p-2"
                            style="border-radius: 0.5rem"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-round mt-3">Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection
