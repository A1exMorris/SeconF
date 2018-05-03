
$('.clampThis').each(function(index,element){
    //  element.parent().height;
    $clamp(element,{clamp:element.parentNode.offsetHeight/3+'px',useNativeClamp:false});
})


