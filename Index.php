<?php
if($_SERVER ["REQUEST_METHOD"] == "POST")
{
    include("config.php");
    $Category=$_POST["Category"];
    $Subcategory=$_POST["Sub"];
    $Namedescription=$_POST["Name"];
    $Barcode=$_POST["Barcode"];
    $Cost=$_POST["Cost"];
    $Sales=$_POST["Sales"];
    $Retails=$_POST["Retails"];
    $Numofunits=$_POST["Num"];
    $Brand=$_POST["Brand"];
    $sql="INSERT into add_product (Category,Sub,Name,Barcode,Cost,Sales,Retails,Num,Brand)values('$Category','$Subcategory','$Namedescription','$Barcode','$Cost','$Sales','$Retails','$Numofunits','$Brand')";
    $res=mysqli_query($mysql,$sql);
}
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <br><br>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                        <center>Add Product</center>
                    </h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="#" method="POST">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="Category">Category:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="Category">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="Sub">Sub Category:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="Sub">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="Name">Name/Description:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="Barcode">Barcode:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="Barcode">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="Cost">Cost:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="Cost">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="Sales">Sales%:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="Sales">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="Retails">Retails:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="Retails">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="Num">Num of units:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="Num">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="Brand">Brand:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="Brand">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-5 col-sm-4">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="Show" class="btn btn-primary"><a href="fetch.php"> Show</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>