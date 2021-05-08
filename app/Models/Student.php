<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //diisi field mana saja yang boleh diisi
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];

    //diisi fielad mana yang tidak boleh diisi
    // protected $guarded = ['nama', 'nrp', 'email', 'jurusan'];
}
