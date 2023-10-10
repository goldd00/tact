import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import SplitType from 'split-type';

gsap.registerPlugin(ScrollTrigger);

const isPc = () => {
    const ua = navigator.userAgent;
    let isPc = false;

    if (!(ua.indexOf('iPhone') > 0 || ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0 || ua.indexOf('Mobile') > 0 )) {
        return isPc = true;
    }
    return isPc;
}

const mouseInfo = () => {
    if( !isPc() ) {
        return;
    }

    const elTarget = gsap.utils.toArray('.js_info');
    const elIcon   = document.getElementById('js_mouseInfo');

    elTarget.forEach(target => {
        target.addEventListener('mousemove', (e) => {
            const x = e.clientX;
            const y = e.clientY;

            gsap.to('#js_mouseTrail',
            {
                ease: "none",
                display: "none",
                duration: 0.01
            });

            gsap.to('#js_mouseInfo',
            {
                ease: "power2.out",
                x: x,
                y: y,
                opacity: 1
            });
        });

        target.addEventListener('mouseenter', (e) => {

            elIcon.dataset.type = e.target.dataset.type;

            gsap.to('#js_mouseTrail',
            {
                ease: "none",
                display: "none",
                duration: 0.01
            });

            gsap.fromTo('#js_mouseInfo',
                {
                    scale: 0
                },
                {
                    scale: 1
                }
            );
        });

        target.addEventListener('mouseleave', (e) => {
            gsap.to('#js_mouseTrail',
            {
                display: "block"
            });

            gsap.to('#js_mouseInfo', {
                ease: "power2.out",
                opacity: 0
            });
        });
    });
}
mouseInfo();

const worksHoverAnimation = () => {

    if( !isPc() ) {
        return;
    }

    const elTarget = gsap.utils.toArray('.js_worksHover');
    const elTmbImg = document.getElementById('js_worksTmbImg');

    elTarget.forEach(target => {
        target.addEventListener('mousemove', (e) => {
            const x = e.clientX;
            const y = e.clientY;

            gsap.to('#js_mouseTrail',
            {
                ease: "none",
                display: "none",
                duration: 0.01
            });

            gsap.to('#js_worksTmb', { ease: "power2.out", x: x, y: y });
        });

        target.addEventListener('mouseenter', (e) => {
            elTmbImg.setAttribute('src', e.target.dataset.src);

            gsap.to('#js_mouseTrail',
            {
                ease: "none",
                display: "none",
                duration: 0.01
            });

            gsap.to('#js_worksTmb', {
                ease: "power2.out",
                rotationX: 60 * Math.random() - 30,
                rotationY: 100 * Math.random() - 50,
                rotationZ: 20 * Math.random() - 10,
                autoAlpha: 1,
            });
        });

        target.addEventListener('mouseleave', (e) => {
            gsap.to('#js_mouseTrail',
            {
                display: "block",
                duration: 0.01
            });

            gsap.to('#js_worksTmb', {
                ease: "power2.out",
                opacity: 0
            });
        });
    });

}
worksHoverAnimation();

const rotateCircle = () => {
    const elTarget = gsap.utils.toArray(".js_circle");
    const elPath = gsap.utils.toArray(".js_circlePath");
    let speed = 1;

    elTarget.forEach(target => {

        gsap.timeline({
            ease: "none",
            repeat: -1,
        }).to(target, {
            transformOrigin: "135.5px 135.5px",
            rotation: "360",
            duration: speed++,
        })
    });

    elPath.forEach(target => {

        gsap.timeline({
            ease: "none",
            repeat: -1,
        }).to(elPath, {
            transformOrigin: "158.625px 158.625px",
            rotation: "-360",
            duration: speed++,
        })
    });
}
rotateCircle();

