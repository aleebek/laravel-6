<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use App\Events\NewCustomerHasRegisteredEvent;
use App\Mail\WelcomeNewUserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $customers = Customer::all();
        $companies = Company::all();

        return view('customer.index', compact('customers', 'companies'));
    }

    public function list()
    {
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();
        return view('internals.customers', compact('activeCustomers', 'inactiveCustomers'));
    }

    public function create()
    {
        $customer = new Customer();
        $companies = Company::all();
        return view('customer.create', compact('customer', 'companies'));
    }

    public function store()
    {


        $customer = Customer::create($this->validateData());
        event(new NewCustomerHasRegisteredEvent($customer));

        return redirect('/customers/'.$customer->id);
    }

    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customer.edit',compact('customer', 'companies'));
    }

    public function update(Customer $customer)
    {


        $customer->update($this->validateData());

        return redirect('/customers');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('/customers');
    }

    protected function validateData()
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ]);
    }
}
