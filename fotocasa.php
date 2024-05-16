<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 5.2.1
 */

/**
 * Database `fotocasa`
 */

/* `fotocasa`.`extras` */
$extras = array(
  array('id' => '1','nombre' => 'Ascensor'),
  array('id' => '2','nombre' => 'Amueblado'),
  array('id' => '3','nombre' => 'Garaje'),
  array('id' => '4','nombre' => 'Piscina'),
  array('id' => '5','nombre' => 'Calefacción '),
  array('id' => '6','nombre' => 'Trastero'),
  array('id' => '7','nombre' => 'Jardin'),
  array('id' => '8','nombre' => 'No amueblado'),
  array('id' => '9','nombre' => 'Aire acondicionado'),
  array('id' => '10','nombre' => 'Electrodomesticos')
);

/* `fotocasa`.`inmuebles_categioria` */
$inmuebles_categioria = array(
  array('id' => '1','nombre' => 'Comprar','descripcion' => 'Casas para comprar ','visible' => '0'),
  array('id' => '2','nombre' => 'Vender','descripcion' => 'Casas que estan a la venta ','visible' => '1'),
  array('id' => '3','nombre' => 'Alquilar  ','descripcion' => 'Casas que se pueden alquilar  ','visible' => '1'),
  array('id' => '4','nombre' => 'Obra nueva','descripcion' => 'Casas que son de obra nueva','visible' => '1')
);

/* `fotocasa`.`inmuebles_tipo` */
$inmuebles_tipo = array(
  array('Id' => '1','nombre' => 'Vivienda','visible' => '1'),
  array('Id' => '2','nombre' => 'Inmueble','visible' => '1')
);

