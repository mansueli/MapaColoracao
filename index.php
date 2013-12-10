<!DOCTYPE html>
<html lang="pt-br">
    <head>
	<meta charset="utf-8">
	<title>Problema de colora&ccedil;&atilde;o dos mapas</title>
	<style type="text/css">
		header{
			width: 100%;
		}
                body{
                    background: -moz-linear-gradient(top,  rgba(134,216,216,1) 0%, rgba(134,216,216,0.92) 8%, rgba(255,255,255,0) 100%); /* FF3.6+ */
                    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(134,216,216,1)), color-stop(8%,rgba(134,216,216,0.92)), color-stop(100%,rgba(255,255,255,0))); /* Chrome,Safari4+ */
                    background: -webkit-linear-gradient(top,  rgba(134,216,216,1) 0%,rgba(134,216,216,0.92) 8%,rgba(255,255,255,0) 100%); /* Chrome10+,Safari5.1+ */
                    background: -o-linear-gradient(top,  rgba(134,216,216,1) 0%,rgba(134,216,216,0.92) 8%,rgba(255,255,255,0) 100%); /* Opera 11.10+ */
                    background: -ms-linear-gradient(top,  rgba(134,216,216,1) 0%,rgba(134,216,216,0.92) 8%,rgba(255,255,255,0) 100%); /* IE10+ */
                    background: linear-gradient(to bottom,  rgba(134,216,216,1) 0%,rgba(134,216,216,0.92) 8%,rgba(255,255,255,0) 100%); /* W3C */
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#86d8d8', endColorstr='#00ffffff',GradientType=0 ); /* IE6-9 */
                }
		.entrada {
		    font-weight: bold;
 		    color : #152000;
		    text-align : center;
		    width : 50%;
		}
		#entrada2 {
		    float :left;
		}
		#entrada2 {
		    float :right;
		    margin-top: -50px;
		}
		#canvas{
			margin-top: 170px;
			width: 100%;
		    height : 600px;
		    border: 1px solid #1020FF;
		}
		#canvas-extended{
			margin-top: 170px;
			width: 100%;
		    height : 700px;
		    border: 1px solid #1020FF;
		}
		input[type=text] {
		   
		}
                .btn {
                        -moz-box-shadow:inset 0px 1px 15px 0px #ffffff;
                        -webkit-box-shadow:inset 0px 1px 15px 0px #ffffff;
                        box-shadow:inset 0px 1px 15px 0px #ffffff;
                        background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #b8b9e6), color-stop(1, #577f80) );
                        background:-moz-linear-gradient( center top, #b8b9e6 5%, #577f80 100% );
                        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#b8b9e6', endColorstr='#577f80');
                        background-color:#b8b9e6;
                        -webkit-border-top-left-radius:37px;
                        -moz-border-radius-topleft:37px;
                        border-top-left-radius:37px;
                        -webkit-border-top-right-radius:0px;
                        -moz-border-radius-topright:0px;
                        border-top-right-radius:0px;
                        -webkit-border-bottom-right-radius:37px;
                        -moz-border-radius-bottomright:37px;
                        border-bottom-right-radius:37px;
                        -webkit-border-bottom-left-radius:0px;
                        -moz-border-radius-bottomleft:0px;
                        border-bottom-left-radius:0px;
                        text-indent:0;
                        border:1px solid #5545e6;
                        display:inline-block;
                        color:#192154;
                        font-family:Arial;
                        font-size:15px;
                        font-weight:bold;
                        font-style:normal;
                        height:40px;
                        line-height:40px;
                        width:100px;
                        text-decoration:none;
                        text-align:center;
                        text-shadow:1px 1px 0px #fffad6;
                }
                .btn:hover {
                        background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #577f80), color-stop(1, #b8b9e6) );
                        background:-moz-linear-gradient( center top, #577f80 5%, #b8b9e6 100% );
                        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#577f80', endColorstr='#b8b9e6');
                        background-color:#577f80;
                }.btn:active {
                        position:relative;
                        top:1px;
                }
		#calc {
		}		

	</style>
    </head>
    <body>
	    <header>
		<div class="entrada" id="entrada1">Adicionar Pa&iacute;s
		     <input name="pais_input" id="IDpais" type="text"><br>
		     <input class="btn" name="AddPais" value="Adicionar" onclick="addP(document.getElementById('IDpais'));" type="button">
		</div>
		<div class="entrada" id="entrada2">Definir vizinhan&ccedil;a entre<br>
		     <input name="pais 1" id="IDp1" type="text"><br>e<br>
		     <input name="pais 2" id="IDp2" type="text"><br>
		     <input class="btn" name="AddEdge" value="Adicionar" onclick="javascript:addEdge();" type="button">
		</div>      
	    </header>
			<div id="canvas"></div>
	    <footer>
		    <button id="redesenhar" onclick="redraw1();">redesenhar</button>
		    <button id="calc" onclick="mCalcular();">Calcular</button>
	    </footer>
     <script type="text/javascript" src="all.js" content="text/html; charset=ISO-8859-1"></script>
     <script type="text/javascript">
     <?php 
            include 'n1.inc';
            if (isset($_REQUEST['param']))
            {       
                if($_GET["resultado"] === null){
                    echo $_GET['resultado'];
                }
            }
            include 'n2.inc';
     ?>
     </script>
     <script type="text/javascript" src="pais.js" content="text/html; charset=ISO-8859-1"></script>
  </body>
</html>
