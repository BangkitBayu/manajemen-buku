<?php
include "layouts/header.php";
include "./service/config.php";

if (isset($_GET['id'])) {
    $bookId = $_GET['id'];

    $sql = "SELECT * FROM daftar_buku WHERE id='$bookId'";
    $fetch = mysqli_query($db, $sql);
    $bookData = mysqli_fetch_assoc($fetch);
}
?>

<main>
    <section class="d-flex align-items-center flex-column p-3 m-4 gap-2">
        <h1 class="f-3 fw-bold">Mau hapus buku ini?</h1>
        <div class="description-book">
            <p>Judul buku: <span class=""><?= $bookData['title_book'] ?></span></p>
            <p>Penulis buku: <span><?= $bookData['author_book'] ?></span></p>
            <p>Tanggal buku: <span><?= $bookData['date_book'] ?></span></p>
            <p>Genre buku: <span><?= $bookData['genre_book'] ?></span></p>
        </div>

        <form method="post">
            <button type="submit" name="hapus" class="btn btn-danger">
                Hapus
                <?php if (isset($_GET['id'])) {
                    $bookId = $_GET['id'];

                    if (isset($_POST['hapus'])) {
                        $sql = "DELETE FROM daftar_buku WHERE id='$bookId'";
                        if (mysqli_query($db, $sql)) {
                            echo "<script>alert('Buku berhasil dihapus');</script>";
                            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
                        } else {
                            echo "<script>alert('Buku gagal dihapus');</script>";
                            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
                        }
                    }
                }
                ?>
            </button>
        </form>
    </section>
</main>



<?php include "layouts/footer.php"; ?>