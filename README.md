sisdepen-forms
==============

Repositório do projeto Formulários SISDEPEN - Formulário de Inspeção

Rodando o projeto
==============

No Vagrantfile adicione um IP privado para sua conexão:

```ruby
config.vm.network "private_network", ip: "10.1.1.9"
```

Para que as rotas funcionem corretamente adicione este IP no seu arquivo hosts:

```conf
10.1.1.9 api.sisdepen-forms.dev sisdepen-forms.dev www.sisdepen-forms.dev
```

Obs: Troque o IP 10.1.1.9 pelo desejado, lembre-se de observar se o IP não vai conflitar com outros IPs da sua rede.

Rodando em Standalone, sem vagrant ou servidor de aplicaçao
==============

API:
Na pasta apigility execute:

```bash
php -S 0.0.0.0:8888 -t public public/index.php
```

Aplicação:
Na pasta sisdepen-forms execute:

```bash
php app/console server:run
```
