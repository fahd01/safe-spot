<?php

namespace App\Entity;

enum AutomationRuleOperator: string {
    case Equals = "==";
    case Bigger = ">";
    case Lower = "<";
    case BiggerOrEqual = ">=";
    case LowerOrEqual = "<=";
}
