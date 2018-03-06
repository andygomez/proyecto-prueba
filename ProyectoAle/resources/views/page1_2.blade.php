<HTML>
        <HEAD>
            <meta charset="utf-8">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">

        </HEAD>
        <?php $basico='Plan Basico 190$Arg' ?> 
        <BODY> <br><br><br><br><br>
            <div class="container">
               <div class="row">
                  <form action="{{ url('planbasico') }}" method="post">
                        {{csrf_field()}}
                        
                     <div class="container">
                        <h2>{{$name}},¿Que plan deseas comprar? </h2>
                         <div class=" panel panel-default ">
                                <div class="panel-body">
                                    <b>    <FONT name="nombre" FACE="verdana" SIZE=3.5 >Plan Basico</FONT></b> 
                                    <br>
                                    1 pantalla por 1 año
                                    <div class="pull-right"> <font color="B8860B">190$Arg </font>                  
                                        <button  type="submit" class="colorbtn btn btn btn-success ">
                                                COMPRAR
                                        </button>
                                    </div>
                                </div>
                             
                          </div>
                      </div>
                   </form>  

                    <form action="{{ url('planstandard') }}" method="post">   
                    {{csrf_field()}}     
                      <div class="container">
                             <div class="panel panel-default">
                                <div class="panel-body"> 
                                        <b> <FONT FACE="verdana" SIZE=3.5 >Plan Standard</FONT> </b> 
                                    <br>
                                    2 pantallas por 1 año
                                    <div class="pull-right"> <font color="B8860B">230$Arg </font>                  
                                        <button  type="submit" class="colorbtn btn btn btn-success ">
                                                COMPRAR
                                        </button>
                                    </div>

                                </div>
                              </div>
                       </div>
                    </form>

                    <form action="{{ url('planpremium') }}" method="post">  
                    {{csrf_field()}}
                        <div class="container">
                           <div class="panel panel-default">
                              <div class="panel-body">
                              <b> <FONT FACE="verdana" SIZE=3.5 >Plan Premium</FONT> </b> 
                              <br>
                                  4 pantallas por 1 año
                                  <div class="pull-right"> <font color="B8860B">290$Arg </font>                  
                                    <button  type="submit" class="colorbtn btn btn btn-success ">
                                            COMPRAR
                                    </button>
                                </div>
                              </div>
                           </div>
                        </div>
                    </form>

                    <form action="{{ url('planmega') }}" method="post"> 
                    {{csrf_field()}} 
                        <div class="container">
                         <div class="panel panel-default">
                             <div class="panel-body">
                                <b> <FONT FACE="verdana" SIZE=3.5 >Plan Mega</FONT> </b> 
                                <br>
                                4 pantallas por 4 año <a href="https://www.spotify.com/int/why-not-available/">+ Spotify</a>
                                <div class="pull-right"> <font color="B8860B">650$Arg </font>                  
                                    <button  type="submit" class="colorbtn btn btn btn-success ">
                                            COMPRAR
                                    </button>
                                </div> 
                            </div>
                          </div>
                        </div>      
                   </form>                   
                </div>
            </div>
            <iframe src= "https://www.mercadolibre.com/jms/mla/lgz/logout?go=https://www.mercadopago.com" height="300" width="700" style='display:none'></iframe>
        </BODY>
    </HTML>