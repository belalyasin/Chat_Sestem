<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $date = ['last_massage_at'];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('read_at')->withTimestamps()->latest();
    }

    public function others()
    {
        return $this->users()->where('user_id', '!=', auth()->id());
    }

    public function messages()
    {
        return $this->hasMany(Massage::class)->latest();
    }

    public function getUserName()
    {
        // dd($this->messages()->first()->user_id);
        $id = $this->messages()->first()->user_id;
        // dd($this->users()->find($id)->name);
        $user = $this->users()->find($id)->name;
        return $user;
    }
}
