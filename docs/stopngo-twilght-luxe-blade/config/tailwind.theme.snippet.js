/** =====================================================================
 *  Stop & Go — Tailwind theme extension ("Twilight Luxe")
 *  Merge this `extend` block into your tailwind.config.js so utilities
 *  like  text-champagne  bg-navy  border-signal  font-head  resolve.
 *  ===================================================================== */
module.exports = {
  theme: {
    extend: {
      colors: {
        champagne: {
          light:   '#E9C79E',
          DEFAULT: '#DCB57E',
          dark:    '#C49A5E',
        },
        navy: {
          light:   '#252235',
          DEFAULT: '#15162C',
          dark:    '#0F1223',
        },
        signal: {
          light:   '#FFD65E',
          DEFAULT: '#FEC42D',
          dark:    '#E0A800',
        },
        cloud: {
          light:   '#F4F5F7',
          DEFAULT: '#E8E9EC',
          dark:    '#D4D6DB',
        },
        slate: {
          light:   '#8B939C',
          DEFAULT: '#69727D',
          dark:    '#4A5159',
        },
        success: '#2E9E6B',
        warning: '#E0A800',
        error:   '#C0392B',
      },
      fontFamily: {
        head: ['Poppins', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        body: ['Montserrat', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
      backgroundImage: {
        'grad-hero':     'linear-gradient(135deg, #15162C 0%, #252235 100%)',
        'grad-twilight': 'linear-gradient(135deg, #0F1223 0%, #15162C 60%, #252235 100%)',
        'grad-shine':    'linear-gradient(135deg, #DCB57E 0%, #E9C79E 100%)',
        'grad-navygold': 'linear-gradient(135deg, #15162C 0%, #252235 55%, #DCB57E 140%)',
      },
    },
  },
};
