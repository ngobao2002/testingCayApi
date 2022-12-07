<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::all();
        return response()->json([
            'status' => true,
            'message' => 'Admin retrieved',
            'data' => $admin,
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
        // $validator = Validator::make($request->all(), [
        //     'name' => ['string'],
        //     'password' => ['string'],
            
        // ]);
        // if ($validator->fails()) {
        //     return response()->json($validator->messages(), 400);
        // } else {
        //     $data = [
        //         'name' => $request->name,
        //         'password' => $request->password,
                
        //     ];
        //     DB::beginTransaction();
        //     try {
        //         Admin::create($data);
        //         DB::commit();
        //     } catch (\Exception $e) {
        //         DB::rollBack();
        //         p($e->getMessage());
        //     }
        //     return response()->json([
        //         'status' => true,
        //         'message' => 'Successed',
        //         'data' => []
        //     ]);
        // }
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
        $admin = Admin::find($id);
        if (is_null($admin)) {
            return response()->json(
                [
                    'status' => 0,
                    'message' => 'Admin does not exists'
                ],
                404
            );
        } else {
            $admin->name = $request['name'];
            $admin->password = $request['password'];
        }
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
