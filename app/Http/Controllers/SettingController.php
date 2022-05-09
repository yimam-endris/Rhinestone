<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    * @author Nderi Kamau <nderikamau1212@gmail.com>
    */
   public function index()
   {
    //    $this->authorize('viewAny', Setting::class);

       /**
        * Get all the settings
        */
       $settings = Setting::all();

       /**
        * Return the results
        */
       return view('portal.settings.index', compact('settings'));
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    * @author Nderi Kamau <nderikamau1212@gmail.com>
    */
   public function show(Setting $setting)
   {
       /**First, authorization check for user */
    //    $this->authorize('view', $setting);

       /**
        * Get specific setting with relationships
        */
       $setting = $setting->load(['values']);

       // Return response to view
       return view('admin.settings.value', compact('setting'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    * @author Nderi Kamau <nderikamau1212@gmail.com>
    */

   public function store(SettingRequest $request)
   {
       //  Authorize the request    
       
       // $this->authorize('create', Setting::class);

       //  Get the validated date
       $data = $request->validated();

       DB::transaction(function() use ($data, $request){

           //create the key from name of settings
           $key = Str::slug($request->name);

           //  create the setting
           $setting = Setting::create([
               'name' => $data['name'],
               'type' => $request->type,
               'description' => $data['description'],
               'key' => $key
           ]);
       });

       //  Redirect to the previous page and flash a message
       return redirect()->back()->with([
           'success' => trans('alerts.success.setting.created')
       ]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    * @author Nderi Kamau <nderikamau1212@gmail.com>
    */
   public function update(SettingRequest $request, Setting $setting)
   {
    //    $this->authorize('update', $setting);

       //validate the request data
       $data = $request->validated();

       //Update the setting data
       DB::transaction(function() use ($setting, $data){
           $setting->update($data);
       });

       /**
        * Once updated,
        * Return response with message and data
        */
       return redirect()->back()->with([
           'success' => trans('alerts.success.setting.updated')
       ]);
   }
}
