
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Post</title>
</head>
<body>
       <center><h1>Form Post</h1></center>
       <form action="save_img.php" method="post" enctype="multipart/form-data">
             <div class="container">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">ID</label>
                        <input type="text" name="txt-id" id="txt-id" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="txt-name" id="txt-name" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Gender</label>
                        <select name="txt-gender" id="txt-gender" class="form-control">
                           <option value="M">M</option>
                           <option value="F">F</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="txt-address" id="txt-address" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <input type="file" name="txt-file" id="txt-file">
                </div>
                <div class="col-sm-6">
                    <div class="text-center">
                       <input type="submit" value="save" name="txt-post">
                    </div>
                </div>
             </div>
       </form>
   
</body>
</html>