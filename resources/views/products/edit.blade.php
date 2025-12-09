@extends('layouts.app')

@section('title', 'Modifier le Produit')

@section('content')
<div class="container">
    <div class="card shadow animate__animated animate__fadeInUp">
        <div class="card-body p-4">
            <h2 class="page-title mb-4">
                <i class="fas fa-edit"></i> Modifier le Produit
            </h2>

            <form action="{{ route('products.update', $product) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                </div>

                <div class="mb-4">
                    <label class="form-label">Prix (FCFA)</label>
                    <input type="number" name="price" class="form-control" value="{{ $product->price }}">
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary me-2">
                        <i class="fas fa-arrow-left"></i> Retour
                    </a>
                    <button class="btn btn-warning">
                        <i class="fas fa-save"></i> Mettre à jour
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
