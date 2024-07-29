<html>
    <body onload="start()">
    <script>
        function AddMinutesToDate(date, minutes) {
            return new Date(date.getTime() + minutes*60000);
        }
        function DateFormat(date){
            var days = date.getDate();
            var year = date.getFullYear();
            var month = (date.getMonth()+1);
            var hours = date.getHours();
            var minutes = date.getMinutes();
            minutes = minutes < 10 ? '0' + minutes : minutes;
            var strTime = days + '/' + month + '/' + year + '/ '+hours + ':' + minutes;
            return strTime;
        }
        var now = new Date();
        console.log(DateFormat(now));
        var next = AddMinutesToDate(now,5);
        console.log(DateFormat(next));
        function start(){
            document.getElementById("time").value = next;
        }
    </script>

    <h1>
        UPI Payment Gateway Tester by 2sr 
    </h1>

        <form action="./index.php"  method="post">
        Time
        <input name="time" type="text" value="" id="time">
            <br><br>
        <label>
            Trnsaction ID
        </label>
        <input name="id" type="text" id="id">
            <br><br>
        <label>
            Price in INR
        </label>
        <input name="price" type="text" id="price">
            <br><br>
            <label>
               VPA
            </label>
            <input name="vpa" type="text" id="vpa">
            <br><br>
        <label>
            Merchent Name
        </label>
        <input name="mname" type="text" id="mname">
            <br><br>
            <label>
                EndHook
            </label>
            <input name="EndHook" value="https://httpbin.org/post" type="text" id="EndHook">
            <br>
            <br><br>
        <input type="submit" value="Initiate Payment">
        </form>
    </body>
</html>