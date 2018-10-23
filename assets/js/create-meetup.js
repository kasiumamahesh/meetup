        $(".create-meetup").on("keyup", "form", function(e) {
            if (e.which == 13) {
                if ($("#cm-next-tab").is(":visible") && $("fieldset.cm-current").find("input, textarea").valid()) {
                    e.preventDefault();
                    nextSection();
                    return false;
                }
            }
        });


        $("#cm-next-tab").on("click", function(e) {
            console.log(e.target);
            nextSection();
        });

        $("form").on("submit", function(e) {
            if ($("#cm-next-tab").is(":visible") || $("fieldset.cm-current").index() < 3) {
                e.preventDefault();
            }
        });

        function goToSection(i) {
            $("#cm-fieldsets fieldset:gt(" + i + ")").removeClass("cm-current").addClass("next");
            $("#cm-fieldsets fieldset:lt(" + i + ")").removeClass("cm-current");
            $("#cm-section-tabs li").eq(i).addClass("cm-current").siblings().removeClass("cm-current");
            setTimeout(function() {
                $("#cm-fieldsets fieldset").eq(i).removeClass("next").addClass("cm-current active");
                if ($("#cm-fieldsets fieldset.cm-current").index() == 3) {
                    $("#cm-next-tab").hide();
                    $("#cm-fieldsets input[type=submit]").show();
                } else {
                    $("#cm-next-tab").show();
                    $("#cm-fieldsets input[type=submit]").hide();
                }
            }, 80);

        }

        function nextSection() {
            var i = $("fieldset.cm-current").index();
            if (i < 3) {
                $("#cm-section-tabs li").eq(i + 1).addClass("active");
                goToSection(i + 1);
            }
        }

        $("#cm-section-tabs li").on("click", function(e) {
            var i = $(this).index();
            if ($(this).hasClass("active")) {
                goToSection(i);
            } else {
                alert("Please complete previous sections first.");
            }
        });