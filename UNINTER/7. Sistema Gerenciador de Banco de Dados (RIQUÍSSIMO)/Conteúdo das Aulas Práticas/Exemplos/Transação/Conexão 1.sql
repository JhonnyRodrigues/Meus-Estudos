set session autocommit=0;
set autocommit=0;
select @@autocommit;

START TRANSACTION;
call muda_para(5);
COMMIT;



SELECT total, count(*) from aula.cliente GROUP BY total;






UPDATE aula.cliente SET `total` = 0;
COMMIT;