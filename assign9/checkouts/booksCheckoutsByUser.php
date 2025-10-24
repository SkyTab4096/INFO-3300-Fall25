<?php include '../view/header.php'; ?>
        <main>
            <section>
                <h1>Books currently checked out by <?=$user['firstName']?></h1>
                <table style="border: 1px solid black">
                    <tr>
                        <td>Title</td>
                        <td>Author</td>
                        <td>Checkout Date</td>
                        <td>Due Date</td>
                    </tr>
                    <?php foreach ($books as $book):?>
                        <tr>
                            <td><?=$book['title']?></td>
                            <td><?=$book['authors']?></td>
                            <td><?=$book['checkout_date']?></td>
                            <td><?=$book['due_date']?></td>
                        </tr>
                    <?php endforeach;?>
                </table>
            </section>
        </main>
<?php include '../view/footer.php'; ?>