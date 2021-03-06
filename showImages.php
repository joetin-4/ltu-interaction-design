<script>
  function showImages(str) {

    /* Om strängen är tom.. */
    if (str.length == 0) {
      document.getElementById("imgSuggestion").innerHTML = "";
      return;
    }

    var xhttp = new XMLHttpRequest();

    //Denna funktion körs vid förändring i "ready-state"
    xhttp.onreadystatechange = function() {

      if (this.readyState == 4 && this.status == 200) {

        var x = this.responseText;

        //document.getElementById("imgSuggestion").innerHTML = x;

        //split up the results and store in array
        var array = x.split(",");



        //going thtough the array
        var htmlText = "";

        //om arrayen är tom så returneras "No results found.."
        if (x === "") {

          htmlText = "No results found.."

        } else {
          //alert(x);

          for (var i = 0; i < array.length; i++) {

            htmlText += '<div class="col-md-4 imgDiv" id='
            htmlText += array[i];
            htmlText += '" > <a id='
            htmlText += array[i];
            htmlText += ' href= "" onclick="showImageDetails(this.id)" data-toggle="modal" data-target="#imgModal"> <img class="img-thumbnail" src="./img/';
            htmlText += array[i];
            htmlText += '.jpg" id="test2';
            htmlText += array[i];
            htmlText += '" width="345" length="345" onmouseover="aFunctionOver(this.id)" onmouseout="aFunctionOut(this.id)"> </a> </div>';

          }
        }

        document.getElementById("imgSuggestion").innerHTML = htmlText;

      }
    };

    //GET is better than POST cuz GET can be cached and the data isnt sensitive.
    //Open request

    xhttp.open("GET", "searchEngine.php?q=" + str, true);
    //send request
    xhttp.send();


  }

  function showImageDetails(x) {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {

      if (this.readyState == 4 && this.status == 200) {

        //Fångar responsen
        var y = this.responseText;

        //Delar upp svars-strängen i en array
        var ImageProperties = y.split(',')

        //Skriver ut för test
        //alert(ImageProperties.toString());

        //RENDERING

        var htmlImg = "";
        var htmlText = "";

        if (x === "") {

          htmlText = "No results found.."

        } else {
          //The image
          htmlImg = '<img class="rounded img-fluid border" src="./img/'
          htmlImg += x;
          htmlImg += '.jpg" hspace="20" width="300" length="300">'

          //The information about the picture
          htmlText = '<div class=container> <table class="table"> <thead> <tr> <th scope="col" bgcolor="#7ABDFF"> </th> <th scope="col" bgcolor="#7ABDFF"> </th> </tr> </thead> <tbody> <tr> <th scope="row">ID: </th> <td>'
          htmlText += ImageProperties[0];
          htmlText += '</td> </tr> <tr> <th scope="row">Upplösning: </th><td>'
          htmlText += ImageProperties[2];
          htmlText += '</td> </tr><tr><th scope="row">Status: </th><td>'
          htmlText += 'Ägd eller lånad';
          htmlText += '</td></tr></tbody></table> </div>'
        }

        /* Manipulerar element i modalen */
        document.getElementById("imgDetails").innerHTML = htmlImg;
        document.getElementById("imgInfo").innerHTML = htmlText;

      }
    };

    xhttp.open("GET", "imageDetails.php?q=" + x, true);
    xhttp.send();

  }



  //ON HOVER, input=id
  function aFunctionOver(x) {

    document.getElementById(x).classList.add('hoverShadow');

  }

  //Change color back to white
  function aFunctionOut(x) {

    document.getElementById(x).classList.remove('hoverShadow');

  }
</script>