$(document).ready(function() {
    // Maskani qo'llash
    $('input[name="phone"]').mask('(+998) 99 999-99-99', {
        placeholder: "(+998) __ ___-__-__",
        clearIfNotMatch: true
    });
});
