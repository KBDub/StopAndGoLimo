{{--
 | Component  : x-ui.custom-request-wizard
 | Location   : resources/views/components/ui/custom-request-wizard.blade.php
 |
 | Full-featured custom order request wizard. Triggered from x-ui.contact-modal
 | via two radio buttons: "Custom Apparel Request" | "DTF Transfers".
 | Include once per page alongside x-ui.contact-modal.
 |
 | ── DTF PATH (dtfMode === true) ─────────────────────────────────────────────
 |   1. request-type         — Request Details (always)
 |   2. dtf-upload           — DTF File Upload / PNG only (always; auto-passes if pre-attached)
 |   3. dtf-type-selection   — DTF Type Selection (only when dtfItems.length === 0)
 |   4. dtf-quantity         — Quantities & Pricing (only when dtfItems.length === 0)
 |   5. completion-date      — Desired Completion Date (always)
 |   6. extra-notes          — Extra Notes (always)
 |   7. shipping-address     — Shipping Address (always)
 |   8. confirm-submit       — Review & Submit (always)
 |
 | ── APPAREL PATH (dtfMode === false) ────────────────────────────────────────
 |   1. request-type         — Request Details (always)
 |   2. garment-selection    — Garment Selection (always)
 |   3. quantity             — Quantity & Sizing (always)
 |   4. image-distribution   — One design or individual? (only when >1 garment type)
 |   5. artwork-upload       — Artwork Upload (only when 1 garment OR imageDistribution=single)
 |   ↳ Per selected garment (repeated):
 |       print-method-{key}  — Print Method
 |       color-{key}         — Color Selection
 |   6. completion-date      — Desired Completion Date (always)
 |   7. extra-notes          — Extra Notes (always)
 |   8. shipping-address     — Shipping Address (always)
 |   9. confirm-submit       — Review & Submit (always)
 |
 | ── EVENT API ───────────────────────────────────────────────────────────────
 |   open-modal   { name: 'custom-request-wizard', prefill: { name, email, phone,
 |                  dtfMode, dtfFileName, dtfItems } }
 |   close-modal  { name: 'custom-request-wizard' }  — closes and resets
 |   wizard-done  { name: 'custom-request-wizard' }  — fires on submit
 |
 | ── USAGE ───────────────────────────────────────────────────────────────────
 |   <x-ui.contact-modal />
 |   <x-ui.custom-request-wizard />
--}}

