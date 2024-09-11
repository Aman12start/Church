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
    
   // include("query.php");
        $details = [
            ["fname" => "Aman" , "lname" => "Singh" , "email" => "amansigh@gmail.com" , "mobile" => 6558743321 , "gender" => "male"],
            ["fname" => "rajpl" , "lname" => "SINGH" , "email" => "rj@gmail.com" , "mobile" => 954894100 , "gender" => "male"],
            ["fname" => "priya" , "lname" => "Singh" , "email" => "pr@gmail.com" , "mobile" => 9568574100 , "gender" => "female"],
            ["fname" => "" , "lname" => " sd" , "email" => "dv@gmail.com" , "mobile" => 7222318855 , "gender" => "male"],
            ["fname" => "Ram" , "lname" => "Singh" , "email" => "ram@gmail.com" , "mobile" => 8826584428 , "gender" => "male"],
            ["fname" => "Rani" , "lname" => "yadav" , "email" => "rani@gmail.com" , "mobile" => 838528247 , "gender" => "female"],
            ["fname" => "rohit" , "lname" => "Sharma" , "email" => "rohit@gmail.com" , "mobile" => 9685632418 , "gender" => "male"],
            ["fname" => "gopal" , "lname" => "mishra" , "email" => "gopal@gmail.com" , "mobile" => 7852347198 , "gender" => "male"],
            ["fname" => "shweta" , "lname" => "tripathi" , "email" => "shweta@gmail.com" , "mobile" => 8769543321 , "gender" => "female"],
            ["fname" => "madhu" , "lname" => "chaudhary" , "email" => "madhu@gmail.com" , "mobile" => 8765423917 , "gender" => "female"],
            ["fname" => "mohan" , "lname" => "Singh" , "email" => "mo@gmail.com" , "mobile" => 8765433917 , "gender" => "male"],
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
                    // check
                    
                    
                    $checkUserExist="SELECT * FROM array WHERE email='{$val['email']}' OR mobile='{$val['mobile']}'";
                    // echo $checkUserExist; die;
                        $checkData=mysqli_query($conn,$checkUserExist);

                        if(mysqli_num_rows($checkData) > 0) {
                            // User exists, so update their record
                            $sql = "UPDATE array 
                                    SET fname='{$val['fname']}', lname='{$val['lname']}', gender='{$val['gender']}'
                                    WHERE email='{$val['email']}' OR mobile='{$val['mobile']}'";
                            mysqli_query($conn, $sql);
                        }
                        else 
                        {
                            $sql = "INSERT INTO array (fname, lname, email, mobile, gender) VALUES ('{$val['fname']}', '{$val['lname']}', '{$val['email']}', '{$val['mobile']}', '{$val['gender']}')";
                            // echo $sql; die;
                            mysqli_query($conn,$sql);
                        }



                     
                       //echo $result;
                      ?>
                        <tr>
                            <td><?= $sn;?></td>
                            <td><?= ($val['fname'] != "") ? $val['fname'] : ('N/A'); ?></td>
                            <td><?= ($val['lname'] != "") ? $val['lname'] : ('N/A'); ?></td>
                            <td><?= ($val['email'] != "") ? $val['email'] : ('N/A'); ?></td>
                            <td><?= ($val['mobile'] != "") ? $val['mobile'] : ('N/A'); ?></td>
                            <td><?= ($val['gender'] != "") ? $val['gender'] : ('N/A'); ?></td>
                        </tr>
                    <?php $sn++; endforeach;?> 
                <?php else:?>
                    <tr>
                        <td colspan="5">No Data Found</td>
                    </tr>       
                <?php endif;?>     

            </table>
</body>
</html>