const kvAnimation = () => {
    const elTarget = document.querySelectorAll('.Kv');

    if( elTarget.length ) {
        const tl = gsap.timeline();

        tl.fromTo('.Kv__catch',
            {
                x: -20,
                autoAlpha: 0
            },
            {
                x: 0,
                autoAlpha: 1,
                delay: 0.15
            });

        tl.fromTo('.Header',
            {
                y: -20
            },
            {
                y: 0,
                autoAlpha: 1,
                delay: 0.1
            });

        tl.fromTo('.StickyBar',
            {
                x: 20,
                autoAlpha: 0,
            },
            {
                x: 0,
                autoAlpha: 1,
            }, '<');

        tl.fromTo('.Kv__info',
            {
                y: 20,
                autoAlpha: 0,
            },
            {
                y: 0,
                autoAlpha: 1,
            }, '<');

        tl.fromTo('.Kv__scroll',
            {
                y: 20,
                autoAlpha: 0,
            },
            {
                y: 0,
                autoAlpha: 1,
            }, '<');
    }
}
kvAnimation();

const hamburgerMenu = () => {
    const elTarget = document.getElementById('js_menuBtn');
    const elText   = document.getElementById('js_menuText');
    const elNav    = document.getElementById('js_nav');
    const elBody   = document.getElementById('js_hidden');

    elTarget.addEventListener('click', (e) => {
        e.currentTarget.classList.toggle('active');
        elNav.classList.toggle('active');
        elBody.classList.toggle('active');

        if( e.currentTarget.classList.contains('active') ) {
            elText.innerText = 'CLOSE';
        } else {
            elText.innerText = 'MENU';
        }
    });
}
hamburgerMenu();

const marquee = () => {
    const elMarquee = document.querySelectorAll('.Marquee');

    if( !elMarquee.length ) {
        return;
    }

    gsap.timeline({ repeat: -1 })
        .to('.Marquee', { duration: 20, xPercent: -50, ease: 'none' })
        .set('.Marquee', { xPercent: 0});
}
marquee();

