<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <title>Bani Arkademy!</title>
  </head>
  <body>
  <div class="container" style="margin-top: 30px;">

  <div class="col-md12">
    <div class="panel panel-default">
        <div class="panel-heading">
        <input id='search-text' name='q' placeholder='Search...' type='text'/>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
        Add
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form method="POST" action="tambah_data_action.php">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3">
                            <div class="form-group">
                                <input placeholder="Raisa Andriana" type="text" name="cashier_name" id="cashier_name" class="form-control" required="true">
                            </div>
                            <div class="form-group">
                                <input placeholder="Drink" type="text" name="category_name" id="category_name" class="form-control" required="true">
                            </div>
                            <div class="form-group">
                                <input placeholder="Ice Tea" type="text" name="name" id="name" class="form-control" required="true">
                            </div>
                            <div class="form-group">
                                <input placeholder="Rp.15.000" type="text" name="price" id="price" class="form-control" required="true">
                            </div>
                            
        
                            <div class="form-group">
                            <button type="button" class="btn btn-warning">Add</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
<div class="container mt-5">
    <table class="table table-bordered rounded">
        <thead>
            <tr bgcolor="#FADC9C">
                <th scope="col">No</th>
                <th scope="col">Cashier</th>
                <th scope="col">Product</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Pevita Pearce</td>
                <td>Latte</td>
                <td>Drink</td>
                <td>Rp. 10,000</td>
                <td><a class="fa fa-edit" data-toggle="modal" data-target="#editModal" href=""> </a> || <a class="fa fa-trash" data-toggle="modal" data-target="#deleteModal" href=""></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Raisa Andriana</td>
                <td>Cake</td>
                <td>Food</td>
                <td>Rp. 15,000</td>
                <td><a class="fa fa-edit" data-toggle="modal" data-target="#editModal" href=""> </a> || <a class="fa fa-trash" data-toggle="modal" data-target="#deleteModal" href=""></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Raisa Andriana</td>
                <td>Fried Rice</td>
                <td>Food</td>
                <td>Rp. 30,000</td>
                <td><a class="fa fa-edit" data-toggle="modal" data-target="#editModal" href=""> </a> || <a class="fa fa-trash" data-toggle="modal" data-target="#deleteModal" href=""></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Pevita Pearce</td>
                <td>Gudeg</td>
                <td>Food</td>
                <td>Rp 35,000</td>
                <td><a class="fa fa-edit" data-toggle="modal" data-target="#editModal" href=""> </a> || <a class="fa fa-trash" data-toggle="modal" data-target="#deleteModal" href=""></td>
            </tr>           
            <tr>
                <th scope="row">5</th>
                <td>Joko Purwadhi</td>
                <td>Ice Tea</td>
                <td>Drink</td>
                <td>Rp 55,000</td>
                <td><a class="fa fa-edit" data-toggle="modal" data-target="#editModal" href=""> </a> || <a class="fa fa-trash" data-toggle="modal" data-target="#deleteModal" href=""></td>
            </tr>   
            <tr>
                <th scope="row">6</th>
                <td>Bani Sholih</td>
                <td>Ketoprak</td>
                <td>Food</td>
                <td>Rp 15,000</td>
                <td><a class="fa fa-edit" data-toggle="modal" data-target="#editModal" href=""> </a> || <a class="fa fa-trash" data-toggle="modal" data-target="#deleteModal" href=""></td>
            </tr>   
        </tbody>
    </table>
</div>
    
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="container">
                    <form method="POST" action="edit_data_action.php">
                        <div class="row">
                            <div class="col-sm-6 offset-sm-3">
                                <div class="form-group">
                                    <input placeholder="Raisa Andriana" type="text" name="cashier_name" id="cashier_name" class="form-control" required="true">
                                </div>
                                <div class="form-group">
                                    <input placeholder="Drink" type="text" name="category_name" id="category_name" class="form-control" required="true">
                                </div>
                                <div class="form-group">
                                    <input placeholder="Ice Tea" type="text" name="name" id="name" class="form-control" required="true">
                                </div>
                                <div class="form-group">
                                    <input placeholder="Rp.15.000" type="text" name="price" id="price" class="form-control" required="true">
                                </div>
                                
            
                                <div class="form-group">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            </div>
            </div>
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="container">
                    <form method="POST" action="edit_data_action.php">
                        <div class="row">
                            <div class="col-sm-6 offset-sm-3">
                                <div class="form-group">
                                    <input placeholder="Raisa Andriana" type="text" name="cashier_name" id="cashier_name" class="form-control" required="true">
                                </div>
                                <div class="form-group">
                                    <input placeholder="Drink" type="text" name="category_name" id="category_name" class="form-control" required="true">
                                </div>
                                <div class="form-group">
                                    <input placeholder="Ice Tea" type="text" name="name" id="name" class="form-control" required="true">
                                </div>
                                <div class="form-group">
                                    <input placeholder="Rp.15.000" type="text" name="price" id="price" class="form-control" required="true">
                                </div>
                                
            
                                <div class="form-group">
                                    <button type="submit" name="simpan" id="simpan" class="btn btn-primary">
                                        <i class="fa fa-save"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            </div>
            </div>

</body>
</html>