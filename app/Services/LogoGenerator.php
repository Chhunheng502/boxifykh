<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class LogoGenerator
{
    public function generateLogo($companyName)
    {
        for($i = 0; $i < 9; $i++) {
            $styling = $this->randomizeStyling();
            $coorniate = rand(0, 3);
            $image = Image::canvas(400, 200, '#'.$styling['color']['code']);

            if ($coorniate == 0) {
                $image = $this->getStyle01($companyName, $styling, $image);
            } elseif ($coorniate == 1) {
                $image = $this->getStyle02($companyName, $styling, $image);
            } elseif ($coorniate == 2) {
                $image = $this->getStyle03($companyName, $styling, $image);
            } elseif ($coorniate == 3) {
                $image = $this->getStyle04($companyName, $styling, $image);
            }

            $image->save(public_path('IMG/LOGO/logo_c'.$coorniate.'_'.rand(1000, 9999).'.jpg'));
        }
    }

    public function getStyle01($companyName, $styling, $image) {
        $iconPath = public_path($styling['icon']['path']);
        $icon = Image::make($iconPath);
        $icon->resize(80, 80);
        $icon->colorize(100, 100, 100);
        $iconX = $image->getWidth() / 2 - $icon->getWidth() / 2;
        $iconY = $image->getHeight() / 2 - $icon->getHeight() / 2 - 20;
        $image->insert($icon, null, $iconX, $iconY);

        $textX = $image->getWidth() / 2;
        $textY = $image->getHeight() / 2 + $icon->getHeight() / 2 + 10;
        $image->text($companyName, $textX, $textY, function ($font) use ($styling) {
            $font->file(public_path($styling['font']['path']));
            $font->size(36);
            $font->color('#FFFFFF');
            $font->align('center');
            $font->valign('middle');
        });

        return $image;
    }

    public function getStyle02($companyName, $styling, $image)
    {
        $iconPath = public_path($styling['icon']['path']);
        $icon = Image::make($iconPath);
        $icon->resize(80, 80);
        $icon->colorize(100, 100, 100);
        $iconX = $image->getWidth() / 2 - $icon->getWidth() / 2;
        $iconY = $image->getHeight() / 2 - $icon->getHeight() / 2 + 20;
        $image->insert($icon, null, $iconX, $iconY);

        $textX = $image->getWidth() / 2;
        $textY = $image->getHeight() / 2 - $icon->getHeight() / 2 - 10;
        $image->text($companyName, $textX, $textY, function ($font) use ($styling) {
            $font->file(public_path($styling['font']['path']));
            $font->size(36);
            $font->color('#FFFFFF');
            $font->align('center');
            $font->valign('middle');
        });

        return $image;
    }

    public function getStyle03($companyName, $styling, $image)
    {
        $text = $companyName;
        $fontSize = 36;
        $fontPath = public_path($styling['font']['path']);

        $iconPath = public_path($styling['icon']['path']);
        $icon = Image::make($iconPath);
        $icon->resize(80, 80);
        $icon->colorize(100, 100, 100);

        $textHeight = imagettfbbox($fontSize, 0, $fontPath, $text)[1] - imagettfbbox($fontSize, 0, $fontPath, $text)[7];
        $textWidth = imagettfbbox($fontSize, 0, $fontPath, $text)[2] - imagettfbbox($fontSize, 0, $fontPath, $text)[0];

        $iconWidth = $icon->width();
        $iconHeight = $icon->height();

        $totalWidth = $textWidth + $iconWidth;
        $totalHeight = max($iconHeight, $textHeight);

        $iconX = ($image->width() - $totalWidth) / 2;
        $iconY = ($image->height() - $totalHeight) / 2;
        
        $image->insert($icon, null, (int)abs($iconX), (int)abs($iconY));

        $textX = $iconX + $iconWidth + 10;
        $textY = $iconY + ($totalHeight - $textHeight);

        $image->text($text, $textX, $textY, function($font) use ($fontPath, $fontSize) {
            $font->file($fontPath);
            $font->size($fontSize);
            $font->color('#FFFFFF');
        });

        return $image;
    }

    public function getStyle04($companyName, $styling, $image)
    {
        $text = $companyName;
        $fontSize = 36;
        $fontPath = public_path($styling['font']['path']);

        $iconPath = public_path($styling['icon']['path']);
        $icon = Image::make($iconPath);
        $icon->resize(80, 80);
        $icon->colorize(100, 100, 100);

        $textHeight = imagettfbbox($fontSize, 0, $fontPath, $text)[1] - imagettfbbox($fontSize, 0, $fontPath, $text)[7];
        $textWidth = imagettfbbox($fontSize, 0, $fontPath, $text)[2] - imagettfbbox($fontSize, 0, $fontPath, $text)[0];

        $iconWidth = $icon->width();
        $iconHeight = $icon->height();

        $totalWidth = $textWidth + $iconWidth;
        $totalHeight = max($iconHeight, $textHeight);

        $textX = (int)abs(($image->width() - $totalWidth) / 2);
        $textY = (int)abs(($image->height() - $totalHeight) / 2) + ($totalHeight - $textHeight);

        $image->text($text, $textX, $textY, function($font) use ($fontPath, $fontSize) {
            $font->file($fontPath);
            $font->size($fontSize);
            $font->color('#FFFFFF');
        });
        
        if (strlen($text) >= 6) {
            $iconX = $textX + $textWidth - 40;
        } elseif (strlen($text) > 3) {
            $iconX = $textX + $textWidth - 20;
        } else {
            $iconX = $textX + $textWidth;
        }

        $iconY = $textY - ($totalHeight - $textHeight);

        $image->insert($icon, null, $iconX, $iconY);

        return $image;
    }

    private function randomizeStyling()
    {
        $colors = [
            ['code' => '2F4858', 'status' => 'active'],
            ['code' => '33658A', 'status' => 'active'],
            ['code' => '86BBD8', 'status' => 'active'],
            ['code' => 'F6AE2D', 'status' => 'active'],
            ['code' => 'F26419', 'status' => 'active'],
        ];

        $fonts = [
            ['path' => 'FONT/JosefinSans-Regular.ttf', 'status' => 'active'],
            ['path' => 'FONT/PlayfairDisplay-Regular.otf', 'status' => 'active'],
            ['path' => 'FONT/Poppins-Regular.otf', 'status' => 'active'],
            ['path' => 'FONT/Roboto-Regular.ttf', 'status' => 'active'],
        ];

        $icons = [
            ['path' => 'ICON/abstract-shape_5969842.png', 'status' => 'active'],
            ['path' => 'ICON/pie-chart_9521469.png', 'status' => 'active'],
            ['path' => 'ICON/slack_3820314.png', 'status' => 'active'],
        ];

        return [
            'color' => $colors[rand(0, 4)],
            'font' => $fonts[rand(0, 3)],
            'icon' => $icons[rand(0, 2)],
        ];
    }
}