  Untuk tampilkan pesan error  -->
        <?php foreach ($error as $error) : ?>
            <div class="alert bg-danger" role="alert">
                <?= $error ?>
            </div>
            <?php endforeach; ?>

            <?php
include "./service/config.php";
include "layouts/header.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM daftar_buku WHERE id='$id'";
    $bookId = mysqli_query($db, $sql);
    $result =  mysqli_fetch_assoc($bookId);
    // var_dump($result);


    if (!empty($_POST)) {
        $id = $_POST['id'];
        $sql = "DELETE FROM daftar_buku WHERE id='$id'";

        if (mysqli_query($db, $sql)) {
            echo "<script>alert('Data Berhasil Dihapus')</script>";
        } else {
            echo "<script>alert('Data Gagal Dihapus')</script>";
        };
    };
};
?>


<main>
    <section class="p-3 d-flex justify-content-center align-items-center flex-column">
<h2 class="h-1">Mau Hapus Buku Ini dari Koleksi?</h2>
    </section>
</main>

<?php
include "layouts/footer.php";
?>

 <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id=<?= $book['id'] ?>>
                                    <i class="bx bx-trash fs-5"></i>
                                </button>

                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Mau Hapus Buku dari Koleksi?</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body  d-flex flex-column justify-content-center align-items-start">
                                                <p>Judul: <?= $book['title_book']; ?></p>
                                                <p>Penulis: <?= $book['author_book']; ?></p>
                                                <p>Tanggal: <?= $book['date_book']; ?></p>
                                                <p>Genre: <?= $book['genre_book']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-primary" id="confirmDelete" >Ok</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                // if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
// parse_str(file_get_contents("php://input"), $_DELETE);

// if (isset($_GET['id'])) {
// $id = $_GET['id'];
// $sql = "DELETE FROM daftar_buku WHERE id='$id'";

// if (mysqli_query($db, $sql)) {
// json_encode(['Succes' => true, "Message" => "Data berhasil dihapus"]);
// } else {
// json_encode(['Succes' => false, "Message" => "Data gagal dihapus!"]);
// }
// } else {
// json_encode(['Succes' => false, "Message" => "ID Tidak Ditemukan"]);
// };
// }