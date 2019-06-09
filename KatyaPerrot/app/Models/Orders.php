<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $guarded = [''];
    
    public function max_id(){
        
        return Orders::max('id');
    }
    
}