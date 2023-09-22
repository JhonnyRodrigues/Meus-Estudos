-- ENCONTRAR ERROS DDL
select *
from
   user_errors
where
   type = 'TRIGGER'
and
   name = 'DESATIVA_USUARIO';