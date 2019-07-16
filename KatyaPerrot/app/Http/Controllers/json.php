<?php // app\Helpers\EditDataJson.php
 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Exception;

class json extends Controller
{
    
    protected $json_url, $data;  
    
    /*** достаем json и преобразуем в массив ***/
    public function index(){
        
        $this->json_url = "public/wp_signups.json";
        $this->data = Storage::get($this->json_url);
        $this->data = json_decode($this->data, true);
        
        
        foreach ($this->data as $profile){
            
            $meta= $profile['meta'];
            $myData = explode(":", $meta);
            echo "<p>user_email: ".$profile['user_email']." activat key ".$profile['activation_key']." name: ".explode(";", $myData[6])[0]." last name: ".explode(";", $myData[10])[0]."company: ".explode(";", $myData[18])[0]."</p>";
            echo "<p><a target='_blank' href='https://groupfocus.ru/%d0%bf%d0%be%d1%80%d1%82%d0%b0%d0%bb/?activation_key=".$profile['activation_key']."'>activate</a></p>";
        }
    }
}
