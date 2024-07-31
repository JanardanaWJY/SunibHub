<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = Thread::with('user')->get();
        return view('thread.show', ['threads' => $threads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thread.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        Log::info('Inside store method'); // Log a message
        // dd(__DIR__);
    $user = Auth::id();

    $validateThread = $request->validate([
        'title' => 'required|max:100',
        'content' => 'required',
    ]);

    try {
        $thread = Thread::create([
            'title'=> $validateThread['title'],
            'content' => $validateThread['content'],
            'uid' => $user,
        ]);

        Log::info('Created thread: ' . print_r($thread, true));

        return redirect('/threads')->with('success', 'Thread created successfully!');
    } catch (\Exception $th) {
        Log::error('Error creating thread: ' . $th->getMessage());
        return back()->withInput()->withErrors(['error' => 'Failed to create thread']);
    }
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function showReply(Thread $thread)
    {
        $replies = Reply::where('thread_id', $thread->id)->get();
        return view ('thread.show', compact('thread', 'replies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        if(auth()->user()->id !== $thread->uid){
            abort(403, 'Unauthorized user');
        }
            $thread->delete();
            return redirect()->back()->with('success', 'Thread deleted successfully');

    }
}
