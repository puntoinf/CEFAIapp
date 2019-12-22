<page>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    

    <?php
        require_once("../session.php");

        $carrera = $_POST['carrerapdf'];
        
        //conectamos a la base de datos y el TDA de consulta
        require_once("../connecion.php");
        require_once("../consulta.php");

        //realizamos las consultas
        $consulta = new CONSULTA();

        if($carrera == 1){
            $registros = $consulta->getConsulta("SELECT * FROM carrera WHERE idCarrera < 4 ");
        }else{
            if($carrera == 2){
                $registros = $consulta->getConsulta("SELECT * FROM carrera WHERE idCarrera < 3");
            }else{
                $registros = $consulta->getConsulta("SELECT * FROM carrera < 4 ");
            }
        }

        foreach($registros as $fila){
            //imprimimos los años
            echo $fila['nombre']."-";
        }

    ?>
    <style>
    td{
        width: 100px;
        border: 1px;
        margin: 0px;
        padding: 5px;
        text-align: center;
    }
    </style>
    <h1></h1>
    <table style="min-width: 95%; margin: 5%;">
        <tr>
            <td>Lunes</td>
            <td>Martes</td>
            <td>Miercoles</td>
            <td>Jueves</td>
            <td>Viernes</td>
        </tr>
        <tr>
            <td>Lunes</td>
            <td>Martes</td>
            <td>Miercoles</td>
            <td>Jueves</td>
            <td>Viernes</td>
        </tr>
   </table>
</page>