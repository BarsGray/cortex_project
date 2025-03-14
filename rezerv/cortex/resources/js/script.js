document.addEventListener('DOMContentLoaded', () => {
    const fade_in_els = document.querySelectorAll('[data-fadeIn]');
    if (fade_in_els.length) {
        fade_in_els.forEach(fade_in_el => {
            let activated = false;
            
            if (!activated && window.pageYOffset > (fade_in_el.offsetTop - window.innerHeight) + 50) {
                activated = true;
                fade_in_el.style.opacity = '1';
                return;
            }
            
            window.addEventListener('scroll', () => {
                if (!activated && window.pageYOffset > (fade_in_el.offsetTop - window.innerHeight) + 200) {
                    activated = true;
                    fade_in_el.style.opacity = '1';
                }
            });
    
        });
    }
    
    const cookie          = document.querySelector('[data-cookie]');
    const cookie_triggers = document.querySelectorAll('[data-cookie-trigger]');
    if (cookie_triggers && cookie) {
        !localStorage.getItem('cookie_accepted') && cookie.classList.remove('hidden');
        
        cookie_triggers.forEach(trigger => {
            trigger.addEventListener('click', () => {
                localStorage.setItem('cookie_accepted', true);
                cookie.classList.add('hidden');
            });
        })
    }
    
    /* if (window.innerWidth > 1200) {
        const hero_foot = document.getElementById('hero-foot');
        if (hero_foot) new Parallax(hero_foot, {
                            relativeInput: true
                        });
    } */

    const anchors = document.querySelectorAll('#menu-menu-footer a');
    anchors.forEach(anchor => {
        anchor.addEventListener('click', e => {
            e.preventDefault();

            window.scrollTo({ left: 0, top: document.querySelector(anchor.getAttribute('href')).offsetTop, behavior: 'smooth' });
        });
    });

    const counts = document.querySelectorAll('[data-count]');
    counts.forEach(count_el => {
        let count_activated = false;

        console.log(count_el.offsetTop);
        if (!count_activated && window.pageYOffset > count_el.offsetTop - window.innerHeight ) {
            count_activated = true;
            animateValue(count_el, count_el.dataset.count, 2000);
        }

        if (!count_activated) {

            window.addEventListener('scroll', () => {
                if (!count_activated && window.pageYOffset > count_el.offsetTop - window.innerHeight ) {
                    count_activated = true;
                    animateValue(count_el, count_el.dataset.count, 2000);
                }
            });
        }
    });

    const modal_triggers = document.querySelectorAll('[data-modal-trigger]');
    if (modal_triggers.length) {
        modal_triggers.forEach(trigger => {
            const modal = document.querySelector(`#${trigger.dataset.modalTrigger}`);

            if (!modal) return;
    
            trigger.addEventListener('click', () => modal.setAttribute('data-modal', 'active'));
    
            modal.querySelectorAll('[data-modal-close]').forEach(btn => btn.addEventListener('click', () => {
                modal.setAttribute('data-modal', '');
                modal.querySelector('form.sent') && modal.querySelector('form.sent').classList.remove('sent');
            }));
        });
    }


    const phones = document.querySelectorAll('.field--phone input');
    phones.forEach(phone_input => {
        (new Inputmask('+7 (999) 999-99-99')).mask(phone_input);
    });
});

function animateValue(el, end, duration) {
    let startTime = null;
    const step = (timestamp) => {
        if (!startTime) startTime = timestamp;
        const progress = timestamp - startTime;
        const value = Math.min(end, 0 + (end - 0) * (progress / duration));
        el.innerHTML = Math.round(value); // Здесь вы можете обновить отображение значения в UI
        if (progress < duration) {
            requestAnimationFrame(step);
        }
    };
    requestAnimationFrame(step);
}