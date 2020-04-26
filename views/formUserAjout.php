<div class="container mt-5">
    <h2 class='pt-3 text-center'>Ajouter un utilisateur</h2>
    <form action="index.php?url=valideFormAjoutUser" method="post" class="col-md-6 offset-md-3 border border-primary p-3 rounded">
        <div class="row">
            <div class="col">
                <label for='username'> Nom utilisateur : </label>
                <input type="text" class='form-control' id='username' placehoder='Saisir le nom' name='username'>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for='password'> Password :  </label>
                <input type="password" class='form-control' placehoder='Saisir le mot de passe' name='password'>
            </div>
        </div>
        <input type="hidden" id="pk" name="pk">
        <div class="row mt-3">
            <div class="col"> <a href="index.php?url=home" class='btn btn-warning btn-block'>Revenir à la liste</a> </div>
            <div class="col"><button type='submit' class='btn btn-success btn-block'> Ajouter </button> </div>
        </div>
    </form>
</div>