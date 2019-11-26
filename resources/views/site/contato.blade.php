@extends('site.templete')

@section('conteudo')
    
    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-4">Contato</h1>
            <hr class="my-4">
            <p class="lead">Nossa Equipe esta sempre a disposição para lhe ajudar! Entre em contato e retornaremos o mais breve possivel.</p>
        </div>
    </div>

    <div class="container py-4">
        <form>
            <div class="form-group">
                <label for="exampleInputPassword1">Seu Nome</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Assunto</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Endereço de Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
            </div>
          
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
    </div>

@endsection