//nav button active states
$("#nav-btn").click(function () {
    $("#nav-btn").toggleClass("nav-btn-active");
    $("#nav-menu").toggleClass("nav-menu-active");
})

///Intersection Observer
const navbar = document.querySelector(".nav-container");
const hero = document.querySelector(".hero-text");
const options = {
    threshold: [0.9],
    rootMargin: "-125px 0px 0px 0px",
};

const heroobserver = new IntersectionObserver(function (entries, heroobserver) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            navbar.classList.add("nav-scrolled");
        }
        else {
            navbar.classList.remove("nav-scrolled");
        }
    });
}, options);
heroobserver.observe(hero);
/////////////////////////////

// cookie policy
$(window).on('load', function () {
    if (document.cookie.indexOf("accepted_cookies=") < 0) {
        $('.cookie-overlay').fadeIn(400);
    }

    $('.accept-cookies').on('click', function() {
        let exdays = 182;
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
      document.cookie = "accepted_cookies=yes;"+ expires;
      $('.cookie-overlay').fadeOut(400);
    })


    $('.close-cookies').on('click', function () {
        $('.cookie-overlay').fadeOut(400);
    })
})

//contact form
$("#contact_form").on("submit", function (e) {
    e.preventDefault();

    //bring in recaptcha scripts and request token
    grecaptcha.ready(function () {
        grecaptcha.execute('6LdHtLwlAAAAAEuX7k_J0hlgq3MsyC2On2Ouc9JG', {
            action: 'submit'
        }).then(function (token) {
            var formData = new FormData($("#contact_form").get(0));
            formData.append("token", token);
            $.ajax({ //start ajax post
                type: "POST",
                url: "scripts/contact.script.php",
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    $("#loading-icon").show(400);
                    $("#loading-btn-text").addClass("loading");
                },
                success: function (data, responseText) {
                    //on success, show a message with the amount of images uploaded etc
                    const response = JSON.parse(data);
                    $("#response-msg").html(response.message);
                    if (response.response_code == 400) {
                        $(".response").addClass("response-error");
                        $(".response").slideDown(400);
                        $("#loading-icon").hide(400);
                        $("#loading-btn-text").toggleClass("loading");
                    }
                    if (response.response_code == 200) {
                        $(".response").removeClass("response-error");
                        $(".response").slideDown(400);
                        $("#loading-icon").hide(400);
                        $("#loading-btn-text").toggleClass("loading");
                        document.getElementById("contact_form").reset();
                    }
                }
            });
        });
    });

});

//close popup if user clicks no thanks or the close button
$(".popup-close").on("click", function () {
    $(".popup").removeClass("popup-active");
    if ($(this).attr("id") == "dismiss") {
        setCookie("subscribe_dismiss", "yes", 182);
    }
})

///Subscriber script
$("#subscribe").on("submit", function (e) {

    e.preventDefault();
        //bring in recaptcha scripts and request token
        grecaptcha.ready(function () {
            grecaptcha.execute('6LdHtLwlAAAAAEuX7k_J0hlgq3MsyC2On2Ouc9JG', {
                action: 'submit'
            }).then(function (token) {
                var formData = new FormData($("#subscribe").get(0));
                console.log(formData);
                formData.append("action", "subscribe");
                formData.append("token", token);
                $.ajax({ //start ajax post
                    type: "POST",
                    url: "scripts/functions.php",
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        //!sort loaders
                        $("#subscriber_loading-icon").show(400);
                        $("#subscriber_loading-btn-text").addClass("loading");
                        $("#subscriber_name").removeClass("input-error");
                        $("#subscriber_email").removeClass("input-error");
                    },
                    //!handle response json file
                    success: function (data, responseText) {
                        const response = JSON.parse(data);
                        //handle error codes
                        if (response.response_code == 400 || response.response_code==403) {
                            if (response.name_req == 0) {
                                $("#subscriber_name").addClass("input-error");
                            }
                            if (response.email_req == 0) {
                                $("#subscriber_email").addClass("input-error");
                            }
                            $("#response-message").text(response.message);
                            $("#subscribe_response").addClass("response-error");
                            $("#subscribe_response").slideDown(400);
                            $("#subscriber_loading-icon").hide(400);
                            $("#subscriber_loading-btn-text").toggleClass("loading");
                        }
                        if (response.response_code == 200 || response.response_code == 201) {
                            $("#response-message").text(response.message);
                            $("#subscribe_response").removeClass("response-error");
                            $("#subscribe_response").slideDown(400);
                            $("#subscriber_loading-icon").hide(400);
                            $("#subscriber_loading-btn-text").toggleClass("loading");
                            $("#subscribe").addClass("popup-body-success");
                            //!hide form when done and add a cookie
                            setCookie("subscribed", "yes", 182);
                        }

            
                    }
                });

            });
        });
})
//? set cookies
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
//?find cookie
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

//? check a cookie is set and run the functions needed
function checkCookie(cname) {
    let cookie = getCookie(cname);
    if (cookie == "") {
        console.log(cname);

    }
}

$(window).on("load", function () {
    //check if the user has subscribed or not
    if (getCookie("subscribed") == "") {
        $(".popup").addClass("popup-active");
        if (getCookie("subscribe_dismiss") != "") {
            $(".popup").removeClass("popup-active");
        }
    }
})