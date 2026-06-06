@props([
    'href' => 'https://www.facebook.com/',
])

<style>
    .sg-sm-chip {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 56px;
        height: 56px;
        border: 1px solid var(--champagne-dark);
        background: transparent;
        text-decoration: none;
        flex-shrink: 0;
        transition: border-color 0.25s ease;
    }
    .sg-sm-chip svg {
        transition: fill 0.25s ease;
        fill: var(--champagne-dark);
    }
    .sg-sm-chip:hover {
        border-color: var(--champagne);
    }
    .sg-sm-chip:hover svg {
        fill: var(--champagne);
    }
</style>

<a href="{{ $href }}" target="_blank" rel="noopener noreferrer" class="sg-sm-chip" aria-label="Facebook">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" style="width: 1.1rem;" aria-hidden="true">
        <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
    </svg>
</a>
