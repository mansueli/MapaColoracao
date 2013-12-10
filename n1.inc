
var redraw, g, renderer;

window.onload = function() {
    //-----------------------------------------------------------------------------------
    var vermelho = function(r, n) {
            /* the kyllo set is obligatory, containing all you want to display */
            var set = r.set().push(
                /* custom objects go here */
                r.ellipse(n.point[0]-30, n.point[1]-13, 40, 24).attr({"fill": "#ff0000", r : "12px", "stroke-width" : n.distance == 0 ? "3px" : "1px" })).push(
                r.text(n.point[0], n.point[1] + 10, (n.label || n.id) + "\n(" + (n.distance == undefined ? "Infinity" : n.distance) + ")"));
            return set;
        };
    var verde = function(r, n) {
            /* the kyllo set is obligatory, containing all you want to display */
            var set = r.set().push(
                /* custom objects go here */
                r.ellipse(n.point[0]-30, n.point[1]-13, 40, 24).attr({"fill": "#00ff00", r : "12px", "stroke-width" : n.distance == 0 ? "3px" : "1px" })).push(
                r.text(n.point[0], n.point[1] + 10, (n.label || n.id) + "\n(" + (n.distance == undefined ? "Infinity" : n.distance) + ")"));
            return set;
        };
    var preto = function(r, n) {
            /* the kyllo set is obligatory, containing all you want to display */
            var set = r.set().push(
                /* custom objects go here */
                r.ellipse(n.point[0]-30, n.point[1]-13, 40, 24).attr({"fill": "#000000", r : "12px", "stroke-width" : n.distance == 0 ? "3px" : "1px" })).push(
                r.text(n.point[0], n.point[1] + 10, (n.label || n.id) + "\n(" + (n.distance == undefined ? "Infinity" : n.distance) + ")"));
            return set;
        };
    var roxo = function(r, n) {
            /* the kyllo set is obligatory, containing all you want to display */
            var set = r.set().push(
                /* custom objects go here */
                r.ellipse(n.point[0]-30, n.point[1]-13, 40, 24).attr({"fill": "#CC00FF", r : "12px", "stroke-width" : n.distance == 0 ? "3px" : "1px" })).push(
                r.text(n.point[0], n.point[1] + 10, (n.label || n.id) + "\n(" + (n.distance == undefined ? "Infinity" : n.distance) + ")"));
            return set;
        };
    //------------------------------------------------------------------------------------


    var width = $(document).width() - 20;
    var height = $(document).height() - 60;

    g = new Graph();