<div
    x-data="{
        isOpen:     false,
        step:       1,
        modalName:  'custom-request-wizard',

        /* ── Mode ──────────────────────────────────────────────── */
        dtfMode:    null,      /* true = DTF path, false = apparel path */

        /* ── Step 1: Request Details ──────────────────────── */
        requestType:  '',
        companyName:  '',
        isRush:       null,

        /* ── DTF path: pre-loaded items from pricing table ─── */
        dtfItems:    [],

        /* ── DTF path: file upload ────────────────────────── */
        dtfFileName: '',
        hasDtf:      null,

        /* ── DTF path: type selection (when no pre-loaded items) ── */
        dtfTypes: {
            neckTag:    false,
            chestImage: false,
            imageSize:  false,
        },
        dtfQuantities: {
            neckTag:    { tier: '', qty: '' },
            chestImage: { tier: '', qty: '' },
            imageSize:  { tier: '', qty: '' },
        },
        dtfTierOptions: [
            '1 – 14 pcs',
            '15 – 49 pcs',
            '50 – 99 pcs',
            '100 – 249 pcs',
            '250+ pcs',
        ],
        dtfTypeLabels: {
            neckTag:    'Neck Tags',
            chestImage: 'Left / Right Chest',
            imageSize:  'Image Sizes (5\u2033 and above)',
        },

        /* ── Apparel path: image distribution ────────────── */
        imageDistribution: null,    /* 'single' | 'individual' */
        artworkFileName: '',
        hasArtwork: null,

        /* ── Step 3: Garment Selection ────────────────────── */
        garments: {
            crewNeck:   false,
            vNeck:      false,
            poloLong:   false,
            poloShort:  false,
            tankTop:    false,
            beanie:     false,
            scoopNeck:  false,
            baseballCap:false,
            sweatshirt: false,
            hoodie:     false,
            zipHoodie:  false
        },

        /* ── Per-Garment: Print Method ────────────────────── */
        printMethods:          {},
        traditionalTypes:      {},
        specialtyTypeByGarment:{},
        specialtyLabels: {
            vinyl:'Vinyl Shirts', rhinestone:'Rhinestone', glitter:'Glitter Shirts',
            foil:'Foil Shirts', glowDark:'Glow In The Dark', flock:'Flock Shirts',
            reflective:'Reflective Shirts', holographic:'Holographic',
            brick:'Brick Shirts', pattern:'Pattern Shirts',
            embroidery:'Embroidery', picture:'Picture Shirts'
        },

        /* ── Per-Garment: Color Selection ─────────────────── */
        colorInputs:            {},
        selectedColorsByGarment:{},
        colorFocusIdx: -1,
        colorSuggestions: [
            'White','Black','Blue','Navy Blue','Red','Royal Blue','Forest Green',
            'Charcoal Gray','Light Gray','Sky Blue','Yellow','Orange','Purple',
            'Maroon','Pink','Hot Pink','Kelly Green','Burgundy','Lime Green',
            'Gold','Silver','Tan','Brown','Heather Gray','Sport Gray',
            'Safety Green','Safety Orange','Teal','Coral','Lavender','Olive Green'
        ],

        /* ── Per-Garment: Quantity & Sizing ───────────────── */
        quantities: {},
        sizes:  ['XS','S','M','L','XL','2XL','3XL','4XL','5XL','6XL'],
        genders:[
            { key:'men',     label:'Men\'s'   },
            { key:'women',   label:'Women\'s' },
            { key:'youth',   label:'Youth'    },
            { key:'toddler', label:'Toddler'  }
        ],

        /* ── Completion Date ──────────────────────────────── */
        completionDate:  '',
        isRushDelivery:  null,

        /* ── Extra Notes ──────────────────────────────────── */
        extraNotes: '',

        /* ── Shipping + Contact (pre-filled) ─────────────── */
        contactName:  '',
        contactEmail: '',
        contactPhone: '',
        address1:     '',
        address2:     '',
        city:         '',
        state:        '',
        zip:          '',

        /* ── UI overlays ──────────────────────────────────── */
        showConfirmation: false,
        showCloseConfirm: false,

        /* ── Submission state ─────────────────────────────── */
        submitting:     false,
        submitError:    false,
        checkoutUrl:    '',
        orderReference: '',

        /* ── US States ────────────────────────────────────── */
        stateMap: {
            'Alabama':'AL','Alaska':'AK','Arizona':'AZ','Arkansas':'AR','California':'CA',
            'Colorado':'CO','Connecticut':'CT','Delaware':'DE','Florida':'FL','Georgia':'GA',
            'Hawaii':'HI','Idaho':'ID','Illinois':'IL','Indiana':'IN','Iowa':'IA',
            'Kansas':'KS','Kentucky':'KY','Louisiana':'LA','Maine':'ME','Maryland':'MD',
            'Massachusetts':'MA','Michigan':'MI','Minnesota':'MN','Mississippi':'MS','Missouri':'MO',
            'Montana':'MT','Nebraska':'NE','Nevada':'NV','New Hampshire':'NH','New Jersey':'NJ',
            'New Mexico':'NM','New York':'NY','North Carolina':'NC','North Dakota':'ND','Ohio':'OH',
            'Oklahoma':'OK','Oregon':'OR','Pennsylvania':'PA','Rhode Island':'RI','South Carolina':'SC',
            'South Dakota':'SD','Tennessee':'TN','Texas':'TX','Utah':'UT','Vermont':'VT',
            'Virginia':'VA','Washington':'WA','West Virginia':'WV','Wisconsin':'WI','Wyoming':'WY',
            'District of Columbia':'DC'
        },

        /* ── Computed ─────────────────────────────────────── */
        get hasShirtType() {
            return this.garments.crewNeck  || this.garments.vNeck    ||
                   this.garments.poloLong  || this.garments.poloShort || this.garments.tankTop ||
                   this.garments.beanie   || this.garments.scoopNeck || this.garments.baseballCap ||
                   this.garments.sweatshirt || this.garments.hoodie  || this.garments.zipHoodie;
        },
        get selectedGarmentTypes() {
            return [
                { key:'crewNeck',   label:'Crew Necks'          },
                { key:'vNeck',      label:'V-Necks'             },
                { key:'poloLong',   label:'Polo (Long Sleeve)'  },
                { key:'poloShort',  label:'Polo (Short Sleeve)' },
                { key:'tankTop',    label:'Tank Tops'           },
                { key:'beanie',     label:'Beanies'             },
                { key:'scoopNeck',  label:'Scoop Neck'          },
                { key:'baseballCap',label:'Baseball Caps'       },
                { key:'sweatshirt', label:'Sweatshirts'         },
                { key:'hoodie',     label:'Hoodies'             },
                { key:'zipHoodie',  label:'Zip-Up Hoodies'      }
            ].filter(g => this.garments[g.key]);
        },
        get selectedDtfTypes() {
            return [
                { key:'neckTag',    label:'Neck Tags'                     },
                { key:'chestImage', label:'Left / Right Chest'            },
                { key:'imageSize',  label:'Image Sizes (5\u2033 and above)' },
            ].filter(t => this.dtfTypes[t.key]);
        },
        get visibleSteps() {
            if (this.dtfMode === true) {
                const s = ['request-type', 'dtf-upload'];
                if (!this.dtfItems || this.dtfItems.length === 0) {
                    s.push('dtf-type-selection', 'dtf-quantity');
                }
                s.push('completion-date', 'extra-notes', 'shipping-address', 'confirm-submit');
                return s;
            }
            /* Apparel path (dtfMode === false or null) */
            const s = ['request-type', 'garment-selection', 'quantity'];
            if (this.selectedGarmentTypes.length > 1) {
                s.push('image-distribution');
            }
            if (this.selectedGarmentTypes.length === 1 || this.imageDistribution === 'single') {
                s.push('artwork-upload');
            }
            this.selectedGarmentTypes.forEach(g => {
                s.push('print-method-' + g.key);
                s.push('color-' + g.key);
            });
            s.push('completion-date', 'extra-notes', 'shipping-address', 'confirm-submit');
            return s;
        },
        get currentStepName() { return this.visibleSteps[this.step - 1] ?? ''; },
        get totalSteps()      { return this.visibleSteps.length; },
        get currentGarmentKey() {
            const n = this.currentStepName;
            if (n.startsWith('print-method-')) return n.slice('print-method-'.length);
            if (n.startsWith('color-'))        return n.slice('color-'.length);
            return null;
        },
        get currentGarmentLabel() {
            const key = this.currentGarmentKey;
            if (!key) return '';
            const g = this.selectedGarmentTypes.find(g => g.key === key);
            return g ? g.label : '';
        },
        get currentStepTitle() {
            const n = this.currentStepName;
            const map = {
                'request-type':       'Request Details',
                'dtf-upload':         'DTF File Upload',
                'dtf-type-selection': 'DTF Type Selection',
                'dtf-quantity':       'Quantities & Pricing',
                'artwork-upload':     'Artwork Upload',
                'garment-selection':  'Garment Selection',
                'quantity':           'Quantity & Sizing',
                'image-distribution': 'Artwork — One Design or Individual?',
                'completion-date':    'Desired Completion Date',
                'extra-notes':        'Extra Notes',
                'shipping-address':   'Shipping Address',
                'confirm-submit':     'Review & Submit'
            };
            if (map[n]) return map[n];
            const lbl = this.currentGarmentLabel;
            if (n.startsWith('print-method-')) return 'Print Method \u2014 ' + lbl;
            if (n.startsWith('color-'))        return 'Color Selection \u2014 ' + lbl;
            return '';
        },
        get filteredColorsForGarment() {
            const key = this.currentGarmentKey;
            if (!key) return [];
            const input = (this.colorInputs[key] || '').trim();
            if (!input) return [];
            const q = input.toLowerCase();
            const sel = this.selectedColorsByGarment[key] || [];
            return this.colorSuggestions.filter(c => c.toLowerCase().includes(q) && !sel.includes(c));
        },
        get rushActive()       { return this.isRush === true || this.isRushDelivery === true; },
        get contactFirstName() { return this.contactName.trim().split(' ')[0] || 'there'; },
        get stepValid() {
            const s = this.currentStepName;
            if (s === 'request-type') {
                return this.requestType !== '' &&
                       (this.requestType !== 'company' || this.companyName.trim() !== '') &&
                       this.isRush !== null;
            }
            if (s === 'dtf-upload') {
                if (this.dtfItems && this.dtfItems.length > 0) return true;
                return this.dtfFileName ? true : this.hasDtf !== null;
            }
            if (s === 'dtf-type-selection') {
                return Object.values(this.dtfTypes).some(v => v);
            }
            if (s === 'dtf-quantity') {
                if (this.selectedDtfTypes.length === 0) return false;
                return this.selectedDtfTypes.every(t => {
                    const q = this.dtfQuantities[t.key];
                    return q && q.tier !== '' && parseInt(q.qty) > 0;
                });
            }
            if (s === 'garment-selection') {
                return Object.values(this.garments).some(v => v);
            }
            if (s === 'quantity') {
                return this.selectedGarmentTypes.some(g => {
                    if (g.key === 'beanie') {
                        return (this.quantities['beanie-count'] || 0) > 0;
                    }
                    if (g.key === 'baseballCap') {
                        return (this.quantities['baseballCap-adult'] || 0) > 0
                            || (this.quantities['baseballCap-youth'] || 0) > 0;
                    }
                    return this.genders.some(gender =>
                        this.sizes.some(size => (this.quantities[g.key + '-' + gender.key + '-' + size] || 0) > 0)
                    );
                });
            }
            if (s === 'image-distribution') {
                return this.imageDistribution !== null;
            }
            if (s === 'artwork-upload') {
                return this.artworkFileName ? true : this.hasArtwork !== null;
            }
            if (s.startsWith('print-method-')) {
                const key = this.currentGarmentKey;
                const method = this.printMethods[key];
                if (!method) return false;
                if (method === 'traditional') return true;
                if (method === 'specialty')   return !!this.specialtyTypeByGarment[key];
                return false;
            }
            if (s.startsWith('color-')) {
                return (this.selectedColorsByGarment[this.currentGarmentKey] || []).length > 0;
            }
            if (s === 'completion-date') {
                return this.completionDate !== '' && (this.isRush === true || this.isRushDelivery !== null);
            }
            if (s === 'shipping-address') {
                return this.contactName.trim() !== ''
                    && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.contactEmail)
                    && this.contactPhone.replace(/\D/g,'').length >= 10
                    && this.address1.trim() !== ''
                    && this.city.trim() !== ''
                    && this.state.trim() !== ''
                    && this.zip.trim() !== '';
            }
            return true;
        },

        /* ── Methods ──────────────────────────────────────── */
        open()  {
            this.isOpen = true; this.step = 1;
            this.showConfirmation = false; this.showCloseConfirm = false;
            document.body.style.overflow = 'hidden';
        },
        close() {
            this.isOpen = false; this.step = 1;
            this.showConfirmation = false; this.showCloseConfirm = false;
            document.body.style.overflow = '';
            this.$dispatch('modal-closed', { name: this.modalName });
        },
        next()   { if (this.stepValid && this.step < this.totalSteps) this.step++; },
        prev()   { if (this.step > 1) this.step--; },
        async finish() {
            if (this.submitting) return;
            this.submitting  = true;
            this.submitError = false;
            try {
                const csrfMeta = document.querySelector('meta[name="csrf-token"]');
                const res = await fetch('/custom-order/submit', {
                    method:  'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept':       'application/json',
                        'X-CSRF-TOKEN': csrfMeta ? csrfMeta.content : '',
                    },
                    body: JSON.stringify(this.buildPayload()),
                });
                const data = await res.json();
                if (!res.ok) throw new Error(data.message || 'Submission failed');
                Alpine.store('dtfCart').clear();
                this.checkoutUrl    = data.checkoutUrl || '';
                this.orderReference = data.reference   || '';
                this.showConfirmation = true;
                this.$dispatch('wizard-done', { name: this.modalName });
            } catch (err) {
                this.submitError = true;
                console.error('Wizard submit error:', err);
            } finally {
                this.submitting = false;
            }
        },

        buildPayload() {
            return {
                orderType:      this.dtfMode ? 'dtf' : 'apparel',
                requestType:    this.requestType,
                companyName:    this.companyName,
                isRush:         this.isRush,
                /* DTF path */
                dtfItems:       this.dtfItems,
                dtfFileName:    this.dtfFileName,
                dtfTypes:       this.dtfMode && !this.dtfItems.length ? this.dtfTypes       : null,
                dtfQuantities:  this.dtfMode && !this.dtfItems.length ? this.dtfQuantities  : null,
                /* Apparel path */
                garments:              !this.dtfMode ? this.garments               : null,
                quantities:            !this.dtfMode ? this.quantities             : null,
                printMethods:          !this.dtfMode ? this.printMethods           : null,
                specialtyTypes:        !this.dtfMode ? this.specialtyTypeByGarment : null,
                colorsByGarment:       !this.dtfMode ? this.selectedColorsByGarment: null,
                imageDistribution:     this.imageDistribution,
                artworkFileName:       this.artworkFileName,
                /* Shared */
                completionDate:   this.completionDate,
                isRushDelivery:   this.isRushDelivery,
                extraNotes:       this.extraNotes,
                /* Contact & shipping */
                contactName:  this.contactName,
                contactEmail: this.contactEmail,
                contactPhone: this.contactPhone,
                address1:     this.address1,
                address2:     this.address2,
                city:         this.city,
                state:        this.state,
                zip:          this.zip,
            };
        },

        backToContactModal() {
            this.close();
            this.$nextTick(() => window.dispatchEvent(new CustomEvent('open-contact-modal')));
        },

        normalizeState() {
            const v = this.state.trim();
            if (!v) return;
            const upper = v.toUpperCase();
            if (Object.values(this.stateMap).includes(upper)) { this.state = upper; return; }
            const match = Object.keys(this.stateMap).find(n => n.toLowerCase() === v.toLowerCase());
            if (match) this.state = this.stateMap[match];
        },

        updateDtfQty(key, field, val) {
            const q = Object.assign({}, this.dtfQuantities[key]);
            q[field] = val;
            this.dtfQuantities = Object.assign({}, this.dtfQuantities, { [key]: q });
        },

        /* ── Per-garment color methods ─────────────────────── */
        addColor(c) {
            const key = this.currentGarmentKey;
            if (!key) return;
            const cur = this.selectedColorsByGarment[key] || [];
            if (!cur.includes(c)) {
                this.selectedColorsByGarment = Object.assign({}, this.selectedColorsByGarment, { [key]: [...cur, c] });
            }
            this.colorInputs = Object.assign({}, this.colorInputs, { [key]: '' });
            this.colorFocusIdx = -1;
        },
        removeColor(c) {
            const key = this.currentGarmentKey;
            if (!key) return;
            const cur = this.selectedColorsByGarment[key] || [];
            this.selectedColorsByGarment = Object.assign({}, this.selectedColorsByGarment, { [key]: cur.filter(x => x !== c) });
        },
        addColorFromInput() {
            const key = this.currentGarmentKey;
            if (!key) return;
            const c = (this.colorInputs[key] || '').trim();
            if (c) this.addColor(c);
        },
        addFocusedColor() {
            if (this.filteredColorsForGarment.length === 0) { this.addColorFromInput(); return; }
            const idx = this.colorFocusIdx >= 0 ? this.colorFocusIdx : 0;
            if (this.filteredColorsForGarment[idx]) this.addColor(this.filteredColorsForGarment[idx]);
        },

        /* ── Quantity helpers ──────────────────────────────── */
        getQty(g, gender, size) { return this.quantities[g + '-' + gender + '-' + size] || ''; },
        setQty(g, gender, size, val) {
            const k = g + '-' + gender + '-' + size;
            const n = parseInt(val);
            const q = Object.assign({}, this.quantities);
            if (n > 0) q[k] = n; else delete q[k];
            this.quantities = q;
        },
        garmentQuantitySummary(gKey) {
            const g = this.selectedGarmentTypes.find(x => x.key === gKey);
            if (!g) return [];
            const results = [];
            if (gKey === 'beanie') {
                const qty = this.quantities['beanie-count'] || 0;
                if (qty > 0) results.push(qty + ' One Size');
                return results;
            }
            if (gKey === 'baseballCap') {
                const adult = this.quantities['baseballCap-adult'] || 0;
                const youth = this.quantities['baseballCap-youth'] || 0;
                if (adult > 0) results.push(adult + ' Adult');
                if (youth > 0) results.push(youth + ' Youth');
                return results;
            }
            this.genders.forEach(gender => {
                this.sizes.forEach(size => {
                    const qty = this.quantities[gKey + '-' + gender.key + '-' + size] || 0;
                    if (qty > 0) results.push(qty + ' ' + gender.label + ' ' + size);
                });
            });
            return results;
        }
    }"
    @open-modal.window="
        if ($event.detail.name === modalName) {
            const p = $event.detail.prefill || {};
            contactName  = p.name  || '';
            contactEmail = p.email || '';
            contactPhone = p.phone || '';
            dtfMode      = p.dtfMode !== undefined ? p.dtfMode : false;
            dtfFileName  = p.dtfFileName || '';
            dtfItems     = Array.isArray(p.dtfItems) ? p.dtfItems : [];
            hasDtf       = dtfFileName ? true : null;
            open();
        }
    "
    @close-modal.window="if ($event.detail.name === modalName) close()"
    @keydown.escape.window="if (isOpen) { if (showCloseConfirm) showCloseConfirm = false; else if (!showConfirmation) showCloseConfirm = true; }"
