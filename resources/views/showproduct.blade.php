<!DOCTYPE html>
<html lang="en">
<head></head> 
<body>
    <!--start: Container -->
        <div class="container"> 
        <center><div class="title" style="margin-left: ;"><h3>Update Product</h3></div></center>
        <table style="font-style: oblique; font-weight: bold; margin-left: 140px;">

        <form action="/editproduct_proses/{{$product->id}}" method="POST" enctype="multipart/form-data">
        @csrf
    <tr>
    <td width="150">No Product</td>
    <td width="30">:</td>
    <td width="550"><input class="form-control" type="text" name="kode" value="{{$product->no_product}}" required /></td>
    </tr>
    <tr>
    <td width="150">Name Product</td>
    <td width="30">:</td>
    <td width="550"><input class="form-control" type="text" name="name" value="{{$product->name}}"required />
    </td>
    </tr>
    <tr>
    <td width="150">Description</td>
    <td width="30">:</td>
    <td width="550"><input class="form-control" type="text" name="description" style="height:70px" value="{{$product->description}}" required />
    </td>
    </tr>
    <tr>
    <td width="150">Kategori</td>
    <td width="30">:</td>
    <td width="550"><input class="form-control" type="text" name="category" value="{{$product->category}}"required />
    </td>
    </tr>
    <tr>
    <td width="150">Price</td>
    <td width="30">:</td>
    <td width="550"><input class="form-control" type="text" name="price" value="{{$product->price}}" required />
    </td>
    </tr>
    <tr>
    <td width="150">Gambar</td>
    <td width="30">:</td>
    <td width="550"><input class="form-control" type="text" name="gambar" value="{{$product->image}}" required />
    </td>
    </tr>
    
    <tr>
        <td colspan="5"><center>
        <button type="submit" id="submit" name="Tambah Product" value="Submit" class="btn btn-primary">
        <span class="glyphicon glyphicon-save"></span>Submit
        </button></center>
        </td>
    </tr>
    </form>
    
    </table>
</div>
</body>
</html>