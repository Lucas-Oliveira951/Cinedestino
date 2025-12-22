SISTEMA DE CADASTRO E LOGIN COM AUTENTICAÇÃO POR TOKEN 

Este projeto implementa um sistema completo de cadastro e login de usuários utilizando autenticação baseada em token, sem dependência de sessões tradicionais. O objetivo é garantir segurança, escalabilidade e organização no controle de acesso.

CADASTRO DE USUARIO

O sistema permite que novos usuários se cadastrem informando um endereço de e-mail e uma senha. Para garantir a segurança das credenciais, as senhas não são armazenadas em texto puro. Durante o cadastro, o sistema utiliza a função password_hash, aplicando o algoritmo de criptografia bcrypt, e salva apenas o hash da senha no banco de dados.

Após o cadastro, o sistema gera um token de cadastro temporário, que é armazenado no banco de dados e utilizado para validar o acesso à etapa de definição da foto de perfil. Esse token impede acessos indevidos e garante que apenas usuários recém-cadastrados concluam o processo.

FOTO DE PERFIL E ARMAZENAMENTO

A foto de perfil enviada no cadastro é armazenada no Supabase Storage, e apenas a URL pública da imagem é salva no banco de dados. Isso permite que a imagem seja facilmente recuperada e exibida sempre que o usuário estiver autenticado no sistema.

BANCO DE DADOS

O banco de dados do projeto é hospedado no Supabase, que fornece uma infraestrutura baseada em PostgreSQL. Nele são armazenadas todas as informações essenciais do usuário, incluindo:

-ID do usuário
-Nome
-E-mail
-Hash da senha
-URL da foto de perfil
-Token de cadastro
-Token de login

Essa estrutura permite uma integração segura e eficiente entre autenticação, armazenamento e persistência de dados.

LOGIN E AUTENTICAÇÃO POR TOKEN

No processo de login, o usuário informa seu e-mail e senha. O sistema recupera o hash da senha correspondente no banco de dados e utiliza password_verify para validar a senha digitada.

Quando a autenticação é bem-sucedida, o sistema gera um token de login único e criptograficamente seguro, criado com random_bytes. Esse token é:

Salvo no banco de dados (Supabase)

Enviado ao navegador por meio de um cookie seguro

O cookie é configurado com as flags:

HttpOnly (impede acesso via JavaScript)

Secure (transmitido apenas em conexões HTTPS)

SameSite (proteção contra CSRF)

CONTROLE DE ACESSO

Todas as páginas protegidas do sistema verificam a existência do cookie de autenticação e validam o token junto ao banco de dados. Caso o token seja inválido, inexistente ou expirado, o acesso é bloqueado e o usuário é redirecionado para a página de login.

Esse mecanismo garante que apenas usuários autenticados possam acessar áreas restritas do sistema.

LOGOUT

No processo de logout, o sistema remove o token de login do banco de dados e invalida o cookie armazenado no navegador. Dessa forma, o acesso do usuário é encerrado de forma completa e segura.


Dessa forma, o sistema oferece um processo de autenticação seguro, organizado e escalável, utilizando criptografia de senhas, autenticação baseada em token, armazenamento em nuvem com Supabase e controle eficiente de acesso às páginas protegidas.

link para abrir na web: [https://cinedestino.vercel.app/](https://cinedestino-4knd.vercel.app/)
