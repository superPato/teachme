<?php

namespace TeachMe\Policies;

use TeachMe\Entities\Ticket;
use TeachMe\Entities\User;

class TicketPolicy
{
    public function selectResource(User $user, Ticket $ticket)
    {
        return $user->isAuthor($ticket) || $user->isAdmin();
    }
}
