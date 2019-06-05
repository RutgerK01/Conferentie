function myFunction() {
    document.getElementById("chng1").innerHTML  = '<select class="form-control" name="day"><option value="Fri">Friday</option><option value="Sat">Saturday</option><option value="Sun">Sunday</option><option value="week">Weekend</option><option value="Pas">Paspartoe</option></select>';
    document.getElementById("chng2").innerHTML  = '<select class="form-control" name="food"><option>None</option><option value="Lunch">Lunch</option><option value="Diner">Diner</option><option value="Lunch+Diner">Lunch and Diner</option></select>';
    document.getElementById("chng").innerHTML   = '<button type="submit" class="btn btn-dark">Confirm</button></form>';
    document.getElementById("chng3").innerHTML  = '<br>';
    document.getElementById("chng4").innerHTML  = '<select class="form-control form-control-sm" name="amount"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select>';
}

function otherPage(){
    location.href = 'http://localhost/Conferentie/registerform.php?action=speaker';
    document.getElementById("as").innerHTML     = "<p></p>"; 
}

function nextpage(){
    location.href = 'http://localhost/Conferentie/confirm.php';
}