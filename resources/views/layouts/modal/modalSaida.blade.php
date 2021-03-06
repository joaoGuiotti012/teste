<!-- Modal -->
<div class="modal fade" id="saida{{$ls->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Saida</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Deseja realmente Confirmar a saida ?
        </div>
        <div class="modal-footer">
          <form action="{{ route('agendamento.saida' , $ls->id ) }}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-success btn-sm">Sim</button>
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Não</button>
          </form>
        </div>
      </div>
    </div>
  </div>
