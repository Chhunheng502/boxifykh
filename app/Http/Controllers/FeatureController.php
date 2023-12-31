<?php

namespace App\Http\Controllers;

use App\Services\LogoGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'fileNames' => $fileNames
        ]);
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
