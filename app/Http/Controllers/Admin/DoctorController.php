<?php

namespace App\Http\Controllers\Admin;

use App\Doctor;
use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorRequest;
use App\Specialist;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::paginate(20);
        return view('admin.doctors.index', compact("doctors"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialists = Specialist::all();

        return view('admin.doctors.create', compact('specialists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorRequest $request)
    {
        $data = $request->validated();

        $data['created_by'] = auth()->user()->id;

        unset($data['licence_expired_date']); //delete licence_expired_date array value

        $data['licence_expired_date'] = date("Y-m-d", strtotime($request->licence_expired_date)); //set value again 

        Doctor::create($data);

        return redirect()->route('admin.doctors.index')->with('success', 'Ok, Successfully inserted.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $specialists = Specialist::all();

        return view('admin.doctors.edit', compact('doctor', 'specialists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(DoctorRequest $request, Doctor $doctor)
    {
        $data = $request->validated();

        $data['updated_by'] = auth()->user()->id;

        unset($data['licence_expired_date']); //delete licence_expired_date array value

        $data['licence_expired_date'] = date("Y-m-d", strtotime($request->licence_expired_date)); //set value again 

        $doctor->update($data);

        return redirect()->route('admin.doctors.index')->with('success', 'Ok, Successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('admin.doctors.index')->with('success', 'Ok, Successfully Deleted.');

    }
}
