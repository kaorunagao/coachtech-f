<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->name . ' '.$this->email;
        return $txt;
    }
}