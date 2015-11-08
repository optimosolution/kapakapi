<?php

$file = Yii::app()->basePath . '/../uploads/chords/' . $model->chords;
if ((is_file($file)) && (file_exists($file))) {
    $content = file_get_contents($file);
} else {
    header("HTTP/1.0 404 Not Found");
    exit;
}
header('Content-Description: File Transfer');
header("Content-type: application/octet-stream");
header('Content-Disposition: attachment; filename="' . basename($model->chords) . '"');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header("Content-Length: " . filesize($file));
ob_clean();
flush();
echo $content;
exit;
?>
