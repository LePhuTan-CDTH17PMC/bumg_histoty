<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\PhanAnh;
<<<<<<< Updated upstream
=======
use App\Events\HelloPusherEvent;
use Carbon\Carbon;
>>>>>>> Stashed changes

class UserPhanAnhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.user-phananh');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.user-phananh');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'noi_dung_pa'=>'required',
<<<<<<< Updated upstream
=======
            'tieu_de_pa'=>'required',
>>>>>>> Stashed changes
            

        ]);

        $phananh=new PhanAnh;
<<<<<<< Updated upstream
        $phananh->nhan_vien_id=0;
=======
        $phananh->tieu_de_pa= $request->tieu_de_pa;
        $phananh->nhan_vien_id=0;
        $phananh->ngay_tao=Carbon::now();
>>>>>>> Stashed changes
        $phananh->tinh_trang_xl=0;
        $phananh->noi_dung_pa= $request->noi_dung_pa;
        $phananh->chu_ho_id=Auth::guard('canho')->user()->id;
        $phananh->save();
<<<<<<< Updated upstream
=======
        event(new HelloPusherEvent($request));
>>>>>>> Stashed changes

        return redirect('/thong-bao')->with('success','Add success');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
