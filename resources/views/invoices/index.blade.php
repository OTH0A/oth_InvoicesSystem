<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Vos Factures') }}
        </h2>
    </x-slot>

    <style>
        .invoice-button {
            transition: background-color 0.3s, color 0.3s;
            padding: 0.25rem 0.5rem;
            border-radius: 0.375rem;
            text-decoration: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #4a5568;
            color: #ffffff;
        }

        .invoice-button:hover {
            background-color: #2d3748;
        }

        .invoice-button-icon {
            margin-right: 0.25rem;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between mb-4">
                <div>
                    <h3 class="text-lg font-semibold mb-2">Trier par :</h3>
                    <a href="{{ route('invoices.index', ['order' => 'latest']) }}" class="invoice-button mr-2">Le plus récent</a>
                    <a href="{{ route('invoices.index', ['order' => 'oldest']) }}" class="invoice-button">Le plus ancien</a>
                </div>
                <div>
                    <!-- Ajoutez ici d'autres boutons de tri si nécessaire -->
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($invoices as $invoice)
                    <div class="relative bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">{{ $invoice->invoice }}</h3>
                            <p class="text-gray-600 dark:text-gray-300">{{ $invoice->invoice_date }}</p>
                            <div class="border-t border-gray-200 dark:border-gray-600 mt-4 pt-4">
                                <p class="text-lg font-bold text-gray-800 dark:text-gray-200">{{ $invoice->total }} €</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Subtotal: {{ $invoice->subtotal }} €</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Discount: {{ $invoice->discount }} €</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">TVA: {{ $invoice->tva }} €</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Notes: {{ $invoice->notes }}</p>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gray-900 dark:bg-gray-600 px-6 py-3 flex justify-end">
                            <a href="#" class="invoice-button mr-2 hover:text-gray-200">
                                <span class="invoice-button-icon">&#128438;</span> Imprimer
                            </a>
                            <a href="#" class="invoice-button mr-2 hover:text-gray-200">
                                <span class="invoice-button-icon">&#128190;</span> Télécharger
                            </a>
                            <a href="#" class="invoice-button hover:text-gray-200">
                                <span class="invoice-button-icon">&#128269;</span> Plus de détails
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
