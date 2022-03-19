-- View em linha
select cli.first_name from cliente cli 
	inner JOIN (select * from consumo where quantidade > 70) as sel on cli.id = sel.idcliente;

-- Criando uma view
CREATE view selecionados as select * from consumo where quantidade > 70;

-- Utilizando uma view
select cli.first_name from cliente cli 
	inner JOIN selecionados as sel on cli.id = sel.idcliente;

-- View se atualizam
select * from selecionados where idcliente = 2206 or idcliente=9700;
select * from selecionados where quantidade >=200;
INSERT INTO `consumo` VALUES (0,2206,200),(0,9700,200);
    
-- excluindo uma View    
drop view selecionados;
    
    
