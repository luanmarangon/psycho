document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("newCategory").addEventListener("click", function (event) {
        event.preventDefault();

        if (this.textContent.trim() === 'Novo') {
            //Remove a d-none da class do iput categorieNew.
            var input = document.querySelector('input[name="categorieNew"]');
            input.classList.remove("d-none");

            var select = document.querySelector('select[name="categorie"]');
            select.classList.add("d-none");

            select.value = null;

            this.textContent = 'Pesquisar';
        } else {
            //Remove a d-none da class do select categorie.
            var select = document.querySelector('select[name="categorie"]');
            select.classList.remove("d-none");

            var input = document.querySelector('input[name="categorieNew"]');
            input.classList.add("d-none");

            input.value = null;

            this.textContent = 'Novo';
        }
    });
});
