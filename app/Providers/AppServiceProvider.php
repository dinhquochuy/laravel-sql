<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\FoodType;
use Session;
use App\Cart;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */ 
    public function boot()
    {
        view()->composer(['header','page.shopping-cart'],function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
             view()->composer('header',function($veu){
            $loai_food = FoodType::all();
            $veu->with('loai_food',$loai_food);
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
