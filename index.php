<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <meta name="description" content="Formulário de Cotação de Proteção de Veículos - Sonho Car">
    <meta name="keywords" content="Alexandre Cysne Esteves, Proteção Veicular, Sonho Car, Assistência 24h, APVS protege seu veículo">
    <meta name="author" content="Alexandre Cysne Esteves">    
    <title>SONHO CAR</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="/"><img src="img/logo-escrita-2.webp" style="width:50%; height: auto;"></a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <strong>Sonho Car - Formulário de Cotação Auto</strong><br>
                <strong>0800 605 4381 Assistência 24h</strong>
            </li>
        </ul>
    </nav>

    <div class="container">
        <hr>
        <h1>Conheça a empresa na qual vai proteger seu sonho, pois só você sabe o quanto trabalhou para conquistá-lo.
        </h1>
        <p>Preencha as informações abaixo que em breve entraremos em contato com você.</p>
        <hr>

        <form name="frm3" id="frm3" method="post" action="processa-pt.php" onSubmit="return validaForm()">
			<input type="hidden" name="to" id="to" value="paulocesarcurvelo@hotmail.com">
			<input type="hidden" name="cc" id="cc" value="paulocesarcurvelo@hotmail.com">
			<input type="hidden" name="subject" value="Solicitação de Cotação SonhoCar - ">
			<input type="hidden" name="resp" value="send.php">	

        <div class="card" id="formulario">
            <div class="card-header">
                <label>
                    <h3>Como você se chama?</h3>
                </label>
            </div>
            <div class="card-body">
                <input type="text" class="form-control" placeholder="Nome completo" name="nome" value="">
            </div>
        </div>

        <div class="card" id="formulario">
            <div class="card-header">
                <label>
                    <h3>Qual é o seu e-mail?</h3>
                </label>
            </div>
            <div class="card-body">
                <input type="text" class="form-control" placeholder="seu_email@mail.com.br" name="email" value="">
            </div>
        </div>        

        <div class="card" id="formulario">
            <div class="card-header">
                <label>
                    <h3>Qual é o número do seu telefone celular?</h3>
                </label>
            </div>
            <div class="card-body">
                <input type="text" class="form-control" placeholder="(DDD) 00000-0000" name="celular" value="">
            </div>
        </div>  


        <div class="card" id="formulario">
            <div class="card-header">
                <label>
                    <h3>Qual é a sua cidade?</h3>
                </label>
            </div>
            <div class="card-body">
                <input type="text" class="form-control" placeholder="Ex: Rio de Janeiro" name="cidade" value="">
            </div>
        </div> 

        <div class="card" id="formulario">
            <div class="card-header">
                <label>
                    <h3>Qual é o seu estado?</h3>
                </label>
            </div>
            <div class="card-body">
                <input type="text" class="form-control" placeholder="Ex: Rio de Janeiro" name="estado" value="">
            </div>
        </div> 

        <div class="card" id="formulario">
            <div class="card-header">
                <label>
                    <h3>Qual é a marca do seu veículo?</h3>
                </label>
            </div>
            <div class="card-body">
                <input type="text" class="form-control" placeholder="Ex: FIAT" name="veiculo_marca" value="">
            </div>
        </div> 

        <div class="card" id="formulario">
            <div class="card-header">
                <label>
                    <h3>Qual é o modelo do seu veículo?</h3>
                </label>
            </div>
            <div class="card-body">
                <input type="text" class="form-control" placeholder="Ex: ARGO" name="veiculo_modelo" value="">
            </div>
        </div>         

        <div class="card" id="formulario">
            <div class="card-header">
                <label>
                    <h3>O veículo é câmbio manual ou automático?</h3>
                </label>
            </div>
            <div class="card-body">
                <input type="text" class="form-control" placeholder="Ex: Manual" name="veiculo_cambio" value="">
            </div>
        </div>          

        <div class="card" id="formulario">
            <div class="card-header">
                <label>
                    <h3>Qual é o ano modelo do veículo?</h3>
                </label>
            </div>
            <div class="card-body">
                <input type="text" class="form-control" placeholder="Ex: 2022" name="veiculo_ano" value="">
            </div>
        </div>  

        <div class="card" id="formulario">
            <div class="card-header">
                <label>
                    <h3>Qual é a placa do veículo?</h3>
                </label>
            </div>
            <div class="card-body">
                <input type="text" class="form-control" placeholder="Ex: ABC0000" name="veiculo_placa" value="">
            </div>
        </div>  

        <button name="send" type="submit" value="enviar" class="btn btn-primary">SOLICITAR COTAÇÃO</button>
        <br><br><br>

        </form>

        <h2 class="text-center">Com a APVS você investe pouco e evita grandes perdas.</h2>
        <br><br>

        <table class="table">
            <thead>
                <tr>
                    <th class="text-center"><img src="img/garantia.webp"></th>
                    <th class="text-center"><img src="img/escudo-1-1.webp"></th>
                    <th class="text-center"><img src="img/livro-de-capa-preta-fechado.webp"></th>
                    <th class="text-center"><img src="img/lupa-em-um-grafico-de-barras-crescente.webp"></th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <th class="text-center">
                            CREDIBILIDADE 100% GARANTIDO<br><br>
                            Desde 2008, oferecendo tranquilidade e proteção para mais de 300 mil associados.
                        </th>
                        <th class="text-center">
                            PROTEÇÃO QUE CABE NO SEU BOLSO<br><br>
                            Pagamentos mensais e condições que cabem no seu bolso com o melhor custo e benefício
                        </th>
                        <th class="text-center">
                            ZERO BUROCRACIA<br><br>
                            Na APVS você protege seu veículo sem burocracia. Não consultamos SPC/SERASA, é só apresentar os documentos e pronto!
                        </th>
                        <th class="text-center">
                            SEM ANÁLISE DE PERFIL<br><br>
                            A proteção é para o seu veículo, qualquer condutor habilitado terá o direito de utilização dos benefícios caso seja necessário.
                         </th>                        
                    </tr>
            </tbody>
        </table>        

        <br><br>
        <p class="text-center">Corretor: <strong>Paulo Cesar Curvelo</strong> | Celular/WhatsApp: <strong>(21) 96722-2669</strong> | e-mail: <strong>paulocesarcurvelo@hotmail.com</strong><br>. . . . . . . . </p> 
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    function validaForm(){
              var d = document.frm3;
  
              if (d.nome.value == ""){
              alert('Nome completo obrigatório.');
              d.nome.focus();
              return false;
              };

              if (d.email.value == ""){
              alert('e-mail obrigatório.');
              d.email.focus();
              return false;
              };

              if (d.celular.value == ""){
              alert('Celular obrigatório.');
              d.celular.focus();
              return false;
              };
              
              if (d.cidade.value == ""){
              alert('Cidade obrigatória.');
              d.cidade.focus();
              return false;
              };
              
              if (d.estado.value == ""){
              alert('Estado obrigatório.');
              d.estado.focus();
              return false;
              };
              
              if (d.veiculo_marca.value == ""){
              alert('Marca do Veículo obrigatório.');
              d.veiculo_marca.focus();
              return false;
              };
              
              if (d.veiculo_modelo.value == ""){
              alert('Modelo do Veículo obrigatório.');
              d.veiculo_modelo.focus();
              return false;
              };
              
              if (d.veiculo_cambio.value == ""){
              alert('Cambio obrigatório.');
              d.veiculo_cambio.focus();
              return false;
              };
              
              if (d.veiculo_ano.value == ""){
              alert('Ano Modelo do Veículo obrigatório.');
              d.veiculo_ano.focus();
              return false;
              };
              
              if (d.veiculo_placa.value == ""){
              alert('Placa do Veículo obrigatório.');
              d.veiculo_placa.focus();
              return false;
              };              
  
              d.subject.value = d.subject.value + d.nome.value;
            return true;
    };
  </script>
</html>