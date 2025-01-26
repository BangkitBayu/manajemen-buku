<?php
include "layouts/header.php";
?>

<main>
    <section id="form-container" class="d-md-flex flex-column justify-content-center align-items-center gap-3 p-4 mt-4 ">
        <h1 class=" fw-bold">Enter a Book</h1>
        <form action="index.php" method="" class="d-md-flex flex-column justify-content-center align-items-center gap-sm-2">
            <div class="input-grup">
                <label for="title" class="text-capitalize fw-bold">title</label> <br>
                <input class="py-2 pe-4 ps-3  rounded-1 border border-opacity-50" type="text" name="title" id="title" required placeholder="Enter the book title">
            </div>




        </form>

    </section>

    <section id="book-list-container">
        <table>
            <th>

            </th>
        </table>
    </section>
</main>

<?php
include "layouts/footer.php";
?>

<?php
include "service/config.php";
?>