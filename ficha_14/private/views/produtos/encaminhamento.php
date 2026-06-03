<?php include '../../includes/header.php'; ?>
<?php include '../../includes/nav.php'; ?>

<div class="container-fluid">
  <div class="row">

    <?php include '../../includes/sidebar.php'; ?>

    <!-- Conteúdo Principal -->
    <main class="col-md-9 col-lg-10 p-4">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-2">
          <strong><i class="fa-solid fa-dumbbell"></i> Avaliação de Condições de Saúde</strong>
        </h2>
      </div>
      <hr>
      <p class="text-muted">Utilize este formulário para selecionar as condições de saúde relevantes do cliente. As informações escolhidas irão gerar uma recomendação personalizada para o plano de treino.</p>

      <div class="card shadow rounded mb-4" style="max-width: 600px;">
        <div class="card-body">
          <h4 class="card-title mb-4"><strong>Triagem de Saúde</strong></h4>
          <form oninput="avaliarCondicoes()">
            <div class="mb-4">
              <label class="form-label d-block fw-bold mb-3">Selecione todas as condições aplicáveis:</label>
              
              <div class="form-check mb-2">
                <input type="checkbox" id="temProblemasCostas" name="condicao" class="form-check-input">
                <label class="form-check-label fw-normal" for="temProblemasCostas">Problemas de costas</label>
              </div>
              
              <div class="form-check mb-2">
                <input type="checkbox" id="estaGravida" name="condicao" class="form-check-input">
                <label class="form-check-label fw-normal" for="estaGravida">Grávida</label>
              </div>
              
              <div class="form-check mb-3">
                <input type="checkbox" id="temDiabetes" name="condicao" class="form-check-input">
                <label class="form-check-label fw-normal" for="temDiabetes">Diabético/a</label>
              </div>
            </div>

            <div class="mb-2">
              <label class="form-label d-block fw-bold">Recomendação:</label>
              <div id="mensagem" class="alert text-center">Sem restrições. Pode iniciar o plano de treino geral.</div>
            </div>
          </form>
        </div>
      </div>
    </main>

  </div>
</div>

<?php include '../../includes/footer.php'; ?>