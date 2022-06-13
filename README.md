# Teste Técnico - Full Stack Pleno

**Instruções**:
Você deverá desenvolver uma API utilizando PHP "vanilla" ou Lumen e consumi-la com uma aplicação desenvolvida utilizando JavaScript para o frontend.

**Aplicação a ser desenvolvida:**
Seguindo o contexto que a Dommus Tecnologia está inserida, a aplicação a ser desenvolvida é para gerenciamento de empreendimentos e unidades.

**Requisitos:**

API:
- Deverá ser possível cadastrar, listar, editar ou remover empreendimentos.
- Deverá ser possível cadastrar, listar, editar ou remover unidades.

**Regras de negócio:**
- Deverá ser possível filtrar unidades.
- Deverá ser possível filtrar empreendimentos.
- O sistema deverá ser capaz de criar automaticamente as unidades de um empreendimento, especificando a quantidade de blocos, a quantidade de unidades por bloco e um valor para todas as unidades.
- O sistema deverá ser capaz de atualizar o valor das unidades de um empreendimento, informando o percentual de reajuste para acréscimo do valor
-- Unidades Vendidas ou Reservadas não podem ter seus valores atualizados, em qualquer situação
-- O sistema deverá registrar, no banco de dados, um log com a data e o percentual a cada reajuste
- O sistema deverá mostrar junto a lista de empreendimentos o VGV (Somatório de Valor) Total de Unidades Vendidas e o VGV Total de Unidades Reservadas
- O sistema deverá exibir junto à lista de empreendimentos o estoque (contagem total) de unidades DISPONÍVEIS

- A API deverá ser protegida para acessos não autorizados.

**Considerações**:
- Um empreendimento deverá ter: Código, nome, localização, previsão de entrega.
- Uma unidade deverá ter: Código, bloco, valor, status.
- Uma unidade deverá ser vinculada a um empreendimento.
- Um empreendimento poderá ter N unidades atreladas a ele.
- Uma unidade deverá ter 3 status: VENDIDA, DISPONÍVEL, RESERVADA.

**Frontend:**
- Deverá ser implentado o consumo dos endpoints criados na API.

**Extra:**
- Faça a autenticação da API utilizando um token JWT.
- Utilize HATEOAS nos recursos da sua API
- Cubra o seu código com testes unitários.
- Utilize TypeScript na elaboração do seu código front-end.
- As tabelas do banco de dados deverão ser criadas através de migrations.
- Utilize princípios SOLID durante o desenvolvimento.
- Utilize React no frontend.
