<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct(private Company $repository)
    {

    }

    public function create()
    {
        return view('company.create');
    }

    public function store(CompanyRequest $request)
    {
        $company = $this->repository->create($request->validated());

        return redirect()->route('user.create', ['url' => $company->url]);
    }
}
