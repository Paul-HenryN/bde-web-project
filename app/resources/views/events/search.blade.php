<!-- Display a listing of the events -->

@extends('templates.master')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/events.css') }}">
@endsection

@section('content')
    <div class="container-fluid px-5" style="margin-block: 10rem">
        <div class="row mb-5">
            <div class="col">
                <h1>Search results for "{{$search}}"</h1>
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
                @if (count($events) == 0)
                    <p>No result found.</p>
                @endif

                @foreach($events as $event)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="/events/{{$event->id}}">
                                <img class="card-img-top" src="{{ asset($event->image_url) }}" alt="Card image cap">
                            </a>
                            
                            <div class="card-cta d-flex gap-2">
                                <button href="" class="btn btn-circ btn-shadow btn-like">
                                    <i class="fa-solid fa-heart mx-1"></i>
                                </button>

                                <button href="" class="btn btn-circ btn-shadow btn-subscribe">
                                    <i class="fa-solid fa-plus mx-1"></i>
                                </button>
                            </div>

                            <div class="card-body">
                                <h2 class="card-title">{{ $event->name }}</h2>
                                <p class="card-text">{{ $event->description }}</p>

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
                                        <time datetime="{{ $event->date }}">{{ $event->date }}"</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
