<?php
if (is_array($arguments[0]) == true)
{
    foreach ($arguments[0] as $item)
    {
        c1::test($item);
    }
}

return $arguments[0];