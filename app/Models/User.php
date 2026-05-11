<?php

namespace App\Models;

// use Database\Factories\UserFactory;
use Filament\Models\Contracts\FilamentUser; // ✅ Tambahkan ini
use Filament\Panel; // ✅ Tambahkan ini
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser // ✅ implements FilamentUser
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // ✅ Tambahkan method ini (wajib untuk FilamentUser)
    public function canAccessPanel(Panel $panel): bool
    {
        return true; // Bisa diganti dengan logika akses, misal: return $this->is_admin;
    }
}
