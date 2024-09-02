<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Customer extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'customer_user')
            ->withPivot('role')
            ->withTimestamps();
    }
}
?>
