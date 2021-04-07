<html>
<head>
    <title>Encryption and Decryption Update Data</title>
    
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
   <h3 align="center">Encryption and Decryption Update Data</h3>
   <br />
   <?php

            foreach($data->result() as $row)
            {
            ?>
            <script>
            $(document).ready(function(){
                $('#gender').val("<?php echo $this->encryption->decrypt($row->gender); ?>");
            });
            </script>
            <form method="post" action="<?php echo base_url(); ?>encryptiondecryption/edit_validation">
                <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" value="<?php echo $this->encryption->decrypt($row->first_name); ?>" />
                <br />
                <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" value="<?php echo $this->encryption->decrypt($row->last_name);?>" />
                <br />
                <input type="text" name="age" class="form-control" placeholder="Enter Age" value="<?php echo $this->encryption->decrypt($row->age); ?>" />
                <br />
                <select name="gender" id="gender" class="form-control">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <br />
                <div align="center">
                    <input type="hidden" name="hidden_id" value="<?php echo $row->id; ?>" />
                    <input type="submit" name="insert" class="btn btn-primary" value="Edit" />
                </div>
            </form>
            <?php
            }

            ?>
  </div>
  <br />
 </div>
</body>
</html>