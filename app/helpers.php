<?php
/**
 * HeartCore — view helpers. Loaded globally via composer "files" autoload.
 * Small, dependency-free functions for escaping, URLs and the repeating
 * markup atoms ported from the original prototype (photo, eyebrow, diamond…).
 */

if (!function_exists('hc_e')) {

    /** Canonical map of page key => path. Single source of truth for links. */
    function hc_routes(): array
    {
        return [
            'home'          => '/',
            'vozdovac'      => '/studio/vozdovac',
            'dedinje'       => '/studio/dedinje',
            'metoda'        => '/o-pilates-metodi',
            'about'         => '/o-nama',
            'dragana'       => '/dragana-kanjevac',
            'usluge'        => '/usluge',
            'edu-klasicni'  => '/edukacija/klasicni-pilates',
            'edu-savremeni' => '/edukacija/savremeni-pilates',
            'kontakt'       => '/kontakt',
        ];
    }

    function hc_url(string $key): string
    {
        $r = hc_routes();
        return $r[$key] ?? '/';
    }

    function hc_e(?string $s): string
    {
        return htmlspecialchars((string) $s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    function hc_asset(string $path): string
    {
        $path = ltrim($path, '/');
        $full = dirname(__DIR__) . '/public/assets/' . $path;
        $v = @filemtime($full) ?: 1;
        return '/assets/' . $path . '?v=' . $v;
    }

    /** True if $key is the active page (or a parent of it). */
    function hc_is_active(string $current, string $key, array $children = []): bool
    {
        if ($current === $key) return true;
        return in_array($current, $children, true);
    }

    /** Render a photo block. $src is a basename in /assets/img (no extension),
     *  or null for the decorative placeholder. */
    function hc_photo(array $o = []): string
    {
        $src     = $o['src']     ?? null;
        $ratio   = $o['ratio']   ?? '4 / 5';
        $variant = $o['variant'] ?? 'default';   // default | dark | sand
        $label   = $o['label']   ?? '';
        $alt     = $o['alt']     ?? $label;
        $class   = $o['class']   ?? '';
        $eager   = !empty($o['eager']);
        $style   = $o['style']   ?? '';

        $cls = 'hc-photo';
        if ($variant === 'dark') $cls .= ' hc-photo--dark';
        if (!$src) $cls .= ' hc-photo--placeholder';
        if ($class) $cls .= ' ' . $class;

        $st = 'aspect-ratio:' . $ratio . ';' . $style;

        $html = '<figure class="' . hc_e($cls) . '" style="' . hc_e($st) . '">';
        if ($src) {
            $loading = $eager ? 'eager' : 'lazy';
            $html .= '<img src="' . hc_e(hc_asset('img/' . $src . '.jpg')) . '"'
                   . ' alt="' . hc_e($alt) . '" loading="' . $loading . '" decoding="async">';
        }
        if ($label) $html .= '<figcaption class="hc-photo__label">' . hc_e($label) . '</figcaption>';
        $html .= '</figure>';
        return $html;
    }

    function hc_eyebrow(string $text, bool $light = false, string $style = ''): string
    {
        $cls = 'hc-eyebrow' . ($light ? ' hc-eyebrow--light' : '');
        return '<span class="' . $cls . '"' . ($style ? ' style="' . hc_e($style) . '"' : '') . '>' . hc_e($text) . '</span>';
    }

    function hc_diamond(int $size = 10, string $color = 'currentColor'): string
    {
        return '<svg class="hc-diamond" width="' . $size . '" height="' . $size . '" viewBox="0 0 10 10" aria-hidden="true">'
             . '<rect x="5" y="0" width="7.07" height="7.07" transform="rotate(45 5 0)" fill="none" stroke="' . hc_e($color) . '" stroke-width="0.7"/></svg>';
    }

    /** Reveal-on-scroll wrapper attributes. Usage: <div <?= hc_reveal(150) ?>> */
    function hc_reveal(int $delay = 0, string $extraClass = ''): string
    {
        $cls = 'hc-fade' . ($extraClass ? ' ' . $extraClass : '');
        return 'class="' . hc_e($cls) . '" data-delay="' . $delay . '"';
    }

    function hc_link_arrow(string $key, string $text, bool $light = false): string
    {
        $cls = 'hc-link-arrow' . ($light ? ' hc-link-arrow--light' : '');
        return '<a href="' . hc_e(hc_url($key)) . '" class="' . $cls . '"><span>' . hc_e($text) . '</span>'
             . '<svg width="22" height="8" viewBox="0 0 22 8" fill="none" aria-hidden="true">'
             . '<path d="M0 4H21M21 4L17 1M21 4L17 7" stroke="currentColor" stroke-width="1"/></svg></a>';
    }

    function hc_btn(string $key, string $text, string $variant = 'solid'): string
    {
        $cls = 'hc-btn';
        if ($variant === 'ghost') $cls .= ' hc-btn--ghost';
        if ($variant === 'invert') $cls .= ' hc-btn--invert';
        if ($variant === 'ghost-light') $cls .= ' hc-btn--ghost-light';
        return '<a href="' . hc_e(hc_url($key)) . '" class="' . $cls . '"><span>' . hc_e($text) . '</span>'
             . '<svg viewBox="0 0 18 6" fill="none" aria-hidden="true"><path d="M0 3H17M17 3L14 1M17 3L14 5" stroke="currentColor" stroke-width="1"/></svg></a>';
    }
}
