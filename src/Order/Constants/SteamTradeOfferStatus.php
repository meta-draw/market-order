<?php

namespace SkinsPay\Order\Constants;

enum SteamTradeOfferStatus: int
{
    case Invalid = 1;
    case Active = 2;
    case Accepted = 3;
    case Countered = 4;
    case Expired = 5;
    case Canceled = 6;
    case Declined = 7;
    case InvalidItems = 8;
    case CreatedNeedsConfirmation = 9;
    case CanceledBySecondFactor = 10;
    case InEscrow = 11;

    case Unknown = -1;

    public function toString(): string
    {
        return match($this) {
            self::Invalid => "Invalid",
            self::Active => "Active",
            self::Accepted => "Accepted",
            self::Countered => "Countered",
            self::Expired => "Expired",
            self::Canceled => "Canceled",
            self::Declined => "Declined",
            self::InvalidItems => "InvalidItems",
            self::CreatedNeedsConfirmation => "CreatedNeedsConfirmation",
            self::CanceledBySecondFactor => "CanceledBySecondFactor",
            self::InEscrow => "InEscrow",
            self::Unknown => "Unknown",
        };
    }
}