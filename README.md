SISTEMA DE CADASTRO E LOGIN DE USUÁRIO

O sistema permite que novos usuários se cadastrem informando qualquer endereço de e-mail, uma senha e uma foto de perfil. Para garantir a segurança dos dados, a senha nunca é armazenada em texto puro: o sistema utiliza a função password_hash, que aplica um algoritmo seguro de criptografia bcrypt e salva apenas o hash no banco de dados.
No processo de login, o usuário informa e-mail e senha. O sistema recupera o hash correspondente e utiliza password_verify para comparar a senha digitada com o hash armazenado. Se a verificação for válida, o usuário é autenticado. E se o e-mail ou a senha forem preenchidos de maneira incorreta, o sistema redireciona o usuário de volta para a página de login
A foto de perfil enviada no cadastro é salva diretamente em uma pasta dentro do próprio projeto. Apenas o caminho do arquivo é armazenado no banco de dados, o que permite que o sistema recupere e exiba a imagem sempre que o usuário estiver logado. Caso o usuário não definir uma foto de perfil, o sistema automaticamente definirá uma imagem padrão para a conta.


Dessa forma, o sistema oferece um processo de autenticação seguro, organizado e funcional, combinando criptografia de senha, gerenciamento de imagens e controle de acesso.

link para abrir na web: https://cinedestino.vercel.app/
