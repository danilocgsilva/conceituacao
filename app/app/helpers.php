<?php

use Illuminate\Support\Collection;
use Illuminate\View\View;


if (!function_exists('viewWithViewModel')) {
    function viewWithViewModel(
        string $bladePath,
        string $viewDataClass,
        array|Collection $data = []
    ): View
    {
        return view($bladePath, [
            'viewData' => new $viewDataClass($data)
        ]);
    }
}

if (!function_exists('paginationClasses')) {
    function paginationClasses(
        bool $current, 
        bool $firstPagination, 
        bool $lastPagination
    ): string
    {
        $baseString = $current
            ? "py-2 px-4 border border-gray-300 bg-blue-500 text-white hover:bg-blue-600"
            : "py-2 px-4 border border-gray-300 bg-white text-blue-500 hover:bg-gray-50";

        $baseString .= $firstPagination ? " rounded-l-md" : " border-l-0";
        $baseString .= $lastPagination ? " rounded-r-md" : " border-r-0";

        return $baseString;
    }
}
