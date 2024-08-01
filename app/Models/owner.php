<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'email', 'phone_number'];

    public function houses()
    {
        return $this->hasMany(House::class);
    }
}
