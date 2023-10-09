<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?=base_url('update-product/'. $product->Id)?>">
        <label for="nama_product">Nama Product</label>
        <input value="<?=$product->nama_product?>" type="text" name="nama_product" id="nama_product"></input>
        <label for="nama_product">Deskripsi</label>
        <input type="text" value="<?=$product->description?>" name="description" id="description">Deskripsi</input>    
        <button type="submit">Update</button>
    </form>
</body>
</html>