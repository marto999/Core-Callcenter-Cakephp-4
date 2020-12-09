<!DOCTYPE html>
<html>
<head>
<title>Reportes</title>
    <style>
        #reports section {
            display: none;
        }

        button{
            color:white;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi">

    </script>

</head>
<body>

<style>
svg > g > g:last-child { pointer-events: none }
</style>

            

<h1>Reportes </h1>

    <section id="reports">

        <form id="myForm">
            <select id="types">
                <option value="" selected>Escoger Reporte</option>
                <option value="report-a">Reporte por Campaña</option>
                <option value="report-b">Reporte por Éxito de Llamadas</option>
                <option value="report-c">Reporte por Callcenter</option>
                <option value="report-d">Reporte por Clientes</option>
                <option value="report-e">Reporte Mensual</option>
                <option value="report-f">Reporte Mensual por Producto 1</option>
                <option value="report-g">Reporte Mensual por Producto 2</option>
                <option value="report-h">Reporte Mensual por Producto 3</option>
                
            </select>

        </form>
        <br><br>
        <!-- <p><button id="showAll">Mostrar Todos los Reportes</button></p> -->

        <section id="report-a" class="my-report" style="position:static;width:100%">

            <h2>Reporte Por campaña</h2>
                <?php \koolreport\widgets\google\Piechart::create(array("dataSource" => $this->dataStore("result")));?>
            <div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                <br>
             </div>
             <?php \koolreport\widgets\google\Table::create(array("dataSource" => $this->dataStore("result")));?>
        </section>

          <section id="report-a" class="my-report" style="position:relative;width:100%">

            <h2>Reporte Por campaña</h2>

            <div id="chart_div">
            <?php \koolreport\widgets\google\Piechart::create(array("dataSource" => $this->dataStore("result")));?>
            </div>
            
            <div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                <br>
             </div>
                 <?php \koolreport\widgets\google\Table::create(array("dataSource" => $this->dataStore("result")));?>
        </section>


        <section id="report-b" class="my-report" style="position:relative;width:100%">

        <h2>Reporte por Éxito de Llamadas</h2>
        <?php \koolreport\widgets\google\Piechart::create(array("dataSource" => $this->dataStore("result2")));?>
        <div><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i
        n reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        <br>
        </div>
        <?php \koolreport\widgets\google\Table::create(array("dataSource" => $this->dataStore("result2")));?>
    </section>




    <section id="report-c" class="my-report" style="position:absolute;width:100%">

        <h2>Reporte por Callcenter</h2>
        <?php \koolreport\widgets\google\Barchart::create(array("dataSource" => $this->dataStore("result3")));?>
        <div>
        <p>
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        <br></div>
        <?php \koolreport\widgets\google\Table::create(array("dataSource" => $this->dataStore("result3")));?>
    </section>



    <section id="report-d" class="my-report" style="position:absolute;width:100%">      
    <h2>Reporte por Cliente</h2>
    <div>
     "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    <br></div>
    <?php \koolreport\widgets\google\Table::create(array("dataSource" => $this->dataStore("result4", )));?>
	<?php \koolreport\widgets\google\Table::create(array("dataSource" => $this->dataStore("result4.1"))); ?>
    </section>





    <section id="report-e" class="my-report" style="position:absolute;width:100%">      
    <h2>Reporte por Mes</h2>
    <div>
     "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    <br></div>
    <?php \koolreport\widgets\google\Table::create(array("dataSource" => $this->dataStore("resultfecha", )));?>
    </section>
 
    </section>

    <section id="report-f" class="my-report" style="position:absolute;width:100%">      
    <h2>Reporte por Mes 1</h2>
    <div>
     "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    <br></div>
    <?php \koolreport\widgets\google\Table::create(array("dataSource" => $this->dataStore("resultdefensa1", )));?>
    </section>
 
    </section>


    <section id="report-g" class="my-report" style="position:absolute;width:100%">      
    <h2>Reporte por Mes 2</h2>
    <div>
     "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    <br></div>
    <?php \koolreport\widgets\google\Table::create(array("dataSource" => $this->dataStore("resultdefensa2", )));?>
    </section>
 
    </section>


    <section id="report-h" class="my-report" style="position:absolute;width:100%">      
    <h2>Reporte por Mes 3</h2>
    <div>
     "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    <br></div>
    <?php \koolreport\widgets\google\Table::create(array("dataSource" => $this->dataStore("resultdefensa3", )));?>
    </section>
 
    </section>







</body>

<script>
$("#showAll").click(function(){
   $(".my-report").show();
});

$("#types").change(function(){
var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
    $(".my-report").hide();
    $("#" + valueSelected).show();
})
</script>

</html>