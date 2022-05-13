<!-- Display a particular event -->
@extends('templates.with-banner')

@section('page-title', $event->name)

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/events.css') }}">
@endsection

@section('content')
    <div class="container" style="margin-block: 5rem">
        <div class="row gx-4 py-5">
            <div class="col-12 col-lg-6">
                <img src="{{ asset($event->image_url) }}" style="border-radius: 0.4rem">
            </div>

            <div class="col mt-5 mt-lg-0">
                <h2 class="mb-4">{{ $event->name }}</h2>

                <p>{{ $event->description }}</p>

                <div class="d-flex gap-2 py-5">
                    <div class="col-6 col-lg-auto">
                        @if (Auth::user() && Auth::user()->likes->contains($event))
                            <a href="/events/dislike/{{ $event->id }}"
                                class="btn btn-like-bg btn-round d-flex justify-content-center align-items-center gap-2">
                                <i class="fa-solid fa-heart-crack"></i>
                                Dislike
                            </a>
                        @else
                            <a href="/events/like/{{ $event->id }}"
                                class="btn btn-like-bg btn-round d-flex justify-content-center align-items-center gap-2">
                                <i class="fas fa-heart"></i>
                                Like
                            </a>
                        @endif
                    </div>

                    <div class="col-6 col-lg-auto">
                        @if (Auth::user() && Auth::user()->subscriptions->contains($event))
                            <a href="/events/unsubscribe/{{ $event->id }}"
                                class="btn btn-subscribe btn-round d-flex justify-content-center align-items-center gap-2">
                                <i class="fa-solid fa-minus"></i>
                                Unsubscribe
                            </a>
                        @else
                            <a href="/events/subscribe/{{ $event->id }}"
                                class="btn btn-subscribe btn-round d-flex justify-content-center align-items-center gap-2">
                                <i class="fa-solid fa-plus"></i>
                                Subscribe
                            </a>
                        @endif

                        <a href="/downloadpdf/{{ $event->id }}"
                                class="btn btn-subscribe btn-round d-flex justify-content-center align-items-center gap-2">
                                <i class="fa-solid"></i>
                                Subscribe
                            </a>
                    </div>
                </div>

                <div class="card-meta d-flex justify-content-between mt-3">
                    <div class="d-flex gap-3">
                        <div class="card-likes">
                            {{ count($event->likes) }}
                            <i class="fa-solid fa-heart mx-1"></i>
                        </div>

                        <div class="card-comments">
                            {{ count($event->comments) }}
                            <i class="fa-solid fa-comment mx-1"></i>
                        </div>
                    </div>

                    <div class="card-date">
                        <time datetime="{{ $event->date }}">{{ $event->date }}</time>
                    </div>
                </div>
            </div>
        </div>

        @if (strtotime($event->date) <= strtotime(date('y-m-d')))
            <div class="container-fluid">
                <div class="row">
                    <section class="gallery py-5" id="gallery">
                        <div class="container-fluid">
                            <!-- section title -->
                            <div class="row mb-5">
                                <div class="col d-flex flex-wrap justify-content-center">
                                    <h2>Gallery</h2>
                                </div>
                            </div>
                            <!-- end of section title -->
                            <div class="row">
                                <div class="col-sm-6 mb-5 mb-sm-0">
                                    <div class="gallery-item">
                                        <img src="{{ asset('images/clubs.jpg') }}" alt="car"
                                            class="img-fluid gallery-img">
                                    </div>
                                </div>
                                <!-- end of first column -->
                                <div class="col-sm-6 mb-5 mb-sm-0 d-flex flex-column justify-content-between">
                                    <div class="row">
                                        <!-- first item -->
                                        <div class="col-sm-6 mb-5 mb-sm-0">
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/cards/card-1.png') }}" alt="car"
                                                    class="img-fluid gallery-img">
                                            </div>
                                        </div>
                                        <!-- second item -->
                                        <div class="col-sm-6 mb-5 mb-sm-0">
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/cards/card-5.png') }}" alt="car"
                                                    class="img-fluid gallery-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- first item -->
                                        <div class="col-sm-6 mb-5 mb-sm-0">
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/summary.jpg') }}" alt="car"
                                                    class="img-fluid gallery-img">
                                            </div>
                                        </div>
                                        <!-- second item -->
                                        <div class="col-sm-6 mb-5 mb-sm-0">
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/sports.jpg') }}" alt="car"
                                                    class="img-fluid gallery-img">
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

                <div class="row">
                    <form action="" class="form">
                        <div class="mb-4">
                            <label for="formFile" class="form-label">You can upload photos for this past event</label>
                            <input class="form-control" type="file" id="formFile" accept=".jpg,.png,.gif">
                        </div>
                    </form>
                </div>
            </div>

            <hr>
        @endif

        <div class="container-fluid">
            <div class="row">
                <h3><span style="font-size: var(--fs-1);">{{ count($event->comments) }}</span> Comments</h3>
            </div>

            <hr>

            @foreach ($event->comments as $comment)
                <div class="row mt-1 gx-3">
                    <div class="col-2 col-md-1">
                        <img src="{{ asset('storage/avatars/' . $comment->avatar) }}" alt=""
                            style="border-radius: 50%">
                    </div>
                    <div class="col">
                        <div class="d-flex">
                            <h4>{{ $comment->firstname }} {{ $comment->lastname }}</h4>
                            &dot;
                            <time datetime="{{ $comment->pivot->created_at }}">{{ $comment->pivot->created_at }}</time>
                        </div>
                        <p class="mt-1">
                            {{ $comment->pivot->text }}
                        </p>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>

        <div class="row d-flex">
            <div class="col">
                <form class="form" method="POST" action="/events/comment/{{ $event->id }}">
                    @csrf

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
