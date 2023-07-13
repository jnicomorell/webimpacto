<?php
require(dirname(__FILE__).'/config/config.inc.php');
require_once(dirname(__FILE__).'/init.php');

// Ruta CSV
$csvFile = 'https://wiki.webimpacto.net/docs/products.csv';

if (($handle = fopen($csvFile, "r")) !== FALSE) {
    fgetcsv($handle); 
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $product = new Product(); 

        $product->name[1] = $data[0]; // Nombre
        $product->reference = $data[1]; // Referencia
        $product->ean13 = $data[2]; // EAN13
        $product->wholesale_price = $data[3]; // Precio de coste
        $product->price = $data[4]; // Precio de venta
        $product->id_tax_rules_group = $data[5]; // IVA
        $product->quantity = $data[6]; // Cantidad
        // $data[7] serían las categorías, como las categorías no existen hay que crearlas manualmente o crear otro script que cree primero las categorías
        // $data[8] sería la marca, como las marcas no existen hay que crearlas manualmente o crear otro script que cree primero las marcas

        $product->add(); // Guardamos el producto
    }

    fclose($handle);
}
