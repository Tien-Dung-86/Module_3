<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\CustomerRepositoryImpl;
use App\Repositories\Eloquent\EloquentRepository;

class CustomerRepository extends EloquentRepository implements CustomerRepositoryImpl
{
    public function getModel()
    {
        return Customer::class;
    }
}
