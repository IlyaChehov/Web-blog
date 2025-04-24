<?php

function showError(int $code = 404, string $title = 'Страница не нашлась | Web Blog')
{
    require_once DIR_VIEWS .  "/errors/{$code}.php";
    die;
}