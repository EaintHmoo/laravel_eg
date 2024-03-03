<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Models\Branch;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\MassDestroyCustomerRequest;

class CustomerController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('customer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (auth()->user()->roles->contains('1') || auth()->user()->roles->contains('3')) {
            $customers = Customer::with(['created_by'])->get();
        } else {
            if (auth()->user()->branch) {
                // dd(auth()->user()->branch);
                $branch = Branch::where('id', auth()->user()->branch->id)->first();
                // dd($branch);
                $customers = Customer::where('created_by_id', auth()->user()->id)->get();
                // $customers = $branch->customers;
                // dd($customers);
                // $customers = auth()->user()->branch;
            } else {
                $customers = [];
            }
        }
        // $customers = Customer::with(['created_by'])->get();
        return view('admin.customers.index', compact('customers'));
    }

    public function create()
    {
        abort_if(Gate::denies('customer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.customers.create');
    }

    public function store(StoreCustomerRequest $request)
    {
        $customer = Customer::create(
            array_merge(
                $request->all(),
                ['created_by_id' => Auth::user()->id]
            )
        );


        return redirect()->route('admin.customers.index');
    }

    public function edit(Customer $customer)
    {
        abort_if(Gate::denies('customer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customer->load('created_by');

        return view('admin.customers.edit', compact('customer'));
    }

    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());

        return redirect()->route('admin.customers.index');
    }

    public function show(Customer $customer)
    {
        abort_if(Gate::denies('customer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customer->load('created_by');

        return view('admin.customers.show', compact('customer'));
    }

    public function destroy(Customer $customer)
    {
        abort_if(Gate::denies('customer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $customer->delete();

        return back();
    }

    public function massDestroy(MassDestroyCustomerRequest $request)
    {
        Customer::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
