<!-- Modal -->
<div id="details-{{ $key }}" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-md-11">
                  <h3 class="modal-title">Detalhes do candidato</h3>
                </div>
                <div class="col-md-1">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            </div>

            <div class="modal-body">
                <table class="table table-hover table-responsive">
                    <tr>
                        <td><b>Nome:</b></td>
                        <td>{{ $candidate->name }}</td>
                    </tr>
                    <tr>
                        <td><b>Email:</b></td>
                        <td>{{ $candidate->email}}</td>
                    </tr>
                    <tr>
                        <td><b>Telefone:</b></td>
                        <td>{{ $candidate->phone }}</td>
                    </tr>
                    <tr>
                        <td><b>Motivação:</b></td>
                        <td>{{ $candidate->motivation }}</td>
                    </tr>
                    <tr>
                        <td><b>Linkedin:</b></td>
                        <td>{{ $candidate->linkedin }}</td>
                    </tr>
                    <tr>
                        <td><b>Github:</b></td>
                        <td>{{ $candidate->github }}</td>
                    </tr>
                    <tr>
                        <td><b>Pretensão Salarial:</b></td>
                        <td>{{ $candidate->desired_salary }}</td>
                    </tr>
                    <tr>
                        <td><b>Nível Inglês:</b></td>
                        <td>{{ $candidate->english }}</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
              <a class="btn btn-primary" href="/curriculos/{{$candidate->id}}/status/analisado" onclick="return confirm('Tem certeza?');">
                  Analisado
              </a>
              <a class="btn btn-danger" href="/curriculos/{{$candidate->id}}/status/negado" onclick="return confirm('Tem certeza?');">
                  Negado
              </a>
              <a class="btn btn-success" href="/curriculos/{{$candidate->id}}/status/contratado" onclick="return confirm('Tem certeza?');">
                  Contratado
              </a>
            </div>
        </div>
    </div>
</div>
