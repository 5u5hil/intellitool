<?php
$adminContstants = [
    'adminAssets' => 'public/admin/assets/',
    'adminPages' => 'admin.pages',
    'adminLayouts' => 'admin.layouts',
    'adminIncludes' => 'admin.includes',
    'adminPaginateNo' => 10,
    
];
$frontendConstants = [];
$contants = $adminContstants + $frontendConstants;
return $contants;
?>