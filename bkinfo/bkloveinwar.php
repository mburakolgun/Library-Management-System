<?php include('../includes/connection.php'); ?>
<?php require('../session1.php'); ?>

<?php include('../includes1/navbar1.php'); ?>

<?php 
$query = 'SELECT * FROM books
              WHERE
              Book_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['Book_ID'];
                $i= $row['Title'];
                $a=$row['Isbn_No'];
                $b=$row['Author'];
                $c=$row['Quantity'];
                $d=$row['Pub_ID'];
             
              }
              
              $id = $_GET['id'];
         
?>


        <div class="card shadow mb-4 col-xs-12 col-md-12 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Edit Info</h4>
            </div>
            <div class="card-body">
      

            <form role="form" method="post" action="settings_edit.php">
              <input type="hidden" name="id" value="<?php echo $zz; ?>" />

              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Title:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Title" name="Title" value="<?php echo $i; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Isbn Number:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Isbn Number" name="Isbn_No" value="<?php echo $a; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Author:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Author" name="Author" value="<?php echo $b; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Quantity:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Quantity" name="Quantity" value="<?php echo $c; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Publisher:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Publisher" name="Publisher" value="<?php echo $d; ?>" required>
                </div>
              </div>
              <hr>

                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-edit fa-fw"></i>Update</button>    
              </form>  
            </div>
          </div>  

<?php
include('../includes1/footer1.php');
?>
