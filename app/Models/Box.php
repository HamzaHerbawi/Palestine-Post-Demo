<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Box extends Model
{
    use HasFactory, Notifiable;

    public function routeNotificationForVonage($notification)
    {
        return $this->phone;
    }


    protected static function booted()
    {
        static::addGlobalScope('BoxesScope', function (Builder $builder) {
            if (Auth::user()->id != 1) {
                $areaId = DB::table("user_area")->where('user_id', Auth::user()->id)->get('area_id')->toArray();
                $ids = [];
                foreach ($areaId as $id) {
                    $ids[] += $id->area_id;
                }
                $builder->whereIn('area_id', $ids);
            }
        });
    }
}
