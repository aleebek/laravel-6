<?php

namespace App\Listeners;

use App\Events\NewCustomerHasRegisteredEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyAdminViaSlackListener
{

    public function handle(NewCustomerHasRegisteredEvent $event)
    {
//        dump('slack message here');
    }
}
