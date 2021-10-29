<?php
$defaultLinguaCorePath = $modx->getOption('core_path') . 'components/lingua/';
$linguaCorePath = $modx->getOption('lingua.core_path', null, $defaultLinguaCorePath);
$lingua = $modx->getService('lingua', 'Lingua', $linguaCorePath . 'model/lingua/', $scriptProperties);

$activeOnly = $modx->getOption('activeOnly', $scriptProperties, '1');
$defaultLinguaCorePath = $modx->getOption('core_path') . 'components/lingua/';
$linguaCorePath = $modx->getOption('lingua.core_path', null, $defaultLinguaCorePath);
$lingua = $modx->getService('lingua', 'Lingua', $linguaCorePath . 'model/lingua/', $scriptProperties);
$languages = $lingua->getLanguages($activeOnly);

return $languages[$modx->cultureKey]['local_name'];
return;
