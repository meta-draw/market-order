<?php

namespace SkinsPay\Order\Constants;

enum OrderStatus: int
{
    case Unknown = -1;
    case WaitingForDelivery = 100;
    case OnHold = 200;
    case WaitingForAccepted = 300;
    case Success = 400;
    case Failed = 999;

    public static function fromDetailStatusCode(OrderDetailStatusCode $orderDetailStatusCode, self $currentStatus): self
    {
        if ($currentStatus === self::WaitingForDelivery && $orderDetailStatusCode === OrderDetailStatusCode::Unknown) {
            return self::WaitingForDelivery;
        }

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

    public static function fromSendTradeErrorCode(SendTradeErrorCode $sendTradeErrorCode): self
    {
        return match ($sendTradeErrorCode) {
            SendTradeErrorCode::ITEM_NOT_EXISTED,
            SendTradeErrorCode::INVALID_TRADE_URL,
            SendTradeErrorCode::LIMIT_EXCEEDED,
            SendTradeErrorCode::FAIL => self::Failed,
            SendTradeErrorCode::SERVICE_UNAVAILABLE, SendTradeErrorCode::TIMEOUT => self::Unknown,
        };
    }
}
