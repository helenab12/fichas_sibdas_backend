<?php include '../../includes/header.php'; ?>
<?php include '../../includes/nav.php'; ?>

<div class="container-fluid">
  <div class="row">

    <?php include '../../includes/sidebar.php'; ?>

    <!-- Conteúdo Principal -->
    <main class="col-md-9 col-lg-10 p-4">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-2" onmouseover="console.log('Bem-vindo ao Cálculo de IMC do ISEP')">
          <strong><i class="fa-solid fa-heart-pulse"></i> Cálculo de IMC</strong>
        </h2>
      </div>
      <hr>
      <p class="text-muted">Esta funcionalidade permite calcular o Índice de Massa Corporal (IMC), uma medida utilizada para avaliar se o peso de uma pessoa está adequado à sua altura.</p>

      <div class="card shadow rounded mb-4" style="max-width: 600px;">
        <div class="card-body">
          <h4 class="card-title mb-4"><strong><i class="fa-solid fa-calculator me-2"></i>Calculadora de IMC</strong></h4>
          <form>
            <div class="mb-3">
              <label for="peso" class="form-label">Peso (kg):</label>
              <input type="number" step="0.1" id="peso" name="peso" class="form-control" placeholder="Ex: 70">
            </div>
            <div class="mb-3">
              <label for="altura" class="form-label">Altura (m):</label>
              <input type="number" step="0.01" id="altura" name="altura" class="form-control" placeholder="Ex: 1.75">
            </div>
            <div class="mb-4">
              <label class="form-label d-block fw-bold">Resultado:</label>
              <div class="p-3 bg-light border rounded">
                <span id="indicadorIMC" class="text-muted">Os resultados aparecerão aqui após clicar em Calcular.</span>
              </div>
            </div>
            <button type="button" class="btn btn-primary w-100" onclick="atualizarIndicadorIMC()">Calcular IMC</button>
          </form>
        </div>
      </div>
    </main>

  </div>
</div>

<script>
  console.log("Engenharia Biomédica");
</script>

<?php include '../../includes/footer.php'; ?>