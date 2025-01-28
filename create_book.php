<?php
include "layouts/header.php";
include "service/config.php";

$db = $conn;
//fungsi untuk mengecek apakah judul buku  di tabel daftar buku sudah ada apa belum
function isTitleAvailable($db, $title)
{
    $sql = "SELECT title_book FROM daftar_buku WHERE title_book='$title'";
    $result = $db->query($sql);

    return ($result && $result->num_rows == 0);
}

$error = [];
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $date = $_POST['year'];
    $genre = $_POST['genre'];

    if ($title == "") {
        $error['title'] = "Title don't empty";
    }

    if ($author == "") {
        $error['author'] = "Author don't empty";
    }

    if ($date == "") {
        $error['year'] = "Year don't empty";
    }

    if ($genre == "") {
        $error['genre'] = "Genre don't empty";
    };

// echo "$title <br> $author <br> $date <br> $genre";
    if (!$error) {
        //cek duplikasi data
        if (isTitleAvailable($db, $title)) {
            //query untuk memasukkan data ke database
            $sql = "INSERT INTO daftar_buku (title_book , author_book , date_book , genre_book) VALUES ('$title' , '$author' , '$date' , '$genre')";

            
            //untuk  menyimpan data
            if ($db->query($sql)) {
                //jika berhasil
                echo "<script>alert('Data berhasil disimpan');</script>";
                echo "<meta http-equiv='refresh' content='0; url=index.php'>";
            } else {
                //jika gagal           
                echo "<script>alert('Data gagal disimpan');</script>";
                echo "<meta http-equiv='refresh' content='0; url=index.php'>";
            }
        }
    }
};
?>

<main>
    <section id="form-container" class="container py-5 d-md-flex flex-column justify-content-center align-items-center gap-2 p-4 mt-2 ">
        <h1 class=" fw-bold">Enter a Book</h1>
        <!-- Untuk validasi data -->
        <?php foreach ($error as $error) : ?>
            <div class="alert bg-danger" role="alert">
                <?= $error ?>
            </div>
        <?php endforeach; ?>
        <form method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control px-5 ps-3" id="title" name="title" placeholder="Enter a book title">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control px-5 ps-3" id="author" name="author" placeholder="Enter a book author">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Year</label>
                <input type="date" class="form-control px-5 ps-3" id="year" name="year" >
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control px-5 ps-3 " id="genre" name="genre" placeholder="Enter a book genre">
            </div>

            <button type="submit" class="btn btn-danger" name="submit">Submit</button>
        </form>
    </section>
</main>

<?php
include "layouts/footer.php";
?>