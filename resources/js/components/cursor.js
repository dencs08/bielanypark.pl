import { gsap } from "gsap";

function cursorInit() {
    //!Cursor
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        // cursor.style.display = "none";
        // follower.style.display = "none";
    } else {
        const cursor = document.getElementById("cursor")

        var posX = 0,
            posY = 0;

        var mouseX = 0,
            mouseY = 0;

        gsap.to(cursor, {
            duration: 0.005,
            repeat: -1,
            onRepeat: function () {
                posX += (mouseX - posX) / 9;
                posY += (mouseY - posY) / 9;

                gsap.set(cursor, {
                    css: {
                        left: mouseX,
                        top: mouseY
                    }
                });
            }
        });

        document.addEventListener("mousemove", function (e) {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });

        let items = document.querySelectorAll("a, button, input, textarea, input, label, .cursor_expand")

        for (var i = 0; i < items.length; i++) {
            (function (index) {
                items[index].addEventListener("mouseover", function (e) {
                    cursor.classList.add("active");
                })
                items[index].addEventListener("mouseleave", function (e) {
                    cursor.classList.remove("active");
                })
            })(i);
        }
    }
}

export { cursorInit }