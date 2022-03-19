set session autocommit=0;
set autocommit=0;
select @@autocommit;


START TRANSACTION;
call muda_para(6);
COMMIT;



SELECT total, count(*) from aula.cliente GROUP BY total;


