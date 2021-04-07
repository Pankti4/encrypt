<html>
<head>
    <title>Encryption and Decryption Insert Data</title>
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
    body
    {
     background-color: #f1f1f1;
    }
    .box
    {
     width: 600px;
     margin:0 auto;
     background-color: #fff;
     border:1px solid #ccc;
     border-radius: 5px;
     padding:16px;
    }
 </style>
</head>
<body>
 <div class="container">
  <br />
  <br />
  <div class="box">
   <h3 align="center">Encryption and Decryption Insert Data</h3>
   <br />
            <?php
            if(validation_errors() != '')
            {
                echo '
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    ' . validation_errors() .'
                </div>
                ';
            }
            ?>
   <form method="post" action="<?php echo base_url(); ?>encryptiondecryption/insert_validation">
                <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" />
                <br />
                <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" />
                <br />
                <input type="text" name="age" class="form-control" placeholder="Enter Age" />
                <br />
                <select name="gender" class="form-control">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <br />
                <div align="center">
                    <input type="submit" name="insert" class="btn btn-primary" value="Insert" />
                </div>
            </form>
  </div>
  <br />
 </div>
</body>
</html>