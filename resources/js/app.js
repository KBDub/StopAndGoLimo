import './bootstrap';
import collapse from '@alpinejs/collapse';

document.addEventListener('alpine:init', () => {
    window.Alpine.plugin(collapse);

    window.Alpine.store('zipResult', {
        inRange: false,
        zip: '',
    });

    window.Alpine.store('dtfCart', {
        items: [],
        pendingItem: null,
        clear() {
            this.items = [];
            this.pendingItem = null;
        }
    });
});
