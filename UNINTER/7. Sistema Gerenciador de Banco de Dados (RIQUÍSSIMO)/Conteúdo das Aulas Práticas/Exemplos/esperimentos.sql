-- Where
SELECT email FROM cliente where id=7000;

SELECT email FROM cliente where email = 'rrosec@ocn.ne.jp';
SELECT email FROM cliente where email like 'rrosec@ocn.ne.jp';
select * from consumo where quantidade = 70;
select * from consumo where quantidade > 70;
select * from consumo where quantidade >= 70;

select cli.first_name from cliente cli 
	inner JOIN (select * from consumo where quantidade = 70) as sel on cli.id = sel.idcliente;
    
select cli.first_name from cliente cli 
	inner JOIN (select * from consumo where quantidade > 70) as sel on cli.id = sel.idcliente;
    
    
-- JOIN
select cliente.id, cliente.first_name from cliente INNER JOIN consumo on cliente.id = consumo.idcliente;
select count(*) from cliente INNER JOIN consumo on cliente.id = consumo.idcliente ;

-- JOIN e Where
select cliente.id, cliente.first_name from cliente INNER JOIN consumo on cliente.id = consumo.idcliente 
	where consumo.quantidade = 70;
select cliente.id, cliente.first_name from cliente INNER JOIN consumo on cliente.id = consumo.idcliente 
	where consumo.quantidade > 70;

select count(*) from cliente INNER JOIN consumo on cliente.id = consumo.idcliente 
	where consumo.quantidade = 70;
select count(*) from cliente INNER JOIN consumo on cliente.id = consumo.idcliente 
	where consumo.quantidade > 70;
    
-- MIN e MAX
select min(quantidade), max(quantidade) from consumo;
select min(id), max(id) from consumo;

    
-- ORDER BY
select id, first_name from cliente ORDER BY id;
select quantidade from consumo ORDER BY quantidade;

-- ORDER BY e JOIN
select  cli.id, cli.first_name, con.quantidade from cliente cli INNER JOIN consumo con on cli.id = con.idcliente
	ORDER BY con.quantidade;    

-- GROUP BY
select quantidade, sum(quantidade) from consumo GROUP BY quantidade;

select consumo.idcliente, sum(consumo.quantidade) from consumo
	GROUP BY consumo.idcliente;
    

-- GROUP BY e JOIN    
select cliente.id, sum(consumo.quantidade) from cliente INNER JOIN consumo on cliente.id = consumo.idcliente 
	GROUP BY cliente.id;
