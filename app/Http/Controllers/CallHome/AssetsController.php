<?php

namespace App\Http\Controllers\CallHome;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\AssetType;
use App\Models\CallHome\AssetStatus;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    public function index()
    {
        $assets_types = AssetType::get();
        $assets = Asset::get();
        return view('pages.user.assets.assets',compact('assets','assets_types'));
    }

    public function assetTypes()
    {
        $asset_types = AssetType::limit(20)->get();
        return view('pages.user.assets.assets_types',compact('asset_types'));
    }

    public function addAssetType(Request $request)
    {
        AssetType::create($request->all());
        return redirect()->back();
    }

    public function addAsset(Request $request)
    {
        Asset::create($request->all());
        return redirect()->back();
    }

    public function printCheck()
    {
        $pdf = PDF::loadView('pages.user.assets.print');
        $customPaper = array(0,0,360,150);
        return $pdf->setPaper($customPaper, 'landscape')->stream('document.pdf');
    }

}
