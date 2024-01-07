<?php

namespace LamTranB\VietnameseTitleCase;

class VietnameseTitleCase
{
    /**
     * Transform string to title case.
     *
     * @param string $title
     * @return string
     */
    public static function transform(string $title): string
    {
        // Convert the name to lowercase
        $lowercaseName = mb_strtolower($title, 'UTF-8');

        // Convert the lowercase name to title case.
        return mb_convert_case($lowercaseName, MB_CASE_TITLE, 'UTF-8');
    }
}