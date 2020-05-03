<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/5/3
 * Time: 18:09
 */
class passbookClass
{

    public static function getStoreBookAccount()
    {
        $type = passbookAccountTypeEnum::STORE_VAULT;
        $m = M('passbook_account');
        $account = $m->getRow(array(
            'account_type' => $type
        ));
        if( $account ){
            return $account;
        }

        $account = $m->newRow();
        $account->book_name = '店铺账本';
        $account->balance = 0;
        $account->account_type = $type;
        $account->create_time = Now();
        $rt = $account->insert();
        if( !$rt->STS ){
            throw new Exception('添加账本失败：'.$rt->MSG);
        }
        return $account;
    }

    public static function addStoreCashFlow($trade_type,$flag,$amount,$desc,$remark='')
    {
        $book_account = self::getStoreBookAccount();
        $m_flow = M('passbook_account_flow');
        $flow = $m_flow->newRow();
        $flow->account_id = $book_account['uid'];
        $flow->book_name = $book_account['book_name'];
        $flow->begin_balance = $book_account['balance'];
        $flow->delta_flag = $flag;
        $flow->amount = $amount;
        $flow->end_balance = $flow->begin_balance+$flag*$amount;
        $flow->trade_type = $trade_type;
        $flow->business_time = Now();
        $flow->trading_desc = $desc;
        $flow->remark = $remark;
        $flow->state = passbookFlowStateEnum::DONE;
        $flow->create_time = Now();
        $rt = $flow->insert();
        if( !$rt->STS ){
            return $rt;
        }

        // 更新账本
        $book_account->balance = $flow->end_balance;
        $book_account->update_time = Now();
        $rt = $book_account->update();
        if( !$rt->STS ){
            return $rt;
        }

        return new result(true,'success');

    }
}