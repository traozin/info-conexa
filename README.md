# Info Conexa

Este projeto foi desenvolvido como parte do processo seletivo da empresa Conexa, com o objetivo de validar o conhecimento técnico no framework Yii v1.1.22.

## Requisitos de usuário:
- Qualquer pessoa poderá ler postagens ou comentários, além de publicar novos posts ou comentar nas postagens existentes.
- A página inicial mostrará somente os últimos posts cadastrados, com um pequeno resumo do texto, data da postagem, autor e título.
- Ao clicar em algum post da página inicial, o conteúdo completo será exibido, podendo ser em uma nova página.
- Os posts estão vinculados a categorias para facilitar a busca por tópicos de um determinado assunto. As categorias são: Interações, Serviços, Financeiro, Agenda, Parceiros e Outros.

## Requisitos do projeto:
- O sistema se comunicará com uma API Rest para consumir dados de usuários, postagens, comentários e categorias. Utilizaremos o {JSON}Placeholder, uma ferramenta gratuita de API para testes e prototipagem que retorna dados fictícios.
- Para permitir customização, a modelagem do banco de dados será feita de forma fácil por meio da ferramenta My JSON Server. É importante popular o db.json com alguns dados, seguindo as seguintes regras: máximo de 10KB para db.json, 5 endpoints REST no máximo e 30 itens por endpoint.
- Embora não seja possível fazer POST, PUT ou DELETE nos dados presentes no db.json usando essa ferramenta, é recomendado implementar a requisição de POST para mapear esse requisito do usuário em código (a ferramenta está preparada para receber esses tipos de requisições e retornar o código HTTP adequado).
- Os formulários devem priorizar a usabilidade, com atenção para o posicionamento dos botões, cores, textos, labels e experiência do usuário. A validação dos dados deve ocorrer tanto no front-end, com máscaras ou validadores, quanto no back-end, com verificações no controller e nas rules no model.
- Dado que se trata de um MVP (Minimum Viable Product), não é necessário implementar a edição e exclusão de postagens e comentários. No entanto, se desejar, sinta-se à vontade para adicioná-las.