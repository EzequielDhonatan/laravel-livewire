<?php

namespace App\Models\Tweet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = [ 'content' ];

    public function user()
    {
        return $this->belongsTo( User::class );
    }

} // Tweet
