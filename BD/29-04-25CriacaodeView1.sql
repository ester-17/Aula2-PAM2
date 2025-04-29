--Criação da View que será usadana dentro da function
--DROP VIEW VW_VRAND; --apaga view

--rand() pega numero aleatório e floor pega a parte inteira
CREATE VIEW VW_VRAND AS 
SELECT CONVERT(VARCHAR(2), FLOOR(RAND()*100)) AS vRand;

--SELECT * FROM VW_VRAND;

--FUNÇÃO PARA FERAÇÃO DE SENHA AUTOMATICA PELO

DROP FUNCTION FN_SENHA;
CREATE FUNCTION FN_SENHA()
RETURNS varchar(10) --DECLARAÇÃO PARA RETORNAR NUMERO ALEATÓRIO
AS BEGIN

	DECLARE @N1 VARCHAR(2); --declaração variavel string
	DECLARE @N2 VARCHAR(2);
	DECLARE @N3 VARCHAR(2);
	DECLARE @N4 VARCHAR(2);
	DECLARE @N5 VARCHAR(2);

	DECLARE @SENHA VARCHAR(10); --declaração de variavel de posições para receber os valores

	--faz uso da viewe atribui a variavel N1, N2, N3, N4, N5;
	SELECT @N1 = VRAND FROM VW_VRAND;
	SELECT @N2 = VRAND FROM VW_VRAND;
	SELECT @N3 = VRAND FROM VW_VRAND;
	SELECT @N4 = VRAND FROM VW_VRAND;
	SELECT @N5 = VRAND FROM VW_VRAND;

	--SELECT @SENHA = @N1+''+@N2+''+@N3+''+@N4+''+@N5; --retorna senha aleatória
	RETURN(@N1+''+@N2+''+@N3+''+@N4+''+@N5);
END;


--SELECT [dbo].[fn_test] ()



