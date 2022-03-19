select * FROM cliente where id > 7000;
select email from cliente WHERE email = 'rrosec@ocn.ne.jp';
select email from cliente WHERE email like 'rrosec@ocn.ne.jp';

select * from consumo where quantidade = 70;
select * from consumo where quantidade > 70;
select * from consumo where quantidade >= 70;

select cli.id, cli.first_name  from cliente cli inner join consumo con on cli.id = con.idcliente;

select cli.first_name from cliente cli 
	INNER join (select * from consumo where quantidade = 70) as sel on cli.id = sel.idcliente;
    
select cli.first_name  from cliente cli inner JOIN consumo con on cli.id = con.idcliente
		where con.quantidade = 70;
        

select min(quantidade), max(quantidade) from consumo;

select id, first_name from cliente ORDER BY first_name;
select cli.first_name  from cliente cli inner JOIN consumo con on cli.id = con.idcliente
		ORDER BY con.quantidade;
        
select quantidade, count(quantidade)  from consumo GROUP BY quantidade;

select cliente.id, sum(consumo.quantidade) from cliente INNER JOIN consumo on cliente.id = consumo.idcliente 
	GROUP BY cliente.id;
    
    
    
    


create INDEX idx_first_name on cliente(first_name);