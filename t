  Untuk tampilkan pesan error  -->
        <?php foreach ($error as $error) : ?>
            <div class="alert bg-danger" role="alert">
                <?= $error ?>
            </div>
            <?php endforeach; ?>