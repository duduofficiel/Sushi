<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'checkout' => [[], ['_controller' => 'App\\Controller\\CheckoutController::index'], [], [['text', '/checkout']], [], [], []],
    'checkout_process' => [[], ['_controller' => 'App\\Controller\\CheckoutController::handleCheckout'], [], [['text', '/checkout/process']], [], [], []],
    'checkout_success' => [[], ['_controller' => 'App\\Controller\\CheckoutController::success'], [], [['text', '/checkout/success']], [], [], []],
    'contactus' => [[], ['_controller' => 'App\\Controller\\ContactUsController::manage'], [], [['text', '/contact-us']], [], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\HomepageController::index'], [], [['text', '/']], [], [], []],
    'pricing' => [[], ['_controller' => 'App\\Controller\\PricingController::index'], [], [['text', '/pricing']], [], [], []],
    'app_pricing_plan_index' => [[], ['_controller' => 'App\\Controller\\PricingPlanController::index'], [], [['text', '/pricing/plan']], [], [], []],
    'app_pricing_plan_new' => [[], ['_controller' => 'App\\Controller\\PricingPlanController::new'], [], [['text', '/pricing/plan/new']], [], [], []],
    'app_pricing_plan_show' => [['id'], ['_controller' => 'App\\Controller\\PricingPlanController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pricing/plan']], [], [], []],
    'app_pricing_plan_edit' => [['id'], ['_controller' => 'App\\Controller\\PricingPlanController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/pricing/plan']], [], [], []],
    'app_pricing_plan_delete' => [['id'], ['_controller' => 'App\\Controller\\PricingPlanController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pricing/plan']], [], [], []],
    'app_pricing_plan_feature_index' => [[], ['_controller' => 'App\\Controller\\PricingPlanFeatureController::index'], [], [['text', '/pricing/plan/feature']], [], [], []],
    'app_pricing_plan_feature_new' => [[], ['_controller' => 'App\\Controller\\PricingPlanFeatureController::new'], [], [['text', '/pricing/plan/feature/new']], [], [], []],
    'app_pricing_plan_feature_show' => [['id'], ['_controller' => 'App\\Controller\\PricingPlanFeatureController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pricing/plan/feature']], [], [], []],
    'app_pricing_plan_feature_edit' => [['id'], ['_controller' => 'App\\Controller\\PricingPlanFeatureController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/pricing/plan/feature']], [], [], []],
    'app_pricing_plan_feature_delete' => [['id'], ['_controller' => 'App\\Controller\\PricingPlanFeatureController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pricing/plan/feature']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\Admin\DashboardController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'App\Controller\CheckoutController::index' => [[], ['_controller' => 'App\\Controller\\CheckoutController::index'], [], [['text', '/checkout']], [], [], []],
    'App\Controller\CheckoutController::handleCheckout' => [[], ['_controller' => 'App\\Controller\\CheckoutController::handleCheckout'], [], [['text', '/checkout/process']], [], [], []],
    'App\Controller\CheckoutController::success' => [[], ['_controller' => 'App\\Controller\\CheckoutController::success'], [], [['text', '/checkout/success']], [], [], []],
    'App\Controller\ContactUsController::manage' => [[], ['_controller' => 'App\\Controller\\ContactUsController::manage'], [], [['text', '/contact-us']], [], [], []],
    'App\Controller\HomepageController::index' => [[], ['_controller' => 'App\\Controller\\HomepageController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\PricingController::index' => [[], ['_controller' => 'App\\Controller\\PricingController::index'], [], [['text', '/pricing']], [], [], []],
    'App\Controller\PricingPlanController::index' => [[], ['_controller' => 'App\\Controller\\PricingPlanController::index'], [], [['text', '/pricing/plan']], [], [], []],
    'App\Controller\PricingPlanController::new' => [[], ['_controller' => 'App\\Controller\\PricingPlanController::new'], [], [['text', '/pricing/plan/new']], [], [], []],
    'App\Controller\PricingPlanController::show' => [['id'], ['_controller' => 'App\\Controller\\PricingPlanController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pricing/plan']], [], [], []],
    'App\Controller\PricingPlanController::edit' => [['id'], ['_controller' => 'App\\Controller\\PricingPlanController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/pricing/plan']], [], [], []],
    'App\Controller\PricingPlanController::delete' => [['id'], ['_controller' => 'App\\Controller\\PricingPlanController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pricing/plan']], [], [], []],
    'App\Controller\PricingPlanFeatureController::index' => [[], ['_controller' => 'App\\Controller\\PricingPlanFeatureController::index'], [], [['text', '/pricing/plan/feature']], [], [], []],
    'App\Controller\PricingPlanFeatureController::new' => [[], ['_controller' => 'App\\Controller\\PricingPlanFeatureController::new'], [], [['text', '/pricing/plan/feature/new']], [], [], []],
    'App\Controller\PricingPlanFeatureController::show' => [['id'], ['_controller' => 'App\\Controller\\PricingPlanFeatureController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pricing/plan/feature']], [], [], []],
    'App\Controller\PricingPlanFeatureController::edit' => [['id'], ['_controller' => 'App\\Controller\\PricingPlanFeatureController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/pricing/plan/feature']], [], [], []],
    'App\Controller\PricingPlanFeatureController::delete' => [['id'], ['_controller' => 'App\\Controller\\PricingPlanFeatureController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pricing/plan/feature']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
