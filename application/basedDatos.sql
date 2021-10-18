CREATE VIEW vwUsers AS 
SELECT p.nIdPersona as eIdPer,r.nIdRPT as eIdUsr, 
p.txtNombre as nombre, p.txtApellidos as apellidos, 
p.txtRFC as RFC, t.nIdTipoP as eTipo, t.txtTipo tipo 
FROM relusuario r 
inner join catpersonas p 
ON r.fk_eIdPersona = p.nIdPersona 
INNER JOIN cattipopersona t 
ON r.fk_eIdTipoP = t.nIdTipoP

ALTER ALGORITHM = UNDEFINED DEFINER=`root`@`localhost` 
SQL SECURITY DEFINER VIEW `vwusers` AS 
select `p`.`nIdPersona` AS `eIdPer`,`r`.`nIdRPT` AS `eIdUsr`,
`p`.`txtNombre` AS `nombre`,`p`.`txtApellidos` AS `apellidos`,
`p`.`txtRFC` AS `RFC`,`t`.`nIdTipoP` AS `eTipo`,`t`.
`txtTipo` AS `tipo`, r.txtNombreCorto as usr 
from ((`articulos`.`relusuario` `r` 
	join `articulos`.`catpersonas` `p` 
	on(`r`.`fk_eIdPersona` = `p`.`nIdPersona`)) 
	join `articulos`.`cattipopersona` `t` 
	on(`r`.`fk_eIdTipoP` = `t`.`nIdTipoP`))