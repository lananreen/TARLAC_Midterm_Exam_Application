<!DOCTYPE html>
<html>
<head>
    <title>Tarlac Midterms</title>
</head>
<body>
    <h1>Book Products</h1>
    @foreach ($products as $product)
        <ul>
            <li>Book Title: {{$product ['Title']}}</li>
            <li>Author: {{$product ['Author']}}</li>
            <li>Genre: {{$product ['Genre']}}</li>
        </ul>
    @endforeach
</body>
</html>