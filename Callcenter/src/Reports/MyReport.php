<?php

namespace App\Reports;

class MyReport extends \koolreport\KoolReport
{
    use \koolreport\clients\Bootstrap;
    public function settings()
    {
        return array(
            "assets" => array(
                "path" => "../../webroot/koolreport_assets",
                "url" => "webroot/koolreport_assets",
            ),
            "dataSources" => array(
                "bdcallcenter" => array(
                    'host' => 'localhost',
                    'username' => 'root',
                    'password' => '',
                    'dbname' => 'bdcallcenter',
                    'charset' => 'utf8',
                    'class' => "\koolreport\datasources\MySQLDataSource",
                ),
            ),
        );
    }

    
    public function setup()
    {
        
        $this->src('bdcallcenter')->query("
        SELECT campañas.nombre as 'Campaña',COUNT(campaña_id)as 'No.Llamadas'
        FROM registrollamadascobranzas
        INNER JOIN campañas
        ON registrollamadascobranzas.campaña_id = campañas.id
        GROUP BY campaña_id
        HAVING COUNT(campaña_id) > 0;")
        ->pipe($this->dataStore('result'));

        $this->src('bdcallcenter')->query("
        SELECT respuestas.estado as 'Estado',COUNT(respuesta_id)as 'No.Llamadas'
        FROM registrollamadascobranzas
        INNER JOIN respuestas
        ON registrollamadascobranzas.respuesta_id = respuestas.id
        GROUP BY respuesta_id
        HAVING COUNT(respuesta_id) > 0
        ")
        ->pipe($this->dataStore('result2'));

        $this->src('bdcallcenter')->query("
        SELECT callcenters.nombre as 'Callcenter',COUNT(callcenter_id)as 'No.Llamadas'
        FROM registrollamadascobranzas
        INNER JOIN callcenters
        ON registrollamadascobranzas.callcenter_id = callcenters.id
        GROUP BY callcenter_id
        HAVING COUNT(callcenter_id) > 0
        ")
        ->pipe($this->dataStore('result3'));

        $this->src('bdcallcenter')->query("
        SELECT  (clientes.nombre)as 'Clientes' ,(productos.precio) as 'Valor a Pagar'
        FROM `contratos` 
        INNER JOIN clientes ON clientes.id=contratos.cliente_id
        INNER JOIN productos on productos.id=contratos.producto_id
        ")
        ->pipe($this->dataStore('result4'));

        $this->src('bdcallcenter')->query("
        SELECT sum(productos.precio) as 'Total Cartera'
        FROM `contratos` 
        INNER JOIN clientes ON clientes.id=contratos.cliente_id
        INNER JOIN productos on productos.id=contratos.producto_id
      
        ")
        ->pipe($this->dataStore('result4.1'));

    


    $this->src('bdcallcenter')->query("
        
        SELECT monthname(fecha_llamada)as 'Mes',count(month(fecha_llamada)) as 'No.Llamadas' FROM registrollamadascobranzas GROUP BY month(fecha_llamada) HAVING COUNT(month(fecha_llamada)) > 0
        ")
        ->pipe($this->dataStore('resultfecha'));

        $this->src('bdcallcenter')->query("
        SELECT estadopagos.estado as 'Estado de Pago',COUNT(estadopago_id)as 'No.Pagos'
        FROM contratos
        INNER JOIN estadopagos
        ON contratos.estadopago_id = estadopagos.id
        GROUP BY estadopago_id
        HAVING COUNT(estadopago_id) > 0;
      
        ")
        ->pipe($this->dataStore('result5'));


        $this->src('bdcallcenter')->query("
       
        SELECT monthname(fechafin)as 'Mes', estadopagos.estado as 'Estado de Pago',productos.nombre as'Producto',count(estadopago_id)as 'No.Contratos'
        FROM contratos
        INNER JOIN estadopagos
        ON contratos.estadopago_id = estadopagos.id
        INNER JOIN productos
        ON contratos.producto_id=productos.id
        where estadopago_id ='1'
        GROUP BY estadopago_id
        HAVING COUNT(month(fechafin) )> 0;
        
       
        ")
        ->pipe($this->dataStore('resultdefensa1'));


        $this->src('bdcallcenter')->query("
       
        SELECT monthname(fechafin)as 'Mes', estadopagos.estado as 'Estado de Pago',productos.nombre as'Producto',count(estadopago_id)as 'No.Contratos'
        FROM contratos
        INNER JOIN estadopagos
        ON contratos.estadopago_id = estadopagos.id
        INNER JOIN productos
        ON contratos.producto_id=productos.id
        where estadopago_id ='2'
        GROUP BY estadopago_id
        HAVING COUNT(month(fechafin) )> 0;
        
       
        ")
        ->pipe($this->dataStore('resultdefensa2'));



        $this->src('bdcallcenter')->query("
       
        SELECT monthname(fechafin)as 'Mes', estadopagos.estado as 'Estado de Pago',productos.nombre as'Producto',count(estadopago_id)as 'No.Contratos'
        FROM contratos
        INNER JOIN estadopagos
        ON contratos.estadopago_id = estadopagos.id
        INNER JOIN productos
        ON contratos.producto_id=productos.id
        where estadopago_id ='3'
        GROUP BY estadopago_id
        HAVING COUNT(month(fechafin) )> 0;
        
       
        ")
        ->pipe($this->dataStore('resultdefensa3'));


    }
}
