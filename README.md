# EABlender - Options

É um plugin da família EABlender, que gerencia informações relevantes para o funcionamento dos demais da família.

## O que ele faz?

O EABlender - Options é um formulário que tem como função gerenciar dados globais que serão reutilizados nos plugins da família Eablender.


O EABlender - Options contém os seguintes campos no formulário:

  *IMAGE_S3           ---  Responsável por armazenar o caminho do s3 para as imagens que serão utilizadas pelos plugins da família Eablender (LOCAL).
  *IMAGE_S3_RESIZED   ---  Responsável por armazenar o caminho do s3 para as imagens que serão utilizadas pelos plugins da família Eablender (PRODUÇÃO).
  *API                ---  O campo API é responsável por trocar a API do sistema.
  *URL_USER           ---  O campo URL_USER é responsável por armazenar o caminho da página do profissional/empresa.


Configurar o EABlender - Options

  *Em configurações no Painel do wordpress existe uma opção como sub-menu chamada "eablender-options",
  *nesta opção é necessário preencher 4 campos que são:

  *Apenas um exemplo de preenchimento:
      IMAGE_S3: https://aes-entenda-antes-teste-arquivos.s3.amazonaws.com/
      IMAGE_S3_RESIZED: https://aes-entenda-antes-arquivosresized.s3.amazonaws.com/
      API: https://gama.entendaantes.com.br:8443/
      URL_USER: https://app.entendaantes.com.br/site/
  

## Como instalar?

Faça o download do repositório como ZIP e instale no Wordpress

## Como usar?
3 Passos :
  1 - No painel configurações do wordpress tem um sub-menu chamado eablender-options.
  2 - Ao entrar nesse sub-menu será exibido um formulário com as variáveis globais.
  3 - O administrador deverá preencher os campos e salvar.

## Como não usar?

Certifique-se de ativar o plugin.

Certifique-se de preencher os campos do formulário corretamente.

## Requisitos:
* Ativar o plugin

* Preencher os campos do formulário do wordpress presentes em configurações->eablender-options corretamente.

## Erros esperados:
* **O formulário está salvando sem validação:** Validar os campos do formulário.
* Outros erros encontrados devem ser anotados aqui, com suas (prováveis) soluções

## Erros esperados para os plugins da família Eablender que necessitam das informações globais:
* **API do Entenda Antes inacessível:** O plugin deve retornar uma mensagem ao usuário dizendo que a API está inacessível
* **Campos obrigatórios faltantes:** O administrador deverá preencher as informações do fomulário em configurções->eablender-options.
* Outros erros encontrados devem ser anotados aqui, com suas (prováveis) soluções

## Licença
[Comercial](https://www.example.com/)