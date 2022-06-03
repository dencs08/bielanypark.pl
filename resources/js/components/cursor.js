import { gsap } from "gsap";

function cursorInit() {
    const cursor = document.getElementById("cursor")
    //!Cursor
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        cursor.style.display = "none";
    } else {

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

        let itemsGrow;
        let itemsShrink;
        function cursorItems() {
            itemsGrow = document.querySelectorAll("a, button, .btn, .cursor_expand");
            itemsShrink = document.querySelectorAll("textarea, input, label, .cursor_shrink");

            for (var i = 0; i < itemsGrow.length; i++) {
                (function (index) {
                    itemsGrow[index].addEventListener("mouseover", function (e) {
                        cursor.classList.add("active-expand");
                    })
                    itemsGrow[index].addEventListener("mouseleave", function (e) {
                        cursor.classList.remove("active-expand");
                    })
                })(i);
            }

            for (var i = 0; i < itemsShrink.length; i++) {
                (function (index) {
                    itemsShrink[index].addEventListener("mouseover", function (e) {
                        cursor.classList.add("active-shrink");
                    })
                    itemsShrink[index].addEventListener("mouseleave", function (e) {
                        cursor.classList.remove("active-shrink");
                    })
                })(i);
            }
        }
        cursorItems();
    }
}

export { cursorInit }