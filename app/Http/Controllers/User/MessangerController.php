<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Message;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessangerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::whereHas(
            'roles', function($q){
                $q->where('name', 'Admin');
            }
        )->get();
        return view('User.inbox.index', compact('admins'));
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
        $messages = new Message();
        $messages->sender_id = Auth::Id();
        $messages->receiver_id = $request->receiver_id;
        $messages->message = $request->message;
        $messages->save();
        return redirect()->route('user.messanger.show', $request->receiver_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = User::find($id);
        $messages = Message::orderBy('created_at', 'DESC')->where([
            ['sender_id', '=', $id],
            ['receiver_id', '=', Auth::id()],
        ])->orWhere([
            ['sender_id', '=',  Auth::id()],
            ['receiver_id', '=', $id],
        ])->get();
        
        return view('User.inbox.show', compact('admin', 'messages'));
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
