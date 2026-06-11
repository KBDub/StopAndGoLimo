@props([
    'image'    => '/images/heroes/hero-party-bus-aurora.png',
    'imageAlt' => 'Stop and Go team committed to delivering safe, unforgettable party bus experiences',
])

<x-sections.travel-in-style
    heading="Our Mission"
    headingBold="and Values"
    subtitle="Core Values"
    body="At Stop and Go, we are committed to delivering safe, unforgettable, and fun experiences on every party bus ride. Our focus is on making your celebration seamless, memorable, and full of energy, while ensuring your satisfaction and trust every step of the way."
    buttonText="Rent a Party Bus"
    buttonHref="/bookings-reservations"
    :image="$image"
    :imageAlt="$imageAlt"
    imagePosition="right"
    background="navy"
    slideIn="left"
/>
