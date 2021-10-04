<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="show_discount_amount.blade.php">
    @csrf
    <table>
        <tr>
            <td>Product description:</td>
            <td><textarea name="productDescription"></textarea></td>
        </tr>
        <tr>
            <td>List Price:</td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td>Discount Percent:</td>
            <td><input type="text" name="discountPercent"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Calculate Discount</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
