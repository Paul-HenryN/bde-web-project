<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Subscription;
use PDF;

class PDFExportController extends Controller
{
    public function getAllEventSubscribers($event_id)
    {
        $event = Event::find($event_id);
        $eventsubscribers = $event->subscriptions;

        return view ('exports.eventsubscriber',  compact('eventsubscribers.'));
    }

    public function downloadPDF($event_id) 
    {
        $event = Event::find($event_id);
        $eventsubscribers = $event->subscriptions;

        $pdf = PDF::loadView('exports.eventsubscriber', compact('eventsubscribers'));
        return $pdf->download('eventsubscribers.pdf');
    }
}
