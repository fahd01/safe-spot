<?php

namespace App\Entity;

enum AutomationRuleAttribute: string {
    case Amount = "loan->amount";
    case Interest = "loan->interest";
    case Term = "loan->term";
    case BorrowerRating = "loan->borrower->rating";
}
