$(function () {
    var ajaxResponseBaseTime = 3;
    var ajaxResponseRequestError = "<div class='message error icon-warning'>Desculpe mas não foi possível processar sua requisição...</div>";

    // MOBILE MENU

    // $(".mobile_menu").click(function (e) {
    //     e.preventDefault();

    //     var menu = $(".dash_sidebar");
    //     menu.animate({ right: 0 }, 200, function (e) {
    //         $("body").css("overflow", "hidden");
    //     });

    //     menu.one("mouseleave", function () {
    //         $(this).animate({ right: '-260' }, 200, function (e) {
    //             $("body").css("overflow", "auto");
    //         });
    //     });
    // });

    //NOTIFICATION CENTER

    // function notificationsCount() {
    //     var center = $(".notification_center_open");
    //     $.post(center.data("count"), function (response) {
    //         if (response.count) {
    //             center.html(response.count);
    //         } else {
    //             center.html("0");
    //         }
    //     }, "json");
    // }

    // function notificationHtml(link, image, notify, date) {
    //     return '<div data-notificationlink="' + link + '" class="notification_center_item radius transition">\n' +
    //         '<div class="image">\n' +
    //         '    <img class="rounded" src="' + image + '"/>\n' +
    //         '     </div >\n' +
    //         '<div class="info">\n' +
    //         '    <p class="title">' + notify + '</p>\n' +
    //         '    <p class="time icon-clock-o">' + date + '</p>\n' +
    //         '</div>\n' +
    //         '    </div >';
    // }

    // notificationsCount();

    // setInterval(function () {
    //     notificationsCount();
    // }, 1000 * 50);

    // $(".notification_center_open").click(function (e) {
    //     e.preventDefault();

    //     var notify = $(this).data("notify");
    //     var center = $(".notification_center");

    //     $.post(notify, function (response) {
    //         if (response.message) {
    //             ajaxMessage(response.message, ajaxResponseBaseTime);
    //         }

    //         var centerHtml = "";
    //         if (response.notifications) {
    //             $.each(response.notifications, function (e, notify) {
    //                 centerHtml += notificationHtml(notify.link, notify.image, notify.title, notify.created_at);
    //             });
    //             center.html(centerHtml);

    //             center.css("display", "block").animate({ right: 0 }, 200, function (e) {
    //                 $("body").css("overflow", "hidden");
    //             });
    //         }
    //     }, "json");

    //     center.one("mouseleave", function () {
    //         $(this).animate({ right: '-320' }, 200, function (e) {
    //             $("body").css("overflow", "auto");
    //             $(this).css("display", "none");
    //         });
    //     });
    //     notificationsCount();
    // });

    // $(".notification_center").on("click", "[data-notificationlink]", function () {
    //     window.location.href = $(this).data("notificationlink")
    // })

    //DATA SET

    $("[data-post]").click(function (e) {
        e.preventDefault();

        var clicked = $(this);
        var data = clicked.data();
        var load = $(".ajax_load");

        if (data.confirm) {
            var deleteConfirm = confirm(data.confirm);
            if (!deleteConfirm) {
                return;
            }
        }

        $.ajax({
            url: data.post,
            type: "POST",
            data: data,
            dataType: "json",
            beforeSend: function () {
                load.fadeIn(200).css("display", "flex");
            },
            success: function (response) {
                //redirect
                if (response.redirect) {
                    window.location.href = response.redirect;
                } else {
                    load.fadeOut(200);
                }

                //reload
                if (response.reload) {
                    window.location.reload();
                } else {
                    load.fadeOut(200);
                }

                //message
                if (response.message) {
                    ajaxMessage(response.message, ajaxResponseBaseTime);
                }
            },
            error: function () {
                ajaxMessage(ajaxResponseRequestError, 5);
                load.fadeOut();
            }
        });
    });

    //tiny
    // scripts.js
    document.addEventListener("DOMContentLoaded", function () {
        // Seu código TinyMCE aqui
        tinymce.init({
            selector: '#tiny',
            height: 500,
            menubar: true,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'fullscreen',
                'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | blocks | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | removeformat | help'
        });
    });

    //FORMS

    // $("form:not('.ajax_off')").submit(function (e) {
    //     e.preventDefault();

    //     var form = $(this);
    //     var load = $(".ajax_load");

    //     if (typeof tinyMCE !== 'undefined') {
    //         tinyMCE.triggerSave();
    //     }

    //     form.ajaxSubmit({
    //         url: form.attr("action"),
    //         type: "POST",
    //         dataType: "json",
    //         beforeSend: function () {
    //             load.fadeIn(200).css("display", "flex");
    //         },
    //         uploadProgress: function (event, position, total, completed) {
    //             var loaded = completed;
    //             var load_title = $(".ajax_load_box_title");
    //             load_title.text("Enviando (" + loaded + "%)");

    //             if (completed >= 100) {
    //                 load_title.text("Aguarde, carregando...");
    //             }
    //         },
    //         success: function (response) {
    //             //redirect
    //             if (response.redirect) {
    //                 window.location.href = response.redirect;
    //             } else {
    //                 form.find("input[type='file']").val(null);
    //                 load.fadeOut(200);
    //             }

    //             //reload
    //             if (response.reload) {
    //                 window.location.reload();
    //             } else {
    //                 load.fadeOut(200);
    //             }

    //             //message
    //             if (response.message) {
    //                 ajaxMessage(response.message, ajaxResponseBaseTime);
    //             }

    //             //image by fsphp mce upload
    //             if (response.mce_image) {
    //                 $('.mce_upload').fadeOut(200);
    //                 tinyMCE.activeEditor.insertContent(response.mce_image);
    //             }
    //         },
    //         complete: function () {
    //             if (form.data("reset") === true) {
    //                 form.trigger("reset");
    //             }
    //         },
    //         error: function () {
    //             ajaxMessage(ajaxResponseRequestError, 5);
    //             load.fadeOut();
    //         }
    //     });
    // });

    // AJAX RESPONSE

    function ajaxMessage(message, time) {
        var ajaxMessage = $(message);

        ajaxMessage.append("<div class='message_time'></div>");
        ajaxMessage.find(".message_time").animate({ "width": "100%" }, time * 1000, function () {
            $(this).parents(".message").fadeOut(200);
        });

        $(".ajax_response").append(ajaxMessage);
        ajaxMessage.effect("bounce");
    }

    // AJAX RESPONSE MONITOR

    $(".ajax_response .message").each(function (e, m) {
        ajaxMessage(m, ajaxResponseBaseTime += 1);
    });

    // AJAX MESSAGE CLOSE ON CLICK

    $(".ajax_response").on("click", ".message", function (e) {
        $(this).effect("bounce").fadeOut(1);
    });

});