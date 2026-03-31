from django.db import models
 
 
# ── Ejercicio 9: Modelo Libro ──
class Libro(models.Model):
    titulo = models.CharField(max_length=100)
    autor = models.CharField(max_length=100)
    precio = models.FloatField()
 
    def __str__(self):
        return f"{self.titulo} - {self.autor}"
 
 
# ── Ejercicio Final: Modelo Pelicula ──
class Pelicula(models.Model):
    titulo = models.CharField(max_length=100)
    director = models.CharField(max_length=100)
    año = models.IntegerField()
 
    def __str__(self):
        return f"{self.titulo} - {self.director} ({self.año})"
 