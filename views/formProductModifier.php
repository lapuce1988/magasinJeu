<div class="container mt-5">
    <h2 class='pt-3 text-center'>Modifier un article</h2>
    <form action="index.php?url=validerFormModif" method="post" class="col-md-6 offset-md-3 border border-primary p-3 rounded">
        <input type="hidden" name="type" id="test" value="update">
        <div class="row">
            <div class="col">
                <label for='name'> Nom : </label>
                <input type="text" class='form-control' id='name' name='name' value="<?= $product->__get('name'); ?>" >
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for='price'> Prix :  </label>
                <input type="number" class='form-control' id='price' name='price' value="<?= $product->__get('price'); ?>">
            </div>
            <div class="col">
                <label for='vat'> TVA :  </label>
                <input type="number" class='form-control' min="0" max="100" step="1" id='vat' name='vat' value="<?= $product->__get('vat'); ?>">
            </div>
            <div class="col">
                <label for='quantity'> Quantité :  </label>
                <input type="number" class='form-control' id='quantity' name='quantity' value="<?= $product->__get('quantity'); ?>">
            </div>
        </div>
        <input type="hidden" id="price_vat" name="price_vat" value="0">
        <input type="hidden" id="price_total" name="price_total" value="0">
        <input type="hidden" id="pk" name="pk" value="<?= $product->__get('pk');  ?>">
        <div class="row mt-3">
            <div class="col"> <a href="index.php?url=home" class='btn btn-warning btn-block'>Revenir à la liste</a> </div>
            <div class="col"><button type='submit' class='btn btn-success btn-block' id="update" name="update"> Modifier </button> </div>
        </div>
    </form>
</div>