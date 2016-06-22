/**
 * Created by tomi on 022, Jun, 22, 2016.
 */
$(document).ready(function () {
    var urlStac = "stac.json";
    var urlMobi = "mobi.json";
    var myData;
    exists = false;
//"http://www.akos-rs.si/?page=1&search=izvoz&jezik=sl&imetnik=-1&tip=1&dodeljene_od=&dodeljene_do=&type=json&modul=STP&sort=prva_dodeljena&direction=ASC"
    var fst = 'FirstAssignedNumber/Code';
    var lst = 'LastAssignedNumber/Code';

        //73916000;

$("#submit").click(function(){
    var myNum = $('#phone').val();
    getPhoneNr(urlStac, myNum);
    getPhoneNr(urlMobi, myNum);
    if(exists == true){
        alert("yeeeeeeeee");
    }
    $('#num').append("Tel. je prava");
});


    function getPhoneNr(url, myNum){
        $.ajax({
            // type: "GET",
            url: url,
            dataType: "json",
            success: function (data) {
                myData = data;
                console.log(myData);
                $(myData).each(function () {
                    var x = parseInt($(this)[0][fst]);
                    var y = parseInt($(this)[0][lst]);
                    if((myNum >= x)&&(myNum <=y)){
                        console.log("taprava");
                        exists = true;
                        $('#num').append("Tel. je prava");
                    }else{
                        $('#num').append("tel ni prava");
                    }
                });
                if(exists){
                    // console.log("Telefonska " + myNum + " je prava");
                    alert("Telefonska " + myNum + " je prava");
                    // $('#num').append("Tel. je prava");
                }else{
                    // console.log("Telefonska " + myNum + " ne obstaja");
                    alert("Telefonska " + myNum + " ne obstaja");
                    // $(#submit).attr()
                }
            }
        });
        return exists;
    }

//     $.getJSON(url, data, function(data, status){
//         if (status === 200){
//             alert(data);
//         }
//     })
});

