<?php include '../view/header.php'; ?>
        <main>
            <section>
                <h1>All Users</h1>
                <table>
                    <tr><td>First Name</td><td>Last Name</td><td>Email</td><td>Action</td></tr>
                    <?php foreach ($users as $user) :?>
                        <tr>
                            <td><?=$user['firstName']?></td>
                            <td><?=$user['lastName']?></td>
                            <td><?=$user['email']?></td>
                            <td>Books Checked Out</td>
                            <td><a href='../checkouts/index.php?action=checked_out_by_user&user_id=<?=$user['userId']?>'>Books Checked Out</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </section>
        </main>
<?php include '../view/footer.php'; ?>