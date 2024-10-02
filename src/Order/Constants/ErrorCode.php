<?php

namespace SkinsPay\Order\Constants;

enum ErrorCode: int
{
    case PriceExceedLimit = 42201;
    case InvalidListing = 42202;
    case InvalidInventory = 42203;
    case InvalidSteamId = 42204;
    case InvalidCookies = 42205;

    case ListingItemExisted = 42211;

    case OrderNotFound = 42404;


    /// Send Trade Related Error Code, Format should be 4XXXXX
    case Unauthorized = 440100;
    case Unknown = 450000;
    case NetworkError = 450100;
    case Failed = 440002;
    case InvalidTradeUrl = 440015;
    case Timeout = 440016;
    case ItemNotExisted = 440026;
    case LimitExceeded = 440025;
    case ServiceUnavailable = 440020;

}