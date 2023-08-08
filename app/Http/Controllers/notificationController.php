<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class notificationController extends Controller
{
    public function getNewReports($id)
    {
        $notifications = user::find($id)->unreadNotifications;
        $notificationsCount = user::find($id)->unreadNotifications->count();
        return response()->json(array('notifications' => $notifications,
                'count' => $notificationsCount));
    }
}
