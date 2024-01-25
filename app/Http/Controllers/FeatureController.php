<?php

namespace App\Http\Controllers;

use App\Services\LogoGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class FeatureController extends Controller
{
    public function viewBranding()
    {
        return view('pages.feature.branding.index');
    }

    public function generateBrandingLogo(Request $request)
    {
        File::cleanDirectory(public_path('/IMG/LOGO'));

        (new LogoGenerator)->generateLogo($request->companyName);

        $files = File::files(public_path('/IMG/LOGO'));
        $fileNames = [];

        foreach ($files as $file) {
            $fileNames[] = $file->getFilename();
        }

        return view('pages.feature.branding.show', [
            'fileNames' => $fileNames,
            'companyName' => $request->companyName
        ]);
    }

    public function downloadBrandingLogo(Request $request)
    {
        preg_match('/_(c\w+)_/', $request->ori_image, $matches);
        $coorniate = str_replace('c', '', $matches[1]);

        $logoGenerator = new LogoGenerator();
        $image = Image::canvas(400, 200, $request->color);

        $styling = [
            'color' => ['code' => ''],
            'font' => ['path' => 'FONT/'.$request->font],
            'icon' => ['path' => 'ICON/'.$request->icon],
        ];

        if ($coorniate == 0) {
            $image = $logoGenerator->getStyle01($request->text, $styling, $image);
        } elseif ($coorniate == 1) {
            $image = $logoGenerator->getStyle02($request->text, $styling, $image);
        } elseif ($coorniate == 2) {
            $image = $logoGenerator->getStyle03($request->text, $styling, $image);
        } elseif ($coorniate == 3) {
            $image = $logoGenerator->getStyle04($request->text, $styling, $image);
        }

        $path = 'IMG/Custom/custom'.'_'.rand(1000, 9999).'.jpg';
        $image->save(public_path($path));

        return $path;
    }

    public function viewPackaging()
    {
        return view('pages.feature.packaging.index');
    }

    public function generatePackagingBox(Request $request)
    {
        return view('pages.feature.packaging.show', [
            'companyName' => $request->companyName
        ]);
    }
}
