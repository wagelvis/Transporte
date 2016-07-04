<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Inscripcion_cliente</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Inscripcion_cliente</h1>
            <br>
            <form method = 'get' action = 'http://localhost/php/railiz/transporte/public/inscripcion_cliente'>
                <button class = 'btn btn-primary'>Inscripcion_cliente Index</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>nombre_estudiante : </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->nombre_estudiante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>apellido_estudiante : </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->apellido_estudiante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>sector_ruta : </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->sector_ruta}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>calle_ruta : </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->calle_ruta}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>casa_ruta : </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->casa_ruta}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>colegio_estudiante : </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->colegio_estudiante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>grado_estudiante : </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->grado_estudiante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>seccion_estudiante : </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->seccion_estudiante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>telefono_estudiante : </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->telefono_estudiante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>nombre_representante : </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->nombre_representante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>apellido_representante : </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->apellido_representante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>ci_representante : </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->ci_representante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>id_usuario : </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->id_usuario}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>telefono_representante : </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->telefono_representante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>fecha_inscripcion : </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->fecha_inscripcion}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>contrato_inscripcion : </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->contrato_inscripcion}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
