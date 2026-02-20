<!DOCTYPE html>
<html>
<head>
    <title>Tarlac Midterms</title>
</head>
<body>
    <h1>Book Products</h1>
    @foreach ($products as $product)
        <h2>Book Title: {{$product ['Title']}}</h2>
        <p>Author: {{$product ['Author']}}</p>
        <p>Genre: {{$product ['Genre']}}</p>
    @endforeach
</body>
</html>