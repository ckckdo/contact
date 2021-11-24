function toHalfWidth(input) {
    return input.value.replace(/[Ａ-Ｚａ-ｚ０-９！-～]/g, function(input){
        return String.fromCharCode(input.charCodeAt(0)-0xFEE0);
    });
}