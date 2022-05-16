$(function(){

    $("#main_form").on('submit', function(e){
        e.preventDefault();

        $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
                $(document).find('span.error-text').text('');
            },
            success:function(data){
                if(data.status == 0){
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val[0]);
                    });
                }else{
                    $('#main_form')[0].reset();
                    window.location=data.redirect_url+'/'+data.id;
                }
            }
        });
    });

});

function ageCalculator() {
    var userinput = document.getElementById("DOB").value;
    var dob = new Date(userinput);

    if(userinput==null || userinput==''){
        document.getElementById("messege").innerHTML = "**Choose a date please!";
        return false;
    }

    else {
        var mdate = userinput.toString();
        var dobYear = parseInt(mdate.substring(0,4), 10);
        var dobMonth = parseInt(mdate.substring(5,7), 10);
        var dobDate = parseInt(mdate.substring(8,10), 10);

        var today = new Date();
        var birthday = new Date(dobYear, dobMonth-1, dobDate);

        var diffInMillisecond = today.valueOf() - birthday.valueOf();

        var year_age = Math.floor(diffInMillisecond / 31556952000);
        var day_age = Math.floor((diffInMillisecond % 31556952000) / 86400000);

        var month_age = Math.floor(day_age/30);
        day_ageday_age = day_age % 30;

        if (dob>today) {
            document.getElementById("result").innerHTML = ("Invalid date!");
        }
        else {
            document.getElementById("age_day").value =  day_ageday_age ;
            document.getElementById("age_month").value =  month_age ;
            document.getElementById("age_year").value =  year_age ;
        }
    }
}
