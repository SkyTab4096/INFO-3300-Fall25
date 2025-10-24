<?php include '../view/header.php'; ?>
        <main>
            <section>
                <h1><?=$message?></h1>
                <table style="border: 1px solid black">
                    <tr>
                        <td>Title</td>
                        <td>Author</td>
                        <td>Checkout Date</td>
                        <td>Due Date</td>
                    </tr>
                    <tr>
                        <td><?=$book_info['title']?></td>
                        <td><?=$book_info['author']?></td>
                        <td><?=$book_info['checkout_date']?></td>
                        <td><?=$book_info['due_date']?></td>
                    </tr>
                </table>
            </section>
        </main>
<?php include '../view/footer.php'; ?>