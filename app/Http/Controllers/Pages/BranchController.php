<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BranchController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branch = branch::all();
        return view('branches.branch' , compact('branch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branches.branch_add');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate
        (
            [
                'branchCode'     => 'required',
                'branchName'     => 'required',
                'branchAddress'  => 'required',
                
                'branchImg'      => 'image'
            ]
        );

        $request_data = $request->except(['branchImg' , 'branchMapUrl']);

        if(!$request->branchMapUrl){

            $request->branchMapUrl = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6049.881319200985!2d-74.00151372674895!3d40.69730452928296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a47df06b185%3A0xc889234bc07c42ee!2sBrooklyn+Heights%2C+Brooklyn%2C+NY+11201!5e0!3m2!1sen!2sus!4v1461598289488' ;
            $request_data['branchMapUrl'] = $request->branchMapUrl ;
        }

        if($request->branchImg){

            Image::make($request->branchImg)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();

        })->save(public_path('uploads/branch/' . $request->branchImg->getClientOriginalName()));

        $request_data['branchImg'] = $request->branchImg->getClientOriginalName();
    }
        branch::create($request_data);

        session()->flash('success',('Branch added successfully'));

        return redirect('/branch');

    
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(branch $branch)
    {
        $requested_branch = $branch ;
        return view('branches.branch_view' , compact('requested_branch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(branch $branch)
    {
        $requested_branch = $branch ;
        return view('branches.branch_edit',compact('requested_branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, branch $branch)
    {
        $request->validate
        (
            [
                'branchCode'     => 'required',
                'branchName'     => 'required',
                'branchAddress'  => 'required',
                
                'branchImg'      => 'image'
            ]
        );

        $request_data = $request->except(['branchImg']);

        if($request->branchImg){

            if($branch->branchImg != 'default_branch.png'){

            Storage::disk('public_uploads')->delete('/branch/' . $branch->branchImg);          
            
            }


            Image::make($request->branchImg)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();

        })->save(public_path('uploads/branch/' . $request->branchImg->getClientOriginalName()));

        $request_data['branchImg'] = $request->branchImg->getClientOriginalName();
           
    }
        
        
        $branch->fill($request_data)->save();

        session()->flash('success',('Branch Edited successfully'));


        return redirect()->route('branch.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(branch $branch)
    {

        if($branch->branchImg != 'default_branch.png'){

            Storage::disk('public_uploads')->delete('/branch/' . $branch->branchImg);

        }

        $branch->delete();

        session()->flash('success',('Branch Deleted successfully'));


        return redirect('/branch');
    }
}
