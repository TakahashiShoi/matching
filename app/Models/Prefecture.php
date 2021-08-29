<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Prefecture extends Model
{
    use HasFactory;

    public function selectList()
    {
        $items = Prefecture::get(['name']);
        foreach ($items as $item) {
            echo $item;
        }
    }

}
