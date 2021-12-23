<?php require_once 'controllers/loginController.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="main my-5">
    <h2>Connexion</h2>
    <div class="row">
        <div class="col-7 ms-auto me-auto shadow">
            <div class="row">
                <div class="col p-0">
                    <img src="assets/img/running.jpg" alt="Image illustration" class="h-100 w-100" />
                </div>
                <div class="col p-5">
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="mail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="mail" name="mail" placeholder="jean.dupon@mail.fr" />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="**************" />
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-dark" value="Connexion" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>