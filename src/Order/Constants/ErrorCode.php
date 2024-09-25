<?php

namespace SkinsPay\Order\Constants;

enum ErrorCode: int
{
    case PriceExceedLimit = 42201;
    case InvalidListing = 42202;
    case InvalidInventory = 42203;

    case ListingItemExisted = 42211;

    case OrderNotFound = 42404;

    case SEND_TRADE_ERROR_FAIL = 44002;

    case SEND_TRADE_ERROR_TIMEOUT = 44016;

    case SEND_TRADE_ERROR_INVALID_TRADE_URL = 44015;

    case SEND_TRADE_ERROR_ITEM_NOT_EXISTED = 44026;

    case SEND_TRADE_ERROR_LIMIT_EXCEEDED = 44025;

    case SEND_TRADE_ERROR_SERVICE_UNAVAILABLE = 44020;

    public static function fromSendTradeErrorCode(SendTradeErrorCode $sendTradeErrorCode): self
    {
        return match ($sendTradeErrorCode) {
            SendTradeErrorCode::FAIL => self::SEND_TRADE_ERROR_FAIL,
            SendTradeErrorCode::TIMEOUT => self::SEND_TRADE_ERROR_TIMEOUT,
            SendTradeErrorCode::INVALID_TRADE_URL => self::SEND_TRADE_ERROR_INVALID_TRADE_URL,
            SendTradeErrorCode::ITEM_NOT_EXISTED => self::SEND_TRADE_ERROR_ITEM_NOT_EXISTED,
            SendTradeErrorCode::LIMIT_EXCEEDED => self::SEND_TRADE_ERROR_LIMIT_EXCEEDED,
            SendTradeErrorCode::SERVICE_UNAVAILABLE => self::SEND_TRADE_ERROR_SERVICE_UNAVAILABLE,
        };
    }
}