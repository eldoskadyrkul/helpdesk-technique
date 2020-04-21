<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;

class HomeController
{
    public function index()
    {

        $totalTickets = Ticket::count();
        $openTickets = Ticket::whereHas('status', function($query) {
            $query->whereName('Open');
        })->count();
        $closedTickets = Ticket::whereHas('status', function($query) {
            $query->whereName('Closed');
        })->count();

        return view('home', compact('totalTickets', 'openTickets', 'closedTickets'));
    }
}