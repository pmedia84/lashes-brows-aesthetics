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

    $('.accept-cookies').on('click', function () {
        document.cookie = "accepted_cookies=yes;"
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

})






