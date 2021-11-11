<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/main.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script>
     

    new WOW().init();

    var speed = 90;
    

    /* Call this function with a string containing the ID name to
     * the element containing the number you want to do a count animation on.*/
    function incEltNbr(id) {
        elt = document.getElementById(id);
        endNbr = Number(document.getElementById(id).innerHTML);
        incNbrRec(0, endNbr, elt);
    }

    /*A recursive function to increase the number.*/
    function incNbrRec(i, endNbr, elt) {
        if (i <= endNbr) {
            elt.innerHTML = i;
            setTimeout(function() { //Delay a bit before calling the function again.
                incNbrRec(i + 1, endNbr, elt);
            }, speed);
        }
    }


    incEltNbr("nbr"); /*Call this funtion with the ID-name for that element to increase the number within*/
    incEltNbr("nbr1");
    incEltNbr("nbr2");
    incEltNbr("nbr3");

    $(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});

   
</script>


