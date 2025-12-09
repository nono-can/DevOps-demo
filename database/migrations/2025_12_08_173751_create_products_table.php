<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            // id INT PRIMARY KEY AUTO_INCREMENT
            // Laravel gère cela nativement et de manière optimisée avec :
            $table->id();

            // name VARCHAR(100) NOT NULL
            // Laravel utilise string() avec une longueur par défaut de 255 caractères,
            // ou vous pouvez spécifier 100 explicitement :
            $table->string('name', 100)->nullable(false);

            // price INT NOT NULL
            // Pour les prix, il est fortement recommandé d'utiliser 'decimal' ou 'unsignedInteger'
            // si vous stockez des centimes, pour éviter les problèmes d'arrondis.
            // Si vous stockez des INT comme demandé :
            $table->integer('price')->nullable(false);
            // Alternative recommandée pour les devises :
            // $table->decimal('price', 8, 2)->nullable(false);

            // created_at et updated_at
            // Plutôt que de les définir manuellement avec DEFAULT CURRENT_TIMESTAMP,
            // Laravel offre une méthode simple qui gère automatiquement les types DATETIME
            // et les comportements de mise à jour/création via Eloquent :
            $table->timestamps();
            // Ces deux lignes ci-dessus remplacent vos deux lignes d'horodatage manuelles.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
