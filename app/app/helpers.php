<?php

if (!function_exists('viewWithViewModel')) {
    function viewWithViewModel(string $bladePath, string $viewDataClassa, array $data = [])
    {
        return view($bladePath, [
            'viewData' => new $viewDataClassa()
        ]);
    }
}