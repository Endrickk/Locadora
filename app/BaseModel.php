<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BaseModel extends Model
{
    public function getCreatedAtAttibute($date)
    {
        return Carbon::parse($date)->format('d/m/Y - H:i:s');
    }
}
