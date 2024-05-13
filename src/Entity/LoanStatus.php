<?php
namespace App\Entity;

enum LoanStatus: string
{
    case InBidding = "IN_BIDDING";
    case Active = "ACTIVE";
    case Paid = "PAID";
}