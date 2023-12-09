<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactController extends Model
{
    use HasFactory;
    protected $fillable=[
        'random_id',
        'name',
        'email',
        'subject',
        'message',
    ];
}
