    particlesJS('particles-js', {
      particles: {
        color: '#ff8000',
        color_random: true,
        shape: 'circle', // "circle", "edge" or "triangle"
        opacity: 1,
        size: 2,
        size_random: false,
        nb: 150,
        line_linked: {
          enable_auto: true,
          distance: 80,
          color: '#db37b4',
          opacity: 1,
          width: 1,
          condensed_mode: {
            enable: false,
            rotateX: 600,
            rotateY: 600
          }
        },
        anim: {
          enable: true,
          speed: 1
        }
      },
      interactivity: {
        enable: true,
        mouse: {
          distance: 300
        },
        detect_on: 'canvas', // "canvas" or "window"
        mode: 'grab',
        line_linked: {
          opacity: .5
        },
        events: {
          onclick: {
            enable: true,
            mode: 'remove', // "push" or "remove"
            nb: 4
          }
        }
      },
      /* Retina Display Support */
      retina_detect: true
    });