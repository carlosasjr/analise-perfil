<?php

namespace App\Observers;

use App\Models\Company;
use Illuminate\Support\Str;

class CompanyObserver
{
    public function creating(Company $company)
    {
        $company->url = Str::slug($company->name);
    }

    public function created(Company $company)
    {
        $company->sendRegisterNotification($company);
    }
}
