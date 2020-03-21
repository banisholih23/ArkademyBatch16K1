<?php include("conn.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hallo Arkademy!!</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="margin-top: 30px;">
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
         <!-- konten modal-->
        <div class="modal-content">
             <!-- heading modal -->
            <div class="modal-header">                
                <h4 class="modal-title">Tambah Product</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
             <!-- body modal -->
            <div class="modal-body">
                <form action="add.php" method="POST">
                    <select class="form-control" name="casir" id="">
                        <option value="">Pilih Cashier :</option>

                        <?php $sql = "SELECT * FROM Cashier";
                        $query = mysqli_query($db, $sql);
                        while($s = mysqli_fetch_array($query)){?> ?>    
                     
                        <option value="<?php echo $s['id_cas']; ?>"><?php echo $s['name_cas']; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <select class="form-control" name="cat" id="">
                        <option value="">Pilih Category :</option>
                        <?php $sql = "SELECT * FROM Category";
                        $query = mysqli_query($db, $sql);
                        while($s = mysqli_fetch_array($query)){?> ?>    
        
                        <option value="<?php echo $s['id_cat']; ?>"><?php echo $s['name_cat']; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <input type="text" name="nama_p" class="form-control" placeholder="Name Product"/>
                    <br>
                    <input type="text" name="price" class="form-control" placeholder="Price"/>
                    <div class="modal-footer">
                        <input type="submit" class ="btn btn-warning" value="Add" name="add">
                    </div>
                </form>
            </div>
             <!-- footer modal -->          
        </div>
    </div>
</div>
<?php
    $sql = "SELECT Product.id,Product.price,Cashier.name_cas,Category.name_cat,Product.name_prd 
    FROM Product INNER JOIN Category ON Product.id_category = Category.id_cat 
    INNER JOIN Cashier ON Cashier.id_cas = Product.id_cashier";
    $query1 = mysqli_query($db, $sql);
    $no=1;
    while($t = mysqli_fetch_array($query1)){ ?>
        <div id="edit<?php echo $t['id']; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- konten modal-->
                <div class="modal-content">
                    <!-- heading modal -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Product</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                        <form action="edit.php" method="POST">
                            <?php
                            $id = $t['id']; 
                            $sql2 = "SELECT Product.id,Cashier.id_cas,Cashier.name_cas,Category.id_cat,Category.name_cat,Product.name_prd,Product.price
                            FROM Product INNER JOIN Category ON Product.id_category = Category.id_cat 
                            INNER JOIN Cashier ON Cashier.id_cas = Product.id_cashier WHERE Product.id='$id' ";
                            $query3 = mysqli_query($db, $sql2);
                            while($a = mysqli_fetch_array($query3)){       
                            ?>
                            <input type="hidden" value="<?php echo $a['id']; ?>" name="id">
                            <select class="form-control" name="casir" id="">
                            <option value="<?php echo $a['id_cas']; ?>"><?php echo $a['name_cas']; ?></option>
                            <?php $sql = "SELECT * FROM Cashier WHERE NOT id_cas='$a[id_cas]'";
                            $query = mysqli_query($db, $sql);
                            while($s = mysqli_fetch_array($query)){?> ?>    
                            <option value="<?php echo $s['id_cas']; ?>"><?php echo $s['name_cas']; ?></option>
                            <?php } ?>
                            </select>
                            
                            <br>

                            <select class="form-control" name="cat" id="">
                            <option value="<?php echo $a['id_cat']; ?>"><?php echo $a['name_cat']; ?></option>
                            <?php $sql = "SELECT * FROM Category WHERE NOT id_cat='$a[id_cat]'";
                            $query = mysqli_query($db, $sql);
                            while($s = mysqli_fetch_array($query)) { ?>  
                            <option value="<?php echo $s['id_cat']; ?>"><?php echo $s['name_cat']; ?></option>
                            <?php } ?>
                            </select>
                            
                            <br>

                            <input type="text" name="nama_p" value="<?php echo $a['name_prd']; ?> " class="form-control" placeholder="Name Product"/>
                            <br>
                            <input type="text" name="price" value="<?php echo $a['price']; ?>" class="form-control" placeholder="Price"/>      
                                <?php } ?>
                                    <div class="modal-footer">
                                        <input type="submit" class ="btn btn-warning" value="Edit" name="edit">
                                    </div>
                        </form>
                    </div>
                            <!-- footer modal -->                        
                </div>
            </div>
        </div>
        <?php } ?>
<div class="col-md12">
    <div class="panel panel-default">
        <div class="panel-heading">
        <input id='search-text' name='q' placeholder='Search...' type='text'/>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Add</button>
        </div>
<br>
<div class="panel-body">
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
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
                <?php 
                $sql = "SELECT Product.id,Cashier.name_cas,Category.name_cat,Product.name_prd,Product.price
                FROM Product INNER JOIN Category ON Product.id_category = Category.id_cat 
                INNER JOIN Cashier ON Cashier.id_cas = Product.id_cashier";
                $query = mysqli_query($db, $sql);
                $no=1;
                while($t = mysqli_fetch_array($query)){?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $t['name_cas'];  ?></td>
                    <td><?php echo $t['name_prd'];  ?></td>
                    <td><?php echo $t['name_cat'];  ?></td>
                    <td>Rp. <?php echo number_format($t['price']);?> </td>
                    <td><a href="#" type="button" class="fa fa-edit" data-toggle="modal" data-target="#edit<?php echo $t['id']; ?>" ></a> || <a class="fa fa-trash" href="hapus.php?id=<?php echo $t['id']; ?>"></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>