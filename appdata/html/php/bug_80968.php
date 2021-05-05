<?php
class c1
{
    public static function __callStatic($method_name, $arguments)
    {
        return require('bug_80968_2.php');
    }
}

$data = array(1, 2);

for ($i = 0; $i < 100; $i++)
{
    c1::test($data);
}