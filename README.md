# EABlender - Options

É um plugin da família EABlender, que coleta orçamentos e envia para o [App do Entenda antes](https://app.entendaantes.com.br) 

## O que ele faz?

O EABlender - Options é um formulário que tem como função armazenar dados globais que serão utilizados
para gerenciar e facilitar o manuseio dos mesmos dentro dos plugins do wordpress.


O EABlender - Options contém os seguintes campos no formulário:

  *IMAGE_S3
  *IMAGE_S3_RESIZED
  *API
  *URL_USER


Configurar o EABlender - Options

* Etapa 1:
  *Em configurações no Painel do wordpress existe uma opção como sub-menu chamada "eablender-options",
  *nesta opção é necessário preencher 4 campos que são:

  *Apenas um exemplo de preenchimento:
      IMAGE_S3: https://aes-entenda-antes-teste-arquivos.s3.amazonaws.com/
      IMAGE_S3_RESIZED: https://aes-entenda-antes-arquivosresized.s3.amazonaws.com/
      API: https://gama.entendaantes.com.br:8443/
      URL_USER: https://app.entendaantes.com.br/site/

  Ambos os campos Image_s3 são responsáveis por armazenar o caminho do s3 para as imagens que serão utilizadas pelos plugins.
  O campo API é responsável por trocar a base de dados do sistema.
  O campo URL_USER é responsável por redirecionar o usuário para página do profissional/empresa.


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
* Outros erros encontrados devem ser anotados aqui, com suas (prováveis) soluções

## Erros esperados para os plugins que necessitam das informações globais:
* **API do Entenda Antes inacessível:** O plugin deve retornar uma mensagem ao usuário dizendo que a API está inacessível
  * Verificar se a url da api foi digitada corretamente.
* Campos obrigatórios faltantes
  * O administrador deverá preencher as informações do fomulário em configurções->eablender-options.
* Outros erros encontrados devem ser anotados aqui, com suas (prováveis) soluções

## Licença
[Comercial](https://www.example.com/)