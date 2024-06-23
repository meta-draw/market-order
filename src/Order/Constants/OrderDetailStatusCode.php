<?php

namespace Metadraw\Order\Constants;

enum OrderDetailStatusCode: int
{
    case Unknown = -1;
    case WaitingForDelivery = 100;
    case CreatedNeedsConfirmation = 101;
    case WaitingForAccepted = 200;
    case BuyerDeclined = 300;
    case Expired = 400;
    case SellerCanceled = 500;
    case CancelledBySecondFactor = 501;
    case UserCountered = 600;
    case InvalidItems = 700;
    case OnHold = 800;
    case Success = 900;

    public static function fromSteamTradeOfferState(SteamTradeOfferStatus $steamTradeOfferStatus): self
    {
        return match ($steamTradeOfferStatus) {
            SteamTradeOfferStatus::Active => self::WaitingForAccepted,
            SteamTradeOfferStatus::CreatedNeedsConfirmation => self::CreatedNeedsConfirmation,
            SteamTradeOfferStatus::Countered => self::UserCountered,
            SteamTradeOfferStatus::Expired => self::Expired,
            SteamTradeOfferStatus::Canceled => self::SellerCanceled,
            SteamTradeOfferStatus::CanceledBySecondFactor => self::CancelledBySecondFactor,
            SteamTradeOfferStatus::Declined => self::BuyerDeclined,
            SteamTradeOfferStatus::InvalidItems => self::InvalidItems,
            SteamTradeOfferStatus::InEscrow => self::OnHold,
            SteamTradeOfferStatus::Accepted => self::Success,
            SteamTradeOfferStatus::Invalid, SteamTradeOfferStatus::Unknown => self::Unknown,
        };
    }
}

