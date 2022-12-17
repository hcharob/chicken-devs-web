(function () {
  /**
   * Carrousel animé 
   * Ce carrousel utilise les images d'une galerie d'images
   * Le conteneur de la galerie est accessible à partir de la classe «.galerie»
   * Le conteneur du carrousel est accessible à partir de la classe «.boite__carrousel»
   * 
   *  */
  console.log("vive la boîte carousel");
  /* Le conteneur de la gallerie */
  let boite__carrousel = document.querySelector(".boite__carrousel")
  /* le conteneur des bouton de navigation du carrousel */
  let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation")
  /* le bouton de fermeture du carrousel */
  let boite__carrousel__ferme = document.querySelector(".boite__carrousel__ferme")
  /* Conteneur d'image du carrousel */
  let boite__carrousel__img = document.querySelector(".boite__carrousel__img")
  /* La collection des images de la galerie */
  let galerie__img = document.querySelectorAll('.wp-block-image img');
  
  let boite__carrousel__left = document.querySelector(".boite__carrousel__left")
  let boite__carrousel__right = document.querySelector(".boite__carrousel__right")

  let index__actif = 0;
  /**
   * 
   * Écouteur pour fermer la fenêtre 
   * 
   */
  boite__carrousel__ferme.addEventListener('mousedown', function () {
    boite__carrousel.classList.remove('ouvrir')
  })

  boite__carrousel__left.addEventListener('mousedown', function () {
    carrousel__Navigate__left(index__actif);
  })

  boite__carrousel__right.addEventListener('mousedown', function () {
    carrousel__Navigate__right(index__actif);
  })

  /**
   * parcourir l'ensemble des éléments de la galerie pour créer le carrousel
   *  
  **/

  let index = 0 // pour associer chaque bouton radio à une image de la galerie.
  for (const img of galerie__img) {

    /* Creation d'une balise img qui sera intégré dans le carrousel */
    let elmImg = document.createElement('img') // l'élément img du carrousel
    // console.log(img.getAttribute('src'))
    img.dataset.index = index; // le numéro de l'image
    elmImg.setAttribute('src', img.getAttribute('src')) // la source de l'image (url de l'image)
    boite__carrousel__img.append(elmImg) // on ajoute l'élément img dans son conteneur
    /**
     * Creation des boutons de navigation du carrousel
     * 
     */
    let bouton = document.createElement('input')  // creation de l'élément input
    bouton.type = "radio" // l'élément est un radio bouton
    bouton.checked = false // le radio bouton est décoché
    bouton.className = "bouton" //  on utilisera .bouton comme seleteur, pour formateur le bouton
    bouton.name = "bouton" // pour créer un groupe il faut que chaque bouton est le même nom
    bouton.dataset.index = index++ // le numéro du bouton
    boite__carrousel__navigation.append(bouton) // on ajoute le bouton dans le conteneur des boutons

    /* Les boutons radio permettent de changer l'image avec une animation */

    bouton.addEventListener('click', function (e) {
      e.preventDefault;
      initialise__carrousel__img()    // pour retirer la classe .img--ouvrir de l'ensemble des image du carrousel

      boite__carrousel__img.children[this.dataset.index].classList.add('img--ouvrir')
    }) 
    /**
     * Ouverture de la boite__carrousel
     */

     img.closest('.forme').addEventListener('click', function () {
      //console.log(this.getAttribute('src'))

      boite__carrousel.classList.add('ouvrir')
      //console.log(boite__carrousel.classList)
      initialise__carrousel__img()
      boite__carrousel__img.children[img.dataset.index].classList.add('img--ouvrir')  // on sélectionne l'image
      boite__carrousel__navigation.children[img.dataset.index].checked = true // on sélectionne le radio bouton
      //elmImg.setAttribute('src', this.getAttribute('src'))

    })


    /**
     * On retire les class CSS des images du carrousel à chaque fois que l'on selectionne un radio bouton
     *  
     * */
    function initialise__carrousel__img() {
      let collectionImg = document.querySelectorAll('.boite__carrousel__img img')
      // console.log('///////////////////////////////////////////////')
      for (let i = 0; i < collectionImg.length; i++) {
        //console.log("boite__carrousel__navigation.children[i].checked = " + boite__carrousel__navigation.children[i].checked + " i= " + i)
        if (boite__carrousel__navigation.children[i].checked == false) { // le radio précédent sélectionné
          collectionImg[i].classList.remove('img--ouvrir') // on retire l'image de la dernière image affiché
        }
      }
    }
  }
  function carrousel__Navigate__left(index__actif) {
    let collectionImg = document.querySelectorAll('.boite__carrousel__img img')
      console.log('///////////////////////////////////////////////')
      for (let i = 0; i < collectionImg.length; i++) {
        if (boite__carrousel__navigation.children[i].checked == true) { 
          index__actif = i;
        }
      }
      console.log(index__actif);
      boite__carrousel__navigation.children[index__actif].checked = false;
      index__actif++;
      if (index__actif >= collectionImg.length){
        index__actif = 0;
      }
      boite__carrousel__navigation.children[index__actif].checked = true;
      boite__carrousel__img.children[index__actif].classList.add('img--ouvrir');
      console.log(index__actif);
      initialise__carrousel__img();
  }
  
  function carrousel__Navigate__right(index__actif) {
    let collectionImg = document.querySelectorAll('.boite__carrousel__img img')
      console.log('///////////////////////////////////////////////')
      for (let i = 0; i < collectionImg.length; i++) {
        if (boite__carrousel__navigation.children[i].checked == true) { 
          index__actif = i;
        }
      }
      console.log(index__actif);
      boite__carrousel__navigation.children[index__actif].checked = false;
      if (index__actif == 0){
        index__actif =+ (collectionImg.length - 1);
      }
      else{
        index__actif--;
      }
      console.log(index__actif);
      boite__carrousel__navigation.children[index__actif].checked = true;
      boite__carrousel__img.children[index__actif].classList.add('img--ouvrir');
      console.log(index__actif);
      initialise__carrousel__img();
  }
})()