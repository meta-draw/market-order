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
}