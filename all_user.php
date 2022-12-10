<?php include 'header.php' ?>

<div class="container py-5 px-20">
    <h5 class="md:text-3xl bg-sky-100 font-bold text-center p-6">Transactions are now made easy!</h5>
    <section class="overflow-hidden text-gray-700 pt-6">
        <div class="container flex flex-wrap mx-auto content-center">
            <?php
            $sql = "SELECT * FROM customers";
            $users = $con->query($sql);
            if(mysqli_num_rows($users) > 0) {
                while($row = mysqli_fetch_assoc($users)) {
            ?>
            <div class="p-2 rounded xl:w-1/4 lg:w-1/3 md:w-1/2 sm:w-1/1">
                <div class="block max-w-sm p-6 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-sky-500">
                    <h5 class="mb-2 text-xl font-bold tracking-tight"><?php echo $row['name']; ?></h5>
                    <p class="font-normal"><?php echo $row['email']; ?></p>
                    <h6 class="mb-2 font-bold tracking-tight pb-3">Balance: <span><?php echo $row['balance']; ?></span></h6>
                    <a href="user.php?id=<?php echo $row['id']; ?>" class="px-6 py-2 rounded text-white bg-sky-500 hover:bg-sky-700">Transfer</a>
                </div>
            </div>
            <?php
            }
            }
            ?>
        </div>
    </section>
</div>
<?php include 'footer.php' ?>