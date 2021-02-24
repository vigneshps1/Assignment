<?php
include("config.php");
$selectquery = "select * from add_product";
$query = mysqli_query($mysql,$selecquery);
$res = mysqli_num_rows($query);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table,
            th,
            td {
                border: 1px solid black;
                padding: 5px;
            }
        </style>
        <title>Document</title>
    </head>

    <body>
        <table>
            <tr>
                <td>Id</td>
                <td>Category</td>
                <td>Sub</td>
                <td>Name</td>
                <td>Barcode</td>
                <td>Cost</td>
                <td>Sales</td>
                <td>Retails</td>
                <td>Num</td>
                <td>Brand</td>
            </tr>
            <?php
            if($res>0)
            {
                while($res = mysqli_fetch_assoc($query))
                {
                    ?>
                <tr>
                    <td>
                        <?php echo $res['id'];?>
                    </td>
                    <td>
                        <?php echo $res['Category'];?>
                    </td>
                    <td>
                        <?php echo $res['sub'];?>
                    </td>
                    <td>
                        <?php echo $res['Name'];?>
                    </td>
                    <td>
                        <?php echo $res['Barcode'];?>
                    </td>
                    <td>
                        <?php echo $res['Cost'];?>
                    </td>
                    <td>
                        <?php echo $res['Sales'];?>
                    </td>
                    <td>
                        <?php echo $res['Num'];?>
                    </td>
                    <td>
                        <?php echo $res['Brand'];?>
                    </td>
                </tr>
                <?php
                } }?>
        </table>

    </body>

    </html>
    <?php
    ?>