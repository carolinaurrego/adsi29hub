var frac={
    n1:8,
    n2:6,
    d1:10,
    d2:7,
    suma:function(){
        numeradorS1=this.n1 * this.d2;
        numeradorS2=this.n2 * this.d1;
        numeradorSF=numeradorS1 + numeradorS2;
        denominadorS=this.d1 * this.d2;
        return 'El resultado de la suma es '+ numeradorSF + ' / ' + denominadorS;
    },
    resta:function(){
        numeradorR1=this.n1 * this.d2;
        numeradorR2=this.n2 * this.d1;
        numeradorRF=numeradorS1 - numeradorS2;
        denominadorR=this.d1 * this.d2;
        return 'El resultado de la resta es '+ numeradorRF + ' / ' + denominadorR;
    },
    multi:function(){
        numeradorM1=this.n1 * this.n2;
        numeradorM2=this.d1 * this.d2;
        return 'El resultado de la multiplicacion es '+ numeradorM1 + ' / ' +numeradorM2;
    },
    divi:function(){
        numeradorD1=this.n1 * this.d2;
        numeradorD2=this.n2 * this.d1;
        return 'El resultado de la division es '+ numeradorD1 + ' / ' +numeradorD2;
    }
 }
 
 document.write(frac.suma());
 
 document.write(frac.resta());
 
 document.write(frac.multi());
 
 document.write(frac.divi());