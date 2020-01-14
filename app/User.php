<?php

namespace App;

use App\Cart;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{
    /*un modelo es una clase a la cual odemos hacer operaciones hacer consulta a la base de datos */
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function carts(){
        return $this->hasMany(Cart::class);
    }
    //cart_id
    public function getCartAttribute(){
        $cart = $this->carts()->where('status','Active')->first();
        if ($cart){
            return $cart;
        }
        else {
            $cart = new Cart();
            $cart->status = 'Active';
            $cart->user_id = $this->id;
            $cart->save();
            return $cart;
        }
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



}
