# -*- coding: utf-8 -*-

def saludar(nombre):
	print('Hola ', nombre)

class Perro:

	tipo = 'canino' # Variable de clase: son atributos compartidos por todas las instancias de la clase

	def __init__(self, nombre):
		self.nombre = nombre # Variable de instancia: son para datos únicos de cada instancia
		self.trucos = []