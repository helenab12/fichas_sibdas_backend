<?php include '../../includes/header.php'; ?>
<?php include '../../includes/nav.php'; ?>

<div class="container-fluid">
  <div class="row">

    <?php include '../../includes/sidebar.php'; ?>

    <!-- Conteúdo Principal -->
    <main class="col-md-9 col-lg-10 p-4">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-2">
          <strong><i class="fa-solid fa-tags"></i> Preçário Interativo</strong>
        </h2>
      </div>
      <hr>
      <p class="text-muted">Escolha o serviço e a frequência para ver o preço correspondente.</p>

      <!-- Seleção de Serviço -->
      <div class="home-row mb-4">
        <div class="home-option text-center" onclick="selecionarServico('PT')" style="cursor: pointer;">
          <h4 class="mb-1"><i class="fa-solid fa-user-doctor me-2"></i>Treino Pers. (PT)</h4>
          <p class="mb-0 text-muted"><small>Clique para escolher</small></p>
        </div>
        <div class="home-option text-center" onclick="selecionarServico('AG')" style="cursor: pointer;">
          <h4 class="mb-1"><i class="fa-solid fa-people-group me-2"></i>Aulas de Grupo (AG)</h4>
          <p class="mb-0 text-muted"><small>Clique para escolher</small></p>
        </div>
      </div>

      <!-- Opções PT -->
      <div id="opcoesPT" style="display:none;" class="mb-4">
        <h5 class="text-center mb-3">Selecione a frequência semanal do Treino Personalizado:</h5>
        <div class="home-row">
          <div class="home-option text-center d-flex flex-column justify-content-center align-items-center" onclick="mostrarPrecoPT(1)" style="cursor: pointer;">
            <h5>1 vez/semana</h5>
          </div>
          <div class="home-option text-center d-flex flex-column justify-content-center align-items-center" onclick="mostrarPrecoPT(2)" style="cursor: pointer;">
            <h5>2 vezes/semana</h5>
          </div>
          <div class="home-option text-center d-flex flex-column justify-content-center align-items-center" onclick="mostrarPrecoPT(3)" style="cursor: pointer;">
            <h5>3 vezes/semana</h5>
          </div>
          <div class="home-option text-center d-flex flex-column justify-content-center align-items-center" onclick="mostrarPrecoPT(4)" style="cursor: pointer;">
            <h5>4 vezes/semana</h5>
          </div>
        </div>
        <p id="resultadoPT" class="text-center mt-3 fs-5 fw-bold text-primary"></p>
      </div>

      <!-- Opções AG -->
      <div id="opcoesAG" style="display:none;" class="mb-4">
        <h5 class="text-center mb-3">Selecione a frequência semanal das Aulas de Grupo:</h5>
        <div class="home-row">
          <div class="home-option text-center d-flex flex-column justify-content-center align-items-center" onclick="mostrarPrecoAG(1)" style="cursor: pointer;">
            <h5>1 vez/semana</h5>
          </div>
          <div class="home-option text-center d-flex flex-column justify-content-center align-items-center" onclick="mostrarPrecoAG(2)" style="cursor: pointer;">
            <h5>2 vezes/semana</h5>
          </div>
          <div class="home-option text-center d-flex flex-column justify-content-center align-items-center" onclick="mostrarPrecoAG('Livre')" style="cursor: pointer;">
            <h5>Livre</h5>
          </div>
        </div>
        <p id="resultadoAG" class="text-center mt-3 fs-5 fw-bold text-success"></p>
      </div>
    </main>

  </div>
</div>

<?php include '../../includes/footer.php'; ?>
