<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Validator;
use YandexCheckout\Client;
use App\Models\Orders;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
    
class ControllerBuy extends Controller
{
    public function index(Request $request){
        
        return redirect(route('contacts'));
    } 
    
    public function buy(){
        
            $user = Auth::user();
        
            echo $user->id."<br>".$user->email."<br>".$user->name."<br>".$user->rememberToken."<br>";
        
           /* $idempotenceKey = uniqid('', true);
            $response = $client->createPayment(
            array(
                  'amount' => array(
                      'value' => '1190.00',
                      'currency' => 'RUB',
                  ),
                  'payment_method_data' => array(
                      'type' => 'bank_card',
                  ),
                  'confirmation' => array(
                      'type' => 'redirect',
                      'return_url' => 'https://www.merchant-website.com/return_url',
                  ),
                  'description' => 'Заказ 72',
              ),
              $idempotenceKey
            );
            */
           // return redirect('/before_buy')->with(['email' => "sucsess"]);
            
            
    
    }
    
    public function yandexReceive(Request $request){
        $test_notification = false;

        if ($request->has('test_notification')) {
            $test_notification = $request->input('test_notification');
        }
    }
}