/* `fotocasa`.`pisos` */
$pisos = array(
  array('id' => '1','titulo' => 'Acogedor Apartamento en Madrid','descripcion' => 'Encantador apartamento en el corazón de Madrid','precio' => '180000.00','id_tipo' => '2','habitaciones' => '2','banos' => '1','superficie' => '80.00','extras' => '2','fecha_publicacion' => '2024-05-01','estado' => 'Disponible','imagen_url' => 'https://www.booking.com/hotel/es/acogedor-apartamento-madrid-centro-atocha.es.html#','disponibilidad' => 'Comprar','provincia' => 'Madrid'),
  array('id' => '2','titulo' => 'Ático Soleado en Barcelona','descripcion' => 'Ático impresionante con vistas panorámicas','precio' => '250000.00','id_tipo' => '3','habitaciones' => '3','banos' => '2','superficie' => '150.00','extras' => '1,3','fecha_publicacion' => '2024-05-01','estado' => 'Disponible','imagen_url' => 'https://www.booking.com/hotel/es/atico-soleado-en-centro-de-barcelona-barcelona2.es.html','disponibilidad' => 'Comprar','provincia' => 'Barcelona'),
  array('id' => '3','titulo' => 'Bajo con Encanto en Valencia','descripcion' => 'Hermoso bajo con jardín','precio' => '350000.00','id_tipo' => '6','habitaciones' => '4','banos' => '3','superficie' => '200.00','extras' => '9,7','fecha_publicacion' => '2024-05-01','estado' => 'Disponible','imagen_url' => 'https://www.google.com/imgres?q=Bajo%20con%20Encanto%20en%20Valencia&imgurl=https%3A%2F%2Fimages-re-inmofactory.milanuncios.com%2Fimages%2Finmofactory%2Fdocuments%2F1%2F109791%2F35892183%2F658575387.jpg%3Frule%3Dhw396_70&imgrefurl=https%3A%2F%2Fwww.milanu','disponibilidad' => 'Obra nueva','provincia' => 'Valencia'),
  array('id' => '4','titulo' => 'Loft Moderno en Sevilla','descripcion' => 'Loft contemporáneo en un distrito histórico','precio' => '120000.00','id_tipo' => '5','habitaciones' => '1','banos' => '1','superficie' => '60.00','extras' => '6','fecha_publicacion' => '2024-05-01','estado' => 'Disponible','imagen_url' => 'https://www.google.com/imgres?q=Loft%20Moderno%20en%20Sevilla&imgurl=https%3A%2F%2Fcf.bstatic.com%2Fxdata%2Fimages%2Fhotel%2Fmax1024x768%2F320845120.jpg%3Fk%3D30358f57924c3652caac773628015d398e7d11ae33eafeb50817f8c202fcc692%26o%3D%26hp%3D1&imgrefurl=https','disponibilidad' => 'Obra nueva','provincia' => 'Sevilla'),
  array('id' => '5','titulo' => 'Apartamento Frente al Mar en Málaga','descripcion' => 'Apartamento de lujo con vista al mar','precio' => '400000.00','id_tipo' => '1','habitaciones' => '2','banos' => '2','superficie' => '100.00','extras' => '4,3','fecha_publicacion' => '2024-05-01','estado' => 'Disponible','imagen_url' => 'http://ejemplo.com/imagen5.jpg','disponibilidad' => 'Comprar','provincia' => 'Malaga'),
  array('id' => '6','titulo' => 'Estudio en la coruña','descripcion' => 'Estudio gallego rodeada de naturaleza','precio' => '300000.00','id_tipo' => '3','habitaciones' => '2','banos' => '2','superficie' => '180.00','extras' => '7,6','fecha_publicacion' => '2024-05-01','estado' => 'Disponible','imagen_url' => 'https://www.fotocasa.es/es/comprar/vivienda/ribeira/parking-trastero/182569318/d?from=list','disponibilidad' => 'Alquilar','provincia' => 'Coruña'),
  array('id' => '7','titulo' => 'Apartamento en el Centro de la Ciudad en Malaga ','descripcion' => 'Apartamento conveniente cerca de servicios','precio' => '200000.00','id_tipo' => '2','habitaciones' => '1','banos' => '1','superficie' => '70.00','extras' => '2','fecha_publicacion' => '2024-05-01','estado' => 'Disponible','imagen_url' => 'http://ejemplo.com/imagen7.jpg','disponibilidad' => 'Alquilar','provincia' => 'Malaga'),
  array('id' => '8','titulo' => 'Duplex de Montaña en Sierra Nevada','descripcion' => 'Duplex acogedor en la montaña','precio' => '450000.00','id_tipo' => '3','habitaciones' => '3','banos' => '2','superficie' => '220.00','extras' => '8,6','fecha_publicacion' => '2024-05-01','estado' => 'Disponible','imagen_url' => 'https://www.google.com/imgres?q=Duplex%20de%20Monta%C3%B1a%20en%20Sierra%20Nevada&imgurl=https%3A%2F%2Fcf.bstatic.com%2Fxdata%2Fimages%2Fhotel%2Fmax1024x768%2F428290322.jpg%3Fk%3Dc3c1ad595576fd50b05f7f7dd40de5d061fd5e409bd65b1880779ad1cd0e301b%26o%3D%26hp','disponibilidad' => 'Comprar','provincia' => 'Granada'),
  array('id' => '9','titulo' => 'Casa Adosada en Toledo','descripcion' => 'Casa adosada histórica con comodidades modernas','precio' => '280000.00','id_tipo' => '2','habitaciones' => '2','banos' => '2','superficie' => '120.00','extras' => '10','fecha_publicacion' => '2024-05-01','estado' => 'Disponible','imagen_url' => 'https://www.google.com/imgres?q=Duplex%20de%20Monta%C3%B1a%20en%20Sierra%20Nevada&imgurl=https%3A%2F%2Fcf.bstatic.com%2Fxdata%2Fimages%2Fhotel%2Fmax1024x768%2F428290322.jpg%3Fk%3Dc3c1ad595576fd50b05f7f7dd40de5d061fd5e409bd65b1880779ad1cd0e301b%26o%3D%26hp','disponibilidad' => 'Comprar','provincia' => 'Toledo'),
  array('id' => '10','titulo' => 'Estudio en Asturias','descripcion' => 'Casa de campo pintoresca en un pueblo pintoresco','precio' => '150000.00','id_tipo' => '7','habitaciones' => '1','banos' => '1','superficie' => '50.00','extras' => '7','fecha_publicacion' => '2024-05-01','estado' => 'Disponible','imagen_url' => 'https://www.google.com/imgres?q=Duplex%20de%20Monta%C3%B1a%20en%20Sierra%20Nevada&imgurl=https%3A%2F%2Fcf.bstatic.com%2Fxdata%2Fimages%2Fhotel%2Fmax1024x768%2F428290322.jpg%3Fk%3Dc3c1ad595576fd50b05f7f7dd40de5d061fd5e409bd65b1880779ad1cd0e301b%26o%3D%26hp','disponibilidad' => 'Alquilar','provincia' => 'Asturias')
);

