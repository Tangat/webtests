/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function checkCurr(d) {
if(window.event) 
{ 
if(event.keyCode == 37 || event.keyCode == 39) return; 
} 
d.value = d.value.replace(/\D/g,'');
}



