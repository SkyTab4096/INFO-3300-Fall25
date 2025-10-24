<?php include '../view/header.php'; ?>
        <main>
            <section>
                <h1>Available Books</h1>
                <table style="border: 1px solid black">
                    <tr>
                        <td>Title</td>
                            <td>Author</td>
                            <td>Action</td>
                        </tr>
                        <?php foreach ($books as $book) :?>
                            <tr>
                                <td><?=$book['title']?></td>
                                <td><?=$book['authors']?></td>
                                <td><?=$book['action']?></td>
                            </tr>
                        <?php endforeach ?>
                    </tr>
                </table>
            </section>
        </main>
<?php include '../view/footer.php'; ?>