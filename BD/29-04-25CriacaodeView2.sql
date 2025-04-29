CREATE TABLE Deposito (
	IdDeposito INT IDENTITY PRIMARY KEY,
	ContaBancaria INT NOT NULL,
	Valor DECIMAL(18, 2) NOT NULL,
	DataDeposito DATETIME DEFAULT GETDATE()
);


--Criação da Procedure
CREATE PROCEDURE P_OperacaoBancaria
	@Operacao CHAR(1),			-- I = Inclusão, E = Exclusão, A = Atualização
	@IdDeposito INT=NULL,		-- Necessário para exclusão eatualização
	@ContaBancaria INT=NULL,	-- Necessário para exclusão eatualização
	@Valor DECIMAL(18, 2)=NULL, -- Necessário para exclusão eatualização

AS
BEGIN
	SET NOCOUNT ON;

	--Verifica a operação desejada
	IF @Operacao = 'I'
	BEGIN
	-- Inclusão de um novo depóisito
		IF @ContaBancaria IS NOT NULL AND @Valor IS NOT NULL --Verifica se o valor de Conta e Valor de Depósito está vazio
		BEGIN
			INSERT INTO Deposito (ContaBancaria, Valor)
			VALUES (@ContaBancaria,@Valor);

			PRINT 'Depósito incluído com sucesso!';
		END
		ELSE
		BEGIN
			PRINT 'ContaBancaria e Valor são necessários para inclusão!';
		END
	END
END

