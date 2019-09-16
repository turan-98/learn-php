<?php 

//conecta com o mysql PDO
function db_connect(){
    $PDO = new PDO('mysql:host='. DB_HOST . ';dbname='. DB_NAME . ';charset=utf8',DB_USER,DB_PASS);
    return $PDO;
}
//function converter datas
function dateConvert($date){
    if(!strstr($date,'/')){
        // $date está no formato ISO (yyyy-mm-dd) e deve ser convertida
        // para dd/mm/yyyy
       //sscanf passa um formato especifico para a string
        sscanf($date,'%d-%d-%d',$y,$m,$d);
        //sprintf(format,arg1,arg2,arg++)
        /**
         * escreve o formato da string para a variável
         * ela opera step-by-step, significa que todos os parametros
         * serão inseridos após os (%)
         */
        return sprintf('%02d/%02d/%04d',$d,$m,$y);
    }else{
        //data no formato br para ser convertida para iso
        sscanf($date,'%d%d%d',$d,$m,$y);
        return sprintf('%04d-%02d-%02d',$y,$m,$d);
    }
    return false;
}
// calcula a idade a partir da data de nascimento
function calculateAge($birthdate){
    $now = new DateTime();
    // retorna diferença entre duas datas
    $diff = $now->diff(new DateTime($birthdate));

    return $diff->y;
}
?>