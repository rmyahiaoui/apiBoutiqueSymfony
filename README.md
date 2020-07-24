# apiBoutiqueSymfony

Executé composer install
Executé php bin/console doctrine:database:create
Executé php bin/console doctrine:migrations:migrate

Executé php bin/console doctrine:fixtures:load

<p>recuperation token:</p>
<p>utilisé postman:</p>
http://localhost:8000/api/login_check
mettre les info suivantes dans le headers:
[{"key":"Content-Type","value":"application/json","description":""}]
mettre les info suivantes dans le body:
{
"username": "redouane",
"password": "admin"
}

Récupéré la liste des chaussure:
<p>utilisé postman:</p>
http://localhost:8000/api/chaussures
mettre les info suivantes dans le headers:
autorization:

Bearer Token valeur du token



