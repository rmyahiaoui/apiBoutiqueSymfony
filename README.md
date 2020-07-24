# apiBoutiqueSymfony

<p>Executé composer install</p>
<p>Executé php bin/console doctrine:database:create</p>
<p>Executé php bin/console doctrine:migrations:migrate</p>
<p>Executé php bin/console doctrine:fixtures:load</p>

<p>recuperation token:</p>
<p>utilisé postman:</p>
<p>http://localhost:8000/api/login_check</p>
<p>mettre les info suivantes dans le headers:</p>
<p>[{"key":"Content-Type","value":"application/json","description":""}]</p>
<p>mettre les info suivantes dans le body:</p>
{
"username": "redouane",
"password": "admin"
}

<p>Récupéré la liste des chaussure:</p>
<p>utilisé postman:</p>
<p>http://localhost:8000/api/chaussures</p>
<p>mettre les info suivantes dans le headers:</p>
<p>autorization:</p>

<p>Bearer Token valeur du token</p>



