<script type="text/javascript" src="Scripts/jquery/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="Scripts/sidr/jquery.sidr.js"></script>
<script type="text/javascript" src="Scripts/underscore/underscore-min.js"></script>
<script type="text/javascript" src="Scripts/d3/d3.v3.js"></script>

<script type="text/javascript" src="origin.js"></script>

<!-- ================================================= -->
<!-- ===========ACTUAL HTML           ================ -->
<!-- ================================================= -->

<form id="form">
    <label><input type="range" name="circle_size" min="1" max="50" value="15"/> Tamaño del Nodo</label><br>
    <label><input type="range" name="charge_multiplier" min="1" max="500" value="2"/>Expandir</label><br>
    <label><input type="range" name="link_strength" min="0.1" max="100" value="15"/>Fuerza del enlace</label><br>
    <label><input type="checkbox" name="show_texts_near_circles"/>Nombres</label><br>
    <input id="search_input" placeholder="Buscar Nombre Jugador" style="width:100%;"><br>

</form>

<div id="chart">
    <!-- Here the SVG will be placed-->
</div>

<div id="sidr">
  <pre id="editor">
// This one is used by default
// Groups are set based on the Prefixes
function default_coloring(d) {
  return color(d.group); 
}

// This function will group nodes based on the
// Rgular expressions you've provided
function regex_based_coloring(d) {
  var className = d.name
  
  var rules = ["Magical", "Mapp", "^NS", "^UI",  "^NI", "AF", ""];
//   var rules = ["ViewController", "View"]
  
  for (var i = 0; i &lt; rules.length; i++) {
    var re = new RegExp(rules[i], "");
    if (className.match(re)) {
      return color(i + 1)
    }
  }
  return "black";
}

// Filling out with default coloring
node.style("fill", default_coloring)
// node.style("fill", regex_based_coloring)
  
force.start()
    </pre>
</div>

<script src="Scripts/ace/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/twilight");
    editor.getSession().setMode("ace/mode/javascript");

    editor.getSession().on('change', function (e) {
        try {
            eval(editor.getSession().getValue())
        } catch (err) {
            console.log(err)
        }
    });
</script>

<script>
    $(document).ready(function () {
        $('#simple-menu').sidr(
                {
                    displace: false,
                    onOpen: function () {
                        editor.resize()
                    }
                }
        );
        $("#chart").css("overflow", "hidden");

    });
</script>

