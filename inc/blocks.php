<?php

/* Base */

function html_top() {
    return '<!DOCTYPE HTML>'.
    '<html lang="fr-FR">'.
    '<head>'.
    '<meta charset="UTF-8" />'.
    '<title>WireFrameSter</title>'.
    '<link rel="stylesheet" type="text/css" href="assets/main.css" />'.
    '</head>'.
    '<body>';
}

function html_bottom() {
    return '</body></html>';
}

/* Blocks */

function grid_50_50( $a, $b ) {
    return '<table style="width: 100%;">'.
    '<tr>'.
    '<td style="width: 50%;padding-right:10px;">'.$a.'</td>'.
    '<td style="width: 50%;padding-left:10px;">'.$b.'</td>'.
    '</tr>'.
    '</table>';
}
