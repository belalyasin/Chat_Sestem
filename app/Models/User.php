<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function conversations()
    {
        return $this->belongsToMany(Conversation::class)
            ->withPivot('read_at');
    }

    public function avatar()
    {
        return "https://www.gravatar.com/avatar/" . md5(strtolower(trim($this->email))) . "?d=mm&s=80";
    }

    public function inConversation($id)
    {
        return $this->conversations->contains('id', $id);
    }

    public function hasRead(Conversation $conversation)
    {
        return $this->conversations()->find($conversation->id)->pivot->read_at;
    }
}
