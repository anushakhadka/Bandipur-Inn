<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <?php include('partials/menu.php'); ?>

<!-- Main Content Section Starts -->
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Category</h1>

        <br/><br/>
        <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
                ?>
                <br/><br/>
        <!-- Button to Add Category -->
        <a href="<?php echo ('http://localhost/bandipurinn/admin/add-category.php');?>" class="btn-primary">Add Category</a>
        <br/><br/><br/>
    <br/><br/><br/>

    <table class="tbl-full">
  <thead>
    <tr>
    <th>S.N</th>
            <th>Title</th>;
            <th>Image</th>;
            <th>Featured</th>
            <th>Active</th>
            <th>Actions</th>
            <td>
            <a href="#" class="btn-secondary">Update Category</a>
            <a href="#" class="btn-danger">Delete  Category</a>   
            </td>
         </tr>
  </thead>

                <?php   
                //To get categories from db
                $sql = "SELECT * FROM tbl_category";

                //Execute query
                $res = mysqli_query($conn , $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //Check data in db
                if($count>0)
                {
                    //we have data in db
                    //get data and displau
                    while($row=mysqli_fetch_assoc($res)) //fetch data fromdb and save in row which will be in array format
                    {
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        $featured = $row['featured'];
                        $active = $row['active'];
                       
                       
                       ?>
                     <tbody>
                     <tr>
                     <th>1</th>
                                <th><?php echo $title; ?></th>
                                <th><?php echo $image_name; ?></th>;
                                <th><?php $featured; ?></th>
                                <th><?php $active; ?></th>
                                <td>
                                <a href="#" class="btn-secondary">Update  Category</a>
                                <a href="#" class="btn-danger">Delete  Category</a>   
                                </td>
                            </tr>
                     <tr>
                        <th>2</th>
                        <th><?php echo $title; ?></th>
                                <th><?php echo $image_name; ?></th>
                                <th><?php $featured; ?></th>
                                <th><?php $active; ?></th>
                                <td>
                                <a href="#" class="btn-secondary">Update  Category</a>
                                <a href="#" class="btn-danger">Delete  Category </a>   
                                </td>
                        </tr>
                        <tr>
                        <th>3</th>
                        <th><?php echo $title; ?></th>
                                <th><?php echo $image_name; ?></th>
                                <th><?php $featured; ?></th>
                                <th><?php $active; ?></th>
                                <td>
                                <a href="#" class="btn-secondary">Update  Category</a>
                                <a href="#" class="btn-danger">Delete  Category</a>   
                                </td>
                         </tr>
                                </tbody>
                                    </table>

                
                        <?php


                        
                                    }
                                }
                                else
                                {
                                    //we dont have data
                                    //display msg inside table
                                    ?>  <!--broken php to start anther just to write html code in betn -->

                                    <tr>
                                        <td colspan="6"><div class="error">No Category Added.</div><td>
                                    </tr>




                                    <?php
                                }

                                ?>






                <?php include('partials/footer.php'); ?>