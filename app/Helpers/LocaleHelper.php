<?php

namespace App\Helpers;

class LocaleHelper
{
    /**
     * Mapping: NL route name => EN route name
     */
    protected static array $routeMap = [
        'home' => 'en.home',
        'prijzen' => 'en.prices',
        'rooster' => 'en.schedule',
        'contact' => 'en.contact',
        'contact.submit' => 'en.contact.submit',
        'over-ons' => 'en.about-us',
        'ondernemers' => 'en.business',
        'privacy' => 'en.privacy',
        'voorwaarden' => 'en.terms',
    ];

    /**
     * Get the localized route name for the current locale.
     */
    public static function localizedRoute(string $nlRouteName): string
    {
        if (app()->getLocale() === 'en' && isset(self::$routeMap[$nlRouteName])) {
            return self::$routeMap[$nlRouteName];
        }

        return $nlRouteName;
    }

    /**
     * Whether a route name participates in NL/EN localization.
     * Admin and other unmapped routes (often with required parameters)
     * must be skipped to avoid UrlGenerationException.
     */
    protected static function isLocalizable(?string $routeName): bool
    {
        if ($routeName === null) {
            return false;
        }

        return isset(self::$routeMap[$routeName]) || in_array($routeName, self::$routeMap, true);
    }

    /**
     * Get the URL for switching to the other language.
     */
    public static function switchLanguageUrl(): string
    {
        $currentRoute = request()->route();

        if (!$currentRoute) {
            return app()->getLocale() === 'en' ? url('/') : url('/en');
        }

        $currentName = $currentRoute->getName();

        // Non-localizable routes (e.g. admin pages, parameterized routes) stay put.
        if (!self::isLocalizable($currentName)) {
            return url()->current();
        }

        if (app()->getLocale() === 'en') {
            // Switch to NL: find the NL route name
            $nlRoute = array_search($currentName, self::$routeMap);
            if ($nlRoute !== false) {
                return route($nlRoute);
            }
            return url('/');
        } else {
            // Switch to EN: find the EN route name
            if (isset(self::$routeMap[$currentName])) {
                return route(self::$routeMap[$currentName]);
            }
            return url('/en');
        }
    }

    /**
     * Get hreflang URLs for SEO.
     */
    public static function getHreflangUrls(): array
    {
        $currentRoute = request()->route();

        if (!$currentRoute) {
            return [
                'nl' => url('/'),
                'en' => url('/en'),
            ];
        }

        $currentName = $currentRoute->getName();

        // Non-localizable routes (e.g. admin pages, parameterized routes) have no
        // language alternates; point both hreflangs at the current URL.
        if (!self::isLocalizable($currentName)) {
            $current = url()->current();

            return [
                'nl' => $current,
                'en' => $current,
            ];
        }

        // Determine NL and EN route names
        if (app()->getLocale() === 'en') {
            $enRoute = $currentName;
            $nlRoute = array_search($currentName, self::$routeMap);
            if ($nlRoute === false) {
                $nlRoute = 'home';
            }
        } else {
            $nlRoute = $currentName;
            $enRoute = self::$routeMap[$currentName] ?? 'en.home';
        }

        return [
            'nl' => route($nlRoute),
            'en' => route($enRoute),
        ];
    }
}
