@extends('layouts.admintemplate')

@section('content')

<div class="page-content container col-7">
    <div class="panel" style="height: 107%;">
      <div class="panel-body container-fluid  " style="background-color: white;">
        <div class="row row-lg">
          <div class="col-md-11 mx-auto">
            <!-- Example Basic Form (Form grid) -->
            <div class="example-wrap">
              <div class="example ">
              <h3 class="example-title">Alterar Senha</h3>

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @elseif(session('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
              <form method="POST" action="{{url('user/updatePassword')}}" autocomplete="off" class="ml-25">

                    @csrf
                    @method('PUT')
                  <div class="form-group">
                    <label class="form-control-label mb-0" for="inputBasicPassword">Senha Atual</label>
                    <input type="password" class="form-control" id="inputBasicPassword" name="currentPassword" placeholder="Password" autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label class="form-control-label mb-0" for="inputBasicPassword">Nova Senha</label>
                    <input type="password" class="form-control" id="inputBasicPassword" name="newPassword" placeholder="Password" autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label class="form-control-label mb-0" for="inputBasicPassword">Repita a senha</label>
                    <input type="password" class="form-control" id="inputBasicPassword" name="confirmPassword" placeholder="Password" autocomplete="off">
                  </div>

                  <div class="form-group text-right">
                    <button type="submit" style="text-align: right;" class="btn btn-primary">Salvar</button>
                  </div>
                </form>

                <h3 class="example-title">Deletar Conta</h3>
                  <div class=" justify-content-between align-items-center">
                    <label class="text-muted ml-25">Ao excluir a conta, todos os seus dados armazenados serão excluídos. Esta ação é irreversível uma vez feita.</label>
                    <div class="text-right">
                        <button class="btn btn-sm btn-danger"  type="button" id="inputStylePrimary" name="colorChosen" data-target="#modal_delete_account" data-toggle="modal">
                            <i class="fas fa-trash-alt " style="font-size: 16px;" aria-hidden="true"></i> Deletar
                        </button>
                    </div>
                  </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  @endsection
