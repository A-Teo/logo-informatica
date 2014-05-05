var empleado1 = new Object();
var empleado2 = {};
var num = Math.random(),

empleado1.nombre = "Juan";
empleado1.edad = 25;
empleado1.salario = 10000;

empleado1.getEdad = function(){
	return this.edad;
}

var aumentarEdad = function(){
	this.edad++;
};
empleado1.cumple=aumentarEdad;
empleado2.cumpleAgnos=aumentarEdad;

var empleado3 = {
	nombre: "Jose",
	edad:		23,
	salario: 1200,
	getEdad: function(){
		return this.edad;
	}
};

var Empleado = function (nombre,edad,salario, cumplirAgnos) {
	this.nombre = nombre;
	var edad = edad;
	this.salario = salario;
	this.cumplirAgnos = cumplirAgnos;
};

Empleado.prototype = {
	getEdad: function(){
		return this.edad;
	}
}
var empleado5 = Object.create(Object.getPrototypeOf(Empleado), null);
var empleado4 = new Empleado("Pedro",26,2000,aumentarEdad);


var Person = function(name, age) {
	this.name = name;
	this.age = age;
}
Person.prototype = {
	haveBirthday: function() {
		this.age++;
	}
};

var Student = function(name, age, subject) {
	this.name = name;
	this.age = age;
	this.subject = subject;
}

Student.prototype = new Person();
Student.prototype.constructor = Student;
var aPerson = new Person("Ana", 20);
var aStudent = new Student("Jim", 20, "Physics");
aStudent.subject = "BioChemistry";
aStudent.haveBirthday();