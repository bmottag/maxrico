<?php
/*
 Reportico - PHP Reporting Tool
 Copyright (C) 2010-2013 Peter Deed

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License
 as published by the Free Software Foundation; either version 2
 of the License, or (at your option) any later version.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

 * File:        maintain.php
 *
 * This is the core Reportico Reporting Engine. The main 
 * reportico class is responsible for coordinating
 * all the other functionality in reading, preparing and
 * executing Reportico reports as well as all the screen
 * handling.
 *
 * @link http://www.reportico.co.uk/
 * @copyright 2010-2013 Peter Deed
 * @author Peter Deed <info@reportico.org>
 * @package Reportico
 * @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version : run.php,v 1.58 2013/04/24 22:03:22 peter Exp $
 */
$locale_arr = array (
"language" => "Spanish",
"template" => array (
        // Maintenance Buttons
		"T_OK" => "Enviar",
		"T_ADD" => "Agregar",

        // Maintenance Tabs
		"T_PROJECT_MENU" => "Menú de Proyectos",
		"T_ADMIN_MENU" => "Menú de Administración",
		"T_RUN_REPORT" => "Ejecute el Informe",
		"T_GEN_WEB_SERVICE" => "Generar servicios Web",
		"T_DESIGN_PASSWORD_PROMPT" => "Contraseña de Diseño",
		"T_LOGIN" => "Acceder",
		"T_LOGOFF" => "Salir",
		"T_CUSTOMSOURCECODE" => "Código de Usuario",
		"T_SAFEOFF" => "(Apagar el modo seguro de Diseño <br> configuración del proyecto <br> para habilitar esta característica)",
		"T_GO" => "Ejecutar",
		"T_PROJECT" => "Proyecto:",
		"T_SAVE" => "Guardar",
		"T_REPORT_FILE" => "Informe del archivo",
		"T_NEW_REPORT" => "Un nuevo informe",
		"T_ENTER_PROJECT_PASSWORD" => "Introduzca la contraseña del proyecto .",
		"T_QUERY_DETAILS" => "Detalles de la consulta",
		"T_OUTPUT" => "Salida",
		"T_CRITERIA" => "Criterios",
		"T_CRITERIAITEM" => "Criterio",
		"T_ASSIGNMENTS" => "Asignaciones",
		"T_ASSIGNMENT" => "Asignacion",
		"T_FORMAT" => "Formato",
		"T_PAGE_HEADERS" => "Encabezados",
		"T_PAGE_FOOTERS" => "Pies de página",
		"T_DISPLAY_ORDER" => "Mostrar Orden",
		"T_GROUPS" => "Grupos",
		"T_GRAPHS" => "Gráficos",
		"T_QUERY_COLUMNS" => "Columnas de la consulta",
		"T_ORDER_BY" => "ORDER BY",
		"T_PRESQLS" => "Pre-SQLs",
		"T_PLOTS" => "Parcelas",
		"T_DETAILS" => "Detalles",
		"T_HEADERS" => "Encabezados",
		"T_TRAILERS" => "Trailers",
		"T_DETAILS" => "Detalles",
		"T_SQL" => "SQL",
		"T_QUERY_COLUMNS" => "Columnas de la consulta",
		"T_LINKS" => "Enlaces",
		"T_QUERYSQL" => "",
		"T_NAME" => "Nombre",
		"T_SQLTEXT" => "Texto SQL",
		"T_QUERYCOLUMNNAME" => "Columna de la consulta principal",
		"T_REPORTTITLE" => "Título del informe",
		"T_REPORTDESCRIPTION" => "Descripción del informe",
		"T_LINKFROM" => "Vínculo",
		"T_LINKTO" => "Establecer el vínculo",
		"T_LINKCLAUSE" => "Enlace cláusula",
		"T_ASSIGNNAME" => "Asignar a la columna existente",
		"T_ASSIGNNAMENEW" => "Asignar a la nueva columna",
		"T_EXPRESSION" => "Expresión",
		"T_CONDITION" => "Condición",
		"T_ASSIGNAGGTYPE" => "El tipo de agregado",
		"T_ASSIGNAGGCOL" => "Columna agregada",
		"T_ASSIGNAGGGROUP" => "Agrupado por",
		"T_ASSIGNGRAPHICBLOBCOL" => "Columna que contiene gráficos",
		"T_ASSIGNGRAPHICBLOBTAB" => "Tabla que contiene gráficos",
		"T_ASSIGNGRAPHICBLOBMATCH" => "Columna de la crónica gráfica",
		"T_ASSIGNGRAPHICWIDTH" => "Informe Ancho gráfico",
		"T_ASSIGNGRAPHICREPORTCOL" => "Columna Informe gráfico",
		"T_DRILLDOWNREPORT" => "Informe detallado",
		"T_DRILLDOWNCOLUMN" => "Para obtención de detalles",
		"T_GROUPNAME" => "Grupo en la columna",
		"T_GROUPNAME" => "Grupo en la columna",
		"T_GRAPHCOLUMN" => "Columna de grupo",
		"T_GRAPHHEIGHT" => "Gráfico de altura",
		"T_GRAPHWIDTH" => "Gráfico de Ancho",
		"T_GRAPHCOLOR" => "El color del gráfico",
		"T_GRAPHWIDTHPDF" => "Gráfico Ancho (PDF)",
		"T_GRAPHHEIGHTPDF" => "Gráfico de Altura (PDF)",
		"T_XTITLE" => "Título del eje X",
		"T_YTITLE" => "Título del eje",
		"T_GRIDPOSITION" => "Posición de la cuadrícula",
		"T_PLOTSTYLE" => "De estilos de trazado",
		"T_LINECOLOR" => "Color Line",
		"T_DATATYPE" => "Tipo de datos",
		"T_FILLCOLOR" => "Color de relleno",
		"T_LEGEND" => "Leyenda",
		"T_XGRIDCOLOR" => "X-Color de la cuadrícula",
		"T_YGRIDCOLOR" => "Y-Color de la cuadrícula",
		"T_TITLEFONTSIZE" => "Título del tamaño de la fuente",
		"T_XTICKINTERVAL" => "X Tick Interval",
		"T_YTICKINTERVAL" => "Y Tick Interval",
		"T_XTICKLABELINTERVAL" => "X Tick intervalo de etiqueta",
		"T_YTICKLABELINTERVAL" => "Ver etiqueta y de intervalo",
		"T_XTITLEFONTSIZE" => "Título X Tamaño de la Fuente",
		"T_YTITLEFONTSIZE" => "Título Y Tamaño de la Fuente",
		"T_MARGINCOLOR" => "Margen de color",
		"T_MARGINLEFT" => "Margen Izquierda",
		"T_MARGINRIGHT" => "Margen derecho",
		"T_MARGINTOP" => "Margen superior",
		"T_MARGINBOTTOM" => "Margen inferior",
		"T_TITLECOLOR" => "Título de color",
		"T_XAXISCOLOR" => "X Color de Axis",
		"T_YAXISCOLOR" => "Y color del Eje",
		"T_XAXISFONTCOLOR" => "Eje X color de la fuente",
		"T_YAXISFONTCOLOR" => "Eje color de fuente",
		"T_XAXISFONTSIZE" => "Eje X Tamaño de la Fuente",
		"T_YAXISFONTSIZE" => "Eje Y Tamaño de la Fuente",
		"T_XTITLECOLOR" => "X Color del título",
		"T_YTITLECOLOR" => "Y El Color del título",
		"T_PLOTCOLUMN" => "Columna de trazar",
		"T_XLABELCOLUMN" => "Columna de etiquetas X",
		"T_YLABELCOLUMN" => "Columna de etiquetas Y.",
		"T_RETURNCOLUMN" => "Volver columna",
		"T_MATCHCOLUMN" => "Crónica de columna",
		"T_DISPLAYCOLUMN" => "Mostrar Columnas",
		"T_OVERVIEWCOLUMN" => "Columna de resumen",
		"T_CONTENTTYPE" => "Tipo de contenido",
		"T_CUSTOMSOURCE" => "Código de Usuario",
		"T_QUERYSQL" => "",
		"T_PAGESIZE" => "Tamaño de página (PDF)",
    "T_PAGEWIDTHHTML" => "Anchura de página (HTML)",
		"T_PAGEORIENTATION" => "Orientación (PDF)",
		"T_TOPMARGIN" => "Margen superior (PDF)",
		"T_BOTTOMMARGIN" => "Margen inferior (PDF)",
		"T_RIGHTMARGIN" => "Margen derecho (PDF)",
		"T_LEFTMARGIN" => "Margen izquierdo (PDF)",
		"T_PDFFONT" => "Fuente (PDF)",
		"T_ORDERNUMBER" => "Número de pedido",
		"T_BEFOREGROUPHEADER" => "Antes de encabezado de grupo",
		"T_AFTERGROUPHEADER" => "Después de encabezado de grupo",
		"T_BEFOREGROUPTRAILER" => "Antes de remolque Grupo",
		"T_AFTERGROUPTRAILER" => "Después de remolque Grupo",
		"T_BODYDISPLAY" => "Mostrar detalles",
		"T_GRAPHDISPLAY" => "Muestra el gráfico",
        "T_GRIDDISPLAY" => "Mostrar cuadrícula? ",
        "T_GRIDSORTABLE" => "Las columnas que se pueden ordenar en la red? ",
        "T_GRIDSEARCHABLE" => "Cuadro de búsqueda? ",
        "T_GRIDPAGEABLE" => "Rejillas con megafonía? ",
        "T_GRIDPAGESIZE" => "Grids Tamaño de página ",
		"T_GROUPHEADERCOLUMN" => "La columna de encabezado de grupo",
		"T_GROUPTRAILERDISPLAYCOLUMN" => "Tráiler Grupo de columnas de visualización",
		"T_GROUPTRAILERVALUECOLUMN" => "Tráiler Grupo Valor de columna",
		"T_LINENUMBER" => "Número de línea",
		"T_HEADERTEXT" => "Texto del encabezado",
		"T_FOOTERTEXT" => "Texto pie de página",
		"T_COLUMNSTARTPDF" => "Columna de inicio (PDF)",
		"T_COLUMNWIDTHPDF" => "Ancho de columna (PDF)",
		"T_COLUMNWIDTHHTML" => "Ancho de columna (HTML)",
		"T_COLUMN_TITLE" => "La columna Título",
		"T_TOOLTIP" => "Herramienta de Sugerencia",
		"T_GROUP_HEADER_LABEL" => "Label Group Header",
		"T_GROUP_TRAILER_LABEL" => "Label Group remolque",
		"T_GROUP_HEADER_LABEL_XPOS" => "Label Group Header Inicio",
		"T_GROUP_HEADER_DATA_XPOS" => "Valor de encabezado de grupo Inicio",
		"T_PDFFONTSIZE" => "Tamaño de la Fuente (PDF)",
		"T_GRIDPOSITION" => "Posición de la cuadrícula",
		"T_XGRIDDISPLAY" => "X-Style Grid",
		"T_YGRIDDISPLAY" => "Y-Style Grid",
		"T_PLOTTYPE" => "De estilos de trazado",
		"T_CRITERIADEFAULTS" => "Predeterminados",
		"T_CRITERIALIST" => "Los valores de la lista",
		"T_TITLE" => "Título",
		"T_CRITERIATYPE" => "Criterios de Tipo",
		"T_CRITERIAHELP" => "Criterios de Ayuda",
		"T_USE" => "Use",
		"T_CRITERIADISPLAY" => "Criterios de visualización",
		"T_EXPANDDISPLAY" => "Ampliar pantalla",
		"T_DATABASETYPE" => "Tipo de origen de datos",
		"T_JUSTIFY" => "Justificación",
		"T_COLUMN_DISPLAY" => "Mostrar u ocultar?",
		"T_TITLEFONT" => "Título Fuente",
		"T_TITLEFONTSTYLE" => "Título del estilo de la fuente",
		"T_XTITLEFONT" => "X Fuente del título",
		"T_YTITLEFONT" => "Y el título de fuente",
		"T_XAXISFONT" => "X Fuente de etiqueta",
		"T_YAXISFONT" => "Y Fuente de etiqueta",
		"T_XAXISFONTSTYLE" => "X Estilo de la etiqueta",
		"T_YAXISFONTSTYLE" => "Y Estilo de la etiqueta",
		"T_XTITLEFONTSTYLE" => "Título X Estilo de la fuente",
		"T_YTITLEFONTSTYLE" => "Título Y Estilo de la fuente",
        "T_FORMBETWEENROWS" => "Forma Estilo Row Separador",

// Form Dropdowns
		"T_.DEFAULT" => "",
		"T_Portrait" => "Retrato",
		"T_Landscape" => "Paisaje",
		"T_B5" => "B5",
		"T_A6" => "A6",
		"T_A5" => "A5",
		"T_A4" => "A4",
		"T_A3" => "A3",
		"T_A2" => "A2",
		"T_A1" => "A1",
		"T_US-Letter" => "US Letter",
		"T_US-Legal" => "US Legal",
		"T_US-Ledger" => "US Ledger",
		"T_hide" => "Ocultar",
		"T_show" => "Mostrar",
        "T_yes" => "sí ",
        "T_no" => "no",
		"T_plain" => "Plain",
		"T_graphic" => "Gráfico",
		"T_left" => "A la izquierda",
		"T_right" => "Derecho",
		"T_center" => "Centro",
		"T_SUM" => "Suma",
		"T_AVERAGE" => "Media",
		"T_MAX" => "Máxima",
		"T_MIN" => "Mínimo",
		"T_PREVIOUS" => "Anterior",
		"T_COUNT" => "Cuente",
		"T_TEXTFIELD" => "Campo de texto",
		"T_LOOKUP" => "Base de datos de búsqueda",
		"T_DATE" => "Fecha",
		"T_DATERANGE" => "Intervalo de fechas",
        "T_SQLCOMMAND" => "Commando SQL",
		"T_LIST" => "Lista personalizada",
		"T_NOINPUT" => "Ninguna entrada",
		"T_DROPDOWN" => "La lista desplegable",
		"T_MULTI" => "Selección múltiple de cuadro de lista",
		"T_MULTI" => "Selección múltiple de cuadro de lista",
		"T_CHECKBOX" => "Casillas de verificación",
		"T_RADIO" => "Botones de opción",
		"T_DMYFIELD" => "",
		"T_MDYFIELD" => "",
		"T_YMDFIELD" => "",
		"T_blankline" => "Línea en blanco",
		"T_solidline" => "Línea sólida",
		"T_newpage" => "Nueva página",

        // Vertical Tab Labels
		"T_PAGE_HEADER" => "Encabezado",
		"T_PAGE_FOOTER" => "Pie de página",
		"T_LINKS" => "Enlaces",
		"T_GROUP" => "Grupo",
		"T_HEADER" => "Encabezado",
		"T_ASSIGNNAME" => "Asignacion",
		"T_TRAILER" => "Pie",
		"T_PLOT" => "Parcela",
		"T_PRESQL" => "PreSQL",
		"T_COLUMNNAME" => "Columna",
		"T_CRITERIAITEM" => "Criterio",
		"T_GRAPH" => "Gráfico",

        // Miscellaneous
		"T_ENTERSQL" => "Introduzca SQL",
		"T_ENTERCLAUSE" => "Introduzca la cláusula.",
        "T_UNABLE_TO_CONTINUE" => "Incapaz de Seguir",


        "T_DELETE_REPORT" => "Delete Report",
        "T_INFORMATION" => "Information",
        "T_SKIPLINE" => "Skip Line",
        "T_SQLLIMITFIRST" => "Limit/First",
        "T_SQLSKIPOFFSET" => "Skip/Offset",
        "T_BOLD" => "Bold",
        "T_ITALIC" => "Italic",
        "T_BOLDANDITALIC" => "Bold And Italic",
        "T_STRIKETHROUGH" => "Strike Through",
        "T_NORMAL" => "Normal",
        "T_UNDERLINE" => "Underline",
        "T_OVERLINE" => "Overline",
        "T_BLINK" => "Blink",
        "T_NONE" => "None",
        "T_NOBORDER" => "No Border",
        "T_SOLIDLINE" => "Solid Line",
        "T_DASHED" => "Dashed Line",
        "T_DOTTED" => "Dotted Line",
        "T_CELL" => "Cell",
        "T_ALLCELLS" => "All Cells In Row",
        "T_COLUMNHEADERS" => "Column Headers",
        "T_ROW" => "Row",
        "T_PAGE" => "Page",
        "T_BODY" => "Report Body",
        "T_GROUPHEADERLABEL" => "Group Header Label",
        "T_GROUPHEADERVALUE" => "Group Header Value",
        "T_GROUPTRAILER" => "Group Trailer",
        "T_ASSIGNSTYLELOCTYPE" => "Apply Style to",
        "T_ASSIGNSTYLEFGCOLOR" => "Text Colour (colour name or #rrggbb)",
        "T_ASSIGNSTYLEBGCOLOR" => "Background Colour (#rrggbb)",
        "T_ASSIGNSTYLEBORDERSTYLE" => "Border Style",
        "T_ASSIGNSTYLEBORDERSIZE" => "Border Thickness (top right bottom left)",
        "T_ASSIGNSTYLEBORDERCOLOR" => "Border Colour (colour name or #ffggbb)",
        "T_ASSIGNSTYLEMARGIN" => "Margin (top right bottom left)",
        "T_ASSIGNSTYLEPADDING" => "Padding (top right bottom left)",
        "T_ASSIGNWIDTH" => "Width",
        "T_ASSIGNFONTSIZE" => "Font Size",
        "T_ASSIGNFONTSTYLE" => "Font Style",
        "T_ASSIGNHYPERLABEL" => "Hyperlink Label",
        "T_ASSIGNHYPERURL" => "Hyperlink URL",
        "T_ASSIGNIMAGEURL" => "Image URL",
        "T_OUTPUTIMAGE" => "Image URL Wizard",
        "T_OUTPUTHYPERLINK" => "Hyperlink Wizard",
        "T_OUTPUTSTYLESWIZARD" => "Output Styles Wizard",
        "T_AGGREGATESWIZARD" => "Aggregates Wizard",
        "T_DATABASEGRAPHICWIZARD" => "Database Graphic Wizard",
        "T_DRILLDOWNWIZARD" => "Drilldown Wizard",
        "T_ROWSTYLE" => "Row Style",
        "T_PAGESTYLE" => "Page Style",
        "T_COLUMNHEADERSTYLE" => "Column Header Style",
        "T_REPORTBODYSTYLE" => "Report Body Style",
        "T_ALLCELLSSTYLE" => "All Cells Style",
        "T_CELLSTYLE" => "Column Style",
        "T_GRPHEADERLABELSTYLE" => "Group Header Label Style",
        "T_GRPHEADERVALUESTYLE" => "Group Header Value Style",
        "T_GROUPTRAILERSTYLE" => "Group Trailer Style",
        "T_PAGEMARGINWITHWIDTH" => "Warning - When setting a page margin you should probably set page width as well",
        "T_SETBORDERSTYLE" => "If setting a border thickness or colour, border style should not be none",
        "T_HTMLCOLOR" => "Color must be an RGB value in HTML format ( #rrggbb )",
        "T_CSSFONTSIZE" => "Font size must be a font size optionally followed by 'pt'",
        "T_CSS1SIZE" => "Size must be a CSS size value, either a number followed by 'px' or '%' ",
        "T_CSS4SIZE" => "Size must be 4 space-delimited numbers (for top, left, bottom, right) each a number followed by 'px' or '%'",
        "T_NUMBER" => "Value must be number",

		"T_DELETE_REPORT" => "Borrar",
		"T_INFORMATION" => "información",
		"T_SKIPLINE" => "Ir Línea",
						"T_BOLD" => "audaz",
		"T_ITALIC" => "itálico",
		"T_BOLDANDITALIC" => "Negrita y cursiva",
		"T_STRIKETHROUGH" => "A través de la huelga",
		"T_NORMAL" => "normal",
		"T_UNDERLINE" => "subrayar",
		"T_OVERLINE" => "overline",
		"T_BLINK" => "parpadear",
		"T_NONE" => "ninguno",
		"T_NOBORDER" => "Sin Fronteras",
		"T_SOLIDLINE" => "Línea sólida",
		"T_DASHED" => "La línea de puntos",
		"T_DOTTED" => "línea de puntos",
		"T_CELL" => "célula",
		"T_ALLCELLS" => "Todas las celdas de la Fila",
		"T_COLUMNHEADERS" => "encabezados de columna",
		"T_ROW" => "fila",
		"T_PAGE" => "página",
		"T_BODY" => "Informe del Órgano de",
		"T_GROUPHEADERLABEL" => "Label Group Header",
		"T_GROUPHEADERVALUE" => "Valor de encabezado de grupo",
		"T_GROUPTRAILER" => "Grupo de remolque",
		"T_ASSIGNSTYLELOCTYPE" => "Aplicar el estilo de",
		"T_ASSIGNSTYLEFGCOLOR" => "Color del texto (nombre del color o rrggbb #)",
		"T_ASSIGNSTYLEBGCOLOR" => "Color de fondo (# RRGGBB)",
		"T_ASSIGNSTYLEBORDERSTYLE" => "Estilo del borde",
		"T_ASSIGNSTYLEBORDERSIZE" => "Espesor de Fronteras (arriba a la izquierda abajo a la derecha)",
		"T_ASSIGNSTYLEBORDERCOLOR" => "Border Color (nombre del color o ffggbb #)",
		"T_ASSIGNSTYLEMARGIN" => "Margen (arriba izquierda abajo derecha)",
		"T_ASSIGNSTYLEPADDING" => "Relleno (arriba a la izquierda abajo a la derecha)",
		"T_ASSIGNWIDTH" => "ancho",
		"T_ASSIGNFONTSIZE" => "Tamaño de la Fuente",
		"T_ASSIGNFONTSTYLE" => "Estilo de la fuente",
		"T_ASSIGNHYPERLABEL" => "Etiqueta hipervínculo",
		"T_ASSIGNHYPERURL" => "hipervínculo URL",
		"T_ASSIGNIMAGEURL" => "URL de la imagen",
		"T_OUTPUTIMAGE" => "Asistente para imágenes URL",
		"T_OUTPUTHYPERLINK" => "Asistente hipervínculo",
		"T_OUTPUTSTYLESWIZARD" => "Estilos de salida Asistente",
		"T_AGGREGATESWIZARD" => "Los agregados Asistente",
		"T_DATABASEGRAPHICWIZARD" => "Asistente de base de datos gráfica",
		"T_DRILLDOWNWIZARD" => "Profundizar en el Asistente",
		"T_ROWSTYLE" => "fila estilo",
		"T_PAGESTYLE" => "Estilo de página",
		"T_COLUMNHEADERSTYLE" => "Columna Estilo Encabezado",
		"T_REPORTBODYSTYLE" => "Informe Estilo",
		"T_ALLCELLSSTYLE" => "Todas las células del estilo",
		"T_CELLSTYLE" => "columna Estilo",
		"T_GRPHEADERLABELSTYLE" => "Encabezado Label Group Estilo",
		"T_GRPHEADERVALUESTYLE" => "Encabezado de grupo valoran el estilo",
		"T_GROUPTRAILERSTYLE" => "Grupo Estilo remolque",
		"T_PAGEMARGINWITHWIDTH" => "Advertencia - Cuando se establece un margen de la página usted debe fijar probablemente ancho de página, así",
		"T_SETBORDERSTYLE" => "Si el establecimiento de un grosor del borde o el color, estilo de borde no debe ser ninguna",
		"T_HTMLCOLOR" => "El color debe ser un valor RGB en formato HTML (# RRGGBB)",
		"T_CSSFONTSIZE" => "Tamaño de la fuente debe ser un tamaño de fuente, opcionalmente, seguido de 'pt'",
		"T_CSS1SIZE" => "El tamaño debe ser un valor de tamaño de CSS, ya sea un número seguido de 'píxeles' o '%'",
		"T_CSS4SIZE" => "El tamaño debe ser de 4 delimitados por espacios de los números (arriba, izquierda, abajo, derecha) cada uno un número seguido de 'píxeles' o '%'",
		"T_NUMBER" => "El valor debe ser el número",
        "T_IMPORTREPORT" => "Importar desde el informe",
        "T_IMPORTREPORTITEM" => "y el tema",
        "T_MAKELINKTOREPORT" => "Crear vínculos con informan",
        "T_MAKELINKTOREPORTITEM" => "Y con el tema",
        "T_LINKTOREPORT" => "Vinculado al Informe",
        "T_LINKTOREPORTITEM" => "Vinculado al Informe del artículo",
        "T_ALLITEMS" => "Todos los artículos",
        "T_UNABLE_TO_SAVE" => "No se puede guardar",
        "T_UNABLE_TO_REMOVE" => "No se puede quitar",
        "T_SPECIFYXML" => "  - Se debe especificar un nombre de archivo de informe.",
        "T_MUSTADDGROUP" => "Para agregar un gráfico que necesita para ir al menú Grupos agregar un grupo en el que para activar el gráfico. Para agregar un gráfico al final del informe, es necesario agregar el grupo llamado REPORT_BODY y luego selecciona como la Columna de Grupo",
        "T_SAFENOSAVE" => "Ejecuta en modo seguro. Las definiciones de informe no se puede guardar.",
        "T_SAFENODEL" => "Ejecuta en modo seguro. Las definiciones de informe no se pueden eliminar.",
        "T_NOCRITLINK" => "No hay elementos para vincular los criterios disponibles en el",
        "T_NOOPENLINK" => "No se puede abrir el informe que enlazan con - presentar",
        "T_NOOPENDIR" => "No se puede abrir el directorio",
        "T_XMLCONFILE" => "Informe del archivo de configuración XML",
        "T_XMLFORM" => "debe ser en forma de {} ReportName. xml",
        "T_NOWRITE" => "El usuario no tiene permisos de escritura sobre el archivo",
        "T_NOFILE" => "Archivo no encontrado",
        "T_REPORTFILE" => "Informe del archivo",
        "T_DELETEOKACT" => "eliminado con éxito. Definición de informe todavía está activo. Si usted no tenía la intención de eliminar el informe, puede pulsar el botón Guardar para volver a crearlo",
        "T_INVALIDENTRY" => "Entrada no válida -",
        "T_FORFIELD" => "para el campo -",
        "T_ASSIGNHEIGHT" => "Altura",
        "T_PAGEHEADERSTYLES" => "Estilos",
        "T_PAGEFOOTERSTYLES" => "Estilos",
        "T_SHOWINPDF" => "Mostrar en PDF",
        "T_SHOWINHTML" => "Mostrar en HTML",
        "T_RELATIVE" => "Relativo",
        "T_ABSOLUTE" => "Absoluto",
        "T_GROUPHEADERCUSTOM" => "Grupo Texto de la Cabecera personalizada",
        "T_GROUPHEADERSTYLES" => "Estilos",
        "T_GROUPTRAILERCUSTOM" => "Grupo Custom Remolque texto",
        "T_GROUPTRAILERSTYLES" => "Estilos",
        "T_ASSIGNSTYLEPOSITION" => "Relativa a la posición o la página actual",
        "T_ASSIGNFONTNAME" => "Nombre de la Fuente",
        "T_ASSIGNPDFBACKGROUNDIMAGE" => "Imagen De Fondo",
    )
);
?>
