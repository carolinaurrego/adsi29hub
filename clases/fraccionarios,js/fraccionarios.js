var  frac = {
   n1 : 1 ,
   n2 : 4 ,
   d1 : 7 ,
   d2 : 3 ,
   suma : function ( ) {
       numeradorS1 = esto . n1  *  esto . d2 ;
       numeradorS2 = esto . n2  *  esto . d1 ;
       numeradorSF = numeradorS1  +  numeradorS2 ;
       denominadorS = esto . d1  *  esto . d2 ;
       return  'El resultado de la suma es' +  numeradorSF  +  '/'  +  denominadorS ;
   } ,
   resta : function ( ) {
       numeradorR1 = esto . n1  *  esto . d2 ;
       numeradorR2 = esto . n2  *  esto . d1 ;
       numeradorRF = numeradorS1  -  numeradorS2 ;
       denominadorR = esto . d1  *  esto . d2 ;
       return  'El resultado de la resta es' +  numeradorRF  +  '/'  +  denominadorR ;
   } ,
   multi : function ( ) {
       numeradorM1 = esto . n1  *  esto . n2 ;
       numeradorM2 = esto . d1  *  esto . d2 ;
       return  'El resultado de la multiplicacion es' +  numeradorM1  +  '/'  + numeradorM2 ;
   } ,
   divi : function ( ) {
       numeradorD1 = esto . n1  *  esto . d2 ;
       numeradorD2 = esto . n2  *  esto . d1 ;
       return  'El resultado de la division es' +  numeradorD1  +  '/'  + numeradorD2 ;
   }
}

consola . log ( frac . suma ( ) ) ;

consola . log ( frac . resta ( ) ) ;

consola . log ( frac . multi ( ) ) ;

consola . log ( frac . divi ( ) ) ;