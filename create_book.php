<?php
include "layouts/header.php";
?>

<main>

    <?php
    include "service/config.php";
    ?>

    <section id="form-container" class="container py-5 d-md-flex flex-column justify-content-center align-items-center gap-2 p-4 mt-2 ">
        <h1 class=" fw-bold">Enter a Book</h1>
        <form method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control px-5 ps-3" id="title" required placeholder="Enter a book title">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control px-5 ps-3" id="author" required placeholder="Enter a book author">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Year</label>
                <input type="date" class="form-control px-5 ps-3" id="year" required>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control px-5 ps-3 " id="genre" required placeholder="Enter a book genre">
            </div>

            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </section>
</main>

<?php
include "layouts/footer.php";
?>