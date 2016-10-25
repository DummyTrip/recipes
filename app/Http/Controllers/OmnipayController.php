<?php


namespace App\Http\Controllers;
use App\Jobs\SendEmail;
use App\Recipe;
use App\User;
use Omnipay\Omnipay;;
use Session;

/**
 * Class OmnipayController
 * @package App\Http\Controllers
 */
class OmnipayController extends Controller

{
    public function postPayment(Recipe $recipe, User $user)
    {
        $items = array();

        $items[] = array('name' => $recipe->name, 'quantity' => 1, 'price' => $recipe->price);

        $params = array(
            'cancelUrl'=>'http://recipes.dev/',
            'returnUrl'=>'http://recipes.dev/recipes',
            'amount' =>  $recipe->price,
            'currency' => 'USD'
        );

        Session::put('params', $params);
        Session::save();

        $gateway = Omnipay::create('PayPal_Express');
        $gateway->setUsername('proektbazi-facilitator_api1.gmail.com');
        $gateway->setPassword('E67CLX6SS66N24TL');
        $gateway->setSignature('AFcWxV21C7fd0v3bYYYRCpSSRl31AtA-SKhhGNQfOdxGMHIYhXl2CwZG');
        $gateway->setTestMode(true);

        $response = $gateway->purchase($params)->setItems($items)->send();

        if ($response->isSuccessful()) {
            // payment was successful: update database
            print_r($response);
        } elseif ($response->isRedirect()) {
            $this->dispatch(new SendEmail($user));

            // redirect to offsite payment gateway
            $response->redirect();
        } else {
            // payment failed: display message to customer
            echo $response->getMessage();
        }
    }
}