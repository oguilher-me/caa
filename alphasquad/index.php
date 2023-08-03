<!DOCTYPE html>

<html lang="pt-br" class="">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Alphasquad</title>

    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">

</head>
<body>
    <section class="container">
        <div class="row">
            <div class="col">

                <img src="images/logo.png" class="logo" alt="Logo AlphaSquad">

                <h2>Aumente o potencial do seu negócio com soluções Salesforce</h2>
                <h3 class="desc-title mt-30">Impulsione o crescimento e a eficiência do seu negócio com a Alphasquad, referência em implementação de soluções Salesforce. </h3>
        
                <a href="#form-demonstracao" title="Solicitar Demonstração" class="btn-blue mt-30 display">Solicitar Demonstração</a>
            </div>
            <div class="col">
                <img src="images/rafiki.svg" class="mt-60" alt="NEg">
            </div>
        </div>
    </section>

    <section class="container mt-100 bgg">
        <div class="row">
            <div class="col e1">
                <h2 class="title-orange">Equipe Especializada</h2>
                <p class="desc">
                    Com uma equipe de especialistas certificados pela Salesforce e uma vasta experiência em consultoria e implementação, estamos prontos para ajudar sua empresa a alcançar todo o seu potencial.
                </p>
            </div>
            <div class="col d1">
                <h2 class="title-orange">Experiência Comprovada</h2>
                <p class="desc">
                    Somos especializados na ferramenta e temos um histórico comprovado de sucesso na implementação de soluções Salesforce para empresas de todos os tamanhos.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-blue reset">
        <div class="container pd-60">
            <div class="row text-center">
                <h2 class="white">Nossas Soluções</h2>
            </div>
            <div class="row mt-100">
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <p class="list-number"><span class="number">1</span> Implementação de ferramenta Salesforce</p>
                    </div>
                    <div class="row">
                        <p class="list-number"><span class="number">2</span> Desenho de CX e UX</p>
                    </div>
                    <div class="row">
                        <p class="list-number"><span class="number">3</span> Evolução de projetos</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <p class="list-number"><span class="number">4</span> Consultoria em Omnichannel</p>
                    </div>
                    <div class="row">
                        <p class="list-number"><span class="number">5</span> Integração de sistemas</p>
                    </div>
                    <div class="row">
                        <p class="list-number"><span class="number">6</span> Soluções em Data Driven</p>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-100">
                <div class="col">
                    <a href="#form-demonstracao" title="Solicitar Demonstração" class="btn-out">Solicitar Demonstração</a>
                </div>
            </div>
        </div>
        
    </section>

    <div class="container text-center pd-60">
        <div class="row">
            <h2 class="black">Confiram algumas empresas que apostam na gente</h2>
        </div>

        <div class="row brands mt-30">
            <div class="col-md-3 col-xs-6"><img src="images/fini.png" alt="Fini"></div>
            <div class="col-md-3 col-xs-6"><img src="images/sao-vicente.png" alt="Supermercado São Vicente"></div>
            <div class="col-md-3 col-xs-6"><img src="images/Wurth.png" alt="Wurth"></div>
            <div class="col-md-3 col-xs-6"><img src="images/multicoisas.png" alt="Multicoisas"></div>
        </div>
        <div class="row brands mt-30">
            <div class="col-md-3 col-xs-6"><img src="images/deonibus.png" alt="deônibus"></div>
            <div class="col-md-3 col-xs-6"><img src="images/amend.png" alt="Amend"></div>
            <div class="col-md-3 col-xs-6"><img src="images/copercana.png" alt="Copercana"></div>
            <div class="col-md-3 col-xs-6"><img src="images/lebiscuit.png" alt="Le Biscuit"></div>
        </div>
        <hr>
    </div>

    <div class="container ">
        <div class="row text-center">
            <h2 class="black">Centralize e otimize as operações de vendas, marketing e<br>
                atendimento ao cliente em uma única plataforma.</h2>
        </div>
        <div class="row mt-30">
            <div class="col text-center">
                <img src="images/contato.png" alt="Formulário de Contato">
            </div>
            <div class="col">
                <form action="send.php" method="post" id="form-demonstracao">
                    <div class="row form-group">
                      <input id="text1" name="name" type="text" required class="form-control" placeholder="Nome">
                    </div>
                    <div class="row form-group">
                      <input id="text" name="email" type="text" required class="form-control" placeholder="Seu melhor e-mail">
                    </div>
                    <div class="row form-group">
                      <input id="text2" name="telefone" type="text" required class="form-control" placeholder="Telefone">
                    </div>
                    <div class="form-group cb-inline">
                          
                        <label for="checkbox_0" class="control-label">
                            <input name="checkbox" id="checkbox_0" type="checkbox" required class="custom-control-input" value="1"> 
                            Estou de acordo com a <a href="" target="_blank">política de privacidade e termos de uso</a>
                        </label>
                      </div>
                    <div class="row form-group mt-30">
                      <button name="submit" type="submit" class="btn-blue">Solicitar Demonstração</button>
                    </div>
                  </form>
            </div>
        </div>
        
    </div>

    <footer class="bg-dark mt-100">
        <div class="container text-center">
            <p class="white">© Copyright 2023 AlphaSquad</p>
        </div>
    </footer>
    
</body>
</html>