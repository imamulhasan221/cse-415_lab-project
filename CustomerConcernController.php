<?php

namespace App\Http\Controllers;

use App\Models\CustomerConcern;
use Illuminate\Http\Request;

class CustomerConcernController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->input('q');

        $concerns = CustomerConcern::query()
            ->when($q, function($query) use ($q) {
                $query->where('name', 'like', "%{$q}%")
                      ->orWhere('email', 'like', "%{$q}%")
                      ->orWhere('phone', 'like', "%{$q}%")
                      ->orWhere('subject', 'like', "%{$q}%")
                      ->orWhere('message', 'like', "%{$q}%");
            })
            ->latest()
            ->paginate(10)
            ->appends(['q' => $q]);

        return view('customer_concerns.index', compact('concerns','q'));
    }

    public function create()
    {
        return view('customer_concerns.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'nullable|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10|max:2000',
        ]);

        CustomerConcern::create($data);

        return redirect()->route('customer-concerns.index')
            ->with('success', 'Concern created successfully.');
    }

    public function show(CustomerConcern $customer_concern)
    {
        return view('customer_concerns.show', ['concern' => $customer_concern]);
    }

    public function edit(CustomerConcern $customer_concern)
    {
        return view('customer_concerns.edit', ['concern' => $customer_concern]);
    }

    public function update(Request $request, CustomerConcern $customer_concern)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'nullable|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10|max:2000',
        ]);

        $customer_concern->update($data);

        return redirect()->route('customer-concerns.index')
            ->with('success', 'Concern updated successfully.');
    }

    public function destroy(CustomerConcern $customer_concern)
    {
        $customer_concern->delete();

        return redirect()->route('customer-concerns.index')
            ->with('success', 'Concern deleted successfully.');
    }
}
