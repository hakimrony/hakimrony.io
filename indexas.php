<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    </head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
           
        </div>
    </nav>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary">PHP - Simple Insert Multiple Checkbox Data</h3>
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-4">
            <form method="POST" action="save.php">
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" name="firstname" class="form-control" required="required"/>
                </div>
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" name="lastname" class="form-control" required="required"/>
                </div>
                <label>Favorite Subjects:</label>
                <br />
                <input type="checkbox" name="subject[]" value="Wedding Photo"/>Wedding Photo
                <br />
                <input type="checkbox" name="subject[]" value="Reception Photo"/>Reception Photo
                <br />
                <input type="checkbox" name="subject[]" value="Family Festival"/>Family Festival
                <br />
                <input type="checkbox" name="subject[]" value="Study Tour"/>Study Tour
                <br /><br />
                <button name="save" class="btn btn-primary form-control">Save</button>
            </form>
        </div>
 
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead class="alert-info">
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require'conn.php';
                        $query=mysqli_query($conn, "SELECT * FROM `member`") or die(mysqli_error());
                        while($fetch=mysqli_fetch_array($query)){
                    ?>
                        <tr>
                            <td><?php echo $fetch['firstname']?></td>
                            <td><?php echo $fetch['lastname']?></td>
                            <td><?php echo $fetch['subjects']?></td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>