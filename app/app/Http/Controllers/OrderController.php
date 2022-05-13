<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

// Import classes for mail
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\Email;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(isset($_COOKIE['cart'])){
            $articleIds = explode(',', $_COOKIE['cart']); 

            foreach($articleIds as $articleId){
                Order::create([
                    'user_id' => Auth::user()->id,
                    'article_id' => $articleId,
                ]);
            }

            $user = User::find(Auth::user()->id);
            
            $data = [
                'body' => "The student $user->firstname  $user->lastname has placed an order."
            ];

            // Mail::to("ngpaulhenry@gmail.com")->send(new Email($data));

            setcookie('cart', '', time() - 3600);
            
            return redirect ('/pay');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Send an email while an user 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function order($event_id) 
    {
        //
    }
}
