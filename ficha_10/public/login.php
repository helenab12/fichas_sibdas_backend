<?php include '../private/includes/header.php'; ?> 
<!DOCTYPE html>
<html lang="en">

    <!-- Borda à volta do formulário -->
    <div class="card p-4">
        <div>
            <!-- Imagem do ginásio + texto -->
            <div class="d-flex align-items-center justify-content-center my-4">
                <img src="../private/assets/img/gym125.png" class="img-fluid me-3">
                <h2><strong> <?php echo APP_NAME; ?></strong></h2> 
            </div>
        </div>

        <div class="row">
            <div class="col">
                <!-- Formulário -->
                 <!-- mudar para post !!! -->
                <form action="../private/index.php" method="POST">
                    <div class="mb-3">
                        <!-- Utilizador -->
                        <label for="text_username" class="form-label">Utilizador</label>
                        <input type="email" name="text_username" id="text_username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <!-- Password -->
                        <label for="text_password" class="form-label">Password</label>
                        <input type="password" name="text_password" id="text_password" class="form-control">
                    </div>
                    <div class="mb-3 text center">
                        <!-- Submit -->
                        <button type="submit" class="btn btn-secondary px-4">
                            Entrar <i class="fa-solid fa-right-to-bracket ms-2"></i>
                        </button>
                    </div>
                    <div>
                        <!-- Erros -->
                        <div class="alert alert-danger p-2 text-center">
                            Erro: Utilizador não registado
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>