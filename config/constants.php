<?php

$adminContstants = [
    'adminAssets' => 'public/admin/assets/',
    'adminPages' => 'admin.pages',
    'adminLayouts' => 'admin.layouts',
    'adminIncludes' => 'admin.includes',
];

$frontendConstants = [];

$contants = $adminContstants + $frontendConstants;

return $contants;
?>