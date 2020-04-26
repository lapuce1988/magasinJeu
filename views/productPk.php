<div class="container mt-5">

    <div class="row pt-3">
        <div class="col-9">
            <h2>Produit recherché</h2>
        </div>
        <div class="col-3"><a href="index.php?uc=continents&action=add" class='btn btn-success'><i class="fas fa-plus-circle"></i> Créer un produit</a> </div>
    </div>
    <form id="formSearch" action="index.php?url=pk-search" method="POST" class="border border-primary rounded p-3 mt-3 mb-3">
        <div class="row">
            <div class="col">
                <input type="number" class="form-control block" id="pk" placeholder="Saisir l'id" name="pk">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success btn-block">Rechercher</button>
            </div>
        </div>
    </form>
    <table class="table table-hover table-striped">
        <thead>
        <tr class="d-flex">
            <th scope="col" class="col-md-6">Nom</th>
            <th scope="col" class="col-md-2">Prix</th>
            <th scope="col" class="col-md-2">Quantité</th>
            <th scope="col" class="col-md-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr class='d-flex'>
            <td class='col-md-6'><?= $product->__get('name'); ?> </td>
            <td class='col-md-2'><?= $product->__get('price'); ?> </td>
            <td class='col-md-2'><?= $product->__get('quantity'); ?> </td>
            <td class='col-md-2'>
                <a href="index.php?url=updateProduct&pk=<?= $product->__get('pk'); ?>" name="pk" class="btn btn-primary"><i class='fas fa-pen'></i></a>
                <a href="index.php?url=deleteProduct&pk=<?= $product->__get('pk'); ?>" name="pk" class='btn btn-danger' onclick="return confirm('Etes-vous sur de vouloir supprimer ?')"><i class='far fa-trash-alt'></i></a>
            </td>
        </tr>

        </tbody>
    </table>

</div>