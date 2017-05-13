<?php

$localfile = __DIR__ . '/data/resume.md';
if (! file_exists($localfile)) {
    jsonResponse([
        'local' => 1,
        'errno' => 1,
        'show' => 0,
        'title' => '',
        'subtitle' => '',
        'content' => '',
    ]);
}

jsonResponse([
    'errno' => 0,
    'show' => 1,
    'title' => '苟锦阳的简历',
    'subtitle' => 'PHP开发',
    'content' => file_get_contents($localfile),
]);

function jsonResponse(array $data) {
    header('Content-type: application/json');
    exit(json_encode($data, JSON_UNESCAPED_UNICODE));
}
