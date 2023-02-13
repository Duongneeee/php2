<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <form action="/create-product" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name" id="">
        <br>
        Image: <input type="file" name="image" id="">
        <br>
        Category:
        <select name="cate_id" id="">
            <option value="1">Iphone</option>
            <option value="2">Samsung</option>
        </select>
        <br>
        price: <input type="number" name="price" id="">
        <br>
        Short Description
        <textarea name="short_desc" id="" cols="90" rows="5"></textarea>
        <br>
        Detail:
        <textarea name="detail" id="" cols="90" rows="10"></textarea>
        <br>
        <button type="submit">Add</button>
    </form>
</body>
</html>