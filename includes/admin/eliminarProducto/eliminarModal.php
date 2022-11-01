<!-- Modal -->
<div class="modal fade" id="modalEdliminarMoto" tabindex="-1" aria-labelledby="modalEliminaMoto" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalEliminaMoto">Eliminar Moto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Desea Eliminar la Moto?
      </div>
      <div class="modal-footer">
        <form action="admin.php" method="post">
          <input type="hidden" name="id" id="id">
          <div class="mt-2">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" name="btnEditarMoto" class="btn btn-danger"><i class="bi bi-trash-fill"></i> Eliminar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>