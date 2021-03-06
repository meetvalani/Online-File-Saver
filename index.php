<html>
    <head>
        <title>File saver</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
		<link rel="manifest" href="/datasaver/manifest.json">
    </head>
    <body>
       <div ng-app="" ng-init="count=0;colors=['LIGHTCORAL','SALMON','DARKSALMON','LIGHTSALMON','CRIMSON','RED','FIREBRICK','DARKRED','PINK','LIGHTPINK','HOTPINK','DEEPPINK','MEDIUMVIOLETRED','PALEVIOLETRED','LIGHTSALMON','CORAL','TOMATO','ORANGERED','DARKORANGE','ORANGE','GOLD','YELLOW','LIGHTYELLOW','LEMONCHIFFON','LIGHTGOLDENRODYELLOW','PAPAYAWHIP','MOCCASIN','PEACHPUFF','PALEGOLDENROD','KHAKI','DARKKHAKI','LAVENDER','THISTLE','PLUM','VIOLET','ORCHID','FUCHSIA','MAGENTA','MEDIUMORCHID','MEDIUMPURPLE','REBECCAPURPLE','BLUEVIOLET','DARKVIOLET','DARKORCHID','DARKMAGENTA','PURPLE','INDIGO','SLATEBLUE','DARKSLATEBLUE','MEDIUMSLATEBLUE','GREENYELLOW','CHARTREUSE','LAWNGREEN','LIME','LIMEGREEN','PALEGREEN','LIGHTGREEN','MEDIUMSPRINGGREEN','SPRINGGREEN','MEDIUMSEAGREEN','SEAGREEN','FORESTGREEN','GREEN','DARKGREEN','YELLOWGREEN','OLIVEDRAB','OLIVE','DARKOLIVEGREEN','MEDIUMAQUAMARINE','DARKSEAGREEN','LIGHTSEAGREEN','DARKCYAN','TEAL','AQUA','CYAN','LIGHTCYAN','PALETURQUOISE','AQUAMARINE','TURQUOISE','MEDIUMTURQUOISE','DARKTURQUOISE','CADETBLUE','STEELBLUE','LIGHTSTEELBLUE','POWDERBLUE','LIGHTBLUE','SKYBLUE','LIGHTSKYBLUE','DEEPSKYBLUE','DODGERBLUE','CORNFLOWERBLUE','MEDIUMSLATEBLUE','ROYALBLUE','BLUE','MEDIUMBLUE','DARKBLUE','NAVY','MIDNIGHTBLUE','CORNSILK','BLANCHEDALMOND','BISQUE','NAVAJOWHITE','WHEAT','BURLYWOOD','TAN','ROSYBROWN','SANDYBROWN','GOLDENROD','DARKGOLDENROD','PERU','CHOCOLATE','SADDLEBROWN','SIENNA','BROWN','MAROON','WHITE','SNOW','HONEYDEW','MINTCREAM','AZURE','ALICEBLUE','GHOSTWHITE','WHITESMOKE','SEASHELL','BEIGE','OLDLACE','FLORALWHITE','IVORY','ANTIQUEWHITE','LINEN','LAVENDERBLUSH','MISTYROSE','GAINSBORO','LIGHTGRAY','SILVER','DARKGRAY','GRAY','DIMGRAY','LIGHTSLATEGRAY','SLATEGRAY','DARKSLATEGRAY','BLACK']"  ng-mouseover="count=count+1">
       <div style="background-color: {{colors[count%141]}}">
       <div style="background-color: orange" class="container">
        <br>
           <br>
            <form action="saver.php" method="post" enctype="multipart/form-data">
                <div class="row col-sm-12">
                    <div class="col-sm-4"> <label>Select file (max limit 210M.B):</label> </div>
                    <div class="col-sm-4"> <input type="file" name="fileToUpload" id="fileToUpload"></div>
                    <div class="col-sm-2"> <input type="submit" class="btn btn-primary" value="Upload" name="ufile"></div>
                </div>
                <br><br>
            </form>
            <form action="saver.php" method="POST">
                <div class="col-sm-12" style="background-color:orangered"><h4>Or Save File with any extension manualy....</h4></div>
                <br><br>
                <br>
                <div class="row col-sm-10">
                    <div class="col-sm-3"><label> Enter File Name:</label></div>
                    <div class="col-sm-4"> <input class="col-sm-6" type="text" name="file_name"></div>
                    <div class="col-sm-3"> <input type="submit" class="btn btn-primary" value="Save" name="file"></div>
                </div>
                <br>
                <br>
                <div class="col-sm-10">
                    <textarea name="content" style="width:99%; height:450px"></textarea>
                </div>
                <br><br><br>
            </form>
    </div>
           </div>
        </div>
            <script>
                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            </script>
    </body>
</html>