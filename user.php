<?php include 'header.php' ?>
<!--   -->
<div class="py-12 h-screen">
    <div class="bg-blue-100 max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-md">
        <div class="md:flex">
            <div class="w-full p-2 py-10">
                <div class="flex justify-center">
                    <div class="relative">
                        <img src="https://www.pinclipart.com/picdir/big/164-1640714_user-symbol-interface-contact-phone-set-add-sign.png" class="rounded-full" width="100">
                    </div>
                </div>
                <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM customers WHERE id=$id";
                $users = $con->query($sql);
                $row = mysqli_fetch_assoc($users);
                ?>
                <div class="flex flex-col text-center mt-3 mb-4">
                    <span class="text-2xl font-medium"><?php echo $row['name']; ?></span>
                    <span class="text-md text-gray-400"><?php echo $row['email']; ?></span>
                </div>
                <div class="px-14 mt-5">
                    <button class="h-12 bg-white w-full text-black text-md rounded mb-2 cursor-default disabled">Balance: <?php echo $row['balance']; ?></button>
                    <form action="transfer.php?id=<?php echo $row['id']; ?>" method="POST">
                        <h2 class="flex justify-center font-bold text-xl m-2">Transaction</h2>
                        <div>
                            <select name="userId" class="block appearance-none focus:outline-none w-full bg-white px-4 py-2 pr-8 rounded my-2">
                                <option value="" default>Select a Customer</option>
                                <?php
                                $sql_1 = "SELECT * FROM customers WHERE id != $id";
                                $users_1 = $con->query($sql_1);
                                if(mysqli_num_rows($users_1) > 0) {
                                    while($row_1 = mysqli_fetch_assoc($users_1)) {
                                ?>
                                <option value="<?php echo $row_1['id']; ?>"><?php echo $row_1['name']; ?> [Balance: <?php echo $row_1['balance']; ?>]</option>
                                <?php } } ?>
                            </select>
                            <input name="userBalance" class="w-full mb-2" type="number" min="0" max="<?php echo $row['balance']; ?>" placeholder="Enter an amount, max: <?php echo $row['balance']; ?>" required>
                        </div>
                        <button type="submit" name="submit" class="h-12 bg-blue-500 hover:bg-blue-800 w-full text-white text-md rounded mb-2 cursor-default disabled">Transfer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<?php include 'footer.php' ?>