<script src="Scripts/graph-actions-select-compiled.js"></script>
<script src="Scripts/parse-compiled.js"></script>
<script>

    //  ===================================================
    //  =============== CONFIGURABLE PARAMS  ==============
    //  ===================================================

    var default_link_distance = 10;

    // How far can we change default_link_distance?
    // 0   - I don't care
    // 0.5 - Change it as you want, but it's preferrable to have default_link_distance
    // 1   - One does not change default_link_distance
    var default_link_strength = 0.7;

    // Should I comment this?
    var default_circle_radius = 15;

    // you can set it to true, but this will not help to understanf what's going on
    var show_texts_near_circles = false;
    var default_max_texts_length = 100;

    var charge_multiplier = 200;

    var dvgraph = objcdv.parse_dependencies_graph(dependencies);
    var d3graph = dvgraph.d3jsGraph();

    var w = window,
            d = document,
            e = d.documentElement,
            g = d.getElementsByTagName('body')[0],
            x = w.innerWidth || e.clientWidth || g.clientWidth,
            y = w.innerHeight || e.clientHeight || g.clientHeight;

    //  ===================================================
    //  =============== http://d3js.org/ Magic ===========
    //  ===================================================

    // https://github.com/mbostock/d3/wiki/Ordinal-Scales#categorical-colors
    var color = d3.scale.category10();

    var container = d3.select("#chart").append("svg")
            .attr("width", x)
            .attr("height", y)
            .style("overflow", "hidden");

    //  ===================================================
    //  =============== ZOOM LOGIC ========================
    //  ===================================================

    container.append("rect")
            .attr("width", x)
            .attr("height", y)
            .style("fill", "none")
            .style("pointer-events", "all")
            .call(d3.behavior.zoom().on("zoom", function () {
                svg.attr("transform", "translate(" + d3.event.translate + ")" + " scale(" + d3.event.scale + ")");
            }));


    //  ===================================================
    //  =============== FORCE LAYOUT ======================
    //  ===================================================

    var force = d3.layout.force()
            .charge(function (d) {
                return d.filtered ? 0 : -d.weight * charge_multiplier
            })
            .linkDistance(function (l) {
                return l.source.filtered || l.target.filtered ? 500 : radius(l.source) + radius(l.target) + default_link_distance
            })
            .size([x, y])
            .nodes(d3.values(d3graph.nodes))
            .links(d3graph.links)
            .linkStrength(function (l) {
                return l.source.filtered || l.target.filtered ? 0 : default_link_strength
            })
            .start();

    var svg = container.append('g');
    var actions = graph_actions.create(svg, dvgraph);

    //  ===================================================
    //  ===============  MARKERS SETUP   ==================
    //  ===================================================

    svg.append("defs").selectAll("marker")
            .data(["default", "dependency", "dependants"])
            .enter().append("marker")
            .attr("id", function (d) {
                return d;
            })
            .attr("viewBox", "0 -5 10 10")
            .attr("refX", 10)
            .attr("refY", 0)
            .attr("markerWidth", 10)
            .attr("markerHeight", 10)
            .attr("orient", "auto")
            .attr("class", "marker")
            .append("path")
            .attr("d", "M0,-5L10,0L0,5");


    //  ===================================================
    //  ===============  LINKS SETUP     ==================
    //  ===================================================

    var link = svg.append("g").selectAll("path")
            .data(d3graph.links)
            .enter().append("path")
            .attr("class", "link")
            .attr("marker-end", "url(#default)")
            .style("stroke-width", function (d) {
                return 1;
            });

    //  ===================================================
    //  ===============  NODES SETUP     ==================
    //  ===================================================

    var node = svg.append("g").selectAll("circle.node")
            .data(d3graph.nodes)
            .enter().append("circle")
            .attr("r", radius)
            .style("fill", function (d) {
                return color(d.group)
            })
            .attr("class", "node")
            .attr("source", function (d) {
                return d.source
            })
            .attr("dest", function (d) {
                return d.dest
            })
            .call(force.drag)
            .on("click", function (d) {
                if (d3.event.defaultPrevented) {
                    return
                }
                actions.selectNodesStartingFromNode(d, 1);
                force.start();
            })
            .on("contextmenu", function (d) {
                if (d3.event.defaultPrevented) {
                    return
                }
                // Don't actually show context menu
                d3.event.preventDefault();

                actions.selectNodesStartingFromNode(d);
                force.start();
            });

    //  ===================================================
    //  ===============  TEXT NODES SETUP     =============
    //  ===================================================

    var text = svg.append("g").selectAll("text")
            .data(force.nodes())
            .enter().append("text")
            .attr("visibility", "hidden")
            .text(function (d) {
                return d.name.substring(0, default_max_texts_length)
            });

    //  ===================================================
    //  ===============  FORCE UPDATE        =============
    //  ===================================================

    force.on("tick", function (e) {
        svg.selectAll(".node").attr("r", radius);
        link.attr("d", link_line);
        node.attr("transform", transform);
        if (show_texts_near_circles) {
            text.attr("transform", transform);
        }
    });

    //  ===================================================
    //  ===============  HELPER FUNCTIONS     =============
    //  ===================================================
    function link_line(d) {
        var dx = d.target.x - d.source.x,
                dy = d.target.y - d.source.y,
                dr = Math.sqrt(dx * dx + dy * dy);

        var rsource = radius(d.sourceNode) / dr;
        var rdest = radius(d.targetNode) / dr;
        var startX = d.source.x + dx * rsource;
        var startY = d.source.y + dy * rsource;

        var endX = d.target.x - dx * rdest;
        var endY = d.target.y - dy * rdest;
        return "M" + startX + "," + startY + "L" + endX + "," + endY;
    }

    function transform(d) {
        return "translate(" + d.x + "," + d.y + ")";
    }

    function radius(d) {
        return default_circle_radius + default_circle_radius * d.source / 10;
    }

    /*
     Window resize update
     */
    w.onresize = function () {
        x = w.innerWidth || e.clientWidth || g.clientWidth;
        y = w.innerHeight || e.clientHeight || g.clientHeight;

        container.attr("width", Math.ceil(x)).attr("height", Math.ceil(y));
        force.size([Math.ceil(x), Math.ceil(y)]).start();
    };


</script>

<script>
    //  ===================================================
    //  =============== INPUTS HANDLING      ==============
    //  ===================================================
    d3.selectAll("input").on("change", function change() {

        if (this.name == "circle_size") {
            default_circle_radius = parseInt(this.value);
            force.linkDistance(function (l) {
                return radius(l.source) + radius(l.target) + default_link_distance;
            });
            force.start();
        }

        if (this.name == "charge_multiplier") {
            charge_multiplier = parseInt(this.value);
            force.start();
        }

        if (this.name == "link_strength") {
            default_link_strength = parseInt(this.value) / 10;
            force.linkStrength(default_link_strength);
            force.start();
        }

        if (this.name == "show_texts_near_circles") {
            text.attr("visibility", this.checked ? "visible" : "hidden");
            show_texts_near_circles = this.checked;
            force.start();
        }

    });
</script>


<script>
    //  ===================================================
    //  =============== LIVE FILTERING      ==============
    //  ===================================================

    function live_filter_graph(regexp, classname, invert) {
        classname = typeof classname !== 'undefined' ? classname : "filtered";
        invert = typeof invert !== 'undefined' ? invert : false;

        var re = new RegExp(regexp, "i");
        svg.selectAll('circle, text')
                .classed(classname, function (node) {
                    var filtered = !node.name.match(re);
                    filtered = invert ? !filtered : filtered;
                    node.filtered = filtered;
                    node.neighbours = !filtered;
                    return filtered;
                })
                .transition();

        svg.selectAll('.link')
                .classed(classname, function (l) {
                    var filtered = !(l.sourceNode.name.match(re) && l.targetNode.name.match(re));
                    filtered = invert ? !filtered : filtered;
                    return filtered;
                })
                .attr("marker-end", function (l) {
                    var filtered = !(l.sourceNode.name.match(re) && l.targetNode.name.match(re));
                    filtered = invert ? !filtered : filtered;
                    return filtered ? "" : "url(#default)"
                })
                .transition()
    }


    d3.select("#search_input").on("input", function () {
        // Filter all items
        console.log("Input changed to" + this.value);
        actions.deselect_selected_node();

        if (this.value && this.value.length) {
            live_filter_graph(this.value, "filtered");
            force.start();
        }
    });
</script>