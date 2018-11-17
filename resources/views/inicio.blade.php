<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" id="toekn" content="{{csrf_token()}}">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="css/calendar.css">
    <title>Locadora</title>
</head>
<body>
    <div class="ui main container">
        
           <!-- MENU -->
           <div class="pusher">
              <div class="ui segment">
                
                <div class="ui  secondary pointing menu">
                  <a href="index.html" class="yellow item active">
                    Inicio
                  </a>
                  <a class=" orange item">
                    Frota de Carros
                  </a>
                  <a class="red item">
                    Sobre
                  </a>
                  <a href="contato.html" class="teal item ">
                  Contato
                  </a>
                  <div class="right item">
                        <a class="ui green basic button">Logar</a>
                        <a class="ui red basic button">Registrar</a>
                </div>
                </div>
              </div>
      
                 <!-- FORMULARIO -->
      <div class="ui blue segment">
        <h3>Alugue um carro</h3>
        <div class="ui form">
          <div class="three fields">
            <div class="field">
              <label>Local da Retirada</label>
              <div class="ui input left icon">
                  <i class="blue map marker icon"></i>
              <input placeholder="Local" type="text">
            </div>
            </div>

            <div class="field">
              <label>Data e Hora de Retirada</label>
              <div class="ui calendar" id="rangestart">
                <div class="ui input left icon">
                  <i class="green calendar icon"></i>
                  <input type="text" placeholder="Inicio">
                </div>
              </div>
            </div>

            <div class="field">
          <label>Data e Hora de Devolução</label>
          <div class="ui calendar" id="rangeend">
            <div class="ui input left icon">
              <i class="red calendar icon"></i>
              <input type="text" placeholder="Final">
            </div>
          </div>
        </div>
           

          </div>
          <div class="inline field">
            <div class="ui checkbox">
              <input type="checkbox" tabindex="0" class="hidden">
              <label>Eu concordo com os termos e desejo prosseguir</label>
            </div>
          </div>
          
          <div class="ui inverted green  animated button" tabindex="0">
              <div class="visible content">Alugar</div>
              <!-- <div class="ui submit button">Alugar</div> -->
              <div class="hidden content">
                  <i class="handshake outline icon"></i>
              </div>
            </div>
         
        </div>
      </div>

   
   <!-- CARDS -->
   

    <div class="ui link cards">
        <div class="card">
            <div class="ui slide masked reveal image">
                <img src="https://proximocarro.com/wp-content/uploads/2018/02/Screenshot_1-1.png" class="visible content">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfo21t-S00TAJseBlhAvlVXRlgLulx6mZGwZTS7KdWp53EC7ayig" class="hidden content">
              </div>
          <div class="content">
            <div class="header">Matt Giampietro</div>
            <div class="meta">
              <a>Friends</a>
            </div>
            <div class="description">
              Matthew is an interior designer living in New York.
            </div>
          </div>
          
          <div class="extra content">
            
              <div class="ui two buttons">
                <div class="ui inverted green button">Alugar</div>
                <!-- <div class="ui inverted red button">Decline</div> -->
                
              </div>
            </div>
        </div>
