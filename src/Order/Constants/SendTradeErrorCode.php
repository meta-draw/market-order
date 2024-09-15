<?php

namespace SkinsPay\Order\Constants;

enum SendTradeErrorCode: int
{
    case UNKNOWN = 2;
    case TIMEOUT = 16;
    case INVALID_TRADE_URL = 15;
    case ITEM_NOT_EXISTED = 26;
    case LIMIT_EXCEEDED = 25;
    case SERVICE_UNAVAILABLE = 20;
}
