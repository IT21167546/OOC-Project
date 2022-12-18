
// IT21166556
// Nadeeshan I.U.N.
// MLB_08.02_3
 

function buttonFunction1() {
    alert("Data Updated!");
}
     
                
function buttonFunction(name) {
    if(name == 'boxbtn1') {
        document.getElementById('th1').innerHTML = "Task type 1" ;
        document.getElementById('th2').innerHTML = "Data Created" ;
        document.getElementById('th3').innerHTML = "Data Planned" ;
        document.getElementById('th4').innerHTML = "Info" ;
        document.getElementById('th5').innerHTML = "Started " ;
        document.getElementById('th6').innerHTML = "Finished" ;

        document.getElementById('td1').innerHTML = "Type 1" ;
        document.getElementById('td2').innerHTML = "Complete progress 100% (1 / 1)" ;
        document.getElementById('td3').innerHTML = "Type 2" ;
        document.getElementById('td4').innerHTML = "Complete progress 90% (1 / 1)" ;
        document.getElementById('td5').innerHTML = "Type 3" ;
        document.getElementById('td6').innerHTML = "Complete progress 80% (1 / 1)" ;
        document.getElementById('td7').innerHTML = "Type 4" ;
        document.getElementById('td8').innerHTML = "Complete progress 50% (1 / 1)" ;
        document.getElementById('td9').innerHTML = "Type 5" ;
        document.getElementById('td10').innerHTML = "Complete progress 75% (1 / 1)" ;
        
    }
    else if(name == 'boxbtn2') {
        document.getElementById('th1').innerHTML = "Task type 2" ;
        document.getElementById('th2').innerHTML = "Previous Data Created" ;
        document.getElementById('th3').innerHTML = "Previous Data Planned" ;
        document.getElementById('th4').innerHTML = "History Info" ;
        document.getElementById('th5').innerHTML = "Previous Started " ;
        document.getElementById('th6').innerHTML = "Previous Finished" ;

        document.getElementById('td1').innerHTML = "Type 6" ;
        document.getElementById('td2').innerHTML = "Complete progress 90% (1 / 1)" ;
        document.getElementById('td3').innerHTML = "Type 7" ;
        document.getElementById('td4').innerHTML = "Complete progress 100% (1 / 1)" ;
        document.getElementById('td5').innerHTML = "Type 8" ;
        document.getElementById('td6').innerHTML = "Complete progress 85% (1 / 1)" ;
        document.getElementById('td7').innerHTML = "Type 9" ;
        document.getElementById('td8').innerHTML = "Complete progress 95% (1 / 1)" ;
        document.getElementById('td9').innerHTML = "Type 10" ;
        document.getElementById('td10').innerHTML = "Complete progress 100% (1 / 1)" ;
    }
    
}


