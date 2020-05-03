

-- 作废所有新系统的合同
update loan_contract set state=-10 where state>=20 and state<100;

-- 初始化客户的应收贷款为0

delete passbook_account_flow.*  from passbook_account_flow INNER JOIN passbook_account on passbook_account_flow.account_id=passbook_account.uid
        INNER JOIN passbook on passbook_account.book_id=passbook.uid INNER JOIN client_member on  
        (passbook.obj_guid = client_member.short_loan_guid  or passbook.obj_guid=client_member.long_loan_guid);
        
update passbook_account,passbook,client_member set passbook_account.balance=0,passbook_account.outstanding=0 
        where passbook_account.book_id=passbook.uid and (passbook.obj_guid = client_member.short_loan_guid  or passbook.obj_guid=client_member.long_loan_guid);


-- 将客户产品信用先全部更新为0

update member_credit_category set credit=0,credit_balance=0,credit_usd=0,credit_usd_balance=0,
	credit_khr=0,credit_khr_balance=0;