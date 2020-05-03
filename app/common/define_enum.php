<?php

class errorCodesEnum extends Enum
{
    const INVALID_TOKEN = 301;
    const NO_LOGIN = 300;
}

class passbookAccountTypeEnum extends Enum
{
    const STORE_VAULT = 1;
}

class passbookTradeTypeEnum extends Enum
{
    const PURCHASE = 'purchase';
    const SALE = 'sale';
}

class passbookFlowStateEnum extends Enum
{
    const CANCEL = -1;
    const DONE = 100;
}

class orderStateEnum extends Enum
{
    const CANCEL = -1;
    const CREATE = 0;
    const DONE = 100;
}