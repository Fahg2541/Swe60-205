   function programer1() {
        alert("ID: 60144961\nName: Saowarat Chuandee");
        
    }
    function programer2() {
        alert("ID: 60144235\nName: Sirirat Wichityeam");
        
    }
    function Name() {
        var name = document.getElementById("h_name_id").value;
    alert(name);
        
    }
    function Nameresult() {
        var nameresult = document.getElementById("h_name_id").value;
        document.getElementById("h_result_id").value = nameresult
    // alert(nameresult);
    }
    function Add(){
        // var number1;
        // var number2;
        var numadd1 = document.getElementById("number1").value;
        var numadd2 = document.getElementById("number2").value;
        numadd3 = parseInt(numadd1) + parseInt(numadd2);
        document.getElementById("result_id").value = numadd3;
        // alert(num3);

    }
    function Subnum(){
        var numsub1 = document.getElementById("number1").value;
        var numsub2 = document.getElementById("number2").value;
        numsub3 =parseInt(numsub1) - parseInt(numsub2);
        document.getElementById("result_id").value = numsub3;
    }

    function Mul(){
        var nummul1 = document.getElementById("number1").value;
        var nummul2 = document.getElementById("number2").value;
        nummul3 = parseInt(nummul1) * parseInt(nummul2);
        document.getElementById("result_id").value = nummul3;
    }
    function Div(){
        var numdiv1 = document.getElementById("number1").value;
        var numdiv2 = document.getElementById("number2").value;
        numdiv3 = parseInt(numdiv1) / parseInt(numdiv2);
        document.getElementById("result_id").value = numdiv3;
    }

{/* <p id="demo"></p>

<script>
var x = 5;
var y = 2;
var z = x + y;
document.getElementById("demo").innerHTML = z;
</script> */}