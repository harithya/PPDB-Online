<?php

function user($guard = 'web')
{
    return auth()->guard($guard)->user();
}
