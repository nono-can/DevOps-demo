<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Liste des Produits</title>
    <style>
        /* Nécessaire pour afficher les accents dans DomPDF */
        body { font-family: DejaVu Sans, sans-serif; }
        h1 { text-align: center; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Liste des Produits</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Date création</th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ number_format($product->price, 2, ',', ' ') }} FCFA</td>
            <td>{{ $product->created_at->format('d/m/Y H:i') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>