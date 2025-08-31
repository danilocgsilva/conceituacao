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