/* `fotocasa`.`provincias` */
$provincias = array(
  array('nombre_provincia' => 'Álava'),
  array('nombre_provincia' => 'Albacete'),
  array('nombre_provincia' => 'Alicante'),
  array('nombre_provincia' => 'Almería'),
  array('nombre_provincia' => 'Ávila'),
  array('nombre_provincia' => 'Badajoz'),
  array('nombre_provincia' => 'Baleares'),
  array('nombre_provincia' => 'Barcelona'),
  array('nombre_provincia' => 'Burgos'),
  array('nombre_provincia' => 'Cáceres'),
  array('nombre_provincia' => 'Cádiz'),
  array('nombre_provincia' => 'Castellón'),
  array('nombre_provincia' => 'Ciudad Real'),
  array('nombre_provincia' => 'Córdoba'),
  array('nombre_provincia' => 'La Coruña'),
  array('nombre_provincia' => 'Cuenca'),
  array('nombre_provincia' => 'Gerona'),
  array('nombre_provincia' => 'Granada'),
  array('nombre_provincia' => 'Guadalajara'),
  array('nombre_provincia' => 'Guipúzcoa'),
  array('nombre_provincia' => 'Huelva'),
  array('nombre_provincia' => 'Huesca'),
  array('nombre_provincia' => 'Jaén'),
  array('nombre_provincia' => 'León'),
  array('nombre_provincia' => 'Lérida'),
  array('nombre_provincia' => 'La Rioja'),
  array('nombre_provincia' => 'Lugo'),
  array('nombre_provincia' => 'Madrid'),
  array('nombre_provincia' => 'Málaga'),
  array('nombre_provincia' => 'Murcia'),
  array('nombre_provincia' => 'Navarra'),
  array('nombre_provincia' => 'Orense'),
  array('nombre_provincia' => 'Asturias'),
  array('nombre_provincia' => 'Palencia'),
  array('nombre_provincia' => 'Las Palmas'),
  array('nombre_provincia' => 'Pontevedra'),
  array('nombre_provincia' => 'Salamanca'),
  array('nombre_provincia' => 'Santa Cruz de Tenerife'),
  array('nombre_provincia' => 'Cantabria'),
  array('nombre_provincia' => 'Segovia'),
  array('nombre_provincia' => 'Sevilla'),
  array('nombre_provincia' => 'Soria'),
  array('nombre_provincia' => 'Tarragona'),
  array('nombre_provincia' => 'Teruel'),
  array('nombre_provincia' => 'Toledo'),
  array('nombre_provincia' => 'Valencia'),
  array('nombre_provincia' => 'Valladolid'),
  array('nombre_provincia' => 'Vizcaya'),
  array('nombre_provincia' => 'Zamora'),
  array('nombre_provincia' => 'Zaragoza'),
  array('nombre_provincia' => 'Ceuta'),
  array('nombre_provincia' => 'Melilla')
);

/* `fotocasa`.`tipo_casas` */
$tipo_casas = array(
  array('cod_tipo' => '1','tipo' => 'Casa de Campo'),
  array('cod_tipo' => '2','tipo' => 'Casa de Ciudad'),
  array('cod_tipo' => '3','tipo' => 'Casa de Playa')
);

/* `fotocasa`.`tipo_pisos` */
$tipo_pisos = array(
  array('codigo_tipo' => '1','tipo' => 'Plantas intermedias','extra' => NULL),
  array('codigo_tipo' => '2','tipo' => 'Apartamento','extra' => NULL),
  array('codigo_tipo' => '3','tipo' => 'Atico','extra' => NULL),
  array('codigo_tipo' => '4','tipo' => 'Duplex','extra' => NULL),
  array('codigo_tipo' => '5','tipo' => 'Loft','extra' => NULL),
  array('codigo_tipo' => '6','tipo' => 'Planta baja','extra' => NULL),
  array('codigo_tipo' => '7','tipo' => 'Estudio','extra' => NULL)
);

/* `fotocasa`.`tipo_vivienda` */
$tipo_vivienda = array(
  array('id_tipo' => NULL,'Nombre' => 'Casa','Descripcion' => 'Una casa con jardín','Direccion' => '123 Calle Principal'),
  array('id_tipo' => NULL,'Nombre' => 'Apartamento','Descripcion' => 'Un apartamento en la ciudad','Direccion' => '456 Avenida Central'),
  array('id_tipo' => NULL,'Nombre' => 'Chalet','Descripcion' => 'Un chalet en las montañas','Direccion' => '789 Calle de la Sierra')
);

/* `fotocasa`.`usuarios` */
$usuarios = array(
  array('id' => '6154993','nombre' => 'adam','email' => 'Bellver@gmail.com','contrasenya' => 'b5c5167b15ccd1336900e40848aef675')
);
