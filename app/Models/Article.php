<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = ['heading', 'image', 'description', 'body'];

    public function postDate(){
        return Carbon::parse($this->created_at)->format('d-m-Y');
    }
}
