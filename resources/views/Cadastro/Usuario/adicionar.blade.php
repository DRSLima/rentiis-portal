@extends('layout.site')

@section('titulo', 'Cadastros')

@section('conteudo')
<div class="container">
    <h3 class="center">Adicionar Usuário</h3>
    <div class="row">
        <form class="col s12" action="{{ route('usuario.salvar') }}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">Nome</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">assignment_ind</i>
                    <input id="cpf" type="text" class="validate">
                    <label for="cpf">CPF</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="mail" type="text" class="validate">
                    <label for="mail">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="fone" type="text" class="validate">
                    <label for="fone">Telefone</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">face</i>
                    <input disabled value="nao editavel" id="disabled" type="text" class="validate">
                    <label for="disabled">Perfil</label>
                </div>
            </div>
            
        </form>
  </div>

    </div>
    
@endsection