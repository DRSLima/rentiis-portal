@extends('layout.site')

@section('titulo', 'Cadastros')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Usuários</h3>
        <table class="highlight responsive-table">
        <thead>
          <tr>
              <th>Foto</th>
              <th>Nome</th>
              <th>CPF</th>
              <th>Email</th>
              <th>Telefone</th>
              <th>Perfil</th>
              <th>Ação</th>
          </tr>
        </thead>

        <tbody>
            @foreach($registros as $registro)
            <tr>
                <td><img width="120s" src="{{ asset('$registro->imagem') }}" alt="{{ $registro->nome }}"></td>
                <td>{{ $registro->nome }}</td>
                <td>{{ $registro->cpf }}</td>
                <td>{{ $registro->Email }}</td>
                <td>{{ $registro->Telefone }}</td>
                <td>{{ $registro->Perfil }}</td>
                <td>
                    <a class="btn deep-orange" href="{{ route('usuario.editar', $regsitro->id) }}">Editar</a>
                    <a class="btn red" href="{{ route('usuario.deleter', $regsitro->id) }}">Deleter</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <br>
      <div class="row">
        <a class="btn blue" href="{{ route('usuario.adicionar') }}">Adicionar</a>
      </div>
    </div>
    
@endsection