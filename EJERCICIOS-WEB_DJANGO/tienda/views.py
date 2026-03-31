from django.http import HttpResponse
from django.shortcuts import render, get_object_or_404, redirect
from .models import Libro, Pelicula
 
 
# ── Ejercicio 3: Primera vista ──
def inicio(request):
    return HttpResponse("Bienvenido a mi primera aplicación Django")
 
 
# ── Ejercicio 4: Vista con parámetro ──
def saludo(request, nombre):
    return HttpResponse(f"Hola {nombre}, bienvenido a Django")
 
 
# ── Ejercicio 5: Vista con cálculo ──
def suma(request, num1, num2):
    resultado = num1 + num2
    return HttpResponse(f"La suma es {resultado}")
 
 
# ── Ejercicio 6: Primer template ──
def inicio_template(request):
    return render(request, 'inicio.html')
 
 
# ── Ejercicio 7: Pasar datos al template ──
def saludo_template(request):
    contexto = {'nombre': 'Carlos'}
    return render(request, 'saludo.html', contexto)
 
 
# ── Ejercicio 8: Mostrar lista ──
def frutas(request):
    lista_frutas = ["manzana", "pera", "plátano", "naranja"]
    contexto = {'frutas': lista_frutas}
    return render(request, 'frutas.html', contexto)
 
 
# ── Ejercicio 11: Mostrar todos los libros ──
def libros(request):
    lista_libros = Libro.objects.all()
    contexto = {'libros': lista_libros}
    return render(request, 'libros.html', contexto)
 
 
# ── Ejercicio 12: Mostrar libro por ID ──
def libro_detalle(request, id):
    libro = get_object_or_404(Libro, id=id)
    contexto = {'libro': libro}
    return render(request, 'libro_detalle.html', contexto)
 
 
# ── Ejercicio 13: Actualizar libro ──
def libro_actualizar(request, id):
    libro = get_object_or_404(Libro, id=id)
    libro.precio = 25
    libro.save()
    return HttpResponse(f"Libro '{libro.titulo}' actualizado. Nuevo precio: {libro.precio}€")
 
 
# ── Ejercicio 14: Eliminar libro ──
def libro_eliminar(request, id):
    libro = get_object_or_404(Libro, id=id)
    titulo = libro.titulo
    libro.delete()
    return HttpResponse(f"Libro '{titulo}' eliminado correctamente")
 
 
# ══════════════════════════════════════════
#  EJERCICIO FINAL: Películas
# ══════════════════════════════════════════
 
# Mostrar todas las películas
def peliculas(request):
    lista_peliculas = Pelicula.objects.all()
    contexto = {'peliculas': lista_peliculas}
    return render(request, 'peliculas.html', contexto)
 
 
# Mostrar película por ID
def pelicula_detalle(request, id):
    pelicula = get_object_or_404(Pelicula, id=id)
    contexto = {'pelicula': pelicula}
    return render(request, 'pelicula_detalle.html', contexto)
 
 
# Insertar película
def pelicula_insertar(request):
    Pelicula.objects.create(
        titulo="Inception",
        director="Christopher Nolan",
        año=2010
    )
    return HttpResponse("Película 'Inception' insertada correctamente. <a href='/peliculas/'>Ver todas</a>")
 
 
# Actualizar título de película
def pelicula_actualizar(request, id):
    pelicula = get_object_or_404(Pelicula, id=id)
    pelicula.titulo = pelicula.titulo + " (Editada)"
    pelicula.save()
    return HttpResponse(f"Película actualizada: '{pelicula.titulo}'. <a href='/peliculas/'>Ver todas</a>")
 
 
# Eliminar película
def pelicula_eliminar(request, id):
    pelicula = get_object_or_404(Pelicula, id=id)
    titulo = pelicula.titulo
    pelicula.delete()
    return HttpResponse(f"Película '{titulo}' eliminada. <a href='/peliculas/'>Ver todas</a>")