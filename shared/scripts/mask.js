// MAKS
var options = {
    translation: {
        "X": { pattern: /[0-9X]/ }
    }, reverse: true
};

$(".mask-date").mask('00/00/0000', { placeholder: "00/00/0000" });
$(".mask-datetime").mask('00/00/0000 00:00');
$(".mask-month").mask('00/0000', { reverse: true });
$(".mask-doc").mask('000.000.000-00', { reverse: true });
$(".mask-card").mask('0000  0000  0000  0000', { reverse: true });
$(".mask-money").mask('000.000.000.000.000,00', { reverse: true, placeholder: "0,00" });
$(".mask-cpf").mask("000.000.000-00", { reverse: true });
$(".mask-cnpj").mask("00.000.000/0000-00");
$(".mask-cep").mask("00.000-000");
// $("#price").mask("999.999.990,00", { reverse: true })
$(".mask-rg").mask("999.999.999-X", options)
$(".mask-phone").mask("(99) 0000-00009")
// $(".mask-phone").mask("(99) 0000-00009", { placeholder: "(XX) XXXXX-XXXX" })
$(".mask-phone").blur(function (event) {
    if ($(this).val().length == 15) {
        $(".mask-phone").mask("(99) 00000-0009")
    } else {
        $(".mask-phone").mask("(99) 0000-00009")
    }
})
$('.mask-email').mask("A", {
    translation: {
        "A": { pattern: /[\w@\-.+]/, recursive: true }
    }
});