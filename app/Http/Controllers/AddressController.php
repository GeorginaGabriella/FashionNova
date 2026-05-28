<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::where('user_id', Auth::id())->get();
        return view('addresses.index', compact('addresses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'recipient_name' => 'required',
            'phone' => 'required',
            'full_address' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
        ]);

        Address::create([
            'user_id' => Auth::id(),
            'recipient_name' => $request->recipient_name,
            'phone' => $request->phone,
            'full_address' => $request->full_address,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'is_default' => $request->has('is_default')
        ]);

        return back()->with('success', 'Alamat berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        Address::where('id', $id)
            ->where('user_id', Auth::id())
            ->delete();

        return back()->with('success', 'Alamat berhasil dihapus!');
    }
}
