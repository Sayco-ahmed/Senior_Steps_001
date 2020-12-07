<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branch = branch::paginate(6);
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
                'branchMapUrl'   => 'required',
                'branchImg'      => 'required'
            ]
        );

        $allbranches = branch::create($request->all());

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
                'branchMapUrl'   => 'required',
                'branchImg'      => 'required'
            ]
        );

        
        $allupdate = $request->all();
        $branch->fill($allupdate)->save();

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
        $branch->delete();

        return redirect('/branch');
    }
}
