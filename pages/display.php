
<?php 
      session_start();
      include('../template/header.php');
      include('./query.php');
?>


<div class="subpage-head has-margin-bottom">
    <div class="container">     
       <h3>User Data</h3>
        <p class="lead">User Data are here..</p>
    </div>
</div>
<div class="container">  
    <div class="row">
        <?php if(isset($_SESSION['msgScs'])):?>
        <p class = "alert alert-success" > <?php echo $_SESSION['msgScs'] ?> </p>
        <?php unset($_SESSION['msgScs']);endif;?>
            
        <?php if(isset($_SESSION['errMsg'])):?>
        <p class="alert alert-danger"><?= $_SESSION['errMsg']?></p> 
        <?php unset($_SESSION['errMsg']); endif;?>
        <!-- <div class="col-md-12 has-margin-bottom">
            

        </div> -->
        <div class="col-md-12 has-margin-bottom"style="margin-bottom: 20px;">

        <style>
        .td{
            text-align: center;
            padding: 8px;
        }
        .td, th   {
            padding: 10px;
            /* padding-bottom: 10px; */
            /* border: 5px; */
            /* border-bottom-width: 5px; */
            padding: 8px;
            text-align: center;
        }
        table{
            text-align: center;

        }
        .update{
             background-color: darkcyan;
            color: white;
        }
        .delete{
            background-color: lightcoral;
            color: white;
        }
        td:first-letter {
            text-transform: uppercase;
        }
        </style>
        <?php

include("query.php");
        if($total != 0 ){
        ?>  
     <!-- <br>
    <h1 align="center" > <mark> Displaying Records</mark></h1> -->
<table border ="3" cellspacing = "5" width="90%" align="center"><br> 
    <tr style="
    color: #b53eed;">
    <th width = "10%" >Id No</th>
    <th width = "15%">Full Name</th> 
    <th width = "20%">Email</th>
    <th width = "15%">Phone No</th>
    <th width = "20%">Message</th>
    <th width = "20%">Action</th>
    </tr>
    <?php
   // echo " table has records";
$a =1;
while($result = mysqli_fetch_assoc($data)){
// echo "<pre>"; print_r($result);
echo    "<tr >
            <td class = 'td'>".$a."</td>
            <td>".$result['name']."</td>
            <td>".$result['email']."</td>
            <td>".$result['phone']."</td>
            <td>".$result['message']."</td>
            <td> <a href='update.php?id=".base64_encode(base64_encode($result['sno']))."&action=update'><b>Update </a>
                 <a href='query.php?id=".base64_encode(base64_encode($result['sno']))."&action=delete' id='deleteBtn'><b>Delete</a>
            </td>
            </tr>";
 //echo "welcome here <br>"; 

// <a href='update.php?id=$result[sno]&action=update'>Update </a>
$a++;
}
        }
        else{
            echo "Having Some Error 0r Table is Khalli";
        }
?>
</table>
            
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    //let deletebtn = document.getElementById('deleteBtn');

    $(document).ready(function(){
        $('#deleteBtn').on('click', function(){
            if(confirm("Are you sure you want to delete this user?"))
            {
                return true;
            }
            else{
                return false;
            }

        });
    });
     
</script> 
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('deleteBtn').addEventListener('click', function() {
            Swal.fire({
                title: 'Hello World!',
                text: 'This is a SweetAlert2 alert.',
                icon: 'success',
                confirmButtonText: 'Cool'
            });
        });
    </script> -->


<?php include('../template/footer.php');?>