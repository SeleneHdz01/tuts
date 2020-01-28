<?php 
/**File system - part 1*/

/* $quotes = readfile('prueba.txt');
 echo $quotes; */
$file = 'prueba.txt';

if(file_exists($file)){
    //read file
    echo readfile($file) . '<br />';
    //copy file
    copy($file, 'prueba2.txt'). '<br />';
    //absolute pag
    echo realpath($file) . '<br />';
    //File size
    echo filesize($file) . '<br />';
    //rename file
    rename($file, 'text.txt')
}else {
    echo 'El archivo no existe';
}
//make directory
mkdir('ejercicios');

?>