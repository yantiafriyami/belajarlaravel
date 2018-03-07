@include ('header')  
<body>
    <!--start: Container -->
        <div class="container"> 
        <center><div class="title" style="margin-left: ;"><h3>Tambah Product</h3></div></center>
        <table style="font-style: oblique; font-weight: bold; margin-left: 140px;">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="/newproduct_proses" method="POST" enctype="multipart/form-data">
        @csrf
	<tr>
    <td width="150">No Product</td>
    <td width="30">:</td>
    <td width="550"><input class="form-control" type="text" name="kode"/></td>
    </tr>
    <tr>
    <td width="150">Name Product</td>
    <td width="30">:</td>
    <td width="550"><input class="form-control" type="text" name="name"/>
    </td>
    </tr>
    <tr>
    <td width="150">Description</td>
    <td width="30">:</td>
    <td width="550"><input class="form-control" type="text" name="description" style="height:70px"/>
    </td>
    </tr>
    <tr>
    <td width="150">Kategori</td>
    <td width="30">:</td>
    <td width="550"><input class="form-control" type="text" name="category"/>
    </td>
    </tr>
    <tr>
    <td width="150">Price</td>
    <td width="30">:</td>
    <td width="550"><input class="form-control" type="text" name="price" />
    </td>
    </tr>
    <tr>
    <td width="150">Gambar</td>
    <td width="30">:</td>
    <td width="550"><input class="form-control" type="text" name="gambar"/>
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
    <!-- start footer -->
@include ('footer') 