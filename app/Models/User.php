<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'language_id',
        'email',
        'name',
        'password',
        'role_id'
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
     * A user belongs to a language.
     */

    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    /**
     * A user can be a provider for many teams.
     */
    public function teams()
    {
        return $this->hasMany(Team::class, 'provider_id');
    }

    /**
     * A user (provider) can have many reviews.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'provider_id');
    }

    /**
     * A user (provider) can have many contacts.
     */
    public function contacts()
    {
        return $this->hasMany(Contact::class, 'provider_id');
    }

    /**
     * A user (provider) can have many companies associated.
     */
    public function companies()
    {
        return $this->belongsToMany(Company::class, 'provider_companies', 'provider_id', 'company_id');
    }

    /**
     * A user (client) can have many reviews given.
     */
    public function clientReviews()
    {
        return $this->hasMany(Review::class, 'client_id');
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected static function booted()
    {
        static::deleting(function ($provider) {
            // Detach companies when the provider is deleted
            $provider->companies()->detach();
        });
    }
}
