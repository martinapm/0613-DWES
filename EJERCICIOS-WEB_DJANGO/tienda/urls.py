from django.urls import path
from . import views
 
urlpatterns = [
    # Ejercicio 3: Primera vista
    path('inicio/', views.inicio),
 
    # Ejercicio 4: Vista con parámetro
    path('saludo/<str:nombre>/', views.saludo),
 
    # Ejercicio 5: Vista con cálculo
    path('suma/<int:num1>/<int:num2>/', views.suma),
 
    # Ejercicio 6: Primer template
    path('template/', views.inicio_template),
 
    # Ejercicio 7: Pasar datos al template
    path('saludo-template/', views.saludo_template),
 
    # Ejercicio 8: Mostrar lista
    path('frutas/', views.frutas),
 
    # Ejercicio 11: Mostrar todos los libros
    path('libros/', views.libros),
 
    # Ejercicio 12: Mostrar libro por ID
    path('libro/<int:id>/', views.libro_detalle),
 
    # Ejercicio 13: Actualizar libro
    path('libro/actualizar/<int:id>/', views.libro_actualizar),
 
    # Ejercicio 14: Eliminar libro
    path('libro/eliminar/<int:id>/', views.libro_eliminar),
 
    # ── Ejercicio Final: Películas ──
    path('peliculas/', views.peliculas),
    path('pelicula/<int:id>/', views.pelicula_detalle),
    path('pelicula/insertar/', views.pelicula_insertar),
    path('pelicula/actualizar/<int:id>/', views.pelicula_actualizar),
    path('pelicula/eliminar/<int:id>/', views.pelicula_eliminar),
]