<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ChargerConnectHistory extends Model
{
    public function charger()
    {
        return $this->belongsTo(Charger::class);
    }
}
?>
