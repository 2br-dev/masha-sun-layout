<?php  return '// $count - Количество картин
// $tpl - шаблон выдачи
// $parent - относительный путь к директории

$galleryDocs = $modx->getChildIds($parent, 1);
shuffle($galleryDocs);
$randDocs = array_slice($galleryDocs, 0, $count);

$output = \'\';

foreach($randDocs as $doc){
    
    $params = array(
        \'id\' => $doc,
        \'field\' => \'pagetitle\'
    );
    
    $pagetitle = $modx->runSnippet(\'lingua.getValue\', $params);
    $imageTv = $modx->getObject(\'modTemplateVarResource\', array(
        \'tmplvarid\' => 2,
        \'contentid\' => $doc
    ));
    
    $image = "";
    $padding = 0;
    
    if($imageTv){
        $image = $imageTv->get(\'value\');
    }
    
    
    if($image){

        $imageParams = getimagesize(MODX_SITE_URL . $image);
        $width = $imageParams[0];
        $height = $imageParams[1];
        $padding = ((int)$height / (int)$width) * 100;
    }
    
    $chunkParams = array(
        \'img-url\' => $image,
        \'title\' => $pagetitle,
        \'padding-top\' => str_replace(\',\', \'.\', (string)$padding)
    );
    
    $chunk = $modx->getChunk($tpl, $chunkParams);
    $output .= $chunk;
}

return $output;
return;
';