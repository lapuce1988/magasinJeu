<div class="container mt-5">

    <div class="row pt-3">
        <div class="col-9">
            <h2>Liste des utilisateurs</h2>
        </div>
        <div class="col-3"><a href="index.php?url=addUser" class='btn btn-success'><i class="fas fa-plus-circle"></i> Créer un utilisateur</a> </div>
    </div>
    <form id="formSearch" action="index.php?url=pk-search-user" method="POST" class="border border-primary rounded p-3 mt-3 mb-3">
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
            <th scope="col" class="col-md-6">Utilisateur</th>
            <th scope="col" class="col-md-2">Date de création</th>
            <th scope="col" class="col-md-2">Date de modification</th>
            <th scope="col" class="col-md-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($users as $user) : ?>
            <tr class='d-flex'>
                <td class='col-md-6'><?= $user->__get('username'); ?> </td>
                <td class='col-md-2'><?= $user->__get('created_ad'); ?> </td>
                <td class='col-md-2'><?= $user->__get('update_at'); ?> </td>
                <td class='col-md-2'>
                    <a href="index.php?url=updateUser&pk=<?= $user->__get('pk'); ?>" name="pk" class="btn btn-primary"><i class='fas fa-pen'></i></a>
                    <a href="index.php?url=deleteUser&pk=<?= $user->__get('pk'); ?>" name="pk" class='btn btn-danger' onclick="return confirm('Etes-vous sur de vouloir supprimer ?')"><i class='far fa-trash-alt'></i></a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

</div>

<div class="modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>