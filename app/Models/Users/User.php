<?php

namespace App\Models\Users;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;


    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'uid';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'firstName',
        'middleName',
        'lastName',
        'email',
        'password',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'uid',
        'password',
        'remember_token',
        'email_verified_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Accesor: Dynamic attribute.
     *
     * @var array
     */
    protected $appends = ['full_name'];


    /**
     * Accesor: Full Name.
     * Dynamically created.
     *
     * @return integer
     */
    public function getFullNameAttribute()
    {
        if ($this->middleName) {
            return Str::ucfirst(Str::lower($this->lastName)) . ', ' . Str::ucfirst(Str::lower($this->firstName)) . ' ' . Str::ucfirst(Str::lower($this->middleName));
        } else {
            if ($this->lastName && $this->firstName) {
                return Str::ucfirst(Str::lower($this->lastName)) . ', ' . Str::ucfirst(Str::lower($this->firstName));
            } else {
                return '';
            }
        }
    }
}
