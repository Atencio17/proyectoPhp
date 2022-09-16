<?php

require("../componentes/SelectPdf.Api.php");

$directorioSalida = "../recursos/archivossubidos/";

$tesxtUrl = "https://selectpdf.com/demo/files/selectpdf.pdf";

$rutaArchivoEnviado = $directorioSalida.basename($_FILES['archivo']['name']);
move_uploaded_file($_FILES['archivo']['name'],$rutaArchivoEnviado);

$testPdf = $rutaArchivoEnviado;
$localFile = "Result.txt";
$apiKey = "51630344-e402-40aa-b627-12dfb3949147";

echo ("This is SelectPdf-" . SelectPdf\Api\ApiClient::CLIENT_VERSION . ".\n");

try {
    $client = new SelectPdf\Api\PdfToTextClient($apiKey);

    // set parameters - see full list at https://selectpdf.com/pdf-to-text-api/
    $client
        ->setStartPage(1) // start page (processing starts from here)
        ->setEndPage(0) // end page (set 0 to process file til the end)
        ->setOutputFormat(SelectPdf\Api\OutputFormat::Text) // set output format (0-Text or 1-HTML)
    ;

    echo ("Starting pdf to text ...\n");
    
    // convert local pdf to local text file
    $client->getTextFromFileToFile($testPdf, $localFile);

    // extract text from local pdf to memory
    // $text = $client->getTextFromFile($testPdf);
    // print text
    // echo($text);

    // convert pdf from public url to local text file
    // $client->getTextFromUrlToFile($testUrl, $localFile);

    // extract text from pdf from public url to memory
    // $text = $client->getTextFromUrl($testUrl);
    // print text
    // echo($text);

    echo ("Finished! Number of pages processed: " . $client->getNumberOfPages() . ".\n");

    // get API usage
    $usageClient = new \SelectPdf\Api\UsageClient($apiKey);
    $usage = $usageClient->getUsage(true);
    echo("Conversions remained this month: " . $usage["available"] . ".\n");

}
catch (Exception $ex) {
	echo("An error occurred: " . $ex . ".\n");
}
?>