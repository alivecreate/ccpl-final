<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banner';
    function updateSlider($data = array())
    {
        $i = 1;
        foreach ($data as $key => $value) {
            DB::table('banner')
                ->where('id', $value)
                ->update(['item_no' => $i]);

            $i++;
        }
    }
}
