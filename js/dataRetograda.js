$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;

    // Alterar o # Para o INPUT que deseja alterar na DATA
    // <script src="js/dataRetograda.js"></script>
    $('#start').attr('min', maxDate);
    $('#end').attr('min', maxDate);
    $('#datanasc').attr('min', maxDate);

});

