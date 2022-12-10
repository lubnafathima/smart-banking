<?php
include 'header.php';

$senderId = $_GET['id'];

if(isset($_POST['submit'])) {
    if(!empty($_POST['userId'] & $_POST['userBalance'])) { //getting receiver data
        $id = $_POST['userId']; //receiver id
        $bal = $_POST['userBalance']; //transferred amount

        // code to calculate new amount of receiver
        $select_bal = "SELECT * FROM customers WHERE id=$id";
        $curr_bal = $con->query($select_bal);
        $prev_bal = mysqli_fetch_assoc($curr_bal); //previous balance
        $new_bal_receiver = $prev_bal['balance'] + $bal; //new balance

        // code to update amount to receiver
        $add = "UPDATE `customers` SET balance='$new_bal_receiver' WHERE id='$id'";
        $update_bal = $con->query($add);

        // code to calculate new amount of sender
        $sender_data = "SELECT * FROM customers WHERE id=$senderId";
        $sender = $con->query($sender_data);
        $s_prev_bal = mysqli_fetch_assoc($sender); //previous balance
        $new_bal_s = $s_prev_bal['balance'] - $bal;

        // code to update amount to sender
        $add_s = "UPDATE `customers` SET balance='$new_bal_s' WHERE id='$senderId'";
        $update_bal_s = $con->query($add_s);

        // ADDING THE TRANSACTIONS TO TRANFERS TABLE
        $transfers = "INSERT INTO `transfers`(`sender`, `receiver`, `balance`) VALUES ('{$s_prev_bal['name']}','{$prev_bal['name']}',$bal)";
        $update_transfers = $con->query($transfers);

        echo"<script type='text/javascript'>alert('Transaction Successful');window.location.href='all_user.php';</script>";
    } else {
        echo"<script type='text/javascript'>alert('Invalid Data! Check your input and try again...');window.location.href='user.php?id=".$senderId."';</script>";
    }
}
?>