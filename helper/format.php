<?php
function currency_format($number, $suffix = '₫')
{
    return number_format($number) . $suffix;
}
