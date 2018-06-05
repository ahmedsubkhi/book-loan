<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('member.member',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.memberadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
				$member= new Member();
				$member->fullname=$request->get('fullname');
				$member->dob=$request->get('dob');
				$member->address=$request->get('address');
				$member->is_active='Y';
				$member->save();

        return redirect('member')->with('success', 'Member berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
			$member = Member::select('*')
    					->where('id_member', $id)
    					->first();
			return view('member.memberedit',compact('member','id_member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
			$member= Member::where('id_member', $id)
							->update([
								'fullname' => $request->get('fullname'),
								'dob' => $request->get('dob'),
								'address' => $request->get('address'),
								'is_active' =>'Y'
							]);

			return redirect('member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
			$member = Member::where('id_member', $id)->delete();
			return redirect('member')->with('success','Member berhasil dihapus');
    }
}
