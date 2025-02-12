<?php
include "layouts/header.php";
include "service/config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    print "$id";
    $sql = "SELECT * FROM daftar_buku WHERE id='$id'";
    $bookId = mysqli_query($db, $sql);
    $result =  mysqli_fetch_assoc($bookId);
    // var_dump($result);
};

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $date = $_POST['year'];
    $genre = $_POST['genre'];

    $sql = "UPDATE daftar_buku SET title_book = '$title' , author_book = '$author' , date_book = '$date' , genre_book = '$genre' WHERE id='$id'";

    if (empty($title) || empty($author) || empty($date) || empty($genre)) {
        echo "<script>alert('Data gagal disimpan');</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else  {
        $db->query($sql);
        echo "<script>alert('Data berhasil disimpan');</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    };
}
?>

<main>
    <section id="form-container" class="container py-5 d-md-flex flex-column justify-content-center align-items-center gap-2 p-4 mt-2 ">
        <h1 class=" fw-bold">Ubah Data Buku</h1>
        <form method="post">
            <div class="mb-3">
                <label for="title" class="form-label fw-bold">Title</label>
                <input type="text" class="form-control px-5 ps-3" id="title" name="title" placeholder="Enter a book title" value="<?= trim($result['title_book'])?>">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label fw-bold">Author</label>
                <input type="text" class="form-control px-5 ps-3" id="author" name="author" placeholder="Enter a book author" value="<?= trim($result['author_book'])?>">
            </div>
            <div class="mb-3">
                <label for="date" class="form- fw-bold">Year</label>
                <input type="date" class="form-control px-5 ps-3" id="year" name="year" <?php echo $result['date_book']  ?>>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label fw-bold">Genre</label>
                <input type="text" class="form-control px-5 ps-3 " id="genre" name="genre" placeholder="Enter a book genre" value='<?= $result['genre_book']?>'>
            </div>
            <input type="hidden" name="id" value="<?= $result['id'] ?>">
            <button type="submit" class="btn btn-danger" name="edit">Submit</button>
        </form>
    </section>
</main>

<?php
include "layouts/footer.php";
?>