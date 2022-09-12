<?php
$array = array(
'inapo' => 'yo',
'EMPO' => 'tu',
'ÁPO' => 'el',
'ÁAPO' => 'ella',
'ITAPO' => 'nosotros',
'EMË' => 'ustedes',
'BEMPO' => 'ellos',
'sewa' => 'flor',
'SAYLA' => 'hermana',
'vamos al monociclo' => 'ivan',
'soy ivan y te quiero mi werita' => 'blanquita',
'jabchi - expresion exclusiva de la mujer para referirse al papa y ATCHAY para el hombre' => 'papa',
'nayye majamyöla' => 'abuela',
'natchay paöla' => 'abuelo',
'chïla = tia mayor) nësa = tia menor' => 'tia',
'kúmuri = tio mayor)- jaabi = tio menor' => 'tio',
'ákoro = expresion de hermano y hermana menor para referirse a la hermana menor' => 'hermana',
'ayye' => 'mama',
'sayla' => 'hermano',
'kawi' => 'cerro',
'katäku' => 'singular',
'katäkute' => 'plural',
'sime' => 'todo',
'sïmeta' => 'todo',
'bueytuk' => 'porque',
'bawwe' => 'mar',
'bawwe jamyöla' => 'mar viejo',
'ju' => 'el,la',
'suamsi' => 'calmado',
'suamsi taawak' => 'quedo tranquilo',
'jeeka' => 'viento - aire',
'juka jeekate' => 'el viento',
'mekka' => 'lejos',
'bicha' => 'para',
'mekka bicha beeba' => 'sacalo para alla lejos',
'buertuk' => 'porque',
'beeba' => 'saca',
'ju' => 'la',
'nayye' => 'señora',
'tekkipanoa' => 'trabajar',
'ka' => 'no',
'joome' => 'originario',
'tommi' => 'dinero',
'kaita' => 'nada',




);


$array1 = array(
'abuela' => 'nayye majamyola',
'abuelo' => 'natchay paola',
'papa' => 'jabchi',
'padre' => 'atchay',
'tia mayor' => 'chila',
'tia menor' => 'nesa',
'tio mayor' => 'kumuri',
'mama' => 'ayye',
'tio menor' => 'jaabi',
'hermana mayor' => 'akoro',
'hermano mayor' => 'abachi',
'expresion del hermano menor para referirse al  mayor' => 'saayi',
'hermano menor' => 'sayla',
'hermana menor' => 'waayi',
);

if($_POST['cboi']=="1") {
    while ($nombre_fruta = current($array)) {
        if ($nombre_fruta == strtolower($_POST['txto'])) {
            echo key($array);
        }
        next($array);
    } 
}
else {
	while ($nombre_fruta = current($array1)) {
        if ($nombre_fruta == strtolower($_POST['txto'])) {
            echo key($array1);
        }
        next($array1);
    } 
}
?>
