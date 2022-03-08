let btn = document.getElementById('button');

btn.addEventListener('click', function(){
    let premixcost = document.getElementById('').value;
    let costperkg = document.getElementById('').value;
 
    
    let recipecost = document.getElementById('').value = premixcost*1000/costperkg;
    document.getElementById('').value = parseFloat(premixcost) * parseFloat(recipecost)
}
)