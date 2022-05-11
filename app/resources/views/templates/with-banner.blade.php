@extends('templates.master')

@section('under-header')
    <div class="row g-0" style="background: url(../images/meetings-bg.jpg);padding: 10em 5em 5em 5em;">
        <div class="col d-flex align-items-center justify-content-center">
            <h1 style="color: var(--clr-neutral-100)">@yield('page-title')</h1>
        </div>
    </div>
@endsection
