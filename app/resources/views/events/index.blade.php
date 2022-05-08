<!-- Display a listing of the events -->

@extends('templates.master')

@section('styles')
<link rel="stylesheet" href="{{asset('css/events.css')}}">
@endsection

@section('content')
    <div class="container-fluid px-5" style="margin-block: 10rem">
        <div class="row mb-5">
            <div class="col">
                <h1>Events</h1>
            </div>

            <div class="col-12 col-md-6 mt-5 mt-md-0">
                <form action="">
                    <div class="form-outline d-flex gap-3">
                        <input type="search" id="password" class="form-control" placeholder="Find a particular event">
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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images/cards/card-1.png')}}" alt="Card image cap">

                        <div class="card-cta d-flex gap-2">
                            <button href="" class="btn btn-circ btn-shadow btn-like">
                                <i class="fa-solid fa-heart mx-1"></i>
                            </button>

                            <button href="" class="btn btn-circ btn-shadow btn-subscribe">
                                <i class="fa-solid fa-plus mx-1"></i>
                            </button>
                        </div>
                        
                        <div class="card-body">
                            <h2 class="card-title">Card title</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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
                                    <time datetime = "2022-06-06">Jun 6 2022</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images/cards/card-2.png')}}" alt="Card image cap">

                        <div class="card-cta d-flex gap-2">
                            <button href="" class="btn btn-circ btn-shadow btn-like">
                                <i class="fa-solid fa-heart mx-1"></i>
                            </button>

                            <button href="" class="btn btn-circ btn-shadow btn-subscribe">
                                <i class="fa-solid fa-plus mx-1"></i>
                            </button>
                        </div>
                        
                        <div class="card-body">
                            <h2 class="card-title">Card title</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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
                                    <time datetime = "2022-06-06">Jun 6 2022</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images/cards/card-3.png')}}" alt="Card image cap">

                        <div class="card-cta d-flex gap-2">
                            <button href="" class="btn btn-circ btn-shadow btn-like">
                                <i class="fa-solid fa-heart mx-1"></i>
                            </button>

                            <button href="" class="btn btn-circ btn-shadow btn-subscribe">
                                <i class="fa-solid fa-plus mx-1"></i>
                            </button>
                        </div>
                        
                        <div class="card-body">
                            <h2 class="card-title">Card title</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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
                                    <time datetime = "2022-06-06">Jun 6 2022</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images/cards/card-4.png')}}" alt="Card image cap">

                        <div class="card-cta d-flex gap-2">
                            <button href="" class="btn btn-circ btn-shadow btn-like">
                                <i class="fa-solid fa-heart mx-1"></i>
                            </button>

                            <button href="" class="btn btn-circ btn-shadow btn-subscribe">
                                <i class="fa-solid fa-plus mx-1"></i>
                            </button>
                        </div>
                        
                        <div class="card-body">
                            <h2 class="card-title">Card title</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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
                                    <time datetime = "2022-06-06">Jun 6 2022</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images/cards/card-5.png')}}" alt="Card image cap">

                        <div class="card-cta d-flex gap-2">
                            <button href="" class="btn btn-circ btn-shadow btn-like">
                                <i class="fa-solid fa-heart mx-1"></i>
                            </button>

                            <button href="" class="btn btn-circ btn-shadow btn-subscribe">
                                <i class="fa-solid fa-plus mx-1"></i>
                            </button>
                        </div>
                        
                        <div class="card-body">
                            <h2 class="card-title">Card title</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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
                                    <time datetime = "2022-06-06">Jun 6 2022</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images/cards/card-6.png')}}" alt="Card image cap">

                        <div class="card-cta d-flex gap-2">
                            <button href="" class="btn btn-circ btn-shadow btn-like">
                                <i class="fa-solid fa-heart mx-1"></i>
                            </button>

                            <button href="" class="btn btn-circ btn-shadow btn-subscribe">
                                <i class="fa-solid fa-plus mx-1"></i>
                            </button>
                        </div>
                        
                        <div class="card-body">
                            <h2 class="card-title">Card title</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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
                                    <time datetime = "2022-06-06">Jun 6 2022</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images/cards/card-1.png')}}" alt="Card image cap">

                        <div class="card-cta d-flex gap-2">
                            <button href="" class="btn btn-circ btn-shadow btn-like">
                                <i class="fa-solid fa-heart mx-1"></i>
                            </button>

                            <button href="" class="btn btn-circ btn-shadow btn-subscribe">
                                <i class="fa-solid fa-plus mx-1"></i>
                            </button>
                        </div>
                        
                        <div class="card-body">
                            <h2 class="card-title">Card title</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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
                                    <time datetime = "2022-06-06">Jun 6 2022</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images/cards/card-2.png')}}" alt="Card image cap">

                        <div class="card-cta d-flex gap-2">
                            <button href="" class="btn btn-circ btn-shadow btn-like">
                                <i class="fa-solid fa-heart mx-1"></i>
                            </button>

                            <button href="" class="btn btn-circ btn-shadow btn-subscribe">
                                <i class="fa-solid fa-plus mx-1"></i>
                            </button>
                        </div>
                        
                        <div class="card-body">
                            <h2 class="card-title">Card title</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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
                                    <time datetime = "2022-06-06">Jun 6 2022</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection