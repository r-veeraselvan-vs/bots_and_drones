<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Carbon\Carbon;

class NotificationController extends Controller
{
    public function list()
    {
        $currentDateTime = Carbon::now()->setTimezone('Asia/Kolkata');
        $currentDateString = $currentDateTime->toDateString();

        // Condition 1: publish_option is now
        $notificationsNow = Notification::where('publish_option', 'now')
            ->where('end_date', '>=', $currentDateTime->toDateString()) // End date is greater than or equal to the current date
            ->where(function ($query) use ($currentDateTime) {
                $query->where('end_date', '>', $currentDateTime->toDateString()) // End date is greater than the current date
                    ->orWhere(function ($query) use ($currentDateTime) {
                        $query->where('end_date', '=', $currentDateTime->toDateString()) // End date is equal to the current date
                            ->where('end_time', '>=', $currentDateTime->toTimeString()); // End time is greater than or equal to the current time
                    });
            })
            ->get();

        // Condition 2: publish_option is later
        $notificationsLater = Notification::where('publish_option', 'later')
            ->where('start_date', '<=', $currentDateTime->toDateString()) // Condition 1: Start date is less than or equal to current date
            ->where('end_date', '>=', $currentDateTime->toDateString()) // Condition 1: End date is greater than or equal to current date
            ->where(function ($query) use ($currentDateTime) {
                $query->where('start_time', '<=', $currentDateTime->toTimeString()) // Condition 2: Start time is less than or equal to current time
                    ->where('end_time', '>=', $currentDateTime->toTimeString()); // Condition 2: End time is greater than or equal to current time
            })
            ->get();

        // Merge the collections
        $notifications = $notificationsNow->merge($notificationsLater);

        return view('notification.list', compact('notifications'));
    }

    public function view($id)
    {
        $notification = Notification::findOrFail($id);
        return view('notification.view', compact('notification'));
    }
}
