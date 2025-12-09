@extends('layouts.app')

@section('title', 'Détails du Produit')

@section('content')
<div class="container">
    <div class="card shadow animate__animated animate__zoomIn">
        <div class="card-body">
            <h3 class="page-title mb-3">{{ $product->name }}</h3>

            <p><strong>ID :</strong> {{ $product->id }}</p>
            <p><strong>Prix :</strong> {{ number_format($product->price, 0, ',', ' ') }} FCFA</p>

            <div class="mt-4">
                <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Modifier
                </a>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Retour
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
