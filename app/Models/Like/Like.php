<?php

namespace App\Models\Like;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Tweet\Tweet;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [ 'user_id', 'tweet_id' ];

    public function user()
    {
        return $this->belongsTo( User::class );
    }

    public function tweet()
    {
        return $this->belongsTo( Tweet::class );
    }

} // Like
