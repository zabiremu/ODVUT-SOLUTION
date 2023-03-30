1.Please migrate database with seed files
=======
php artisan migrate --seed


2.user login credentials
======
Api:http://127.0.0.1:8000/api/auth/login
Login: admin@gmail.com
password: 12345678
method: post


3.user register credentials
======
Api: http://127.0.0.1:8000/api/auth/register
method: post


4.user logout credentials
======
Api: http://127.0.0.1:8000/api/auth/logout
method: post

5. Product create credentials
======
Api: http://127.0.0.1:8000/api/product/create
method: post

6. Product view credentials
======
Api: http://127.0.0.1:8000/api/product/view
method: get

7. Product edit credentials
======
Api: http://127.0.0.1:8000/api/product/edit/{id}
method: get

8. Product update credentials
======
Api: http://127.0.0.1:8000/api/product/update/{id}
method: post

9. Product soft detete credentials
======
Api: http://127.0.0.1:8000/api/product/soft-delete/{id}
method: get

10. Product trashed lists credentials
======
Api: http://127.0.0.1:8000/api/soft-delete-items
method: get

11. Product restored credentials
======
Api: http://127.0.0.1:8000/api/product/restore/{id}
method: get

12. Product force deleted credentials
======
Api: http://127.0.0.1:8000/api/product/delete/{id}
method: get


13. Product search credentials
======
Api: http://127.0.0.1:8000/api/product/{name}
method: get

14. Product paginate credentials
======
Api: http://127.0.0.1:8000/api/product/paginate?paginate={page number}
method: post








