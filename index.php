<html>
    <head>
        <title>
            Bannière
        </title>
        <script src="js/bootstrap.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fichier.css">

    </head>
    <body>
        <section>
            
            <div class="container">
                
              <div class="row">
                <div class="col-12 text-center">
                    <h1 id="cc"></h1>
                </div>
                <div class="col-12">
                    <nav class="navbar bg-dark">
                        <a href=""></a>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="inscription.php">Inscription</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="">Revue</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="">Autres</a>
                            </li>
                        </ul>
                    </nav>
                </div>
              </div>
            </div>
        </section>
        <footer class="bg-dark text-white pt-5 pb-4">
            <div class="container text-center text-md-left">
                <div class="row text-center text-md-left">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">www.uahb.sn</h5>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    <script>
    var aText= new Array(
        "BIENVENUE",
        "BIENVENUE",

    );
    var iSpeed= 100; //time delay of print out
    var iIndex=0;//start printing array at this posision
    var iArrayLenght= aText[0].length; //the lenght of the text array
    var iScrollAt= 20;// start scrolling up at this many lines 
    
    var iTextpos= 0;// initialise text position
    var sContent=''; //initialise contents variable
    var iRow; // initialise current row

    function typewriter(){
        sContent='';
        iRow = Math.max(0,iIndex - iScrollAt);
        var destination = document.getElementById("c");
        console.log(destination)
        while (iRow < iIndex){
            sContent += aText[iRow++] +'<br/ >';


        }
        destination.innerHTML = sContents + aText[iIndex].substring(0,iTextpos);
        if(iTextpos++ == iArrayLenght){
            iTextpos =0;
            iIndex++;
            if(iIndex != aText.length){
                iArrayLenght= aText[iIndex].length;
                setTimeout("typewriter()s",600);

            }

        }else {
            setTimeout("typewriter()", iSpeed);
        }
    }
    typewriter();
</script>

</html>