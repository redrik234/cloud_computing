<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/1' => [[['_route' => '1', '_controller' => 'App\\Controller\\FirstLabController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/2' => [[['_route' => '2', '_controller' => 'App\\Controller\\SecondLabController::index'], null, null, null, false, false, null]],
        '/2/search' => [[['_route' => 'planet_search', '_controller' => 'App\\Controller\\SecondLabController::search'], null, null, null, false, false, null]],
        '/3' => [[['_route' => '3', '_controller' => 'App\\Controller\\ThirdLabController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
