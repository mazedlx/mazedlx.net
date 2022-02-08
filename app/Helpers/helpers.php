<?php

use League\CommonMark\CommonMarkConverter;

function markdown($markdown)
{
    $converter = new CommonMarkConverter();

    return $converter->convert($markdown);
}
