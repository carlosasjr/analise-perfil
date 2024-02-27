<?php

namespace App\Models;

use App\Notifications\CompanyNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Company extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'cnpj', 'email', 'url'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function sendRegisterNotification(Company $company)
    {
        $this->notify(new CompanyNotification($company));
    }
}
