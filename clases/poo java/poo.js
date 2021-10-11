//1 
var persona=new Object();//creando un objeto de una clase (objeto)
console.log(typeof(objeto));

/*var  num=100;
console.log(typeof(num));
var t='palabra';
console.log(typeof(t));*/

persona.nombre='matyas';
persona.apellido='lara';
persona.mostrar=function () {
    return nombre + ' - ' + apellido;
}

//2 
//json= java script object notation -clave:valor(atributos y metodos)

var alumno={
    nombre:'ihan',
    apellido:'urrego',
    nombrecompleto:function () {
        return this.nombre + ' - ' + this.apellido;
        //this=esta clase, este objeto
    }
}
console.log(typeof(alumno));
alumno.telefono='3058807508';
//console.log(alumno);

//recorrer claves de  objeto con for in
for(atributo in alumno){
    console.log(atributo);
}
//convertir valores de objeto a array
var arreglo= Object.values(alumno);
console.log(arreglo);

//acceso por operador punto
console.log(alumno.nombrecompleto());
//console.log(typeof(alumno));
console.log(alumno.nombre);
console.log(alumno.apellido);

//acceso por operador llave
console.log(alumno['nombrecompleto']);
console.log(alumno['nombre']);
console.log(alumno['apellido']);


class estudiante{
    constructor (nombre,apellido){
        this.nombre=nombre;
        this.apellido=apellido;
    }
}
var e1=new estudiante('Vale','luna');
console.log(typeof(e1));
console.log(e1.nombre);