<?php

namespace App\Http\Controllers;

use App\Models\DashboardAbout;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Storage;
class DashboardAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.about.index', [
            'title' => 'About Management',
            'data' => DashboardAbout::get()->first(),
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
     * @param  \App\Models\DashboardAbout  $dashboardAbout
     * @return \Illuminate\Http\Response
     */
    public function show(DashboardAbout $dashboardAbout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DashboardAbout  $dashboardAbout
     * @return \Illuminate\Http\Response
     */
    public function edit(DashboardAbout $dashboardAbout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DashboardAbout  $dashboardAbout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DashboardAbout $dashboardAbout)
    {
        // dd($request->img);
        $rules = [
            'title' => 'required',
            'smallTitle' => 'required',
            'descriptions1' => 'required',
            'descriptions2' => 'required',
            'fb' => 'required',
            'ln' => 'required',
            'ins' => 'required',
            'img' => 'image|file|max:1024',
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('img')) {
            if ($request->old_img) {
                storage::delete($request->old_img);
            }
            $validatedData['img'] = $request->file('img')->store('about-image');
        }

        DashboardAbout::where('id', $dashboardAbout->id)->update(
            $validatedData
        );
        return redirect('dashboard/dashboardAbout')->with(
            'success',
            'Data Has Been Updated'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DashboardAbout  $dashboardAbout
     * @return \Illuminate\Http\Response
     */
    public function destroy(DashboardAbout $dashboardAbout)
    {
        //
    }
}
