//*-~*~-*-*-~*~-*-*-~*~*-*-~*~-*-*-~*~-*
//
//　　　　　　　　Made with ❤ by ~
//　　　　　　 Areal Alien ❥ 雷克斯
//
//　　　　　　　　　　▄▀▄　　　▄▀▄
//　　　　　　　　 ▄█░░▀▀▀▀▀░░█▄
//　　　　　▄▄ 　█░░░░░░░░░░░█　▄▄
//　　　　█▄▄█　█░░▀░░┬░░▀░░█　█▄▄█
//*-~*~-*-*-~*~-*-*-~*~*-*-~*~-*-*-~*~-*

class Button {
    constructor(headerImage) {
        this.img = headerImage;
        this.width = this.img.offsetWidth;
        this.height = this.img.offsetHeight;
        this.left = this.img.offsetLeft;
        this.top = this.img.offsetTop;
        this.x = 0;
        this.y = 0;
        this.cursorX = 0;
        this.cursorY = 0;
        this.magneticPullX = 0.1;
        this.magneticPullY = 0.2;
        this.isHovering = false;
        this.magnetise();
    }

    onEnter = () => {
        gsap.to(this.img, 0.4, {
            x: this.x * this.magneticPullX,
            y: this.y * this.magneticPullY,
            ease: Power4.easeOut
        });
    };

    onLeave = () => {
        gsap.to(this.img, 0.7, {
            x: 0,
            y: 0,
            ease: Elastic.easeOut.config(1.1, 0.5)
        });
    };

    magnetise = () => {
        document.querySelector("body").addEventListener("mousemove", (e) => {
            this.cursorX = e.clientX;
            this.cursorY = e.clientY;

            const center = {
                x: this.left + this.width / 2,
                y: this.top + this.height / 2
            };

            this.x = this.cursorX - center.x;
            this.y = this.cursorY - center.y;

            const distance = Math.sqrt(this.x * this.x + this.y * this.y);
            const hoverArea = this.isHovering ? 0.6 : 0.5;

            if (distance < this.width * hoverArea) {
                if (!this.isHovering) {
                    this.isHovering = true;
                }
                this.onEnter();
            } else {
                if (this.isHovering) {
                    this.onLeave();
                    this.isHovering = false;
                }
            }
        });
    };
}

const headerImage = document.querySelector("#header-background");
new Button(headerImage);