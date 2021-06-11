<style>
.chart-wrap {
    --chart-width:420px;
    --grid-color:#aaa;
    --bar-color:#F16335;
    --bar-thickness:40px;
    --bar-rounded: 3px;
    --bar-spacing:10px;

    font-family:sans-serif;
    width:var(--chart-width);
}

.chart-wrap .title{
    font-weight:bold;
    padding:1.8em 0;
    text-align:center;
    white-space:nowrap;
}

/* cuando definimos el gráfico en horizontal, lo giramos 90 grados */
.chart-wrap.horizontal .grid{
    transform:rotate(-90deg);
}

.chart-wrap.horizontal .bar::after{
    /* giramos las letras para horizontal*/
    transform: rotate(45deg);
    padding-top:0px;
    display: block;
}

.chart-wrap .grid{
    margin-left:50px;
    position:relative;
    padding:5px 0 5px 0;
    height:100%;
    width:100%;
    border-left:2px solid var(--grid-color);
}

/* posicionamos el % del gráfico*/
.chart-wrap .grid::before{
    font-size:0.8em;
    font-weight:bold;
    content:'0%';
    position:absolute;
    left:-0.5em;
    top:-1.5em;
}
.chart-wrap .grid::after{
    font-size:0.8em;
    font-weight:bold;
    content:'100%'; 
    position:absolute;
    right:-1.5em;
    top:-1.5em;
}

/* giramos las valores de 0% y 100% para horizontal */
.chart-wrap.horizontal .grid::before, .chart-wrap.horizontal .grid::after {
    transform: rotate(90deg);
}

.chart-wrap .bar {
    width: var(--bar-value);
    height:var(--bar-thickness);
    margin:var(--bar-spacing) 0;
    background-color:var(--bar-color);
    border-radius:0 var(--bar-rounded) var(--bar-rounded) 0;
}

.chart-wrap .bar:hover{
    opacity:0.7;
}

.chart-wrap .bar::after{
    content:attr(data-name);
    margin-left:100%;
    padding:10px;
    display:inline-block;
    white-space:nowrap;
}
</style>
<!-- quitar el estilo "horizontal" para visualizar verticalmente -->
<?php
    $estadisticas = new ActivoC();
    $estadisticas -> estadisticaC();
?>
