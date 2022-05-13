@extends('templates.standalone')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pay.css') }}">
@endsection

@section('content')
    <div class="container">
        <form action="">
            <div class="row">

                <div class="col">

                    <h3 class="title">billing address</h3>

                    <div class="inputBox">
                        <span>full name :</span>
                        <input type="text" placeholder="paul-henry">
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" placeholder="example@bde.com">
                    </div>
                    <div class="inputBox">
                        <span>address :</span>
                        <input type="text" placeholder="room - street - locality">
                    </div>
                    <div class="inputBox">
                        <span>city :</span>
                        <input type="text" placeholder="douala">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>state :</span>
                            <input type="text" placeholder="cameroon">
                        </div>
                        <div class="inputBox">
                            <span>zip code :</span>
                            <input type="text" placeholder="123 456">
                        </div>
                    </div>

                </div>

                <div class="col">

                    <div class="inputBox">

                        <span>Payment </span>
                    </div>

                    <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="images/download.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>name on card :</span>
                        <input type="text" placeholder="mr. paul-henry">
                    </div>
                    <div class="inputBox">
                        <span>credit card number :</span>
                        <input type="number" placeholder="1111-2222-3333-4444">
                    </div>
                    <div class="inputBox">
                        <span>exp month :</span>
                        <input type="text" placeholder="january">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>exp year :</span>
                            <input type="number" placeholder="2024">
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text" placeholder="1234">
                        </div>
                    </div>

                </div>

            </div>

            <button type="submit" class="btn btn-primary">Proceed to Checkout</button>
            
            <a href="/shop">
                <i class="fa-solid fa-arrow-left"></i>
                Back to shop
            </a>

        </form>

    </div>
@endsection