const waveAnchor = () => {
    const elWave = document.querySelectorAll('.StickyBar');

    if( !elWave.length ) {
        return;
    }

    const anchorTop = gsap.timeline({
        scrollTrigger: {
            'trigger': '#anchor_top',
            'start': '-=1 center',
            'end': '+=100%',
            'toggleClass':{
                'targets': 'a[href="#anchor_top"]',
                'className': 'active',
                'toggleActions': 'restart none none none'
            },
        }
    });

    const anchorAbout = gsap.timeline({
        scrollTrigger: {
            'trigger': '#anchor_about',
            'start': '-=160 center',
            'toggleClass':{
                'targets': 'a[href="#anchor_about"]',
                'className': 'active',
                'toggleActions': 'restart none none none'
            },
        }
    });

    const anchorOrigin = gsap.timeline({
        scrollTrigger: {
            'trigger': '#anchor_origin',
            'start': '-=120 center',
            'end': 'bottom+=130 top',
            'toggleClass':{
                'targets': 'a[href="#anchor_origin"]',
                'className': 'active',
                'toggleActions': 'restart none none none'
            },
        }
    });

    const anchorVision = gsap.timeline({
        scrollTrigger: {
            'trigger': '.About__msg',
            'start': '-=120 center',
            'end': 'bottom+=160 top',
            'toggleClass':{
                'targets': 'a[href="#anchor_vision"]',
                'className': 'active',
                'toggleActions': 'restart none none none'
            },
        }
    });

    const anchorWhatwedo = gsap.timeline({
        scrollTrigger: {
            'trigger': '#anchor_whatwedo',
            'start': '-=160 center',
            'end': 'bottom+=80 top',
            'toggleClass':{
                'targets': 'a[href="#anchor_whatwedo"]',
                'className': 'active',
                'toggleActions': 'restart none none none'
            },
        }
    });

    const anchorCorporate = gsap.timeline({
        scrollTrigger: {
            'trigger': '#anchor_corporate',
            'start': '-=120 center',
            'end': 'bottom+=40 top',
            'toggleClass':{
                'targets': 'a[href="#anchor_corporate"]',
                'className': 'active',
                'toggleActions': 'restart none none none'
            },
        }
    });

    const anchorMarketing = gsap.timeline({
        scrollTrigger: {
            'trigger': '#anchor_marketing',
            'start': '-=120 center',
            'end': 'bottom+=40 top',
            'toggleClass':{
                'targets': 'a[href="#anchor_marketing"]',
                'className': 'active',
                'toggleActions': 'restart none none none'
            },
        }
    });

    const anchorAdvertising = gsap.timeline({
        scrollTrigger: {
            'trigger': '#anchor_advertising',
            'start': '-=120 center',
            'end': 'bottom+=40 top',
            'toggleClass':{
                'targets': 'a[href="#anchor_advertising"]',
                'className': 'active',
                'toggleActions': 'restart none none none'
            },
        }
    });

    const anchorProduction = gsap.timeline({
        scrollTrigger: {
            'trigger': '#anchor_production',
            'start': '-=120 center',
            'end': 'bottom+=40 top',
            'toggleClass':{
                'targets': 'a[href="#anchor_production"]',
                'className': 'active',
                'toggleActions': 'restart none none none'
            },
        }
    });

    const anchorDigital = gsap.timeline({
        scrollTrigger: {
            'trigger': '#anchor_digital',
            'start': '-=120 center',
            'end': 'bottom+=40 top',
            'toggleClass':{
                'targets': 'a[href="#anchor_digital"]',
                'className': 'active',
                'toggleActions': 'restart none none none'
            },
        }
    });

    const anchorEntertainment = gsap.timeline({
        scrollTrigger: {
            'trigger': '#anchor_entertainment',
            'start': '-=120 center',
            'end': 'bottom+=40 top',
            'toggleClass':{
                'targets': 'a[href="#anchor_entertainment"]',
                'className': 'active',
                'toggleActions': 'restart none none none'
            },
        }
    });

    const anchorWorks = gsap.timeline({
        scrollTrigger: {
            'trigger': '#anchor_works',
            'start': '-=535',
            'toggleClass':{
                'targets': 'a[href="#anchor_works"]',
                'className': 'active',
                'toggleActions': 'restart none none none'
            },
        }
    });

    const anchorInfo = gsap.timeline({
        scrollTrigger: {
            'trigger': '.Info',
            'start': '-=218 center',
            'toggleClass':{
                'targets': 'a[href="#anchor_information"]',
                'className': 'active',
                'toggleActions': 'restart none none none'
            },
        }
    });

    const anchorCompany = gsap.timeline({
        scrollTrigger: {
            'trigger': '.Profile',
            'start': '-=218 center',
            'toggleClass':{
                'targets': 'a[href="#anchor_company"]',
                'className': 'active',
                'toggleActions': 'restart none none none'
            },
        }
    });

    const anchorContact = gsap.timeline({
        scrollTrigger: {
            'trigger': '.Contact',
            'start': '-=360 center',
            'toggleClass':{
                'targets': 'a[href="#anchor_contact"]',
                'className': 'active',
                'toggleActions': 'restart none none none'
            },
        }
    });

    const anchorFooter = gsap.timeline({
        scrollTrigger: {
            'trigger': '.Footer',
            'start': 'top center',
            'toggleClass':{
                'targets': 'a[href="#anchor_footer"]',
                'className': 'active',
                'toggleActions': 'restart none none none'
            },
        }
    });
}
waveAnchor();

const scrollBar = () => {
    const elScroll = document.querySelectorAll('.Kv__scroll');

    if( !elScroll.length ) {
        return;
    }

    gsap.timeline({
        y: 0,
        repeat: -1
    }).to('.Kv__scroll__icon__base', {
        y: 90,
        ease: 'expo.out',
        duration: 2
    }).to('.Kv__scroll__icon__base', {
        y: 108,
    });

    gsap.timeline({
        y: 0,
        repeat: -1,
        delay: 0.2,
        repeatDelay: 0.2,
    }).to('.Kv__scroll__icon__rect', {
        y: 90.5,
        ease: 'expo.out',
        duration: 1.8 
    }).to('.Kv__scroll__icon__rect', {
        y: 108
    });
}
scrollBar();

