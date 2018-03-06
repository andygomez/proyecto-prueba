<HTML>
        <HEAD>
            <meta charset="utf-8">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">

        </HEAD>
    
        <BODY> <br><br><br><br><br><br><br><br><br><br>
            <div class="container">
               <div class="row">
                     
                 <div class="main">
               
                <form action="{{ url('2') }}" method="post">
                {{csrf_field()}}
                    <div class="form-group">
                            
                     <center><FONT FACE="verdana" SIZE=3.5 >¿Me puedes decir tu nombre?</FONT></center> 
                     <input name='nombre' type="text" class="form-control" id="inputUsernameEmail" required>

                        <div class="checkbox pull-right">                   
                           <button type="submit" class=" btn btn btn-success">
                               EMPEZAR
                            </button>
                        </div>

                    </div>
                </form>
                 
                 </div>
                          
                </div>
            </div>
        </BODY>
    </HTML>