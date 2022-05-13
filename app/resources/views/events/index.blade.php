<!-- Display a listing of the events -->
@extends('templates.with-banner')

@section('page-title', 'Events')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/events.css') }}">
@endsection

@section('content')
    <div class="container-fluid px-5" style="margin-block: 10rem">
        <div class="row mb-5">
            <div class="col">
            </div>

            <div class="col-12 col-md-6 mt-5 mt-md-0">
                <form action="/events/search" method="POST">
                    @csrf

                    <div class="form-outline d-flex gap-3">
                        <input type="search" id="password" name="search" class="form-control"
                            placeholder="Find a particular event">
                        <button type="submit" class="btn btn-secondary btn-round">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mb-4">
            <div class="form-outline">
                <select name="period" id="period" class="form-select">
                    <option value="">All events</option>
                    <option value="">Upcoming events</option>
                    <option value="">Past events</option>
                </select>
            </div>
        </div>

        <div class="container-fluid px-0">
            <div class="row gy-5 gx-5">
                @foreach ($events as $event)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="/events/{{ $event->id }}">
                                <img class="card-img-top" src="{{ asset('storage/' . $event->image_url) }}" alt="Card image cap">
                            </a>

                            <div class="card-cta d-flex gap-2">
                                @if (Auth::user() && Auth::user()->likes->contains($event))
                                    <a href="/events/dislike/{{ $event->id }}" class="btn btn-circ btn-shadow btn-like"
                                        title="Dislike">
                                        <i class="fa-solid fa-heart-crack mx-1"></i>
                                    </a>
                                @else
                                    <a href="/events/like/{{ $event->id }}" class="btn btn-circ btn-shadow btn-like"
                                        title="Like">
                                        <i class="fa-solid fa-heart mx-1"></i>
                                    </a>
                                @endif

                                @if (strtotime($event->date) >= strtotime(date('y-m-d')))
                                    @if (Auth::user() && Auth::user()->subscriptions->contains($event))
                                        <a href="/events/unsubscribe/{{ $event->id }}"
                                            class="btn btn-circ btn-shadow btn-subscribe">
                                            <i class="fa-solid fa-minus mx-1"></i>
                                        </a>
                                    @else
                                        <a href="/events/subscribe/{{ $event->id }}"
                                            class="btn btn-circ btn-shadow btn-subscribe">
                                            <i class="fa-solid fa-plus mx-1"></i>
                                        </a>
                                    @endif
                                @endif
                            </div>

                            <div class="card-body">
                                <h3 class="card-title">{{ $event->name }}</h3>
                                <p class="card-text">{{ $event->description }}</p>

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
                                        <time datetime="2022-06-06">{{ $event->date }}</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container-fluid most-liked">
        <div class="row mb-5">
            <div class="col d-flex justify-content-center">
                <h2>Most liked</h2>
            </div>
        </div>

        <div class="row">
            @foreach ($events as $event)
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card">
                        <a href="/events/{{ $event->id }}">
                            <img class="card-img-top" src="{{ asset('storage/' . $event->image_url) }}" alt="Card image cap">
                        </a>

                        <div class="card-cta d-flex gap-2">
                            @if (Auth::user() && Auth::user()->likes->contains($event))
                                <a href="/events/dislike/{{ $event->id }}" class="btn btn-circ btn-shadow btn-like"
                                    title="Dislike">
                                    <i class="fa-solid fa-heart-crack mx-1"></i>
                                </a>
                            @else
                                <a href="/events/like/{{ $event->id }}" class="btn btn-circ btn-shadow btn-like"
                                    title="Like">
                                    <i class="fa-solid fa-heart mx-1"></i>
                                </a>
                            @endif

                            @if (strtotime($event->date) >= strtotime(date('y-m-d')))
                                @if (Auth::user() && Auth::user()->subscriptions->contains($event))
                                    <a href="/events/unsubscribe/{{ $event->id }}"
                                        class="btn btn-circ btn-shadow btn-subscribe">
                                        <i class="fa-solid fa-minus mx-1"></i>
                                    </a>
                                @else
                                    <a href="/events/subscribe/{{ $event->id }}"
                                        class="btn btn-circ btn-shadow btn-subscribe">
                                        <i class="fa-solid fa-plus mx-1"></i>
                                    </a>
                                @endif
                            @endif
                        </div>

                        <div class="card-body">
                            <h3 class="card-title">{{ $event->name }}</h3>
                            <p class="card-text">{{ $event->description }}</p>

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
                </div>
            @endforeach
        </div>
    </div>
@endsection
