<?php
header("Content-Type: application/pdf");

$file = file_get_contents('../pdf/label-test.pdf');

echo base64_encode($file);