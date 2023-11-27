<html>
    <head>
        <title>Bannière</title>
        <script src="js/bootstrap.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fichier.css">
<style>
    body {
        background-image: url("u.jpg");
        width: 100px;
        color: #fff;

    }
</style>
    </head>
    <body>
        <section>
            <div class="container">
            <div class="row">
                <div class="col-12 texte-center">
                    <h1 id="cc"></h1>
                </div>
                <div class="col-12">
                    <nav class="navbar bg-dark">
                        <a href="index.php" class="nav-link text-white">Accueil</a>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="">Inscription</a>
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
                <div class="col-12">
                    <form action="post">
                        <div class="form-group align-center">
                            <label for="name">Nom:</label>
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name">Prenom:</label> 
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="date">Date de Naissance:</label>
                            <input type="date" id="date" class="form-control">
                            <label for="sexe">Sexe:</label>
                            <input type="sexe" id="sexe" name="sexe" class="form-control">
                            <label for="poids">poids:</label>
                            <input type="number" name="poids" id="poids" class="form-control">
                            <label for="taille">Taille:</label>
                            <input type="number" name="taille" id="taille" class="form-control">
                            <label for="diplome">Diplome:</label>
                            <input type="text" name="diplome" id="diplome" class="form-control">
                            <label for="commentaire">Commentaire:</label>
                            <input type="text" name="commentaire" id="commentaire">
                        </div>
                        <button type="submit" class="btm btm-default">submit</button>
                    </form>
                </div>
              </div>
            </div>
        </section>
        <footer class="bg-dark text-white pt-5 "></footer>
    </body>v <script>
    var atext= new Array(
        "BIENVENUE",
        "BIENVENUE"

    );
    var iSpeed= 100; //time delay of print out
    var iIndex=0;//start printing array at this posision
    var iArrayLenght= atext[0].length; //the lenght of the text array
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