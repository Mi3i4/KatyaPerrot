<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;

class Users extends Model
{
    use Notifiable;
    
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $guarded = [''];
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function max_id(){
 
        return Users::max('id')!==null?Users::max('id'):1;
    }
    
    public function create_user($data){
        $user = Users::updateOrCreate(
            ['email' => $data['email']],
            ['name' => $data['name'], 'password' => $this->max_id()]
        );
    }
}