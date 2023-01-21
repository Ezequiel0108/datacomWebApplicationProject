$divCol= document.getElementById('divCol');

if(screen.width>=1900){
    $divCol.classList.add('col-7')
    $divCol.classList.remove('col-4');

}
else{
    $divCol.classList.add('col-4')
    $divCol.classList.remove('col-7');
}