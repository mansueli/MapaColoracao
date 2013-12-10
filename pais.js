//       Variáveis Globais
//------------------------------------------------------------*/
var lPais=new Array();
var lCaminhos= new Array();
ListaP = new Array();
vMat = new Array();
var jResult = "";
/*=============================================================

         Métodos Genéricos

==============================================================*/
Array.prototype.hasObject = (
  !Array.indexOf ? function (o)
  {
    var l = this.length + 1;
    while (l -= 1)
    {
        if (this[l - 1] === o)
        {
            return true;
        }
    }
    return false;
  } : function (o)
  {
    return (this.indexOf(o) !== -1);
  }
);
/*      Construtor de "Estrutura de dados"
//------------------------------------------------------------*/
function makeStruct(names) {
  var names = names.split(' ');
  var count = names.length;
  function constructor() {
    for (var i = 0; i < count; i++) {
      this[names[i]] = arguments[i];
    }
  }
  return constructor;
}


/*      Método addPais
//------------------------------------------------------------*/
function addPais(nome){
    if(!lPais.hasObject(nome))
        lPais.push(nome);
}

/*=============================================================

        Fim da classe Pais e seus métodos

==============================================================*/
/*      Estrutura Caminho
//------------------------------------------------------------*/
caminho=makeStruct("pais1 pais2");
/*      Método para Procurar Caminho (pCaminho)
//------------------------------------------------------------*/
function pCaminho(nome1,nome2){
    for(var i=0;i<lCaminhos.length;i++){
        if((lCaminhos[i].pais1==nome1)&&(lCaminhos[i].pais2==nome2)){
            return 1;
        }
        else{
            if ((lCaminhos[i].pais2==nome1)&&(lCaminhos[i].pais1==nome2)){
                return 1;
            }
            else{

            }
        }
    }
    return 0;
}
/*      addCaminho
//------------------------------------------------------------*/
function addCaminho(pais1,pais2){
    //if(pCaminho(pais1,pais2)==0){
        lCaminhos.push(new caminho(pais1,pais2));
    //}
}
/*      Função para definir o vetor das cores
//------------------------------------------------------------*/
function def_check(){

    for(i=0;i<lPais.length+1;i++){
            ListaP.push([10,20,30,40]);
        }
}
/*      Remover Elemento da ListaP
//------------------------------------------------------------*/
function removedaLista(arrayElement)
{
    for(var i=0; i<ListaP.length;i++ )
    {
        if(ListaP[i]==arrayElement)
            ListaP.splice(i,1);
    }
}

function removeElemento(vetor,elemento)
{
    for(var i=0; i<vetor.length;i++ )
    {
        if(vetor[i]==elemento)
            vetor.splice(i,1);
    }
}

/*      Calcular
//------------------------------------------------------------*/
function mCalcular(){
    def_check();
    for(i=1;i<lPais.length;i++){
        for(j=0;j<lPais.length;j++){
            if (pCaminho(lPais[i],lPais[j]) == 1){
                removeElemento(ListaP[i],ListaP[j][0]);
            }
        }
    }
    for(i=0;i<lPais.length;i++){
        var x=ListaP[i].shift();
        switch(x)
        {
        case 10:
            jResult=jResult+String("g.addNode(String("+lPais[i]+"),{render:vermelho});");
            break;
        case 20:
            jResult=jResult+String("g.addNode(String("+lPais[i]+"),{render:preto});");
            break;
        case 30:
            jResult=jResult+String("g.addNode(String("+lPais[i]+"),{render:roxo});");
            break;
        case 40:
            jResult=jResult+String("g.addNode(String("+lPais[i]+"),{render:verde});");
            break;
        }/**/
    }
    for(i=0;i<lCaminhos.length;i++){
        jResult=jResult+String("g.addEdge(String("+lCaminhos[i].pais1+"),String("+lCaminhos[i].pais2+"));");
    }
    //document.write(jResult);
    alert("calculado");
    document.location=("index_.php?age="+encodeURIComponent(jResult));
}

//----------------------------------------------------------------------------

