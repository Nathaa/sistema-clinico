
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Document</title>

        <script src="{{ asset('vendor/js/moment.min.js') }}"></script>
        <link rel="stylesheet" href="{{asset('vendor/css/fullcalendar.css')}}">
        <script src="{{ asset('vendor/js/jquery.min.js') }}"></script> 
         <script src="{{ asset('vendor/js/fullcalendar.js') }}"></script>

</head>
<body>
                <div id='calendar'></div>
            
            <script language="JavaScript">   
                $(document).ready(function() {
                     $('#calendar').fullCalendar({
                             events:[
                                {
                                        title:"Primer evento",
                                        start:"2019-01-20",
                                        end:"2019-01-23",
                                        url:"http://www.google.com",
                                        color:"green",
                                        editable:true,
                                }
                             ]
                        })
            
                });    
         </script>
</body>
</html>