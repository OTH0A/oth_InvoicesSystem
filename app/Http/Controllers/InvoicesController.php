<?php

namespace App\Http\Controllers;

use App\Models\invoices;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Récupérez les paramètres de requête pour l'ordre de tri
        $order = $request->input('order', 'latest');
    
        // Récupérez les factures en fonction de l'ordre de tri
        if ($order === 'latest') {
            $invoices = Invoices::orderBy('invoice_date', 'desc')->get();
        } elseif ($order === 'oldest') {
            $invoices = Invoices::orderBy('invoice_date', 'asc')->get();
        } else {
            // Gérer d'autres cas si nécessaire
        }
    
        // Passez les factures triées à la vue
        return view('invoices.index', ['invoices' => $invoices]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(invoices $invoices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(invoices $invoices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, invoices $invoices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(invoices $invoices)
    {
        //
    }
}
