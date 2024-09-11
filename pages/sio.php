
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "abc";
    
    //create a connection
    
    $conn = mysqli_connect($servername,$username,$password,$database);
    
    // if connection was not successfull
    
    if (!$conn) {
    
      die ("Sorry we failed to connect" . mysqli_connect_error());
    
        }
    else{
        // echo "database added"; 
    }
   // include("query.php");
        $details = [
            ["fname" => "Aman" , "lname" => "Singh" , "email" => "amansinghgpf@gmail.com" , "mobile" => 9526782100 , "gender" => "male"],
            ["fname" => "Vikas" , "lname" => "Singh" , "email" => "vikas56@gmail.com" , "mobile" => 954894100 , "gender" => "male"],
            ["fname" => "Ridhii" , "lname" => "Singh" , "email" => "RIdhii@gmail.com" , "mobile" => 9568574100 , "gender" => "female"],
            ["fname" => "" , "lname" => "" , "email" => "gauravsingh08f@gmail.com" , "mobile" => 95223188 , "gender" => "male"],
            ["fname" => "shyam" , "lname" => "Singh" , "email" => "shyam@gmail.com" , "mobile" => 9526584428 , "gender" => "male"],
            ["fname" => "Radha" , "lname" => "Singh" , "email" => "radha96@gmail.com" , "mobile" => 658528247 , "gender" => "female"],
            ["fname" => "Viraj" , "lname" => "Singh" , "email" => "virajsingh008@gmail.com" , "mobile" => 6985632418 , "gender" => "male"],
            ["fname" => "Baburao" , "lname" => "Singh" , "email" => "baburaao@gmail.com" , "mobile" => 6852347198 , "gender" => "male"],
            ["fname" => "sheetal" , "lname" => "Singh" , "email" => "sheetal@gmail.com" , "mobile" => 7896543321 , "gender" => "female"],
            ["fname" => "Rekha" , "lname" => "Singh" , "email" => "0012rekha@gmail.com" , "mobile" => 6587423917 , "gender" => "female"],
        ];
        


        //echo "<pre>"; print_r($deatils);


            //echo "<pre>"; print_r($value);
            // echo "first name : ".$value['fname'];
            // echo "<br>";
            // echo "last name : ".$value['lname'];
            // echo "<br>";
            ?>

            
            
            <table border="1", cellspacing = "4" , align = "center" width="100%">
                <tr>
                    <th width = "2%">sn</th>
                    <th width = "15%">First Name</th>
                    <th width = "15%">Last Name</th>
                    <th width = "15%">Email</th>
                    <th width = "15%">Mobile</th>
                    <th width = "15%">Gender</th>
                </tr>
                <?php if($details):?>
                    <?php $sn=1; foreach($details as $key => $val):
                        // check existing data
                        $query = "select * from array where email='".$val['email']."' AND mobile='".$val['mobile']."'";
                        if(mysqli_query($conn,$query)){
                            //$sql="update"
                            $sql = "UPDATE array SET fname='{$val['fname']}', lname='{$val['lname']}', email='{$val['email']}', gender='{$val['gender']}' where email = '{$val['email']}'  &&  mobile = '{$val['mobile']}' ";
                            // echo $sql; die;

                            $data = mysqli_query($conn,$sql);
                        }
                        else{
                            $sql = "INSERT INTO array (fname, lname, email, mobile, gender) VALUES ('{$val['fname']}', '{$val['lname']}', '{$val['email']}', '{$val['mobile']}', '{$val['gender']}')";
                            $result = mysqli_query($conn,$sql);
                        }
                      
                       //echo $result;
                      ?>
                      
                        <tr>
                            <td><?= $sn;?></td>
                            <td><?= ($val['fname'] != "") ? $val['fname'] : ('N/A'); ?></td>
                            <td><?= ($val['lname'] != "") ? $val['lname'] : ('N/A'); ?></td>
                            <td><?= ($val['email'] != "") ? $val['email'] : ('N/A'); ?></td>
                            <td><?=($val['mobile'] != "") ? $val['mobile'] : ('N/A'); ?></td>
                            <td><?= ($val['gender'] != "") ? $val['gender'] : ('N/A'); ?></td>
                        </tr>
                    <?php $sn++; endforeach;?> 
                <?php else:?>
                    
                    <tr>
                        <td colspan="5">No Data Found</td>
                    </tr>     

                <?php endif;?>   
                

            </table>
            <?php
                        $checkUserExist="SELECT * FROM array WHERE email='".$val['email']."' OR mobile='".$val['mobile']."'";
                        $checkData=mysqli_query($conn,$checkUserExist);
                        if(mysqli_num_rows($checkData) > 0)
                        {
                            $_SESSION['errMsg']='User Already Exist';
                                   echo "User Already Exist";
                        }
                        else{   
                            $sql="INSERT INTO `array`(fname, lname, email, mobile, gender) VALUES ('{$val['fname']}', '{$val['lname']}', '{$val['email']}', '{$val['mobile']}', '{$val['gender']}')";
                            // echo $sql; die;
                            if(mysqli_query($conn,$sql))
                            {
                                echo "Added Successffully";
                            }
                            else{
                                echo "Something Went Wrong Try Later!";
                            }
                
                        }
                    ?>   
</body>
</html>