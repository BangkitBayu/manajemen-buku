document.addEventListener('DOMContentLoaded', () => {
    let bookId = null;
    bookId = this.getAttribute("data-id");
    console.log(bookId)


    document.getElementById('confirmDelete').addEventListener("click", () => {
        if (bookId) {
            fetch("delete_book.php?id=" + bookId, {
                method: "DELETE"
            })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                    location.reload(); // Refresh halaman setelah penghapusan
                })
                .catch(error => console.error("Error:", error));
        }
    });
});