<!--  -->
        <div class="card">
          <div class="image">
            <img src="https://images.noticiasautomotivas.com.br/img/f/Audi-A7-Sportback-2018-5.jpg">
          </div>
          <div class="content">
            <div class="header">Molly</div>
            <div class="meta">
              <span class="date">Coworker</span>
            </div>
            <div class="description">
              Molly is a personal assistant living in Paris.
            </div>
          </div>
          <div class="extra content">
              <div class="ui two buttons">
                  <div class="ui inverted green button">Alugar</div>
                  <!-- <div class="ui inverted red button">Decline</div> -->
                </div>
          </div>
        </div>
        <!--  -->
        <div class="card">
          <div class="image">
            <img src="https://s2.glbimg.com/vWG2rOGAYn41TcbA3JG1Nd60mqk=/620x413/e.glbimg.com/og/ed/f/original/2018/05/25/04_gm_chevrolet_onix_activ4_25-05-2018.jpg">
          </div>
          <div class="content">
            <div class="header">Elyse</div>
            <div class="meta">
              <a>Coworker</a>
            </div>
            <div class="description">
              Elyse is a copywriter working in New York.
            </div>
          </div>
          <div class="extra content">
              <div class="ui two buttons">
                  <div class="ui inverted green button">Alugar</div>
                  <!-- <div class="ui inverted red button">Decline</div> -->
                </div>
          </div>
        </div>
        <div class="card">
          <div class="image">
            <img src="https://s2.glbimg.com/vWG2rOGAYn41TcbA3JG1Nd60mqk=/620x413/e.glbimg.com/og/ed/f/original/2018/05/25/04_gm_chevrolet_onix_activ4_25-05-2018.jpg">
          </div>
          <div class="content">
            <div class="header">Elyse</div>
            <div class="meta">
              <a>Coworker</a>
            </div>
            <div class="description">
              Elyse is a copywriter working in New York.
            </div>
          </div>
          <div class="extra content">
              <div class="ui two buttons">
                  <div class="ui inverted green button">Alugar</div>
                  <!-- <div class="ui inverted red button">Decline</div> -->
                </div>
          </div>
        </div>
        <div class="card">
          <div class="image">
            <img src="https://s2.glbimg.com/vWG2rOGAYn41TcbA3JG1Nd60mqk=/620x413/e.glbimg.com/og/ed/f/original/2018/05/25/04_gm_chevrolet_onix_activ4_25-05-2018.jpg">
          </div>
          <div class="content">
            <div class="header">Elyse</div>
            <div class="meta">
              <a>Coworker</a>
            </div>
            <div class="description">
              Elyse is a copywriter working in New York.
            </div>
          </div>
          <div class="extra content">
              <div class="ui two buttons">
                  <div class="ui inverted green button">Alugar</div>
                  <!-- <div class="ui inverted red button">Decline</div> -->
                </div>
          </div>
        </div>
        <div class="card">
          <div class="image">
            <img src="https://s2.glbimg.com/vWG2rOGAYn41TcbA3JG1Nd60mqk=/620x413/e.glbimg.com/og/ed/f/original/2018/05/25/04_gm_chevrolet_onix_activ4_25-05-2018.jpg">
          </div>
          <div class="content">
            <div class="header">Elyse</div>
            <div class="meta">
              <a>Coworker</a>
            </div>
            <div class="description">
              Elyse is a copywriter working in New York.
            </div>
          </div>
          <div class="extra content">
              <div class="ui two buttons">
                  <div class="ui inverted green button">Alugar</div>
                  <!-- <div class="ui inverted red button">Decline</div> -->
                </div>
          </div>
        </div>
        <div class="card">
          <div class="image">
            <img src="https://s2.glbimg.com/vWG2rOGAYn41TcbA3JG1Nd60mqk=/620x413/e.glbimg.com/og/ed/f/original/2018/05/25/04_gm_chevrolet_onix_activ4_25-05-2018.jpg">
          </div>
          <div class="content">
            <div class="header">Elyse</div>
            <div class="meta">
              <a>Coworker</a>
            </div>
            <div class="description">
              Elyse is a copywriter working in New York.
            </div>
          </div>
          <div class="extra content">
              <div class="ui two buttons">
                  <div class="ui inverted green button">Alugar</div>
                  <!-- <div class="ui inverted red button">Decline</div> -->
                </div>
          </div>
        </div>
        <div class="card">
          <div class="image">
            <img src="https://s2.glbimg.com/vWG2rOGAYn41TcbA3JG1Nd60mqk=/620x413/e.glbimg.com/og/ed/f/original/2018/05/25/04_gm_chevrolet_onix_activ4_25-05-2018.jpg">
          </div>
          <div class="content">
            <div class="header">Elyse</div>
            <div class="meta">
              <a>Coworker</a>
            </div>
            <div class="description">
              Elyse is a copywriter working in New York.
            </div>
          </div>
          <div class="extra content">
              <div class="ui two buttons">
                  <div class="ui inverted green button">Alugar</div>
                  <!-- <div class="ui inverted red button">Decline</div> -->
                </div>
          </div>
        </div>


      </div>
      
    </div>


</body>



<script src="/js/app.js"></script>
<script type="text/javascript" src="/js/calendar.min.js"></script>
<script>
  
  $('.ui.dropdown')
  .dropdown()
;
$('#rangestart').calendar({
  // type: 'date',
  endCalendar: $('#rangeend')
});
$('#rangeend').calendar({
  // type: 'date',
  startCalendar: $('#rangestart')
});
$(document)
    .ready(function() {
      $('.ui.menu .ui.dropdown').dropdown({
        on: 'hover'
      });
      $('.ui.menu a.item')
        .on('click', function() {
          $(this)
            .addClass('active')
            .siblings()
            .removeClass('active')
          ;
        })
      ;
    })
  ;
  $('.ui.checkbox')
  .checkbox()
;

</script>



</html>