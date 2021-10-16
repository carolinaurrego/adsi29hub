

class Persona{
    constructor(nombre,apellido){
        this._nombre=nombre;
        this._apellido=apellido;
    }
    get nombre (){
        return this._nombre;
    }
    set nombre(nombre){
        this._nombre=nombre;
    }
    get apellido (){
        return this._apellido;
    }
    set apellido(apellido){
        this._apellido=apellido;
    }
    NombreCompleto(){
        return this._nombre + ' ' +this.apellido;
    }
}

class Aprendiz extends Persona {
    constructor(nombre, apellido, ficha, programa) {
        super(nombre, apellido);
        this._ficha = ficha;
        this._programa = programa;
    }

    get programa() {
        return this._programa;
    }

    set programa(programa) {
        this._programa = programa;
    }

    get ficha() {
        return this._ficha;
    }

    set ficha(ficha) {
        this._ficha = ficha;
    }

    NombreCompleto2 (){
        return this._nombre + ' ' + this._apellido + ' ' + this._ficha + ' ' + this._programa;
    }
}
var ob =new Persona('Ihan','Valencia');
var ap = new Aprendiz('Matyas', 'Urrego', '152345', 'contabilidad');

document.write(ap.NombreCompleto2());