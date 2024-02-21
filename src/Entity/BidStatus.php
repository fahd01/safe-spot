<?php

namespace App\Entity;


namespace App\Entity;

enum BidStatus: string
{
    case Pending = "PENDING";

    case Approved = "APPROVED";

    case Rejected = "REJECTED";

    case Active = "ACTIVE";

    case Paid = "PAID";



}