<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index()
{
    return view('notifications.index', [
        'notifications' => collect()
    ]);
}

        return view(
            'notifications.index',
            compact('notifications')
        );
    }
}