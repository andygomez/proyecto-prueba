<HTML>
        <HEAD>
            <meta charset="utf-8">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            <script src='js/jquery-3.2.1.min.js'></script>

         </HEAD>
    
        <BODY> 
            <div class="container">
               <div class="row">                                                  
                    <div class="container-fluid">
                       <div class="row">
                          <div class="col-md-12">
                               <form role="form" class="form-inline">
                                 <center>
                                    <div class="form-group center alert-danger">
                                            <p id="valido"></p>
                                    </div> <br>

                                    <h4>{{$name}} Indica tus datos de pago</h4>
                                  <div class="form-group">
                                        
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre de la Tarjeta" required/>
                                   </div>
                                    <div class="form-group">
                                                 
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Numero de Tarjeta" required/>
                                   </div> <br> <br>


                                    <div class="pull">               
                                        <button  type="submit" class=" btn btn btn-success btn-block">
                                           Comprar
                                        </button>
                                      </div>

                                    </center>
                                    
                                </form><br> <br>
                           </div>
                       </div>
                   </div>
                          
               
                          
                </div>
            </div>
       
        </BODY>
    </HTML>