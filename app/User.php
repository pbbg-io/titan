<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use PbbgIo\Titan\Character;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable,
        HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function characters() {
        return $this->hasMany(Character::class);
    }

    public function getCharacterAttribute() {
        return $this->characters->where('id', session('character_logged_in'))->first();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function banned()
    {
        return $this->morphMany(Ban::class, 'bannable');
    }

    /**
     * Bans the playable class. If the ban exists, it will update the ban.
     *
     * @param string $reason
     * @param null $time
     * @param bool $forever
     * @return bool
     */
    public function placeBan(string $reason, $time = null, bool $forever = false)
    {
        return Ban::updateOrCreate([
            'bannable_id' => $this->attributes['id'],
            'bannable_type' => get_class($this)
        ], [
            'reason' => $reason,
            'ban_until' => ($time != null ? Carbon::parse($time)->toDateString() : null),
            'forever' => $forever
        ])->exists();
    }

    /**
     * Checks to see if the if the playable is banned
     *
     * @return bool
     */
    public function isBanned()
    {
        return $this->banned()->exists();
    }

    /**
     * Returns the value of the name column in the class
     *
     * @return mixed
     */
    public function getNameAttribute()
    {
        return $this->attributes['display_name'];
    }
}
