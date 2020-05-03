delete from old_system_contract_import_task where uid not in 
(
	select uid from (
		select min(uid) uid from old_system_contract_import_task group by old_system_contract_sn
	) e 
);