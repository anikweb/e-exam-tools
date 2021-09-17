<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeneralSettingsForm;
use App\Models\GeneralSettings;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class GeneralSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.general_settings.index',[
            'generalSettings' =>GeneralSettings::first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GeneralSettings  $generalSettings
     * @return \Illuminate\Http\Response
     */
    public function show(GeneralSettings $generalSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GeneralSettings  $generalSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(GeneralSettings $generalSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GeneralSettings  $generalSettings
     * @return \Illuminate\Http\Response
     */
    public function update(GeneralSettingsForm $request, $id)
    {
        $generalSettings  = GeneralSettings::findOrFail($id);
        $generalSettings->site_title = $request->site_title;
        $generalSettings->tagline = $request->tagline;
        $generalSettings->key_word = $request->key_word;
        // Logo Upload
        if($request->hasFile('logo')){
            // if old logo exists on the root directory, than remove before upload
            $oldLogo = public_path('backend/image/general_settings/'.$generalSettings->logo);
            if(file_exists($oldLogo)){
               unlink($oldLogo);
            }
            $logo = $request->file('logo');
            // new name generate
            $newLogoName = Str::slug($request->site_title).'-logo-'.time().'.'.$logo->getClientOriginalExtension();
            $destination1 = public_path('backend/image/general_settings/'.$newLogoName);
            // upload
            Image::make($logo)->save($destination1, 70);
            // database update
            $generalSettings->logo = $newLogoName;
        }
        // iocn Upload
        if($request->hasFile('icon')){
             // if old icon exists on the root directory, than remove before upload
            $oldIcon = public_path('backend/image/general_settings/'.$generalSettings->icon);
            if(file_exists($oldIcon)){
               unlink($oldIcon);
            }
            $icon = $request->file('icon');
            // new name generate
            $newIconName = Str::slug($request->site_title).'-icon-'.time().'.'.$icon->getClientOriginalExtension();
            $destination2 = public_path('backend/image/general_settings/'.$newIconName);
             // upload
            Image::make($icon)->save($destination2, 70);
            // database update
            $generalSettings->icon = $newIconName;
        }
        $generalSettings->admin_email = $request->admin_email;
        $generalSettings->membership = $request->membership;
        $generalSettings->default_role = $request->default_role;
        if($generalSettings->save()){
            return back()->with('success','General Settings Updated');
        }else{
            return back()->with('error','General Settings Updated');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GeneralSettings  $generalSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeneralSettings $generalSettings)
    {
        //
    }
}
