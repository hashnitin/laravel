<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Charger extends Model
{
    public function site()
    {
        return $this->hasOne(Site::class);
    }

    public function plan()
    {
        return $this->hasOne(Plan::class);
    }

    public function connectHistories()
    {
        return $this->hasMany(ChargerConnectHistory::class);
    }
}
?>
