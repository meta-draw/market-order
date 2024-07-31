<?php

namespace SkinsPay\Order\Constants;

enum ErrorCode: int
{
    case PriceExceedLimit = 42201;
    case InvalidListing = 42202;

    case ListingItemExisted = 42211;

    
}