    var layouter = new Graph.Layout.Spring(g);

    /* draw the graph using the kylloJS draw implementation */
    renderer = new Graph.Renderer.kyllo('canvas', g, width, height);

    redraw = function() {
        layouter.layout();
        renderer.draw();
    };
    hide = function(id) {
        g.nodes[id].hide();
    };
    show = function(id) {
        g.nodes[id].show();
    };
    addP = function(id) {
        var myTextField = document.getElementById('IDpais');
        if(myTextField.value != ""){
            //myTextField="teste";
            g.addNode(myTextField.value);
            addPais(myTextField.value);
            layouter.layout();
            renderer.draw();

        }
        else{
                alert("O campo país está em branco!");
        }
    };
    addEdge = function() {
        var myTextField2 = document.getElementById('IDp2');
        var myTextField1 = document.getElementById('IDp1');
        if((myTextField1.value != "")&&(myTextField2.value != "")){
            g.addEdge(myTextField2.value,myTextField1.value);
            addPais(myTextField2.value);
            addPais(myTextField1.value);
            addCaminho(myTextField2.value,myTextField1.value);
            layouter.layout();
            renderer.draw();
        }
        else{
                if(myTextField1.value != "")
                    {
                        alert("Campo país um está em branco!");
                    }
                else{
                        alert("Campo país dois está em branco!");
                    }
            }
    };
    addEdge2 = function(id1,id2) {
            g.addEdge(id1,id2);
            layouter.layout();
            renderer.draw();
    };
    cRoxo = function(id,num) {
        g.addNode(string(num),{render:roxo,label : id});
        layouter.layout();
        renderer.draw();
        hide(id);

    };
    cPreto = function(id,num) {
        g.addNode(string(num),{render:preto,label : id});
        layouter.layout();
        renderer.draw();
        hide(id);

    };
    cVermelho = function(id,num) {
        alert(id);
        g.addNode(string(num),{render:vermelho,label : id});
        hide(id);
        layouter.layout();
        renderer.draw();

    };
    cVerde = function(id,num) {
        g.addNode(string(num),{render:verde,label : id});
        layouter.layout();
        renderer.draw();
        hide(id);

    };

};
