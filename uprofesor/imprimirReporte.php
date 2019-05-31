<html>
    <head>
        <script language="javascript">
            function crear(){
                var col = document.getElementById("cols").value;
                var filas = document.getElementById("rows").value;
                var tabla="<table border=\"0\">";
                
                tabla+="<tr><td></td>";
                for(j=0;j<col;j++)
                { 
                    tabla+="<td>"+(j+1)+ "</td>";
                }
                tabla+="</tr>";
                
                for(i=0;i<filas;i++)
                {
                    tabla+="<tr>";
                    tabla+="<td>"+(i+1)+ "</td>";
                    for(j=0;j<col;j++)
                    { 
                        tabla+="<td>"+"<input type=\"text\" size=\"1\">"+ "</td>";
                    }
                    tabla+="</tr>";
                }

                for(i=0;i<filas;i++)
                {
                    tabla+="<tr>";
                    tabla+="<td>"+(i+1)+ "</td>";
                    for(j=0;j<1;j++)
                    { 
                        tabla+="<td>"+"<input type=\"text\" size=\"1\">"+ "</td>";
                    }
                    tabla+="</tr>";
                }

                tabla+="</table>";
                document.getElementById("resultado").innerHTML=tabla;
            }

            function crear2() {
                document.getElementById("resultado").innerHTML="";
            }
        </script>
    </head>
    <body>
        <form>
            <input type="text" id="cols" /> Columnas <br />
            <input type="text" id="rows" /> Filas <br />
            <input type="button" id="enviar" value="crear tabla" onclick="crear()"/>
            <input type="button" id="limpiar" value="Limpiar" onclick="crear2()"/>
        </form>
        <div id="resultado"></div>
    </body>
</html>