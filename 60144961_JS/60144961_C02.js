// name :Saowarat Chundee
function calculateGrade(){
    var midterm = document.getElementById("midterm").value;
    var final = document.getElementById("final").value;
    var activity = document.getElementById("classAc").value;

    var nummid = parseInt(midterm);
    var numfinal = parseInt(final);
    var numactivity = parseInt(activity);
    if(nummid > 40 || numfinal > 40 || numactivity > 40){
        status = "ค่าผิดกรอกค่าใหม่!!";
        alert(status)
    }
    else if(nummid < 0 || numfinal < 0 || numactivity < 0){
        status = "ค่าผิดกรอกค่าใหม่!!";
        alert(status)
    }else{
        total = parseInt(nummid + numfinal + numactivity);
    document.getElementById("result_scrore").value = parseInt(total); 
    // alert(total)

   
    
        if(total < 50){
            status = "Grade is F.";
        }
        else if(total < 60){
            status = "Grade is D.";
        }
        else if(total < 70){
            status = "Grade is C.";
        }
        else if(total < 80){
            status = "Grade is B.";
        }
        else{
            status = "Grade is A.";
        }
    
        document.getElementById("result_grade").value = status;

    }

    }

    



    // if(total < 50){
    //     status = "Grade is F.";
    // }
    // else if(total < 60){
    //     status = "Grade is D.";
    // }
    // else if(total < 70){
    //     status = "Grade is C.";
    // }
    // else if(total < 80){
    //     status = "Grade is B.";
    // }
    // else{
    //     status = "Grade is A.";
    // }

    // document.getElementById("result_grade").value = status;
