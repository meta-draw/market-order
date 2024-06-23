<?php

namespace Metadraw\Order\Constants;

enum OrderStatus: int
{
    case Unknown = -1;
    case WaitingForDelivery = 100;
    case OnHold = 200;
    case WaitingForAccepted = 300;
    case Success = 400;
    case Failed = 999;

    public static function fromDetailStatusCode(OrderDetailStatusCode $orderDetailStatusCode): self
    {
        return match ($orderDetailStatusCode) {
            OrderDetailStatusCode::CreatedNeedsConfirmation,
            OrderDetailStatusCode::WaitingForDelivery => self::WaitingForDelivery,
            OrderDetailStatusCode::WaitingForAccepted => self::WaitingForAccepted,
            OrderDetailStatusCode::Success => self::Success,
            OrderDetailStatusCode::OnHold => self::OnHold,
            OrderDetailStatusCode::SellerCanceled,
            OrderDetailStatusCode::CancelledBySecondFactor,
            OrderDetailStatusCode::UserCountered,
            OrderDetailStatusCode::Expired,
            OrderDetailStatusCode::BuyerDeclined,
            OrderDetailStatusCode::InvalidItems => self::Failed,
            OrderDetailStatusCode::Unknown => self::Unknown,
        };
    }
}
