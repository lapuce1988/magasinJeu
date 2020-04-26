<div class="container mt-5">
    <h2 class='pt-3 text-center'>Ajouter un article</h2>
    <form action="index.php?url=valideFormAjoutProduct" method="post" class="col-md-6 offset-md-3 border border-primary p-3 rounded">
        <div class="row">
            <div class="col">
                <label for='name'> Nom : </label>
                <input type="text" class='form-control' id='name' placehoder='Saisir le nom' name='name'>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for='price'> Prix :  </label>
                <input type="number" class='form-control' id='price' placehoder='Saisir le prix' name='price' min="0" step="0.01">
            </div>
            <div class="col">
                <label for='vat'> TVA :  </label>
                <input type="number" class='form-control' id='vat' placehoder='Saisir la tva' name='vat' min="0">
            </div>
            <div class="col">
                <label for='quantity'> Quantité :  </label>
                <input type="number" class='form-control' id='quantity' placehoder='Saisir la quantité' name='quantity' min="0">
            </div>
        </div>
        <input type="hidden" id="pk" name="pk">
        <div class="row mt-3">
            <div class="col"> <a href="index.php?url=home" class='btn btn-warning btn-block'>Revenir à la liste</a> </div>
            <div class="col"><button type='submit' class='btn btn-success btn-block'> Ajouter </button> </div>
        </div>
    </form>
</div>