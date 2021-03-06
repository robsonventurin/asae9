<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>ASAE9 - Cadastro De Clientes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            header { background:#222; color:#fff; background-position: center center; background-size:cover; background-repeat:no-repeat;
                    background-image: url("http://ifsc.edu.br/documents/20181/45323/banner+aviso+imagem+c%C3%A2mpus/f5bea92c-ed24-873b-4434-5e0e61f4b460?t=1535551466563");}
            header .row > div { margin:75px 0; }

            main { margin:50px 0; }
      </style>
    </head>
    <body>
        <header id="page-top">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                <a class="navbar-brand" href="#page-top">ASAE9</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('listar_clientes') }}">Listar Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cadastrar_clientes') }}">Cadastrar Clientes</a>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 py-5">
                        <h1 class="mb-2">Cadastrar Clientes</h1>
                        <p class="m-0">
                            Página de cadastro de clientes. Por favor, preencha os campos conforme orientações individuais.<br>
                            Obs: não é possível alterar ou excluir. Por isso, preste bastante atenção na hora de preencher os dados!
                        </p>
                    </div>
                </div>
            </div>
        </header>
        
        <main>
            <div class="container">
                <form method="POST" action="{{ route('cadastrar_clientes_efetua') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" maxlength="100" name="nome" placeholder="Nome">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="endereco" class="col-sm-2 col-form-label">Endereço:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" maxlength="255" name="endereco" placeholder="Endereço">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cidade" class="col-sm-2 col-form-label">Cidade:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" maxlength="100" name="cidade" placeholder="Cidade">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="estado" class="col-sm-2 col-form-label">Estado:</label>
                        <div class="col-sm-10">
                            <select name="estado" class="form-control">
                                @foreach ($estados as $key => $value) 
                                    <option value="{{ $value }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cep" class="col-sm-2 col-form-label">CEP:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" maxlength="8" name="cep" placeholder="CEP">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                        </div>
                     
                    </div>
                </form>
            </div>
        </main>



        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>
    </body>
</html>
