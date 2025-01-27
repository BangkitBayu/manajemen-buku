  <form action="index.php" method="" class="d-md-flex flex-column justify-content-center align-items-center gap-sm-4">
            <div class="input-grup">
                <label for="title" class="text-capitalize fw-bold">title</label> <br>
                <input class="form-control py-2 pe-4 ps-3 rounded-1 border border-opacity-50" type="text" name="title" id="title" required placeholder="Enter the book title">
            </div>

            <div class="input-grup">
                <label for="author" class="text-capitalize fw-bold">author</label> <br>
                <input class="py-2 pe-4 ps-3 rounded-1 border border-opacity-50" type="text" name="author" id="author" required placeholder="Enter the book author">
            </div>

            <div class="input-grup">
                <label for="year" class="text-capitalize fw-bold">year</label> <br>
                <input class="py-2 pe-4 ps-3 rounded-1 border border-opacity-50" type="date" name="author" id="year" required>
            </div>

            <div class="input-grup">
                <label for="genre" class="text-capitalize fw-bold">genre</label> <br>
                <input class="py-2 pe-4 ps-3 rounded-1 border border-opacity-50" type="text" name="author" id="author" required placeholder="Enter the book genre">
            </div>

            <div class="input-grup">
                <input name="submit" id="submit" class="btn btn-danger px-5" type="button" value="Submit">
            </div>

        </form>