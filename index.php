<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contabilidade online</title>
    <link rel="stylesheet" href="./includes/css/bootstrap.min.css">
    <link rel="stylesheet" href="./includes/css/headers.css">
    <link rel="stylesheet" href="./includes/css/carousel.css">
    <link rel="stylesheet" href="./includes/css/golden_ratio.css">
    <link rel="stylesheet" href="./includes/icones/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="./includes/css/style.css">
</head>
<body>
  <?php
  
require_once 'php_action/db_connect.php';
 
?>

      <div class="container-fluid  py-3 px-4 px-lg-5 bg-primary-color ">
        <header class="d-flex text-white   flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 ">
          <a href="/" class="d-flex text-white align-items-center col mb-2 mb-md-0 text-dark text-decoration-none">
           <h4 class="sub-heading-bold">Empresa de contabilidade e auditoria</h4>
          </a>
    
          
    
          <div class="col-md-3 col-12 text-end sub-heading d-none d-lg-block  ">
            <button type="button" class="btn  me-2 text-white"> Features</button>
            <button type="button" class="btn  text-white"> FAQs</button>
          </div>
          <div class="col-md-3 col-12 text-end sub-heading d-lg-none ">
            <button type="button" class="btn   px-2 me-2 text-white"> Features</button>
            <button type="button" class="btn  px-2 text-white"> FAQs</button>
          </div>
        </header>

        <div class="row text-white mt-4">
          <div class="col">
            <h1 class="large-heading">Serviços de Contabilidade e Auditoria
              Online</h1>

              
              
          </div>
        </div>
        <div class="row text-white mt-1">
          <div class="col col-lg-6">
            <p class="sub-heading" style="text-align: justify; font-size: 18px;">Oferecemos serviços de contabilidade e auditoria de
              forma online, facilitando o acesso e a gestão financeira
              para empresas.</p>

              
              
          </div>
        </div>
        <div class="row text-white mt-3">
          <div class="col col-md-6">
            <h4> Obtenha atualizações</h4>

              
              
          </div>
        </div>
        <form  action="/php_action/create_email_marketing.php"  method="POST"  class="row text-white mb-5">
          <div class="col ">
          <div class="row"  >
              <div class="col-12 col-lg-5 col-md-7  mx-lg-0 px-lg-0 ">
                <input input type="email" name="email" id="email" required class="form-control form-control-sm validate" id="" placeholder="Enter your email" style="border-radius: 50px; height: 50px; " >
                <span class="helper-text position-absolute" data-error="Digite um email válido" datat-sucess="right">
                </span>
              </div>
              <div class="col-12 col-lg-3 col-md-5 mt-1 mt-lg-0">
                <button  type="submit"  name="btn-cadastrar" style="border-radius: 50px;height: 50px; font-size:16px" class="btn bg-secundary-color text-white  w-100 border-0 fw-bold shadow-sm btn-lg px-5 me-md-2 " >
                  Notify me
                </button>
              </div>

              
              

              
          </div>
              
          </div>
        </form>


      </div>
 
     
      <div class="container my-4">

        <div class="row my-3">
            <div class="col text-center">
                <h1>Recursos</h1>
                <p>Nossos principais recursos</p>
            </div>
          </div>
    
          <div class="row align-items-md-stretch my-lg-2 my-3 mx-2">
            
            <div class="col-lg-6 offset-lg-6">
              <div class=" p-lg-5 p-4 bg-light border rounded-3">
                <h2>Contabilidade Online <i class="bi bi-person-video3  ms-2" style="margin-top: 8px; position: absolute"></i>  </h2>
                <p>Acesso a uma plataforma online para
                  gerenciar suas finanças, emitir notas fiscais
                  e controlar suas despesas.</p>
              </div>
            </div>
          </div>
          <div class="row align-items-md-stretch my-lg-2 my-3 mx-2">
            
            <div class="col-lg-6">
              <div class=" p-lg-5 p-4 bg-white border-0 shadow-sm rounded-3">
                <h2>Auditoria Especializada <i  class="bi bi-search ms-2" style="margin-top: 8px; position: absolute" ></i>  </h2>
                <p>Conte com nossa equipe de auditores
                  especializados para garantir a
                  conformidade e a transparência nas suas
                  operações financeiras.</p>
              </div>
            </div>


          </div>
          <div class="row align-items-md-stretch my-lg-2 my-3 mx-2">
            
            <div class="col-lg-6 offset-lg-6">
              <div class=" p-lg-5 p-4 bg-light border rounded-3">
                <h2>Suporte Personalizado <i  class="bi bi-telephone ms-2" style="margin-top: 8px; position: absolute" ></i> </h2>
                <p>Atendimento personalizado para esclarecer
                  dúvidas e auxiliar na gestão financeira da
                  sua empresa.
                  </p>
              </div>
            </div>
          </div>
          <div class="row align-items-md-stretch my-lg-2 my-3 mx-2">
            
            <div class="col-lg-6">
              <div class=" p-lg-5 p-4  bg-white border-0 shadow-sm rounded-3">
                <h2>Relatórios Financeiros <i  class="bi bi-cash-stack ms-1" style="margin-top: 8px; position: absolute" ></i> </h2>
                <p>Geração de relatórios financeiros
                  detalhados para auxiliar na tomada de
                  decisões estratégicas.</p>
              </div>
            </div>


          </div>
          <div class="row align-items-md-stretch my-lg-2 my-3 mx-2">
            
            <div class="col-lg-6 offset-lg-6">
              <div class=" p-lg-5 p-4 bg-light border rounded-3">
                <h2>Consultoria Tributária <i  class="bi bi-coin ms-1" style="margin-top: 8px; position: absolute" ></i> </h2>
                <p>Assessoria especializada para garantir o
                  cumprimento das obrigações fiscais e
                  reduzir a carga tributária da sua empresa.
                  </p>
              </div>
            </div>
          </div>
          <div class="row align-items-md-stretch my-lg-2 my-3 mx-2">
            
            <div class="col-lg-6">
              <div class=" p-lg-5 p-4  bg-white border-0 shadow-sm rounded-3">
                <h2>Integração com Sistemas <i  class="bi  bi-building-fill bi-chat ms-1" style="margin-top: 8px; position: absolute" ></i> </h2>
                <p>Integração com sistemas de gestão
                  empresarial para facilitar o fluxo de
                  informações financeiras.</p>
              </div>
            </div>


          </div>

      </div>

      <div class="container px-4">

        <hr class="featurette-divider">

        <div class="row featurette  mb-4">
        <div class="col-12 d-lg-none mb-4">
            <h1>Frequently Asked Questions</h1>
          </div>
          <div class="col-lg-7 ">
            <h2 class=" mt-0  ">Quais são os benefícios da
              contabilidade online?</h2>
            <p class="lead">A contabilidade online oferece maior praticidade, agilidade e
              segurança no gerenciamento das finanças da sua empresa.
              Além disso, permite o acesso a informações atualizadas em
              tempo real.
            </p>
          </div>
          <div class="col-md-5 d-lg-block d-none">
            <h1>Frequently Asked Questions</h1>
          </div>
        </div> 
          <div class="row featurette mb-4">

            <div class="col-lg-7 order-md-2">
              <h2 class="">Como funciona o processo de auditoria
                online?</h2>
              <p class="lead">Nossa equipe de auditores realiza a análise dos documentos
                e informações financeiras fornecidas pela empresa de forma
                online. Utilizamos tecnologias avançadas para garantir a
                confidencialidade e a precisão dos resultados.</p>
            </div>
            
          </div>
          <div class="row featurette mb-4">

            <div class="col-lg-7 order-md-2">
              <h2 class="">Qual é o custo dos serviços de
                contabilidade e auditoria online?</h2>
              <p class="lead">Os custos dos serviços variam de acordo com o plano
                escolhido e as necessidades específicas da empresa. Entre
                em contato conosco para obter um orçamento
                personalizado.</p>
            </div>
            
          </div>
          <div class="row featurette mb-4">

            <div class="col-lg-7 order-md-2">
              <h2 class="">Como posso entrar em contato com o
                suporte?</h2>
              <p class="lead">Você pode entrar em contato com nosso suporte através do
                formulário de contato em nosso site ou pelo telefone XXXXXXX.
                </p>
            </div>
            
          </div>
      
          <div class="row featurette mb-4">

            <div class="col-lg-7 order-md-2">
              <h2 class="">Quais são as formas de pagamento
                aceitas?</h2>
              <p class="lead">Aceitamos pagamentos através de cartão de crédito, boleto
                bancário e transferência bancária.
                
                </p>
            </div>
            
          </div>
  
      
          <div class="row featurette mb-4">

            <div class="col-lg-7 order-md-2">
              <h2 class="">Vocês oferecem serviços de consultoria
                tributária?</h2>
              <p class="lead">Sim, oferecemos serviços de consultoria tributária para
                auxiliar sua empresa na gestão fiscal e na redução da carga
                tributária.
                
                </p>
            </div>
            
          </div>
      
          <hr class="featurette-divider">
      

      </div>
      

      
      <div class="container bg-primary-color my-5 shadow-lg   p-4" style="border-radius: 30px;">
        <div class="row text-white mt-4">
          <div class="col mt-lg-5 pt-lg-5 pt-4">
            <h1 class="sub-heading-bold text-uppercase text-center">EMPRESA DE CONTABILIDADE ONLINE
            </h1>

              
              
          </div>
        </div>
        <div class="row text-white mt-2 mt-lg-1 mb-2">
          <div class="col ">
            <p class="heading-bold text-center" > Serviços de Contabilidade e Auditoria Online
            </p>

              
              
          </div>
        </div>
         
        <form action="/php_action/create_email_marketing.php"  method="POST"  class="row text-white mb-5">
          <div class="col mb-5 pb-5">
            <div class="row "  >
              <div class="col-12 col-lg-7 ms-lg-5 ps-lg-3   ms-lg-4 d-lg-flex justify-content-lg-end   px-sm-0 px-md-5 px-lg-0 ">
                <input input type="email" name="email" id="email" required class="form-control form-control-sm validate ms-lg-5" id="" placeholder="Enter your email" style="border-radius: 50px; height: 50px; " >
                <span class="helper-text position-absolute" data-error="Digite um email válido" datat-sucess="right">
                </span>
              </div>
              <div class="col mt-lg-0 mt-1 col-lg-3 pe-lg-5  px-sm-0 px-md-5 px-lg-0   ">
                <button  type="submit"  name="btn-cadastrar" style="border-radius: 50px;height: 50px; font-size:16px " class="btn ms-lg-2 w-100 fw-bold bg-secundary-color text-white w-100  border-0 shadow-sm btn-lg px-5 me-md-2 " >
                  Notify me
                </button>
              </div>

              
              

              
          </div>
              
          </div>
        </form>
      </div>
 
      <div class="container p-3 mb-2">
        <div class="row text-center">
          <div class="col">
            <p> &copy; 2023 Serviços de Contabilidade e Auditoria Online All Rights Reserved</p>
          </div>
      </div> 
    </div>
      
    <div class="container-fluid py-4 py-lg-5 px-2 bg-dark">

      <br class="my-lg-4">

    </div>

    <script src="./includes/js/bootstrap.bundle.min.js"></script>
</body>
</html>