>
    {{-- ── Backdrop — teleported to <body> to escape any ancestor transforms ── --}}
    <template x-teleport="body">
    <div
        x-show="isOpen"
        x-cloak
        class="fixed inset-0 z-[9999] flex items-center justify-center p-4 bg-charcoal-dark/80 backdrop-blur-sm"
        role="dialog"
        aria-modal="true"
        aria-labelledby="crw-title"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        {{-- ── Panel ────────────────────────────────────────────────────── --}}
        <div
            :class="currentStepName === 'quantity' ? 'max-w-[58rem]' : 'max-w-[34rem]'"
            class="relative w-full max-h-[92dvh] flex flex-col bg-white shadow-2xl overflow-hidden"
            x-transition:enter="transition ease-out duration-220"
            x-transition:enter-start="opacity-0 scale-95 translate-y-4"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-2"
            @click.stop
        >
            {{-- Gold accent stripe --}}
            <div class="h-2 flex-shrink-0 bg-gold-gradient-horizontal" aria-hidden="true"></div>

            {{-- ── Header ──────────────────────────────────────────────── --}}
            <div class="flex items-start gap-3 px-5 py-4 flex-shrink-0 border-b-2 bg-linen border-sunburst">
                <div class="flex-1 min-w-0">
                    {{-- Rush badge --}}
                    <div x-show="rushActive" x-cloak class="flex items-center gap-1.5 mb-1.5">
                        <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-sunburst text-charcoal text-[11px] font-bold tracking-wide">
                            <svg class="w-3 h-3 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                            RUSH ORDER
                        </span>
                        <span class="text-xs text-sunburst-dark font-semibold">Rush Expediting Active</span>
                    </div>
                    <h2 id="crw-title" class="text-lg font-bold text-charcoal leading-tight" x-text="currentStepTitle"></h2>
                    <p class="text-xs text-charcoal-light mt-0.5">
                        Step <span x-text="step"></span> of <span x-text="totalSteps"></span>
                        &nbsp;·&nbsp;
                        <span x-show="dtfMode === true" x-cloak>DTF Transfers</span>
                        <span x-show="dtfMode !== true">Custom Apparel</span>
                    </p>
                </div>
                <button
                    type="button"
                    @click="showCloseConfirm = true"
                    class="flex items-center justify-center w-8 h-8 flex-shrink-0 text-charcoal-light hover:bg-linen-dark hover:text-charcoal transition-colors duration-150"
                    aria-label="Close wizard"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"
                         class="w-[1.125rem] h-[1.125rem]" aria-hidden="true">
                        <path d="M18 6 6 18M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- ── Body ─────────────────────────────────────────────────── --}}
            <div x-show="!showConfirmation" class="flex-1 px-5 py-5 overflow-y-auto overscroll-contain scrollbar-sunburst text-sm text-charcoal">

                {{-- ══ STEP 1: Request Details ═══════════════════════════════ --}}
                <div x-show="currentStepName === 'request-type'">
                    <div class="space-y-6">

                        <div>
                            <h3 class="text-sm font-semibold text-charcoal mb-3 text-center">
                                Is this a company or personal request? <span class="text-error">*</span>
                            </h3>
                            <div class="flex gap-6 justify-center">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="crw-request-type" value="company"
                                        @change="requestType = 'company'" :checked="requestType === 'company'"
                                        class="w-4 h-4 accent-sunburst">
                                    <span class="text-sm font-medium text-charcoal">Company</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="crw-request-type" value="personal"
                                        @change="requestType = 'personal'" :checked="requestType === 'personal'"
                                        class="w-4 h-4 accent-sunburst">
                                    <span class="text-sm font-medium text-charcoal">Personal</span>
                                </label>
                            </div>
                            <div x-show="requestType === 'company'" x-cloak class="mt-3">
                                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
                                    Company Name <span class="text-error">*</span>
                                </label>
                                <input
                                    type="text"
                                    x-model="companyName"
                                    placeholder="Enter company name…"
                                    class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors"
                                >
                            </div>
                        </div>

                        <div>
                            <h3 class="text-sm font-semibold text-charcoal mb-3 text-center">
                                Is this a rush request? <span class="text-error">*</span>
                            </h3>
                            <div class="flex gap-6 justify-center">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="crw-is-rush" value="yes"
                                        @change="isRush = true" :checked="isRush === true"
                                        class="w-4 h-4 accent-sunburst">
                                    <span class="text-sm font-medium text-charcoal">Yes</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="crw-is-rush" value="no"
                                        @change="isRush = false" :checked="isRush === false"
                                        class="w-4 h-4 accent-sunburst">
                                    <span class="text-sm font-medium text-charcoal">No</span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- ══ STEP 2 (DTF path): DTF File Upload ════════════════════ --}}
                <div x-show="currentStepName === 'dtf-upload'" x-cloak>

                    {{-- Case A: pre-loaded items from pricing table --}}
                    <div x-show="dtfItems && dtfItems.length > 0" x-cloak class="space-y-3">
                        <p class="text-xs text-charcoal-light">The following DTF files were attached during pricing selection:</p>
                        <template x-for="(item, idx) in dtfItems" :key="idx">
                            <div class="flex items-center gap-3 px-4 py-3 bg-sunburst/10 border border-sunburst/40">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" viewBox="0 0 64 64" aria-hidden="true">
                                    <path d="M6 14a4 4 0 0 1 4-4h14l6 6h24a4 4 0 0 1 4 4v26a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V14z" fill="#4A90D9" opacity="0.85"/>
                                    <path d="M6 24h52v20a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V24z" fill="#5BA8F0"/>
                                </svg>
                                <div class="min-w-0">
                                    <p class="text-xs font-semibold text-charcoal" x-text="item.type + ' — ' + item.size"></p>
                                    <p class="text-sm text-charcoal truncate" x-text="item.fileName || 'No file attached'"></p>
                                </div>
                            </div>
                        </template>
                        <p class="text-xs text-charcoal-light">All files noted — continue to the next step.</p>
                    </div>

                    {{-- Case B: single file attached from dropzone, no items --}}
                    <div x-show="(!dtfItems || dtfItems.length === 0) && dtfFileName" x-cloak class="space-y-4">
                        <div class="flex items-center gap-3 px-4 py-3 bg-sunburst/10 border border-sunburst/40">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" viewBox="0 0 64 64" aria-hidden="true">
                                <path d="M6 14a4 4 0 0 1 4-4h14l6 6h24a4 4 0 0 1 4 4v26a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V14z" fill="#4A90D9" opacity="0.85"/>
                                <path d="M6 24h52v20a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V24z" fill="#5BA8F0"/>
                            </svg>
                            <div class="min-w-0">
                                <p class="text-xs font-semibold text-charcoal">DTF file attached:</p>
                                <p class="text-sm text-charcoal truncate" x-text="dtfFileName"></p>
                            </div>
                        </div>
                        <p class="text-xs text-charcoal-light">Your PNG file has been noted and will be processed with your order. You can continue to the next step.</p>
                    </div>

                    {{-- Case C: no file yet — prompt user --}}
                    <div x-show="(!dtfItems || dtfItems.length === 0) && !dtfFileName" class="space-y-5">
                        <p class="text-xs text-charcoal-light">Would you like to upload your DTF PNG file now?</p>

                        <fieldset>
                            <legend class="block text-sm font-semibold text-charcoal mb-3 text-center">
                                Upload a DTF file? <span class="text-error">*</span>
                            </legend>
                            <div class="flex gap-6 justify-center">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="crw-has-dtf" :value="true" x-model="hasDtf"
                                           class="w-4 h-4 accent-sunburst cursor-pointer">
                                    <span class="text-sm font-medium text-charcoal">Yes</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="crw-has-dtf" :value="false" x-model="hasDtf"
                                           class="w-4 h-4 accent-sunburst cursor-pointer">
                                    <span class="text-sm font-medium text-charcoal">No</span>
                                </label>
                            </div>
                        </fieldset>

                        <div x-show="hasDtf === true" x-cloak class="space-y-2">
                            <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide">
                                Upload DTF PNG File
                            </label>
                            <input
                                type="file"
                                accept=".png"
                                @change="
                                    const f = $event.target.files[0];
                                    if (f) dtfFileName = f.name;
                                "
                                class="block w-full text-sm text-charcoal border border-linen-dark py-2 px-3 cursor-pointer file:mr-4 file:py-1.5 file:px-4 file:border-0 file:text-xs file:font-semibold file:bg-linen file:text-charcoal hover:file:bg-linen-dark"
                            >
                            <div x-show="dtfFileName" x-cloak class="text-xs text-charcoal-light">
                                Selected: <span class="font-semibold text-charcoal" x-text="dtfFileName"></span>
                            </div>
                            <p class="text-xs text-charcoal-lighter">Accepted: PNG only &mdash; 300 DPI minimum recommended &mdash; max 50 MB.</p>
                        </div>
                    </div>

                </div>

                {{-- ══ STEP (DTF path): DTF Type Selection ══════════════════ --}}
                <div x-show="currentStepName === 'dtf-type-selection'" x-cloak>
                    <p class="text-xs text-charcoal-light mb-4">
                        Select the DTF transfer type(s) you need.
                        <span class="text-error font-semibold">At least one required.</span>
                    </p>
                    <div class="space-y-3">
                        @php
                            $dtfTypeOptions = [
                                ['key' => 'neckTag',    'label' => 'Neck Tags',                      'hint' => '2″ × 2″ or 3″ × 3″ — fits within size'],
                                ['key' => 'chestImage', 'label' => 'Left / Right Chest',             'hint' => '3″–5″ wide — standard chest placement'],
                                ['key' => 'imageSize',  'label' => 'Image Sizes (5″ and above)',     'hint' => 'Full designs from 5″ × 5″ up to 12″ × 17″'],
                            ];
                        @endphp
                        @foreach($dtfTypeOptions as $opt)
                        <div class="flex items-start justify-between gap-4 px-4 py-4 border border-linen-dark">
                            <div>
                                <p class="text-sm font-bold text-charcoal">{{ $opt['label'] }}</p>
                                <p class="text-xs text-charcoal-light mt-0.5">{{ $opt['hint'] }}</p>
                            </div>
                            <button
                                type="button"
                                role="switch"
                                :aria-checked="dtfTypes.{{ $opt['key'] }}.toString()"
                                @click="dtfTypes.{{ $opt['key'] }} = !dtfTypes.{{ $opt['key'] }}"
                                :class="dtfTypes.{{ $opt['key'] }} ? 'bg-sunburst' : 'bg-linen-dark'"
                                class="relative flex-shrink-0 w-11 h-6 overflow-hidden rounded-full transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-sunburst focus:ring-offset-1 mt-0.5"
                            >
                                <span
                                    :class="dtfTypes.{{ $opt['key'] }} ? 'translate-x-6' : 'translate-x-1'"
                                    class="absolute left-0 top-1 w-4 h-4 bg-white rounded-full shadow transition-transform duration-200"
                                ></span>
                            </button>
                        </div>
                        @endforeach
                    </div>
                    <div x-show="selectedDtfTypes.length > 0" x-cloak class="mt-5 pt-4 border-t border-linen-dark">
                        <p class="text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-2">Selected</p>
                        <div class="flex flex-wrap gap-1.5">
                            <template x-for="t in selectedDtfTypes" :key="t.key">
                                <span class="px-3 py-1.5 border border-linen-dark bg-white text-charcoal text-xs font-semibold" x-text="t.label"></span>
                            </template>
                        </div>
                    </div>
                </div>

                {{-- ══ STEP (DTF path): DTF Quantity & Tier ══════════════════ --}}
                <div x-show="currentStepName === 'dtf-quantity'" x-cloak>
                    <p class="text-xs text-charcoal-light mb-5">
                        For each transfer type, choose a quantity tier and enter your quantity.
                        <span class="text-error font-semibold">All fields required.</span>
                    </p>
                    <div class="space-y-5">
                        <template x-for="t in selectedDtfTypes" :key="t.key">
                            <div class="border border-linen-dark">
                                <div class="px-4 py-2.5 bg-linen border-b border-linen-dark">
                                    <p class="text-sm font-bold text-charcoal" x-text="t.label"></p>
                                </div>
                                <div class="px-4 py-4 space-y-3">
                                    <div>
                                        <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
                                            Quantity Tier <span class="text-error">*</span>
                                        </label>
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                                            @foreach(['1 – 14 pcs', '15 – 49 pcs', '50 – 99 pcs', '100 – 249 pcs', '250+ pcs'] as $tier)
                                            <label
                                                class="flex items-center gap-2 px-3 py-2.5 border cursor-pointer transition-colors duration-150"
                                                :class="dtfQuantities[t.key].tier === '{{ $tier }}' ? 'border-sunburst bg-sunburst/5' : 'border-linen-dark bg-white hover:border-sunburst/40'"
                                            >
                                                <input type="radio"
                                                    :name="'dtf-tier-' + t.key"
                                                    value="{{ $tier }}"
                                                    :checked="dtfQuantities[t.key].tier === '{{ $tier }}'"
                                                    @change="updateDtfQty(t.key, 'tier', '{{ $tier }}')"
                                                    class="w-4 h-4 accent-sunburst flex-shrink-0">
                                                <span class="text-sm font-semibold text-charcoal">{{ $tier }}</span>
                                            </label>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <label class="text-xs font-semibold text-charcoal-light uppercase tracking-wide whitespace-nowrap">
                                            Quantity <span class="text-error">*</span>
                                        </label>
                                        <input
                                            type="number"
                                            min="1"
                                            :value="dtfQuantities[t.key].qty"
                                            @input="updateDtfQty(t.key, 'qty', $event.target.value)"
                                            placeholder="0"
                                            class="w-24 text-center text-sm border border-linen-dark py-2 focus:outline-none focus:border-sunburst bg-white text-charcoal transition-colors"
                                        >
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                {{-- ══ STEP (Apparel path): Garment Selection ════════════════ --}}
                <div x-show="currentStepName === 'garment-selection'" x-cloak>
                    <p class="text-xs text-charcoal-light mb-4">Select all applicable garment types. <span class="text-error font-semibold">At least one required.</span></p>
                    @php
                        $garmentList = [
                            ['key' => 'crewNeck',   'label' => 'Crew Necks'],
                            ['key' => 'vNeck',      'label' => 'V-Necks'],
                            ['key' => 'poloLong',   'label' => 'Polo (Long Sleeve)'],
                            ['key' => 'poloShort',  'label' => 'Polo (Short Sleeve)'],
                            ['key' => 'tankTop',    'label' => 'Tank Tops'],
                            ['key' => 'beanie',     'label' => 'Beanies'],
                            ['key' => 'scoopNeck',  'label' => 'Scoop Neck'],
                            ['key' => 'baseballCap','label' => 'Baseball Caps'],
                            ['key' => 'sweatshirt', 'label' => 'Sweatshirts'],
                            ['key' => 'hoodie',     'label' => 'Hoodies'],
                            ['key' => 'zipHoodie',  'label' => 'Zip-Up Hoodies'],
                        ];
                    @endphp
                    <div class="grid grid-cols-3 gap-2">
                        @foreach($garmentList as $g)
                        <div class="flex items-center justify-between gap-3 px-4 py-3 border border-linen-dark">
                            <span class="text-sm font-semibold text-charcoal">{{ $g['label'] }}</span>
                            <button
                                type="button"
                                role="switch"
                                :aria-checked="garments.{{ $g['key'] }}.toString()"
                                @click="garments.{{ $g['key'] }} = !garments.{{ $g['key'] }}"
                                :class="garments.{{ $g['key'] }} ? 'bg-sunburst' : 'bg-linen-dark'"
                                class="relative flex-shrink-0 w-11 h-6 overflow-hidden rounded-full transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-sunburst focus:ring-offset-1"
                            >
                                <span
                                    :class="garments.{{ $g['key'] }} ? 'translate-x-6' : 'translate-x-1'"
                                    class="absolute left-0 top-1 w-4 h-4 bg-white rounded-full shadow transition-transform duration-200"
                                ></span>
                            </button>
                        </div>
                        @endforeach
                    </div>

                    <div x-show="selectedGarmentTypes.length > 0" x-cloak class="mt-5 pt-4 border-t border-linen-dark">
                        <p class="text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-2">Selected</p>
                        <div class="flex flex-wrap gap-1.5">
                            <template x-for="g in selectedGarmentTypes" :key="g.key">
                                <span class="px-3 py-1.5 border border-linen-dark bg-white text-charcoal text-xs font-semibold" x-text="g.label"></span>
                            </template>
                        </div>
                    </div>
                </div>

                {{-- ══ STEP (Apparel path): Image Distribution ═══════════════ --}}
                <div x-show="currentStepName === 'image-distribution'" x-cloak>
                    <p class="text-xs text-charcoal-light mb-5">
                        You have selected multiple garment types.
                        <span class="text-error font-semibold">One answer required.</span>
                    </p>
                    <div class="space-y-3">
                        <label
                            class="flex items-start gap-3 px-4 py-4 border cursor-pointer transition-colors duration-150"
                            :class="imageDistribution === 'single' ? 'border-sunburst bg-sunburst/5' : 'border-linen-dark bg-white hover:border-sunburst/40'"
                        >
                            <input type="radio" name="crw-image-dist" value="single"
                                x-model="imageDistribution"
                                class="w-4 h-4 flex-shrink-0 accent-sunburst mt-0.5">
                            <div>
                                <p class="text-sm font-bold text-charcoal">One design for all garment types</p>
                                <p class="text-xs text-charcoal-light mt-0.5">You'll upload a single artwork file that applies to all garments</p>
                            </div>
                        </label>
                        <label
                            class="flex items-start gap-3 px-4 py-4 border cursor-pointer transition-colors duration-150"
                            :class="imageDistribution === 'individual' ? 'border-sunburst bg-sunburst/5' : 'border-linen-dark bg-white hover:border-sunburst/40'"
                        >
                            <input type="radio" name="crw-image-dist" value="individual"
                                x-model="imageDistribution"
                                class="w-4 h-4 flex-shrink-0 accent-sunburst mt-0.5">
                            <div>
                                <p class="text-sm font-bold text-charcoal">Individual design per garment type</p>
                                <p class="text-xs text-charcoal-light mt-0.5">Each garment type gets its own artwork — you'll describe it per garment in the notes</p>
                            </div>
                        </label>
                    </div>
                </div>

                {{-- ══ STEP (Apparel path): Artwork Upload ════════════════════ --}}
                <div x-show="currentStepName === 'artwork-upload'" x-cloak>
                    <div class="space-y-4">
                        <p class="text-xs text-charcoal-light">Upload your design file now, or skip and describe it in the notes step.</p>

                        {{-- Attached state --}}
                        <div x-show="artworkFileName" x-cloak class="space-y-3">
                            <div class="flex items-center gap-3 px-4 py-3 bg-sunburst/10 border border-sunburst/40">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" viewBox="0 0 64 64" aria-hidden="true">
                                    <path d="M6 14a4 4 0 0 1 4-4h14l6 6h24a4 4 0 0 1 4 4v26a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V14z" fill="#4A90D9" opacity="0.85"/>
                                    <path d="M6 24h52v20a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V24z" fill="#5BA8F0"/>
                                </svg>
                                <div class="min-w-0 flex-1">
                                    <p class="text-xs font-semibold text-charcoal">Artwork file attached:</p>
                                    <p class="text-sm text-charcoal truncate" x-text="artworkFileName"></p>
                                </div>
                                <button type="button"
                                    @click="artworkFileName = ''; hasArtwork = null"
                                    class="text-xs text-charcoal-light underline hover:text-charcoal transition-colors flex-shrink-0">
                                    Remove
                                </button>
                            </div>
                        </div>

                        {{-- File picker --}}
                        <div x-show="!artworkFileName" class="space-y-2">
                            <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide">
                                Upload Artwork File <span class="font-normal normal-case text-charcoal-lighter">(optional)</span>
                            </label>
                            <input
                                type="file"
                                accept=".pdf,.ai,.eps,.png,.jpg,.jpeg,.svg,.psd"
                                @change="
                                    const f = $event.target.files[0];
                                    if (f) { artworkFileName = f.name; hasArtwork = true; }
                                "
                                class="block w-full text-sm text-charcoal border border-linen-dark py-2 px-3 cursor-pointer file:mr-4 file:py-1.5 file:px-4 file:border-0 file:text-xs file:font-semibold file:bg-linen file:text-charcoal hover:file:bg-linen-dark"
                            >
                            <p class="text-xs text-charcoal-lighter">Accepted: PDF, AI, EPS, PNG, JPG, SVG, PSD &mdash; max 50 MB.</p>
                        </div>

                        {{-- Skip option (only when no file selected) --}}
                        <div x-show="!artworkFileName && hasArtwork !== false" class="text-center">
                            <button type="button"
                                @click="hasArtwork = false"
                                class="text-xs text-charcoal-light underline hover:text-charcoal transition-colors">
                                No artwork yet — I'll describe my design in the notes
                            </button>
                        </div>

                        {{-- Skipped state --}}
                        <div x-show="hasArtwork === false && !artworkFileName" x-cloak
                             class="flex items-center gap-3 px-4 py-3 bg-linen border border-linen-dark">
                            <p class="text-xs text-charcoal-light flex-1">No file provided — you can describe your design in the Extra Notes step.</p>
                            <button type="button"
                                @click="hasArtwork = null"
                                class="text-xs text-sunburst-dark underline flex-shrink-0 hover:text-sunburst transition-colors">
                                Change
                            </button>
                        </div>

                    </div>
                </div>

                {{-- ══ PER-GARMENT: Print Method ══════════════════════════════ --}}
                <div x-show="currentStepName.startsWith('print-method-')" x-cloak>
                    <p class="text-xs text-charcoal-light mb-4">
                        Select the print method for <strong x-text="currentGarmentLabel"></strong>.
                        <span class="text-error font-semibold">Required.</span>
                    </p>

                    {{-- Traditional --}}
                    <div class="border border-linen-dark mb-3">
                        <div class="flex items-center justify-center gap-3 p-4">
                            <input type="radio" name="crw-print-method"
                                :id="'crw-pm-trad-' + currentGarmentKey"
                                :checked="printMethods[currentGarmentKey] === 'traditional'"
                                @change="printMethods = Object.assign({}, printMethods, { [currentGarmentKey]: 'traditional' })"
                                class="w-4 h-4 flex-shrink-0 accent-sunburst cursor-pointer">
                            <div class="text-center">
                                <label :for="'crw-pm-trad-' + currentGarmentKey" class="block text-sm font-bold text-charcoal cursor-pointer mb-0.5">Traditional Printing</label>
                                <p class="text-xs text-charcoal-light">HTV &nbsp;·&nbsp; Digital &nbsp;·&nbsp; Screenprint</p>
                            </div>
                        </div>
                    </div>

                    {{-- Specialty --}}
                    <div class="border border-linen-dark">
                        <div class="flex items-center justify-center gap-3 p-4"
                            :class="printMethods[currentGarmentKey] === 'specialty' ? 'border-b border-linen-dark' : ''">
                            <input type="radio" name="crw-print-method"
                                :id="'crw-pm-spec-' + currentGarmentKey"
                                :checked="printMethods[currentGarmentKey] === 'specialty'"
                                @change="printMethods = Object.assign({}, printMethods, { [currentGarmentKey]: 'specialty' })"
                                class="w-4 h-4 flex-shrink-0 accent-sunburst cursor-pointer">
                            <label :for="'crw-pm-spec-' + currentGarmentKey" class="text-sm font-bold text-charcoal cursor-pointer">Specialty Printing</label>
                        </div>
                        <div x-show="printMethods[currentGarmentKey] === 'specialty'" x-cloak class="p-4">
                            @php
                                $specialtyItems = [
                                    ['key' => 'vinyl',       'label' => 'Vinyl Shirts'],
                                    ['key' => 'rhinestone',  'label' => 'Rhinestone'],
                                    ['key' => 'glitter',     'label' => 'Glitter Shirts'],
                                    ['key' => 'foil',        'label' => 'Foil Shirts'],
                                    ['key' => 'glowDark',    'label' => 'Glow In The Dark'],
                                    ['key' => 'flock',       'label' => 'Flock Shirts'],
                                    ['key' => 'reflective',  'label' => 'Reflective Shirts'],
                                    ['key' => 'holographic', 'label' => 'Holographic'],
                                    ['key' => 'brick',       'label' => 'Brick Shirts'],
                                    ['key' => 'pattern',     'label' => 'Pattern Shirts'],
                                    ['key' => 'embroidery',  'label' => 'Embroidery'],
                                    ['key' => 'picture',     'label' => 'Picture Shirts'],
                                ];
                            @endphp
                            <div class="grid grid-cols-3 gap-2">
                                @foreach($specialtyItems as $item)
                                <label
                                    class="flex items-center justify-between gap-2 cursor-pointer px-3 py-3 border transition-colors duration-150"
                                    :class="specialtyTypeByGarment[currentGarmentKey] === '{{ $item['key'] }}' ? 'border-sunburst bg-sunburst/5' : 'border-linen-dark bg-white hover:border-sunburst/40'"
                                >
                                    <span class="text-sm font-semibold text-charcoal leading-tight">{{ $item['label'] }}</span>
                                    <input type="radio" name="crw-specialty-type"
                                        :checked="specialtyTypeByGarment[currentGarmentKey] === '{{ $item['key'] }}'"
                                        @change="specialtyTypeByGarment = Object.assign({}, specialtyTypeByGarment, { [currentGarmentKey]: '{{ $item['key'] }}' })"
                                        class="w-4 h-4 accent-sunburst flex-shrink-0">
                                </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ══ PER-GARMENT: Color Selection ═══════════════════════════ --}}
                <div x-show="currentStepName.startsWith('color-')" x-cloak>
                    <div class="space-y-4">
                        <p class="text-xs text-charcoal-light">
                            Select colors for <strong x-text="currentGarmentLabel"></strong>.
                            <span class="text-error font-semibold">At least one required.</span>
                        </p>

                        <div>
                            <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
                                Add a Color <span class="text-error">*</span>
                            </label>
                            <div class="flex gap-2">
                                <input
                                    type="text"
                                    :value="colorInputs[currentGarmentKey] || ''"
                                    @input="colorInputs = Object.assign({}, colorInputs, { [currentGarmentKey]: $event.target.value }); colorFocusIdx = -1"
                                    @keydown.enter.prevent="addFocusedColor()"
                                    @keydown.tab.prevent="if (filteredColorsForGarment.length > 0) addFocusedColor(); else addColorFromInput()"
                                    @keydown.arrow-down.prevent="colorFocusIdx = Math.min(colorFocusIdx + 1, filteredColorsForGarment.length - 1)"
                                    @keydown.arrow-up.prevent="colorFocusIdx = Math.max(colorFocusIdx - 1, 0)"
                                    placeholder="e.g. Navy Blue, Red, White…"
                                    class="flex-1 px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors"
                                >
                                <button type="button" @click="addColorFromInput()"
                                    class="px-8 py-2.5 bg-charcoal text-white text-xs font-semibold hover:bg-charcoal-dark transition-colors flex-shrink-0">
                                    Add
                                </button>
                            </div>
                            {{-- Inline suggestions --}}
                            <div x-show="filteredColorsForGarment.length > 0" class="mt-1 border border-linen-dark bg-white max-h-[8rem] overflow-y-auto scrollbar-sunburst">
                                <template x-for="(color, cIdx) in filteredColorsForGarment" :key="color">
                                    <button type="button" @click="addColor(color)"
                                        :class="colorFocusIdx === cIdx ? 'bg-linen' : ''"
                                        class="w-full text-left px-3 py-2 text-sm text-charcoal hover:bg-linen transition-colors border-b border-linen-dark last:border-0"
                                        x-text="color">
                                    </button>
                                </template>
                            </div>
                        </div>

                        <div x-show="(selectedColorsByGarment[currentGarmentKey] || []).length > 0" x-cloak>
                            <p class="text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-2">Selected Colors</p>
                            <div class="flex flex-wrap gap-2">
                                <template x-for="color in (selectedColorsByGarment[currentGarmentKey] || [])" :key="color">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-charcoal text-white text-xs font-semibold">
                                        <span x-text="color"></span>
                                        <button type="button" @click="removeColor(color)"
                                            class="text-white/60 hover:text-white transition-colors"
                                            :aria-label="'Remove ' + color">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                <path d="M18 6 6 18M6 6l12 12"/>
                                            </svg>
                                        </button>
                                    </span>
                                </template>
                            </div>
                        </div>

                        <div x-show="!(selectedColorsByGarment[currentGarmentKey] || []).length" class="py-6 text-center text-charcoal-lighter text-sm">
                            No colors added yet — search and select above.
                        </div>
                    </div>
                </div>

                {{-- ══ STEP (Apparel path): Quantity & Sizing ════════════════ --}}
                <div x-show="currentStepName === 'quantity'" x-cloak>
                    <div class="space-y-5">
                        <p class="text-xs text-charcoal-light">
                            Enter quantities for all selected garments.
                            <span class="text-error font-semibold">At least one required.</span>
                        </p>

                        <template x-for="g in selectedGarmentTypes" :key="g.key">
                            <div class="border border-linen-dark">
                                <div class="px-3 py-2 bg-linen border-b border-linen-dark">
                                    <h4 class="text-sm font-bold text-charcoal" x-text="g.label"></h4>
                                </div>

                                {{-- Beanies: single one-size quantity input --}}
                                <template x-if="g.key === 'beanie'">
                                    <div class="px-4 py-4 flex items-center gap-4">
                                        <label class="text-xs font-semibold text-charcoal-light uppercase tracking-wide whitespace-nowrap">
                                            One Size <span class="text-error">*</span>
                                        </label>
                                        <input
                                            type="number"
                                            min="0"
                                            :value="quantities['beanie-count'] || ''"
                                            @input="
                                                const n = parseInt($event.target.value);
                                                const q = Object.assign({}, quantities);
                                                if (n > 0) q['beanie-count'] = n; else delete q['beanie-count'];
                                                quantities = q;
                                            "
                                            class="w-20 text-center text-sm border border-linen-dark py-1.5 focus:outline-none focus:border-sunburst bg-white text-charcoal transition-colors"
                                            placeholder="0"
                                        >
                                        <span class="text-xs text-charcoal-light">Enter total quantity needed</span>
                                    </div>
                                </template>

                                {{-- Baseball Caps: Adult or Youth only --}}
                                <template x-if="g.key === 'baseballCap'">
                                    <div class="px-4 py-4 flex flex-wrap items-center gap-6">
                                        <div class="flex items-center gap-3">
                                            <label class="text-xs font-semibold text-charcoal-light uppercase tracking-wide whitespace-nowrap">Adult</label>
                                            <input
                                                type="number"
                                                min="0"
                                                :value="quantities['baseballCap-adult'] || ''"
                                                @input="
                                                    const n = parseInt($event.target.value);
                                                    const q = Object.assign({}, quantities);
                                                    if (n > 0) q['baseballCap-adult'] = n; else delete q['baseballCap-adult'];
                                                    quantities = q;
                                                "
                                                class="w-20 text-center text-sm border border-linen-dark py-1.5 focus:outline-none focus:border-sunburst bg-white text-charcoal transition-colors"
                                                placeholder="0"
                                            >
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <label class="text-xs font-semibold text-charcoal-light uppercase tracking-wide whitespace-nowrap">Youth</label>
                                            <input
                                                type="number"
                                                min="0"
                                                :value="quantities['baseballCap-youth'] || ''"
                                                @input="
                                                    const n = parseInt($event.target.value);
                                                    const q = Object.assign({}, quantities);
                                                    if (n > 0) q['baseballCap-youth'] = n; else delete q['baseballCap-youth'];
                                                    quantities = q;
                                                "
                                                class="w-20 text-center text-sm border border-linen-dark py-1.5 focus:outline-none focus:border-sunburst bg-white text-charcoal transition-colors"
                                                placeholder="0"
                                            >
                                        </div>
                                    </div>
                                </template>

                                {{-- Standard garments: full size matrix --}}
                                <template x-if="g.key !== 'beanie' && g.key !== 'baseballCap'">
                                    <div class="overflow-x-auto scrollbar-sunburst">
                                        <table class="min-w-full text-xs">
                                            <thead>
                                                <tr class="border-b border-linen-dark">
                                                    <th class="px-3 py-2 text-left font-semibold text-charcoal-light bg-linen sticky left-0 z-10 min-w-[5rem]">Gender</th>
                                                    @foreach(['XS','S','M','L','XL','2XL','3XL','4XL','5XL','6XL'] as $sz)
                                                    <th class="px-2 py-2 text-center font-semibold text-charcoal-light bg-linen min-w-[3rem]">{{ $sz }}</th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <template x-for="gender in genders" :key="gender.key">
                                                    <tr class="border-b border-linen-dark last:border-0">
                                                        <td class="px-3 py-1.5 font-semibold text-charcoal bg-white sticky left-0 z-10 whitespace-nowrap" x-text="gender.label"></td>
                                                        <template x-for="sz in sizes" :key="sz">
                                                            <td class="px-1 py-1.5 text-center">
                                                                <input
                                                                    type="number"
                                                                    min="0"
                                                                    :value="getQty(g.key, gender.key, sz)"
                                                                    @input="setQty(g.key, gender.key, sz, $event.target.value)"
                                                                    class="w-12 text-center text-xs border border-linen-dark py-1 focus:outline-none focus:border-sunburst bg-white text-charcoal transition-colors"
                                                                    placeholder="0"
                                                                >
                                                            </td>
                                                        </template>
                                                    </tr>
                                                </template>
                                            </tbody>
                                        </table>
                                    </div>
                                </template>
                            </div>
                        </template>

                        {{-- Order summary --}}
                        <div x-show="Object.keys(quantities).length > 0" x-cloak class="pt-4 border-t border-linen-dark">
                            <p class="text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-2">Order Summary</p>
                            <div class="flex flex-wrap gap-1.5">
                                <template x-for="g in selectedGarmentTypes" :key="g.key">
                                    <template x-for="(item, i) in garmentQuantitySummary(g.key)" :key="g.key + i">
                                        <span class="px-2 py-1 bg-linen text-charcoal text-xs border border-linen-dark" x-text="item + ' ' + g.label"></span>
                                    </template>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ══ Completion Date ═════════════════════════════════════════ --}}
                <div x-show="currentStepName === 'completion-date'" x-cloak>
                    <div class="space-y-4">

                        <div x-show="isRush === true" x-cloak
                            class="flex items-center gap-3 px-4 py-3 bg-sunburst/10 border-l-4 border-sunburst">
                            <svg class="w-5 h-5 text-sunburst flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                            </svg>
                            <p class="text-sm font-bold text-charcoal">Rush Order — Expediting Active</p>
                        </div>

                        <div x-show="isRush !== true" x-cloak class="grid grid-cols-2 gap-6 items-center">
                            <div class="text-center">
                                <label class="block text-xs font-semibold text-charcoal-light mb-1.5">
                                    Rush delivery? <span class="text-error">*</span>
                                </label>
                                <div class="flex gap-6 pt-1 justify-center">
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input type="radio" name="crw-rush-delivery" value="yes"
                                            @change="isRushDelivery = true" :checked="isRushDelivery === true"
                                            class="w-4 h-4 accent-sunburst">
                                        <span class="text-sm font-medium text-charcoal">Yes</span>
                                    </label>
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input type="radio" name="crw-rush-delivery" value="no"
                                            @change="isRushDelivery = false" :checked="isRushDelivery === false"
                                            class="w-4 h-4 accent-sunburst">
                                        <span class="text-sm font-medium text-charcoal">No</span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-charcoal-light mb-1.5">
                                    Desired Completion Date <span class="text-error">*</span>
                                </label>
                                <input type="date" x-model="completionDate"
                                    @click="if ($el.showPicker) $el.showPicker()"
                                    :class="rushActive ? 'border-sunburst ring-1 ring-sunburst/30' : 'border-linen-dark'"
                                    class="w-full px-3 py-2.5 text-sm border focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal transition-colors cursor-pointer">
                            </div>
                        </div>

                        <div x-show="isRush === true" x-cloak>
                            <label class="block text-xs font-semibold text-charcoal-light mb-1.5">
                                Desired Completion Date <span class="text-error">*</span>
                            </label>
                            <input type="date" x-model="completionDate"
                                @click="if ($el.showPicker) $el.showPicker()"
                                class="w-full px-3 py-2.5 text-sm border border-sunburst ring-1 ring-sunburst/30 focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal transition-colors cursor-pointer">
                        </div>

                    </div>
                </div>

                {{-- ══ Extra Notes ══════════════════════════════════════════════ --}}
                <div x-show="currentStepName === 'extra-notes'" x-cloak>
                    <div class="space-y-3">
                        <p class="text-xs text-charcoal-light">Include any additional details — artwork requirements, special instructions, references, etc. (optional)</p>
                        <textarea x-model="extraNotes" rows="8"
                            placeholder="Add any extra notes, instructions, or details about your custom order…"
                            class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors resize-y"
                        ></textarea>
                    </div>
                </div>

                {{-- ══ Shipping Address ════════════════════════════════════════ --}}
                <div x-show="currentStepName === 'shipping-address'" x-cloak>
                    <div class="space-y-4">

                        <div>
                            <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
                                Full Name <span class="text-error">*</span>
                            </label>
                            <input type="text" x-model="contactName" required placeholder="Full name"
                                class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
                                    Email <span class="text-error">*</span>
                                </label>
                                <input type="email" x-model="contactEmail" required placeholder="you@example.com"
                                    class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
                                    Phone <span class="text-error">*</span>
                                </label>
                                <input
                                    type="tel" required
                                    :value="contactPhone"
                                    @input="
                                        let d = $el.value.replace(/\D/g,'').substring(0,10);
                                        if (d.length >= 7)      $el.value = '(' + d.substring(0,3) + ') ' + d.substring(3,6) + '-' + d.substring(6);
                                        else if (d.length >= 4) $el.value = '(' + d.substring(0,3) + ') ' + d.substring(3);
                                        else if (d.length >= 1) $el.value = '(' + d;
                                        else                    $el.value = '';
                                        contactPhone = $el.value;
                                    "
                                    maxlength="14" placeholder="(815) 000-0000"
                                    class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors">
                            </div>
                        </div>

                        <div x-show="requestType === 'company'" x-cloak>
                            <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">Company Name</label>
                            <input type="text" x-model="companyName" placeholder="Company name"
                                class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
                                Address Line 1 <span class="text-error">*</span>
                            </label>
                            <input type="text" x-model="address1" required placeholder="Street address"
                                class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
                                Address Line 2 <span class="font-normal text-charcoal-lighter">(optional)</span>
                            </label>
                            <input type="text" x-model="address2" placeholder="Apt, suite, unit…"
                                class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors">
                        </div>

                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                            <div class="col-span-2 sm:col-span-1">
                                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
                                    City <span class="text-error">*</span>
                                </label>
                                <input type="text" x-model="city" required placeholder="City"
                                    class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
                                    State <span class="text-error">*</span>
                                </label>
                                <input type="text" required placeholder="IL" maxlength="2"
                                    :value="state"
                                    @input="state = $el.value.replace(/[^a-zA-Z]/g,'').toUpperCase().substring(0,2); $el.value = state"
                                    class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors uppercase">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
                                    ZIP Code <span class="text-error">*</span>
                                </label>
                                <input type="text" required placeholder="60432" maxlength="5"
                                    :value="zip"
                                    @input="zip = $el.value.replace(/\D/g,'').substring(0,5); $el.value = zip"
                                    inputmode="numeric"
                                    class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors">
                            </div>
                        </div>

                    </div>
                </div>

                {{-- ══ Review & Submit ══════════════════════════════════════════ --}}
                <div x-show="currentStepName === 'confirm-submit'" x-cloak>
                    <div class="space-y-4">

                        <div x-show="rushActive" x-cloak
                            class="flex items-center gap-3 px-4 py-3 bg-sunburst text-charcoal font-bold">
                            <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                            </svg>
                            <span class="text-sm">Rush Order — Expediting Active</span>
                        </div>

                        {{-- Global summary --}}
                        <div class="divide-y divide-linen-dark border border-linen-dark">

                            <div class="px-4 py-3 grid grid-cols-3 gap-3">
                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">Order Type</span>
                                <div class="col-span-2 text-sm text-charcoal">
                                    <span x-show="dtfMode === true" x-cloak class="font-semibold">DTF Transfers</span>
                                    <span x-show="dtfMode !== true">Custom Apparel</span>
                                </div>
                            </div>

                            <div class="px-4 py-3 grid grid-cols-3 gap-3">
                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">Request Type</span>
                                <div class="col-span-2 text-sm text-charcoal">
                                    <span class="capitalize" x-text="requestType || '—'"></span>
                                    <span x-show="requestType === 'company' && companyName" x-cloak class="text-charcoal-light"> — <span x-text="companyName"></span></span>
                                </div>
                            </div>

                            <div class="px-4 py-3 grid grid-cols-3 gap-3">
                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">Rush</span>
                                <div class="col-span-2">
                                    <span x-show="rushActive" x-cloak class="inline-flex items-center gap-1 px-2 py-0.5 bg-sunburst text-charcoal text-xs font-bold">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                                        RUSH
                                    </span>
                                    <span x-show="!rushActive" class="text-sm text-charcoal">Standard</span>
                                </div>
                            </div>

                            {{-- DTF items (DTF path) --}}
                            <div x-show="dtfMode === true" x-cloak class="px-4 py-3 grid grid-cols-3 gap-3">
                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">DTF Items</span>
                                <div class="col-span-2">
                                    {{-- Pre-loaded items from pricing table --}}
                                    <div x-show="dtfItems.length > 0" x-cloak class="space-y-1">
                                        <template x-for="(item, idx) in dtfItems" :key="idx">
                                            <div class="text-xs text-charcoal">
                                                <span class="font-semibold" x-text="item.type + ' — ' + item.size"></span>
                                                <span class="text-charcoal-light" x-text="' · ' + item.tier + ' at ' + item.price + ' ea'"></span>
                                            </div>
                                        </template>
                                    </div>
                                    {{-- User-selected types from wizard --}}
                                    <div x-show="dtfItems.length === 0 && selectedDtfTypes.length > 0" x-cloak class="space-y-1">
                                        <template x-for="t in selectedDtfTypes" :key="t.key">
                                            <div class="text-xs text-charcoal">
                                                <span class="font-semibold" x-text="t.label"></span>
                                                <span class="text-charcoal-light"
                                                    x-text="dtfQuantities[t.key].tier ? ' · ' + dtfQuantities[t.key].tier + ' · Qty: ' + dtfQuantities[t.key].qty : ''"></span>
                                            </div>
                                        </template>
                                    </div>
                                    <span x-show="dtfItems.length === 0 && selectedDtfTypes.length === 0" class="text-sm text-charcoal-lighter">None selected</span>
                                </div>
                            </div>

                            {{-- File row (DTF or Artwork) --}}
                            <div class="px-4 py-3 grid grid-cols-3 gap-3">
                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">
                                    <span x-show="dtfMode === true" x-cloak>DTF File</span>
                                    <span x-show="dtfMode !== true">Artwork</span>
                                </span>
                                <div class="col-span-2 text-sm text-charcoal">
                                    <template x-if="dtfMode === true">
                                        <span>
                                            <span x-show="dtfFileName" x-cloak x-text="dtfFileName"></span>
                                            <span x-show="!dtfFileName && hasDtf === true" x-cloak>Yes — will provide separately</span>
                                            <span x-show="hasDtf === false" x-cloak class="text-charcoal-light">No file / needs design help</span>
                                            <span x-show="!dtfFileName && hasDtf === null" class="text-charcoal-lighter">Not answered</span>
                                        </span>
                                    </template>
                                    <template x-if="dtfMode !== true">
                                        <span>
                                            <span x-show="artworkFileName" x-cloak x-text="artworkFileName"></span>
                                            <span x-show="!artworkFileName && hasArtwork === true" x-cloak>Yes — will provide separately</span>
                                            <span x-show="hasArtwork === false" x-cloak class="text-charcoal-light">No file / needs design help</span>
                                            <span x-show="!artworkFileName && hasArtwork === null" class="text-charcoal-lighter">Not answered</span>
                                        </span>
                                    </template>
                                </div>
                            </div>

                            <div class="px-4 py-3 grid grid-cols-3 gap-3">
                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">Date Needed</span>
                                <div class="col-span-2 text-sm text-charcoal flex items-center gap-2 flex-wrap">
                                    <span x-text="completionDate || '—'"></span>
                                    <span x-show="rushActive && completionDate" x-cloak class="px-1.5 py-0.5 bg-sunburst text-charcoal text-[10px] font-bold">RUSH</span>
                                </div>
                            </div>

                            <div class="px-4 py-3 grid grid-cols-3 gap-3">
                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">Contact</span>
                                <div class="col-span-2 text-sm text-charcoal space-y-0.5">
                                    <p x-text="contactName || '—'"></p>
                                    <p x-show="contactEmail" x-cloak class="text-charcoal-light" x-text="contactEmail"></p>
                                    <p x-show="contactPhone" x-cloak class="text-charcoal-light" x-text="contactPhone"></p>
                                </div>
                            </div>

                            <div class="px-4 py-3 grid grid-cols-3 gap-3">
                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">Ship To</span>
                                <div class="col-span-2 text-sm text-charcoal space-y-0.5">
                                    <p x-show="requestType === 'company' && companyName" x-cloak class="font-semibold" x-text="companyName"></p>
                                    <p x-show="address1" x-cloak x-text="address1 + (address2 ? ', ' + address2 : '')"></p>
                                    <p x-show="city || state || zip" x-cloak x-text="[city, state, zip].filter(Boolean).join(', ')"></p>
                                    <p x-show="!address1 && !city" class="text-charcoal-lighter">No address entered</p>
                                </div>
                            </div>

                            {{-- Per-garment summary (apparel path only) --}}
                            <template x-if="dtfMode !== true">
                                <div x-show="selectedGarmentTypes.length > 0" x-cloak class="divide-y divide-linen-dark">
                                    <template x-for="g in selectedGarmentTypes" :key="g.key">
                                        <div>
                                            <div class="px-4 py-2 bg-linen">
                                                <span class="text-xs font-bold text-charcoal uppercase tracking-wide" x-text="g.label"></span>
                                            </div>
                                            <div class="px-4 py-2.5 grid grid-cols-3 gap-3">
                                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">Print</span>
                                                <div class="col-span-2 text-sm text-charcoal">
                                                    <span x-show="printMethods[g.key] === 'traditional'" x-cloak>Traditional</span>
                                                    <span x-show="printMethods[g.key] === 'specialty'" x-cloak>
                                                        Specialty — <span x-text="specialtyLabels[specialtyTypeByGarment[g.key]] || ''"></span>
                                                    </span>
                                                    <span x-show="!printMethods[g.key]" class="text-charcoal-lighter">Not selected</span>
                                                </div>
                                            </div>
                                            <div class="px-4 py-2.5 grid grid-cols-3 gap-3">
                                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">Colors</span>
                                                <div class="col-span-2">
                                                    <div x-show="(selectedColorsByGarment[g.key] || []).length > 0" x-cloak class="flex flex-wrap gap-1">
                                                        <template x-for="color in (selectedColorsByGarment[g.key] || [])" :key="color">
                                                            <span class="px-2 py-0.5 bg-charcoal text-white text-xs" x-text="color"></span>
                                                        </template>
                                                    </div>
                                                    <span x-show="!(selectedColorsByGarment[g.key] || []).length" class="text-sm text-charcoal-lighter">None selected</span>
                                                </div>
                                            </div>
                                            <div class="px-4 py-2.5 grid grid-cols-3 gap-3">
                                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">Quantities</span>
                                                <div class="col-span-2">
                                                    <div x-show="garmentQuantitySummary(g.key).length > 0" x-cloak class="flex flex-wrap gap-1">
                                                        <template x-for="(item, i) in garmentQuantitySummary(g.key)" :key="i">
                                                            <span class="px-2 py-0.5 bg-linen text-charcoal text-xs border border-linen-dark" x-text="item"></span>
                                                        </template>
                                                    </div>
                                                    <span x-show="garmentQuantitySummary(g.key).length === 0" class="text-sm text-charcoal-lighter">None entered</span>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </template>

                            <div x-show="extraNotes" x-cloak class="px-4 py-3 grid grid-cols-3 gap-3">
                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">Notes</span>
                                <div class="col-span-2 text-sm text-charcoal line-clamp-3" x-text="extraNotes"></div>
                            </div>

                        </div>

                        <p class="text-xs text-charcoal-lighter text-center">
                            By submitting you agree to be contacted by our team to finalize your custom order.
                        </p>

                    </div>
                </div>

            </div>{{-- /body --}}

            {{-- ── Step dot indicators ──────────────────────────────────── --}}
            <div x-show="!showConfirmation" class="flex items-center justify-center gap-1.5 py-3 flex-shrink-0" aria-hidden="true">
                <template x-for="i in totalSteps" :key="i">
                    <div
                        class="h-2 transition-all duration-300"
                        :class="step === i ? 'w-6 bg-sunburst' : (step > i ? 'w-2.5 bg-sunburst/60 rounded-full' : 'w-2.5 bg-linen-dark rounded-full')"
                    ></div>
                </template>
            </div>

            {{-- ── Submission Confirmation ───────────────────────────────── --}}
            <div x-show="showConfirmation" x-cloak
                class="flex-1 flex flex-col items-center justify-center px-8 py-12 text-center">
                <div class="flex items-center justify-center w-16 h-16 bg-sunburst/10 mb-6" aria-hidden="true">
                    <svg class="w-8 h-8 text-sunburst" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-charcoal mb-2">
                    Thank you, <span x-text="contactFirstName"></span>!
                </h3>
                <p class="text-sm text-charcoal-light max-w-xs leading-relaxed">
                    Your <span x-show="rushActive" x-cloak class="font-semibold text-sunburst-dark">rush </span>request
                    has been submitted. Our team will review and be in touch shortly.
                </p>
                <p x-show="orderReference" x-cloak
                   class="mt-3 text-xs font-semibold text-charcoal-light tracking-wide">
                    Reference: <span class="text-charcoal font-bold" x-text="orderReference"></span>
                </p>
                <div class="flex flex-col sm:flex-row items-center gap-3 mt-8">
                    <button
                        type="button"
                        @click="close()"
                        class="px-6 py-2.5 border border-linen-dark text-charcoal text-sm font-semibold hover:bg-linen transition-all"
                    >Done</button>
                    <a
                        x-show="checkoutUrl"
                        x-cloak
                        :href="checkoutUrl"
                        class="px-6 py-2.5 bg-gold-gradient text-charcoal text-sm font-semibold hover:shadow-gold transition-all"
                    >Proceed to Payment &rarr;</a>
                </div>
                <p x-show="!checkoutUrl" x-cloak
                   class="mt-4 text-xs text-charcoal-lighter max-w-xs">
                    A payment link will be sent to <span x-text="contactEmail" class="font-medium text-charcoal"></span> once your order is reviewed.
                </p>
            </div>

            {{-- ── Close Confirmation Overlay ────────────────────────────── --}}
            <div x-show="showCloseConfirm" x-cloak
                class="absolute inset-0 z-20 bg-charcoal-dark/75 flex items-center justify-center p-6">
                <div class="bg-white shadow-2xl p-6 max-w-xs w-full text-center space-y-4">
                    <p class="text-base font-bold text-charcoal">Are you sure?</p>
                    <div class="flex gap-3 justify-center">
                        <button type="button"
                            @click="showCloseConfirm = false"
                            class="px-4 py-2 text-sm font-semibold border border-linen-dark text-charcoal hover:bg-linen transition-colors">
                            Keep Going
                        </button>
                        <button type="button"
                            @click="backToContactModal()"
                            class="px-4 py-2 text-sm font-semibold bg-charcoal text-white hover:bg-charcoal-dark transition-colors">
                            Yes, Go Back
                        </button>
                    </div>
                </div>
            </div>

            {{-- ── Footer navigation ────────────────────────────────────── --}}
            <div x-show="!showConfirmation" class="flex items-center gap-2.5 px-5 py-3.5 flex-shrink-0 border-t bg-linen-light border-linen-dark">

                <button type="button"
                    x-show="step === 1"
                    @click="backToContactModal()"
                    class="text-sm font-semibold text-charcoal-light hover:text-charcoal transition-colors mr-auto">
                    Cancel
                </button>

                {{-- Validation hint --}}
                <p
                    x-show="step > 1 && !stepValid && currentStepName !== 'extra-notes' && currentStepName !== 'confirm-submit'"
                    x-cloak
                    class="text-xs text-error mr-auto"
                >Complete required fields to continue</p>

                <div class="flex items-center gap-2.5 ml-auto">

                    <x-ui.button-modal-cancel
                        @click="step === 1 ? backToContactModal() : prev()"
                    >← Back</x-ui.button-modal-cancel>

                    <button
                        type="button"
                        x-show="step < totalSteps"
                        @click="next()"
                        x-bind:disabled="!stepValid && currentStepName !== 'extra-notes'"
                        x-bind:class="(!stepValid && currentStepName !== 'extra-notes') ? 'opacity-40 cursor-not-allowed' : ''"
                        class="px-5 py-2 text-sm font-semibold text-charcoal bg-gold-gradient hover:shadow-gold transition-all"
                    >Next →</button>

                    <div x-show="step === totalSteps" x-cloak class="flex flex-col items-end gap-1">
                        <x-ui.button-modal-primary
                            @click="finish()"
                            :disabled="submitting"
                            x-bind:class="submitting ? 'opacity-60 cursor-not-allowed' : ''"
                        >
                            <span x-show="!submitting">Submit Request</span>
                            <span x-show="submitting" x-cloak>Submitting…</span>
                        </x-ui.button-modal-primary>
                        <p x-show="submitError" x-cloak class="text-xs text-error">
                            Something went wrong — please try again.
                        </p>
                    </div>

                </div>
            </div>

        </div>{{-- /panel --}}
    </div>{{-- /backdrop --}}
    </template>
</div>
