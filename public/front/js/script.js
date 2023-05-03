jQuery.validator.addMethod("checkEmail", function(e, a) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(e).toLowerCase())
}, " Email is invalid."), jQuery.validator.addMethod("phoneNumber", function(e, a) {
    return /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/.test(e)
}, "should contain only number."), $(document).on("submit", "form", function(e) {
    if ($(this).hasClass("no-submit")) return e.preventDefault(), !1
}), $(".inn-cntct").validate({
    rules: {
        fname: {
            required: !0
        },
        lname: {
            required: !0
        },
        email: {
            checkEmail: !0
        },
        code: {
            number: !0,
            required: !0
        },
        phone: {
            number: !0,
            required: !0
        },
        msg: {
            required: !0
        }
    },
    // submitHandler: function(e) {
    //     var fname = $(e).find("[name='fname']").val(),
    //         lname = $(e).find("[name='lname']").val(),
    //         email = $(e).find("[name='email']").val(),
    //         code = $(e).find("[name='code']").val(),
    //         phone = $(e).find("[name='phone']").val(),
    //         msg = $(e).find("[name='msg']").val();
    //     return $.ajax({
    //         type: "POST",
    //         url: "email.php?action=send",
    //         data: {
    //             fname: fname,
    //             lname: lname,
    //             email: email,
    //             code: code,
    //             phone: phone,
    //             msg: msg
    //         },
    //         success: function(a) {
    //             if (a == 'success') {
    //                 $('.inn-cntct').trigger("reset");
    //                 $("#signupFormResult").addClass("alert alert-success").html("Thank you! Your message has been successfully sent");
    //                 $("#signupFormResult").fadeIn();
    //             }
    //         }
    //     }), !1
    // }
});
