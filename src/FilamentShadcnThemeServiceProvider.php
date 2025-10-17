<?php

namespace Openplain\FilamentShadcnTheme;

use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

/**
 * Service Provider for Filament Shadcn Theme
 *
 * Provides the Shadcn UI design system for Filament panels
 */
class FilamentShadcnThemeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Inject CSS for Shadcn dark mode effect
        FilamentView::registerRenderHook(
            name: PanelsRenderHook::HEAD_END,
            hook: function (): string {
                return Blade::render(<<<'HTML'
                <style>
                    /* Shadcn Theme - Smart Color System */
                    /* Neutral colors: Have inverted shades, CSS swaps them for Shadcn effect */
                    /* Bright colors: Have doubled shades (50=500, 100=600, 200=700), stay same when swapped */

                    .dark {
                        /* Swap button shades in dark mode - ONLY for primary and gray (Default theme) */
                        /* Accent colors (danger, success, warning, info) stay the same */
                        --primary-500: var(--primary-50);
                        --primary-600: var(--primary-100);
                        --primary-700: var(--primary-200);

                        --gray-500: var(--gray-50);
                        --gray-600: var(--gray-100);
                        --gray-700: var(--gray-200);
                    }

                    /* Fix button text color in dark mode - ONLY for primary and gray */
                    .dark .fi-btn.fi-color-primary {
                        --primary-50: var(--primary-950);
                    }
                    .dark .fi-btn.fi-color-gray {
                        --gray-50: var(--gray-950);
                    }

                    /* Yellow keeps dark text in both modes */
                    .fi-btn.fi-color-warning {
                        --warning-50: var(--warning-950);
                    }

                    /* Fix checkbox checkmark color in dark mode */
                    /* When checkbox is checked, use dark color for checkmark on light background */
                    .dark .fi-checkbox-input:checked {
                        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");
                    }

                    /* For radio buttons too */
                    .dark .fi-radio-input:checked {
                        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
                    }

                    /* Fix toggle switch colors */

                    /* === LIGHT MODE === */

                    /* ON state: use the primary color */
                    .fi-toggle.fi-toggle-on.fi-color-primary {
                        background-color: var(--primary-600) !important;
                    }

                    /* OFF state: use Filament's gray-300 */
                    .fi-toggle.fi-toggle-off {
                        background-color: var(--gray-300) !important;
                    }

                    /* Thumb for ON state - white and circular */
                    .fi-toggle.fi-toggle-on > div > div:first-child {
                        background-color: white !important;
                        border-radius: 9999px !important;
                    }

                    /* Thumb for OFF state - white and circular */
                    .fi-toggle.fi-toggle-off > div > div:first-child {
                        background-color: white !important;
                        border-radius: 9999px !important;
                    }

                    /* === DARK MODE === */

                    /* ON state: use darker background for better visibility */
                    .dark .fi-toggle.fi-toggle-on.fi-color-primary {
                        /* Use gray-800 for Default theme (via CSS swap), colored for accent themes */
                        background-color: var(--gray-800) !important;
                    }


                    /* OFF state: use same dark gray as ON state for consistency */
                    .dark .fi-toggle.fi-toggle-off {
                        background-color: var(--gray-800) !important;
                    }

                    /* Thumb stays white and circular in dark mode */
                    .dark .fi-toggle.fi-toggle-on > div > div:first-child {
                        background-color: white !important;
                        border-radius: 9999px !important;
                    }

                    .dark .fi-toggle.fi-toggle-off > div > div:first-child {
                        background-color: white !important;
                        border-radius: 9999px !important;
                    }

                    /* Hover effects in dark mode - ONLY for primary and gray */
                    .dark .fi-btn.fi-color-primary:not(:disabled):hover {
                        background-color: var(--primary-200) !important;
                    }
                    .dark .fi-btn.fi-color-gray:not(:disabled):hover {
                        background-color: var(--gray-200) !important;
                    }
                </style>
                HTML);
            }
        );
    }
}