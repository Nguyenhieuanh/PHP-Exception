<?php


class DivideByZeroException extends Exception
{
    function __toString()
    {
        return "Can't divide by zero";
    }
}