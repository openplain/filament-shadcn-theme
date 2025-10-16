<?php

namespace Openplain\FilamentShadcnTheme;

use Filament\Support\Colors\Color as FilamentColor;

/**
 * Official Shadcn UI themes for Filament
 * Based on: https://ui.shadcn.com/themes
 */
class Color
{
    // Default theme with Shadcn's signature inverted effect
    public const Default = [
        50 => 'oklch(0.985 0 0)',
        100 => 'oklch(0.967 0.001 286)',
        200 => 'oklch(0.92 0.004 286)',
        300 => 'oklch(0.871 0.006 286)',
        400 => 'oklch(0.705 0.015 286)',
        500 => 'oklch(0.274 0.006 286)',
        600 => 'oklch(0.141 0.005 286)',
        700 => 'oklch(0.21 0.006 286)',
        800 => 'oklch(0.274 0.006 286)',
        900 => 'oklch(0.21 0.006 286)',
        950 => 'oklch(0.141 0.005 286)',
    ];

    public const Red = [
        50 => 'oklch(0.637 0.237 25)',
        100 => 'oklch(0.577 0.245 27)',
        200 => 'oklch(0.505 0.213 28)',
        300 => 'oklch(0.808 0.114 20)',
        400 => 'oklch(0.704 0.191 22)',
        500 => 'oklch(0.637 0.237 25)',
        600 => 'oklch(0.577 0.245 27)',
        700 => 'oklch(0.505 0.213 28)',
        800 => 'oklch(0.444 0.177 27)',
        900 => 'oklch(0.396 0.141 26)',
        950 => 'oklch(0.98 0 0)',
    ];

    public const Rose = [
        50 => 'oklch(0.665 0.228 12)',
        100 => 'oklch(0.603 0.262 16)',
        200 => 'oklch(0.52 0.219 13)',
        300 => 'oklch(0.83 0.112 10)',
        400 => 'oklch(0.731 0.195 11)',
        500 => 'oklch(0.665 0.228 12)',
        600 => 'oklch(0.603 0.262 16)',
        700 => 'oklch(0.52 0.219 13)',
        800 => 'oklch(0.449 0.181 14)',
        900 => 'oklch(0.388 0.147 17)',
        950 => 'oklch(0.98 0 0)',
    ];

    public const Orange = [
        50 => 'oklch(0.705 0.213 48)',
        100 => 'oklch(0.646 0.222 41)',
        200 => 'oklch(0.553 0.195 38)',
        300 => 'oklch(0.837 0.128 66)',
        400 => 'oklch(0.75 0.183 56)',
        500 => 'oklch(0.705 0.213 48)',
        600 => 'oklch(0.646 0.222 41)',
        700 => 'oklch(0.553 0.195 38)',
        800 => 'oklch(0.47 0.157 37)',
        900 => 'oklch(0.405 0.142 40)',
        950 => 'oklch(0.98 0 0)',
    ];

    public const Green = [
        50 => 'oklch(0.627 0.153 154)',
        100 => 'oklch(0.58 0.164 155)',
        200 => 'oklch(0.506 0.149 157)',
        300 => 'oklch(0.774 0.15 154)',
        400 => 'oklch(0.677 0.156 156)',
        500 => 'oklch(0.627 0.153 154)',
        600 => 'oklch(0.58 0.164 155)',
        700 => 'oklch(0.506 0.149 157)',
        800 => 'oklch(0.414 0.119 157)',
        900 => 'oklch(0.305 0.093 157)',
        950 => 'oklch(0.98 0 0)',
    ];

    public const Blue = [
        50 => 'oklch(0.66 0.225 263)',
        100 => 'oklch(0.609 0.225 264)',
        200 => 'oklch(0.521 0.2 265)',
        300 => 'oklch(0.77 0.163 266)',
        400 => 'oklch(0.69 0.194 265)',
        500 => 'oklch(0.66 0.225 263)',
        600 => 'oklch(0.609 0.225 264)',
        700 => 'oklch(0.521 0.2 265)',
        800 => 'oklch(0.428 0.167 265)',
        900 => 'oklch(0.337 0.136 266)',
        950 => 'oklch(0.98 0 0)',
    ];

    public const Yellow = [
        50 => 'oklch(0.852 0.199 92)',
        100 => 'oklch(0.8 0.199 92)',
        200 => 'oklch(0.75 0.199 92)',
        300 => 'oklch(0.9 0.15 92)',
        400 => 'oklch(0.87 0.18 92)',
        500 => 'oklch(0.852 0.199 92)',
        600 => 'oklch(0.8 0.199 92)',
        700 => 'oklch(0.75 0.199 92)',
        800 => 'oklch(0.65 0.18 92)',
        900 => 'oklch(0.55 0.15 92)',
        950 => 'oklch(0.3 0.06 92)',
    ];

    public const Violet = [
        50 => 'oklch(0.606 0.25 293)',
        100 => 'oklch(0.56 0.25 293)',
        200 => 'oklch(0.52 0.25 293)',
        300 => 'oklch(0.73 0.158 293)',
        400 => 'oklch(0.673 0.183 293)',
        500 => 'oklch(0.606 0.25 293)',
        600 => 'oklch(0.56 0.25 293)',
        700 => 'oklch(0.52 0.25 293)',
        800 => 'oklch(0.451 0.138 293)',
        900 => 'oklch(0.365 0.106 293)',
        950 => 'oklch(0.969 0.016 294)',
    ];

    /**
     * Create a custom adaptive color that changes between light and dark modes
     *
     * @param array $lightColor The color to use in light mode
     * @param array $darkColor The color to use in dark mode
     * @return array
     */
    public static function adaptive(array $lightColor, array $darkColor): array
    {
        // Maps dark mode colors to light shades and light mode colors to dark shades
        // CSS swapping creates the adaptive effect
        return [
            50 => $darkColor[500] ?? $darkColor[600] ?? $darkColor[400],
            100 => $darkColor[600] ?? $darkColor[500] ?? $darkColor[700],
            200 => $darkColor[700] ?? $darkColor[800] ?? $darkColor[600],
            300 => $lightColor[300] ?? $lightColor[200] ?? $lightColor[400],
            400 => $lightColor[400] ?? $lightColor[300] ?? $lightColor[500],
            500 => $lightColor[500] ?? $lightColor[600] ?? $lightColor[400],
            600 => $lightColor[600] ?? $lightColor[500] ?? $lightColor[700],
            700 => $lightColor[700] ?? $lightColor[800] ?? $lightColor[600],
            800 => $darkColor[800] ?? $darkColor[700] ?? $darkColor[900],
            900 => $darkColor[900] ?? $darkColor[800] ?? $darkColor[950],
            950 => $darkColor[950] ?? $darkColor[900] ?? 'oklch(0.98 0 0)',
        ];
    }
}