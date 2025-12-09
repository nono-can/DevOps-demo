@extends('layouts.app')

@section('title', 'Ajouter un Produit')

@section('content')
<div class="container">
    <div class="card shadow animate__animated animate__fadeInUp">
        <div class="card-body p-4">
            <h2 class="page-title mb-4">
                <i class="fas fa-plus-circle"></i> Ajouter un Produit
            </h2>

            @if ($errors->any())
                <div class="alert alert-danger animate__animated animate__shakeX">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nom du produit</label>
                    <input type="text" name="name" class="form-control" placeholder="Ex: Ordinateur Portable">
                </div>

                <div class="mb-4">
                    <label class="form-label">Prix (FCFA)</label>
                    <input type="number" name="price" class="form-control" placeholder="Ex: 250000">
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary me-2">
                        <i class="fas fa-arrow-left"></i> Retour
                    </a>
                    <button class="btn btn-success">
                        <i class="fas fa-save"></i> Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
