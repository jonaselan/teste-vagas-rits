<!-- Modal -->
<div id="candidates-{{ $key }}" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-md-11">
                  <h3 class="modal-title">Candidatos</h3>
                </div>
                <div class="col-md-1">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            </div>

            <div class="modal-body">
              <table class="table table-striped table-bordered table-hover">
                  <tr>
                      <th>Candidato</th>
                      <th>Currículo</th>
                  </tr>
                  @foreach($vacancy->candidates as $c)
                      <tr>
                          <td>{{ $c->name }} </td>
                          <td>LINK PARA CURRICULO: {{ $c->curriculum }} </td>
                      </tr>
                  @endforeach
              </table>

            </div>
        </div>
    </div>
</div>
