# Teste Técnico - Full Stack Pleno

**Instruções**:
Você deverá desenvolver uma API utilizando PHP, se preferir com Laravel ou Lumen junto às bibliotecas que preferir, e consumí-la com uma aplicação desenvolvida utilizando JavaScript para o frontend. Você poderá usar ReactJS e componentes à sua preferência. Você poderá utilizar de bibliotecas e componentes visuais para facilitar como seu desenvolvimento, como Bootstrap e Material. Seu frontend deverá ser desacoplado da API.

**Aplicação a ser desenvolvida:**
Seguindo o contexto que a Dommus Tecnologia está inserida, a aplicação a ser desenvolvida é para gerenciamento de empreendimentos (como prédios e condomínios) e unidades autonômas (como apartamentos ou casas). Crie no frontend uma lista de empreendimentos, e um mecanismo de navegação que permita ao usuario acessar uma lista de unidades para cada um deles. Crie formulários para os requisitos descritos abaixo.

**Requisitos:**

API:
- Deverá ser possível cadastrar, listar, editar, remover ou buscar empreendimentos.
- Deverá ser possível cadastrar, listar, editar, remover ou buscar unidades.
- Deverá ser possível atualizar o preço de venda das unidades de um empreendimento.
- Deverá ser possível criar unidades em lote para um empreendimento

**Domínio:**
- O usuário poderá filtrar empreendimentos em sua respectiva lista usando de código e / ou nome e / ou cidade.
- O usuário poderá buscar empreendimentos usando de código e / ou nome e / ou cidade.
- O usuário poderá filtrar unidades, usando uma faixa de preço e / ou status e / ou bloco, em sua respectiva lista.
- O usuário poderá buscar unidades usando de código e / ou uma faixa de preço de venda e / ou status e / ou bloco.
- O usuário poderá criar, editar e remover empreendimentos
- O usuário poderá criar, editar e remover unidades
- O sistema não pode excluir unidades com status VENDIDA ou RESERVADA.
- O sistema não pode excluir empreendimentos que possuam unidades com status VENDIDA ou RESERVADA.
- Suas listas devem ser paginadas.
- O sistema deverá ser capaz de criar as unidades de um empreendimento, com o usuário especificando a quantidade de blocos, a quantidade de unidades por bloco e um preço de venda para todas as unidades.
- O usuário poderá atualizar o preço de venda das unidades de um empreendimento, informando o percentual de reajuste para acréscimo do valor.
-- Unidades Vendidas ou Reservadas não podem ter seus valores atualizados, em qualquer situação
-- O sistema deverá registrar, no banco de dados, um log com a data e o percentual a cada reajuste
- O sistema deverá mostrar junto a lista de empreendimentos o VGV (Somatório de Preço) Total de Unidades Vendidas e o VGV Total de Unidades Reservadas
- O sistema deverá exibir junto à lista de empreendimentos o estoque (contagem total) de unidades DISPONÍVEIS
- A API deverá ser protegida para acessos não autorizados (pode utilizar autenticação simples com login e senha - não é necessário fazer a tela de login).


**Considerações**:
- Um empreendimento deverá ter como atributos: Código, nome, cidade e previsão de entrega.
- Uma unidade deverá ter como atributos: Código, bloco, preço de venda e status.
- - Uma unidade deverá ter 3 status: VENDIDA, DISPONÍVEL, RESERVADA.
- Uma unidade deverá ser vinculada a um e apenas um empreendimento.
- Um empreendimento poderá ter N unidades atreladas a ele.

**Extra:**
- Utilize princípios SOLID durante o desenvolvimento.
- Utilize MVC e REST para organizar sua API.
- Utilize ORM para sua camada de acesso a dados.
- Automatize a criação das tabelas de seu banco de dados.
- Componentize os elementos do frontend.
- Utilize React no frontend.
- Entregue sua api com um container do docker para ser executada.
- Adicione notas explicativas a sua entrega, relativas a organização do seu código
