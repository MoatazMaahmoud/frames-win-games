<?php

require_once 'connect.php';
session_start();
if(isset($_GET['item-monitor-buy-now'])) {
    if(isset($_SESSION['username'])){
        $quantity= $_GET['item-1-quantity'];
    $query='select quantity from product where product_id=4';
    $udpate_query='update product
                    set quantity=quantity-'.$quantity.' where product_id=4';
    $result=mysqli_query($conn,$query);
    $avaliable_quant=mysqli_fetch_assoc($result);
    $price_query='select price from product where product_id=4 ';
    $price_res=mysqli_query($conn,$price_query);
    $price=mysqli_fetch_assoc($price_res);

    if($avaliable_quant['quantity']-$quantity>=0){                
    if(mysqli_query($conn,$udpate_query)){
        echo 'bought succefully';
                echo '<div><a href="../profile.php"><button type="button" class="" style="color:green">My profile</button></a></div>';
        $totalcost=$price['price']*$quantity;
        $insert_query="INSERT INTO orders(username,quantity,totalcost,product_id) 
        VALUES ('".$_SESSION['username']."','$quantity','$totalcost','4') ";
        mysqli_query($conn,$insert_query);
    }
    }else{
        echo 'Insuffcient stock';
    }
    }
else{
    header("Location:../login.php");
}
}

if(isset($_GET['item-lenovo-buy-now'])) {
    if(isset($_SESSION['username'])){
        $quantity= $_GET['item-1-quantity'];
        $query='select quantity from product where product_id=1';
        $udpate_query='update product
                        set quantity=quantity-'.$quantity.' where product_id=1';
        $result=mysqli_query($conn,$query);
        $avaliable_quant=mysqli_fetch_assoc($result);
        $price_query='select price from product where product_id=1 ';
       $price_res=mysqli_query($conn,$price_query);
       $price=mysqli_fetch_assoc($price_res);
        if($avaliable_quant['quantity']-$quantity>=0){                
        if(mysqli_query($conn,$udpate_query)){
            echo 'bought succefully';
                echo '<div><a href="../profile.php"><button type="button" class="" style="color:green">My profile</button></a></div>';
        $totalcost=$price['price']*$quantity;
            $totalcost=$price['price']*$quantity;
           $insert_query="INSERT INTO orders(username,quantity,totalcost,product_id) 
           VALUES ('".$_SESSION['username']."','$quantity','$totalcost','1') ";
           mysqli_query($conn,$insert_query);
        }
        }else{
            echo 'Insuffcient stock';
        }
    }
    else{
        header("Location:../login.php");
    }
   
 }
 if(isset($_GET['item-hpCase-buy-now'])  ) {
    if(isset($_SESSION['username'])){
        $quantity= $_GET['item-1-quantity'];
        $query='select quantity from product where product_id=7';
        $udpate_query='update product
                        set quantity=quantity-'.$quantity.' where product_id=7';
        $result=mysqli_query($conn,$query);
        $avaliable_quant=mysqli_fetch_assoc($result);
        $price_query='select price from product where product_id=7';
        $price_res=mysqli_query($conn,$price_query);
        $price=mysqli_fetch_assoc($price_res);
        if($avaliable_quant['quantity']-$quantity>=0){                
        if(mysqli_query($conn,$udpate_query)){
            echo 'bought succefully';
            echo '<div><a href="../profile.php"><button type="button" class="" style="color:green">My profile</button></a></div>';
    $totalcost=$price['price']*$quantity;
            $totalcost=$price['price']*$quantity;
           $insert_query="INSERT INTO orders(username,quantity,totalcost,product_id) 
           VALUES ('".$_SESSION['username']."','$quantity','$totalcost','7') ";
           mysqli_query($conn,$insert_query);
        }
        }else{
            echo 'Insuffcient stock';
        }
    }
    else{
        header("Location:../login.php");
    }
   
   
 }


?>