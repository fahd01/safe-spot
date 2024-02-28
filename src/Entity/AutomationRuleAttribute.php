<?php

namespace App\Entity;

enum AutomationRuleAttribute: string {
    case Amount = "getAmount";
    case Interest = "getInterest";
    case Term = "getTerm";
    # case BorrowerRating = "getBorrower";
}
