<?php if($details):?>
 <?php $sn=1; foreach($details as $key => $val):
                    // check
                            
                    $checkUserExist="SELECT * FROM array WHERE email='{$val['email']}' OR mobile='{$val['mobile']}'";
                    // echo $checkUserExist; die;
                        $checkData=mysqli_query($conn,$checkUserExist);
                        if(mysqli_num_rows($checkData) > 0)
                        {
                            // $_SESSION['errMsg']='User Already Exist';
                            // header("Location: $redirectPageUrl");
                            echo "User Already Exist";
                        }else{
                            $sql = "INSERT INTO array (fname, lname, email, mobile, gender) VALUES ('{$val['fname']}', '{$val['lname']}', '{$val['email']}', '{$val['mobile']}', '{$val['gender']}')";
                            // echo $sql; die;
                        $result = mysqli_query($conn,$sql);
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






                if(empty($val['fname'])){
                        echo "some data is empty";
                        exit;
                    }