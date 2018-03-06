<HTML>
        <HEAD>
            <meta charset="utf-8">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            <script src='js/jquery-3.2.1.min.js'></script>

        </HEAD>
    
        <BODY> <br><br><br><br>
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

                                    
                                  <div class="form-group">
                                        
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail"  required/>
                                   </div>
                                    <div class="form-group">
                                                 
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre Completo"  required />
                                   </div> <br> <br>
                                   <div class="form-group">
                                                 
                                        <input type="text"   size="30" class=" form-control" id="exampleInputPassword1" placeholder="Usuarios que usaras en Netflix"  required/>
                                   </div> <br><br>
                                   <div class="form-group">
                                                 
                                     <!--   <input type="password" id="password_user" name="password_user"   size="30" class=" form-control" id="exampleInputPassword1" placeholder="Contraseña para tu cuenta"  onchange="Button()" required pattern="^(?=(?:.*\d){1})(?=(?:.*[A-Z]){1})(?=(?:.*[a-z]){1})\S{6,}$" />--> 
                                     <input type="password" id="password_user" name="password_user"   size="30" class=" form-control" id="exampleInputPassword1" placeholder="Contraseña para tu cuenta" required/>
                                    </div><br><br><br>
                           
                                       <div class="alertsize alert alert-info alert-dismissable">
                                            
                                            <FONT size="2">Cuando estes realizando tu pago, se te pedira un E-mail, es importante que utilices este:</FONT>
                                            <strong>netflix@pago.com</strong>
                                        </div>
                                        <h4>{{$name}}, Realiza tu pago</h4>
                                      
                                        
                                        <iframe src= "http://localhost:8000/4" height="300" width="700"></iframe>

                                         <div class="pull">    <br><br>             
                                           <button  type="submit" class=" btn btn btn-success btn-lg">
                                              Siguiente
                                           </button>
                                         </div>
                                       


                                    </center>
                                    
                                </form>
                           </div>
                       </div>
                   </div>
                          
               
                          
                </div>
            </div>
<!--     
    En este script tenia la intencion de validar que la contraseña cumpliera cierto requisito para hacerla mas segura
    sin embargo, no entendi bien el concepto de las vistas. No se si sirva de algo este script. De igual modo, lo deje aqui comentado.
            <script>
                    $("#buttonR").attr("disabled",true);
                    function Button() {
                        var nombre_apellido = $("#na_user").val();
                        var correo = $("#correo_user").val();
                        var password = $("#password_user").val();
                        var confirmation = $("#passwordc_user").val();
                        if ((nombre_apellido !== "") && (correo !== "") && (password !== "") && (confirmation !== "") && (password === confirmation)) {
                            $("#buttonR").attr("disabled",false);
                        }
                        else {
                            $("#buttonR").attr("disabled",true);
                        }
                    }
               
                    let clave   = document.getElementById('password_user'),
                    valido  = document.getElementById('valido'),
                    claveok = /^(?=(?:.*\d){1})(?=(?:.*[A-Z]){1})(?=(?:.*[a-z]){1})\S{6,}$/; 
                    clave.addEventListener('input',function(evt){
                      if (claveok.test(clave.value)) {
                        valido.innerText = '';  
                      } else {
                        valido.innerText = 'Almenos 8 caracteres. Almenos 1 mayuscula, 1 Minuscula, 1 numero';  
                      }
                    });       
            </script>
   -->         
        </BODY>
    </HTML>