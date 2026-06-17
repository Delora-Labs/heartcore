<?php
/**
 * HeartCore — image build pipeline.
 *
 * Resizes the studio photos from data/images into web-sized assets under
 * public/assets/img and bakes in the brand "soft warm desaturated" look so the
 * real (bright, colourful) studio shots sit comfortably in the editorial,
 * muted palette of the site. Re-runnable: overwrites outputs each time.
 *
 * Run:  php -d memory_limit=1024M tools/process-images.php
 */

$SRC = __DIR__ . '/../data/images';
$OUT = __DIR__ . '/../public/assets/img';
@mkdir($OUT, 0775, true);

/*
 * Slot map: output name => [source file, max width, options]
 * options: 'mood' => 'warm' (default) | 'bw' (full warm B&W, for archival feel)
 *          'h' => force crop to this aspect (w/h) using cover fit
 */
$MAP = [
    // Hero / wide banners
    'hero'                => ['image00002.png',   2000],
    'studio-vozdovac-wide'=> ['image00003.png',   2000],
    'method-wide'         => ['DSC02218 2.JPG',   2000],

    // Studio interiors (Voždovac)
    'studio-1'            => ['image00001.png',   1600], // Wunda chair
    'studio-2'            => ['image00002.png',   1600], // RIALTO reformers
    'studio-3'            => ['image00003.png',   1600], // Tower + neon
    'studio-4'            => ['IMG_4873.JPG',     1600], // reformer + window

    // Dragana — owner
    'dragana'             => ['DSC04008 2.JPG',   1300], // portrait
    'dragana-teaching'    => ['IMG_4872.JPG',     1400],
    'dragana-2'           => ['DSC00863.JPG',     1300],
    'dragana-reformer'    => ['DSC04067 2.JPG',   1300],

    // Method / classical vs contemporary / dynamic poses
    'classical'           => ['DSC00829.JPG',     1400], // tower teaching
    'reformer'            => ['IMG_4857 2.jpg',   1400], // reformer seated
    'group'               => ['IMG_4852 2.JPG',   1400], // arms extension
    'pose-1'              => ['DSC01096.JPG',     1300],
    'pose-2'              => ['IMG_4855 4.JPG',   1300],
    'pose-3'              => ['IMG_4850 3.JPG',   1300],
    'pose-4'              => ['DSC00892.JPG',     1300],
    'detail-1'            => ['DSC02857 2.JPG',   1200],
    'detail-2'            => ['DSC09514 2.JPG',   1200],
    'dynamic-1'           => ['IMG_4850 2.JPG',   1300],
    'dynamic-2'           => ['IMG_4874.JPG',     1300],
    'dynamic-3'           => ['IMG_4855 3.jpg',   1300],
];

function loadImage(string $path) {
    $info = @getimagesize($path);
    if (!$info) return null;
    switch ($info[2]) {
        case IMAGETYPE_PNG:  $im = imagecreatefrompng($path); break;
        case IMAGETYPE_JPEG: $im = imagecreatefromjpeg($path); break;
        default: return null;
    }
    if ($im) {
        // normalise orientation off (GD ignores EXIF); keep as-is.
        imagepalettetotruecolor($im);
    }
    return $im;
}

/** Soft warm desaturation: ~62% saturation removed, gentle warm grade. */
function gradeWarm($im): void {
    $w = imagesx($im); $h = imagesy($im);
    // grayscale base
    $gray = imagecreatetruecolor($w, $h);
    imagecopy($gray, $im, 0, 0, 0, 0, $w, $h);
    imagefilter($gray, IMG_FILTER_GRAYSCALE);
    // blend 38% of the original colour back over the gray base -> ~62% desaturated
    imagecopymerge($gray, $im, 0, 0, 0, 0, $w, $h, 38);
    imagecopy($im, $gray, 0, 0, 0, 0, $w, $h);
    imagedestroy($gray);
    // warm tone + gentle contrast/brightness
    imagefilter($im, IMG_FILTER_COLORIZE, 14, 6, -12);
    imagefilter($im, IMG_FILTER_CONTRAST, -7);  // negative = a touch more contrast in GD
    imagefilter($im, IMG_FILTER_BRIGHTNESS, 6);
}

/** Full warm black & white (for archival / mono feel). */
function gradeBW($im): void {
    imagefilter($im, IMG_FILTER_GRAYSCALE);
    imagefilter($im, IMG_FILTER_COLORIZE, 24, 14, -6); // sepia warmth
    imagefilter($im, IMG_FILTER_CONTRAST, -6);
    imagefilter($im, IMG_FILTER_BRIGHTNESS, 4);
}

$report = [];
foreach ($MAP as $name => $cfg) {
    [$file, $maxW] = $cfg;
    $opts = $cfg[2] ?? [];
    $path = "$SRC/$file";
    if (!file_exists($path)) { $report[] = "MISSING: $file -> $name"; continue; }
    $src = loadImage($path);
    if (!$src) { $report[] = "FAILED LOAD: $file"; continue; }

    $sw = imagesx($src); $sh = imagesy($src);
    $scale = min(1.0, $maxW / $sw);
    $nw = max(1, (int)round($sw * $scale));
    $nh = max(1, (int)round($sh * $scale));
    $dst = imagecreatetruecolor($nw, $nh);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $nw, $nh, $sw, $sh);
    imagedestroy($src);

    if (($opts['mood'] ?? 'warm') === 'bw') gradeBW($dst); else gradeWarm($dst);

    $outPath = "$OUT/$name.jpg";
    imagejpeg($dst, $outPath, 82);
    imagedestroy($dst);
    $kb = round(filesize($outPath) / 1024);
    $report[] = sprintf("%-22s <- %-18s %dx%d  %dKB", $name, $file, $nw, $nh, $kb);
}

echo implode("\n", $report) . "\n";
echo "Done. " . count(glob("$OUT/*.jpg")) . " images in public/assets/img\n";
