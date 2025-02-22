<?php
include "layouts/header.php";
include "service/config.php";

function getAllBooks($db)  //Untuk mengambil semua data buku pADA DATABASE
{
    $sql = "SELECT * FROM daftar_buku";
    $result = mysqli_query($db, $sql);
    if ($result->num_rows > 0) {
        return $result->fetch_all(true);
    }
    // echo "Data tidak ditemukan";
    // $result = mysqli_query($db, $sql);
}
?>

<main class="d-flex justify-content-center align-items-center flex-column">
    <section class="container py-3 d-flex  justify-content-center align-items-center gap-2 p-4 mt-2 ">
        <div class="input-group d-flex justify-content-center align-items-baseline">
            <div class="form-outline" style="width: 50%" data-mdb-input-init>
                <input class="form-control " type="search" name="searchBook" id="searchBook" placeholder="Masukkan 'Judul Buku' disini untuk mencari">
            </div>
            <button type="submit" class="btn btn-danger" name="searchBook" data-mdb-ripple-init>
                <i class="bx bx-search-alt-2"></i>
            </button>
        </div>
    </section>
    <section class="table-responsive-lg container-fluid px-4 text-center">
        <table class="table table-striped table-hover table-light table-bordered align-bottom">
            <thead class="table-danger">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Year</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php if (getAllBooks($db)) : ?>
                    <?php foreach (getAllBooks($db) as $book) : ?>
                        <tr>
                            <td><?= $book['id'] ?></td>
                            <td><?= $book['title_book'] ?></td>
                            <td><?= $book['author_book'] ?></td>
                            <td><?= $book['date_book'] ?></td>
                            <td><?= $book['genre_book'] ?></td>
                            <td>
                                <a href="update_book.php?id=<?= $book['id'] ?>" class="btn btn-success">
                                    <i class="bx bx-edit fs-5"></i>
                                </a>
                            </td>

                            <td>
                                <a href="delete_book.php?id=<?= $book['id'] ?>" class="btn btn-danger">
                                    <i class="bx bx-trash fs-5"></i>
                                </a>
                            </td>

                            
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td class="h3 text-capitalize text-danger">Buku masih kosong!</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </section>
</main>
<script src="./public/script/main.js"></script>

<?php
include "layouts/footer.php";
?>