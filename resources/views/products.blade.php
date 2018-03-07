@include ('header')  
		<body>
		 <center> <h3><strong>List Product</strong> </h3></center>
			<div class="alert alert-danger"> 
				<div class="table-responsive">
        <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
              <thead>
                 <td>
                <tr>
                  <th>Name Product</th>
				  <th>Price</th>
                  <th>Action</th>
                 </tr>
                 @foreach($data as $item)
              <tr>
                  <td>{{$item->name}}</td>
                  <td>Rp.{{$item->price}}</td>
                  <td>
                  	<a href="/editproduct/{{$item->id}}" class="btn btn-primary">Edit</a>
                    <a href="/deleteproduct_proses/{{$item->id}}" class="btn btn-danger">Delete</a>
                  </td>
                  </tr>
                  @endforeach
          	  </td>
              </thead>
        </table>
              	</div>
              </div>
		</body>
		
 