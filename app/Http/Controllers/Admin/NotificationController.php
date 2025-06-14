<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::orderBy('id', 'desc')->paginate(10);
        return view('admin.notifications.index', compact('notifications'));
    }

    public function create()
    {
        return view('admin.notifications.create');
    }

    public function store(Request $request)
    {
        $notification = new Notification([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'publish_option' => $request->input('publish_option'),
            'start_date' => $request->input('start_date'),
            'start_time' => $request->input('start_time'),
            'end_date' => $request->input('end_date'),
            'end_time' => $request->input('end_time'),
        ]);

        // Save the notification to the database
        $notification->save();

        // Redirect back to the index page with a success message
        return redirect()->route('notifications.index')->with('success', 'Notification created successfully.');
    }

    public function edit($id)
    {
        $notification = Notification::findOrFail($id);
        return view('admin.notifications.edit', compact('notification'));
    }

    public function update(Request $request, $id)
    {
        $notification = Notification::findOrFail($id);
        $notification->title = $request->input('title');
        $notification->description = $request->input('description');
        $notification->publish_option = $request->input('publish_option');
        $notification->start_date = $request->input('start_date');
        $notification->start_time = $request->input('start_time');
        $notification->end_date = $request->input('end_date');
        $notification->end_time = $request->input('end_time');
        $notification->save();

        return redirect()->route('notifications.index')->with('success', 'Notification updated successfully.');
    }

    public function destroy($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->delete();

        return redirect()->route('notifications.index')->with('success', 'Notification deleted successfully.');
    }
}
