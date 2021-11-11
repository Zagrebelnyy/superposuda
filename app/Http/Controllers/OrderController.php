<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class OrderController extends Controller
{
    public function Submit(Request $request)
    {
        $apiKey = 'QlnRWTTWw9lv3kjxy1A8byjUmBQedYqb';
        $url = 'https://superposuda.retailcrm.ru/api/v5/orders/create';
        $fio = explode(" ", $request->get('name'));
        $comment = $request->get('comment');
    
        
        $order = 
        '{"status":"trouble","orderType":"fizik","site":"test","orderMethod":"test","number":"17121999","firstName":"' . $fio[1] . '","lastName":"' . $fio[0] . '","patronymic":"' . $fio[2] . '","customerComment":"' . $comment . '","phone":"79517628455","email":"sasha-zagrebelnyi@mail.ru"}';
    
        $formData = [
            "apiKey" => $apiKey,
            "site"=> "test",
            "order" => $order
        ];
    
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
        $headers = array(
            "Content-Type: application/x-www-form-urlencoded",
        );
        
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($formData));
        $resp = curl_exec($curl);
        curl_close($curl);
        return $resp;
    }
}
