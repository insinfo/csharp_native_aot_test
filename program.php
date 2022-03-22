<?php

require_once 'vendor/autoload.php';

// Parse PDF file and build necessary objects.
$parser = new \Smalot\PdfParser\Parser();
$pdf = $parser->parseFile('C:\MyCsharpProjects\fsbackup2\1417.pdf');
$text = $pdf->getPages()[0]->getText();
//print text
echo $text;

use phpseclib3\Net\SFTP;
//connect to SSH/SFTP server and list directory
$sftp = new SFTP('192.168.133.13');
$sftp->login('isaque.neves', 'Ins257257');
$sftp->chdir('/var/www');
//Directory Listing
foreach ($sftp->nlist() as &$directoryName) {
    echo $directoryName . "\r\n";
}

echo "End Hello World!";
