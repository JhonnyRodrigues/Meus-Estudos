<?php

######## EXEMPLO DE DOWNLOAD DE UM ARQUIVO (HOSPEDADO EM UM SERVIDOR REMOTO) PARA DENTRO DO DIRETORIO DESSA PRÓPRIA APLICACAO ########
$url ='https://sgi.semaepiracicaba.sp.gov.br/downloads/suporte2023.exe'; // Initialize a file URL to the variable
$ch = curl_init($url); // Initialize the cURL session
$dir = './';// Initialize directory name where file will be save (will save the file within the itself folder where the application is located)
$file_name = basename($url);// Use basename() function to return the base name of file
$save_file_loc = $dir . $file_name;// Save file into file location
$fp = fopen($save_file_loc, 'wb'); //create a file with permissions of write and binary

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Use se a URL tiver protocolo SSL (https)

if (curl_exec($ch) === false) { //execute cURL
    echo 'Curl error: ' . curl_error($ch);
} else {
    echo 'Operation completed without any errors';
}

curl_close($ch);// Closes a cURL session and frees all resources

fclose($fp);// Close file


######## EXEMPLO DE DOWNLOAD DE UM ARQUIVO (HOSPEDADO EM UM SERVIDOR REMOTO) PARA A MÁQUINA LOCAL DO NAVEGADOR (CLIENTE) ########

// URL do arquivo a ser baixado
$file_url = 'https://sgi.semaepiracicaba.sp.gov.br/downloads/suporte2023.exe';
// Nome do arquivo após o download
$file_name = 'suporte2023.exe';

//Configura os cabeçalhos HTTP para forçar o download, especificando o tipo MIME type e definindo o cabeçalho com o nome do arquivo
header('Content-Type: application/octet-stream');
header('Content-Transfer-Encoding: Binary');
header("Content-disposition: attachment; filename=\"".$file_name."\"");

// Usa a biblioteca cURL para obter o conteúdo da URL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $file_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Use se a URL tiver SSL (https)

$data = curl_exec ($ch);
curl_close ($ch);

// Escreve na saída do buffer os dados do arquivo (presentes no conteúdo da URL), o que fará com que o navegador do cliente inicie o download do arquivo especificado.
echo $data;

?>