const rotateBg = () => {
    const elTarget = document.querySelectorAll('#js_gradientBg')

    if( !elTarget.length ) {
        return;
    }

    gsap.timeline({
        scrollTrigger: {
            target: 'body',
            start: 'top top',
            end: 'bottom bottom',
            scrub: 2,
        }
    }).to('.Gradientbg__wrap', {
        rotation: 360 
    })
}
rotateBg();

const mouseTrail = () => {
    if( !isPc() ) {
        return;
    }

    let svgns = 'http://www.w3.org/2000/svg';
    let root = document.querySelector('svg');
    let ease = 0.75;

    let pointer = { 
        x: window.innerWidth  / 2, 
        y: window.innerHeight / 2 
    };

    window.addEventListener('mousemove', (event) => {
        pointer.x = event.clientX;
        pointer.y = event.clientY;
    });

    let leader = (prop) => {
        return prop === 'x' ? pointer.x : pointer.y;
    }

    const createLine = (leader, i) => {
        let line = document.createElementNS(svgns, 'line');
        root.appendChild(line);

        gsap.set(line, { x: -15, y: -15, opacity: (total - i) / total });
        let pos = gsap.getProperty(line);

        gsap.to(line, {
            duration: 1000,
            x: '+=1',
            y: '+=1',
            repeat: -1,
            ease: 'none',
            modifiers: {
                x: () => {        
                    let posX = pos('x');
                    let leaderX = leader('x');
                    let x = posX + (leaderX - posX) * ease;
                    line.setAttribute('x2', leaderX - x);
                    return x;
                },
                y: () => {        
                    let posY = pos('y');
                    let leaderY = leader('y');
                    let y = posY + (leaderY - posY) * ease;
                    line.setAttribute('y2', leaderY - y);
                    return y;
                }
            }
        });

        return pos;
    }

    let total = 100;
    for (let i = 0; i < total; i++) {
        leader = createLine(leader, i);
    }
}
mouseTrail();

const pageTitleAnimation = () => {

    const elTarget = document.querySelectorAll('.PageTitle');

    if( !elTarget.length ) {
        return;
    }

    let pageTitle = new SplitType('.PageTitle__text', {
        types: 'lines, words, chars',
        tagName: 'span'
    });

    let pageTitleJa = new SplitType('.PageTitle__ja', {
        types: 'lines, words, chars',
        tagName: 'span'
    });

    gsap.to('.PageTitle__text .char', {
        y: 0,
        stagger: 0.05,
        delay: 0.15,
        duration: 0.45,
        autoAlpha: 1,
        ease: 'power2.inOut',
    });

    gsap.to('.PageTitle__ja .char', {
        y: 0,
        stagger: 0.05,
        delay: 0.15,
        duration: 0.45,
        autoAlpha: 1,
        ease: 'power2.inOut',
    });
}
pageTitleAnimation();

const scrollAnimation = () => {
    const elTarget = document.querySelectorAll('.Index');

    if( !elTarget.length ) {
        return;
    }

    ScrollTrigger.batch('.js_fadeLeft', {
        onEnter: batch => gsap.fromTo(batch,
            {
                x: -50,
                autoAlpha: 0,
            },
            {
                x: 0,
                autoAlpha: 1,
                delay: 0.6,
                duration: 1.2,
                ease: 'power2.InOut'
            }
        ),
        once: true
    });

    ScrollTrigger.batch('.js_fadeRight', {
        onEnter: batch => gsap.fromTo(batch,
            {
                x: +50,
                autoAlpha: 0,
            },
            {
                x: 0,
                autoAlpha: 1,
                delay: 0.6,
                duration: 1.2,
                ease: 'power2.InOut'
            }
        ),
        once: true
    });

    ScrollTrigger.batch('.js_fadeItem', {
        onEnter: batch => gsap.fromTo(batch,
            {
                y: -50,
                autoAlpha: 0,
            },
            {
                x: 0,
                autoAlpha: 1,
                delay: 0.6,
                duration: 1.2,
                stagger: 0.5,
                ease: 'power2.InOut'
            }
        ),
        once: true
    });
}
scrollAnimation();