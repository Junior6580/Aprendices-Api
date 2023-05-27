<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    protected $fillable = ['document_type',
    'document_number','name','last_name',
    'data_sheet','state','date'];

}
