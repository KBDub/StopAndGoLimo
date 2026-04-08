{{--
 | Component  : x-ui.custom-request-wizard
 | Location   : resources/views/components/ui/custom-request-wizard.blade.php
 |
 | Full-featured custom order request wizard. Triggered from the
 | x-ui.contact-modal "Have a Custom Request?" toggle. Include once
 | per page alongside x-ui.contact-modal.
 |
 | ── EVENT API ───────────────────────────────────────────────────────────────
 |   open-modal   { name: 'custom-request-wizard', prefill: { name, email, phone } }
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

        /* ── Step 1: Request Details ──────────────────────── */
        requestType:  '',
        companyName:  '',
        isRush:       null,

        /* ── Step 2: Garment Selection ────────────────────── */
        garments: {
            vNeck:      false,
            crewNeck:   false,
            hoodie:     false,
            otherShirt: false,
            baseballCap:false,
            napSack:    false,
            otherItem:  false
        },

        /* ── Step 3: Shirt Length & Fabric (conditional) ──── */
        sleeveType:   '',
        fabricWeight: '',

        /* ── Step 4: Color Selection ──────────────────────── */
        colorInput:    '',
        selectedColors:[],
        colorSuggestions: [
            'White','Black','Navy Blue','Red','Royal Blue','Forest Green',
            'Charcoal Gray','Light Gray','Sky Blue','Yellow','Orange','Purple',
            'Maroon','Pink','Hot Pink','Kelly Green','Burgundy','Lime Green',
            'Gold','Silver','Tan','Brown','Heather Gray','Sport Gray',
            'Safety Green','Safety Orange','Teal','Coral','Lavender','Olive Green'
        ],

        /* ── Step 5: Quantity & Sizing ────────────────────── */
        quantities: {},
        sizes:   ['XS','S','M','L','XL','2XL','3XL','4XL','5XL','6XL'],
        genders: [
            { key: 'men',     label: 'Men\'s'   },
            { key: 'women',   label: 'Women\'s' },
            { key: 'youth',   label: 'Youth'    },
            { key: 'toddler', label: 'Toddler'  }
        ],

        /* ── Step 6: Print Method ─────────────────────────── */
        printMethod:    '',
        specialtyTypes: {
            vinyl:       false, rhinestone: false, glitter:    false,
            foil:        false, glowDark:   false, flock:      false,
            reflective:  false, holographic:false, brick:      false,
            pattern:     false, embroidery: false, picture:    false
        },

        /* ── Step 7: Completion Date ──────────────────────── */
        completionDate:  '',
        isRushDelivery:  null,

        /* ── Step 8: Extra Notes ──────────────────────────── */
        extraNotes: '',

        /* ── Step 9: Contact Info (pre-filled) + Shipping ─── */
        contactName:  '',
        contactEmail: '',
        contactPhone: '',
        address1:     '',
        address2:     '',
        city:         '',
        state:        '',
        zip:          '',

        /* ── Computed ─────────────────────────────────────── */
        get hasShirtType() {
            return this.garments.vNeck || this.garments.crewNeck || this.garments.hoodie || this.garments.otherShirt;
        },
        get visibleSteps() {
            const s = ['request-type','garment-selection'];
            if (this.hasShirtType) s.push('shirt-length-fabric');
            s.push('color-selection','quantity-sizing','print-method','completion-date','extra-notes','shipping-address','confirm-submit');
            return s;
        },
        get currentStepName() { return this.visibleSteps[this.step - 1] ?? ''; },
        get totalSteps()      { return this.visibleSteps.length; },
        get currentStepTitle() {
            const t = {
                'request-type':       'Request Details',
                'garment-selection':  'Garment Selection',
                'shirt-length-fabric':'Shirt Length & Fabric Type',
                'color-selection':    'Color Selection',
                'quantity-sizing':    'Quantity & Sizing',
                'print-method':       'Print Method',
                'completion-date':    'Desired Completion Date',
                'extra-notes':        'Extra Notes',
                'shipping-address':   'Shipping Address',
                'confirm-submit':     'Review & Submit'
            };
            return t[this.currentStepName] ?? '';
        },
        get selectedGarmentTypes() {
            return [
                { key: 'vNeck',      label: 'V-Neck'       },
                { key: 'crewNeck',   label: 'Crew Neck'    },
                { key: 'hoodie',     label: 'Hoodie'        },
                { key: 'otherShirt', label: 'Other Shirt'  },
                { key: 'baseballCap',label: 'Baseball Cap' },
                { key: 'napSack',    label: 'Nap Sack'     },
                { key: 'otherItem',  label: 'Other Item'   }
            ].filter(g => this.garments[g.key]);
        },
        get filteredColors() {
            if (!this.colorInput.trim()) return [];
            const q = this.colorInput.toLowerCase();
            return this.colorSuggestions.filter(c => c.toLowerCase().includes(q) && !this.selectedColors.includes(c));
        },
        get quantitySummary() {
            const results = [];
            this.selectedGarmentTypes.forEach(g => {
                this.genders.forEach(gender => {
                    this.sizes.forEach(size => {
                        const qty = this.quantities[g.key + '-' + gender.key + '-' + size] || 0;
                        if (qty > 0) results.push(qty + ' ' + gender.label + ' ' + size + ' ' + g.label + (qty !== 1 ? 's' : ''));
                    });
                });
            });
            return results;
        },
        get rushActive() { return this.isRush === true || this.isRushDelivery === true; },
        get stepValid() {
            const s = this.currentStepName;
            if (s === 'request-type') {
                return this.requestType !== '' &&
                       (this.requestType !== 'company' || this.companyName.trim() !== '') &&
                       this.isRush !== null;
            }
            if (s === 'garment-selection') {
                return Object.values(this.garments).some(v => v);
            }
            if (s === 'shirt-length-fabric') {
                return this.sleeveType !== '' && this.fabricWeight !== '';
            }
            if (s === 'color-selection') {
                return this.selectedColors.length > 0;
            }
            if (s === 'quantity-sizing') {
                return Object.values(this.quantities).some(v => v > 0);
            }
            if (s === 'print-method') {
                if (!this.printMethod) return false;
                if (this.printMethod === 'specialty') return Object.values(this.specialtyTypes).some(v => v);
                return true;
            }
            if (s === 'completion-date') {
                return this.completionDate !== '' && (this.isRush === true || this.isRushDelivery !== null);
            }
            return true;
        },

        /* ── Methods ──────────────────────────────────────── */
        open()  { this.isOpen = true;  this.step = 1; document.body.style.overflow = 'hidden'; },
        close() { this.isOpen = false; this.step = 1; document.body.style.overflow = ''; this.$dispatch('modal-closed', { name: this.modalName }); },
        next()  { if (this.stepValid && this.step < this.totalSteps) this.step++; },
        prev()  { if (this.step > 1) this.step--; },
        finish(){ this.$dispatch('wizard-done', { name: this.modalName }); this.close(); },

        addColor(c)       { if (!this.selectedColors.includes(c)) this.selectedColors.push(c); this.colorInput = ''; },
        removeColor(c)    { this.selectedColors = this.selectedColors.filter(x => x !== c); },
        addColorFromInput(){ const c = this.colorInput.trim(); if (c && !this.selectedColors.includes(c)) this.selectedColors.push(c); this.colorInput = ''; },

        getQty(g, gender, size) { return this.quantities[g + '-' + gender + '-' + size] || ''; },
        setQty(g, gender, size, val) {
            const k = g + '-' + gender + '-' + size;
            const n = parseInt(val);
            const q = Object.assign({}, this.quantities);
            if (n > 0) q[k] = n; else delete q[k];
            this.quantities = q;
        }
    }"
    @open-modal.window="
        if ($event.detail.name === modalName) {
            const p = $event.detail.prefill || {};
            contactName  = p.name  || '';
            contactEmail = p.email || '';
            contactPhone = p.phone || '';
            open();
        }
    "
    @close-modal.window="if ($event.detail.name === modalName) close()"
    @keydown.escape.window="if (isOpen) close()"
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
            :class="currentStepName === 'quantity-sizing' ? 'max-w-[58rem]' : 'max-w-[34rem]'"
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
                        &nbsp;·&nbsp; Custom Request Wizard
                    </p>
                </div>
                <button
                    type="button"
                    @click="close()"
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
            <div class="flex-1 px-5 py-5 overflow-y-auto overscroll-contain scrollbar-sunburst text-sm text-charcoal">

                {{-- ══ STEP 1: Request Details ═══════════════════════════════ --}}
                <div x-show="currentStepName === 'request-type'">
                    <div class="space-y-6">

                        <div>
                            <h3 class="text-sm font-semibold text-charcoal mb-3">
                                Is this a company or personal request?
                                <span class="text-error ml-0.5">*</span>
                            </h3>
                            <div class="flex gap-6">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="crw-request-type" value="company"
                                        x-model="requestType"
                                        class="w-4 h-4 accent-sunburst">
                                    <span class="text-sm font-medium text-charcoal">Company</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="crw-request-type" value="personal"
                                        x-model="requestType"
                                        class="w-4 h-4 accent-sunburst">
                                    <span class="text-sm font-medium text-charcoal">Personal</span>
                                </label>
                            </div>
                        </div>

                        <div x-show="requestType === 'company'" x-cloak>
                            <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
                                Company Name <span class="text-error">*</span>
                            </label>
                            <input
                                type="text"
                                x-model="companyName"
                                placeholder="Your company name"
                                class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors"
                            >
                        </div>

                        <div class="border-t border-linen-dark pt-6">
                            <h3 class="text-sm font-semibold text-charcoal mb-3">
                                Is this a rush request?
                                <span class="text-error ml-0.5">*</span>
                            </h3>
                            <div class="flex gap-6">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="crw-is-rush" value="yes"
                                        @change="isRush = true"
                                        :checked="isRush === true"
                                        class="w-4 h-4 accent-sunburst">
                                    <span class="text-sm font-medium text-charcoal">Yes</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="crw-is-rush" value="no"
                                        @change="isRush = false"
                                        :checked="isRush === false"
                                        class="w-4 h-4 accent-sunburst">
                                    <span class="text-sm font-medium text-charcoal">No</span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- ══ STEP 2: Garment Selection ════════════════════════════ --}}
                <div x-show="currentStepName === 'garment-selection'" x-cloak>
                    <p class="text-xs text-charcoal-light mb-4">Select all applicable garment types. <span class="text-error font-semibold">At least one required.</span></p>
                    @php
                        $garmentList = [
                            ['key' => 'vNeck',       'label' => 'V-Neck'],
                            ['key' => 'crewNeck',    'label' => 'Crew Neck'],
                            ['key' => 'hoodie',      'label' => 'Hoodie'],
                            ['key' => 'otherShirt',  'label' => 'Other Shirt'],
                            ['key' => 'baseballCap', 'label' => 'Baseball Cap'],
                            ['key' => 'napSack',     'label' => 'Nap Sack'],
                            ['key' => 'otherItem',   'label' => 'Other Item'],
                        ];
                    @endphp
                    <div class="grid grid-cols-3 gap-2">
                        @foreach($garmentList as $g)
                        <button
                            type="button"
                            role="switch"
                            :aria-checked="garments.{{ $g['key'] }}.toString()"
                            @click="garments.{{ $g['key'] }} = !garments.{{ $g['key'] }}"
                            class="flex items-center justify-between gap-2 px-3 py-3 bg-white border-2 border-linen-dark hover:border-sunburst/50 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-sunburst focus:ring-offset-1 w-full text-left"
                        >
                            <span class="text-xs font-semibold text-charcoal leading-tight">{{ $g['label'] }}</span>
                            <span
                                :class="garments.{{ $g['key'] }} ? 'bg-sunburst' : 'bg-linen-dark'"
                                class="relative flex-shrink-0 w-11 h-6 overflow-hidden rounded-full transition-colors duration-200"
                            >
                                <span
                                    :class="garments.{{ $g['key'] }} ? 'translate-x-6' : 'translate-x-1'"
                                    class="absolute left-0 top-1 w-4 h-4 bg-white rounded-full shadow transition-transform duration-200"
                                ></span>
                            </span>
                        </button>
                        @endforeach
                    </div>

                    <div x-show="selectedGarmentTypes.length > 0" x-cloak class="mt-4 pt-4 border-t border-linen-dark">
                        <p class="text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-2">Selected</p>
                        <div class="flex flex-wrap gap-1.5">
                            <template x-for="g in selectedGarmentTypes" :key="g.key">
                                <span class="px-2 py-1 bg-sunburst/10 border border-sunburst/30 text-charcoal text-xs font-semibold" x-text="g.label"></span>
                            </template>
                        </div>
                    </div>
                </div>

                {{-- ══ STEP 3: Shirt Length & Fabric (conditional) ══════════ --}}
                <div x-show="currentStepName === 'shirt-length-fabric'" x-cloak>
                    <div class="space-y-6">

                        <div>
                            <h3 class="text-sm font-semibold text-charcoal mb-3">
                                Sleeve Length <span class="text-error ml-0.5">*</span>
                            </h3>
                            <div class="flex gap-2">
                                @foreach([['short','Short Sleeve'],['long','Long Sleeve'],['other','Other']] as [$val,$lbl])
                                <label class="flex-1 cursor-pointer group">
                                    <input type="radio" name="crw-sleeve-type" value="{{ $val }}"
                                        x-model="sleeveType"
                                        class="sr-only">
                                    <span
                                        class="flex items-center justify-center px-2 py-2.5 border-2 text-xs font-semibold text-center transition-colors duration-150 w-full"
                                        :class="sleeveType === '{{ $val }}' ? 'border-sunburst bg-sunburst text-charcoal' : 'border-linen-dark bg-white text-charcoal group-hover:border-sunburst/50'"
                                    >{{ $lbl }}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <h3 class="text-sm font-semibold text-charcoal mb-3">
                                Fabric Weight <span class="text-error ml-0.5">*</span>
                            </h3>
                            <div class="flex gap-2">
                                @foreach([['heavyweight','Heavyweight'],['lightweight','Lightweight'],['other','Other']] as [$val,$lbl])
                                <label class="flex-1 cursor-pointer group">
                                    <input type="radio" name="crw-fabric-weight" value="{{ $val }}"
                                        x-model="fabricWeight"
                                        class="sr-only">
                                    <span
                                        class="flex items-center justify-center px-2 py-2.5 border-2 text-xs font-semibold text-center transition-colors duration-150 w-full"
                                        :class="fabricWeight === '{{ $val }}' ? 'border-sunburst bg-sunburst text-charcoal' : 'border-linen-dark bg-white text-charcoal group-hover:border-sunburst/50'"
                                    >{{ $lbl }}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

                {{-- ══ STEP 4: Color Selection ══════════════════════════════ --}}
                <div x-show="currentStepName === 'color-selection'" x-cloak>
                    <div class="space-y-4">
                        <p class="text-xs text-charcoal-light">Type a color name to search, then press Enter or click a suggestion to add it. <span class="text-error font-semibold">At least one color required.</span></p>

                        <div>
                            <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
                                Add a Color <span class="text-error">*</span>
                            </label>
                            <div class="flex gap-2">
                                <input
                                    type="text"
                                    x-model="colorInput"
                                    @keydown.enter.prevent="addColorFromInput()"
                                    placeholder="e.g. Navy Blue, Red, White…"
                                    class="flex-1 px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors"
                                >
                                <button type="button" @click="addColorFromInput()"
                                    class="px-8 py-2.5 bg-charcoal text-white text-xs font-semibold hover:bg-charcoal-dark transition-colors flex-shrink-0">
                                    Add
                                </button>
                            </div>
                            {{-- Inline suggestions (never absolute-positioned) --}}
                            <div x-show="filteredColors.length > 0" class="mt-1 border border-linen-dark bg-white max-h-[8rem] overflow-y-auto scrollbar-sunburst">
                                <template x-for="color in filteredColors" :key="color">
                                    <button type="button" @click="addColor(color)"
                                        class="w-full text-left px-3 py-2 text-sm text-charcoal hover:bg-linen transition-colors border-b border-linen-dark last:border-0"
                                        x-text="color">
                                    </button>
                                </template>
                            </div>
                        </div>

                        <div x-show="selectedColors.length > 0" x-cloak>
                            <p class="text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-2">Selected Colors</p>
                            <div class="flex flex-wrap gap-2">
                                <template x-for="color in selectedColors" :key="color">
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

                        <div x-show="selectedColors.length === 0" class="py-6 text-center text-charcoal-lighter text-sm">
                            No colors added yet — search and select above.
                        </div>
                    </div>
                </div>

                {{-- ══ STEP 5: Quantity & Sizing ════════════════════════════ --}}
                <div x-show="currentStepName === 'quantity-sizing'" x-cloak>
                    <div class="space-y-5">
                        <p class="text-xs text-charcoal-light">Enter quantities for each gender and size. <span class="text-error font-semibold">At least one quantity required.</span></p>

                        <div x-show="selectedGarmentTypes.length === 0" class="py-8 text-center text-charcoal-lighter text-sm">
                            No garment types selected — go back to Garment Selection.
                        </div>

                        <template x-for="garment in selectedGarmentTypes" :key="garment.key">
                            <div class="border border-linen-dark">
                                <div class="px-3 py-2 bg-linen border-b border-linen-dark">
                                    <h4 class="text-sm font-bold text-charcoal" x-text="garment.label"></h4>
                                </div>
                                <div class="overflow-x-auto scrollbar-sunburst">
                                    <table class="w-full border-collapse text-xs">
                                        <thead>
                                            <tr class="bg-linen-light">
                                                <th class="text-left px-2 py-2 font-semibold text-charcoal-light border-r border-linen-dark w-20 whitespace-nowrap">Gender</th>
                                                <template x-for="size in sizes" :key="size">
                                                    <th class="px-1 py-2 font-semibold text-charcoal-light text-center min-w-[2.75rem]" x-text="size"></th>
                                                </template>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <template x-for="gender in genders" :key="gender.key">
                                                <tr class="border-t border-linen-dark hover:bg-linen-light/50">
                                                    <td class="px-2 py-1.5 font-semibold text-charcoal border-r border-linen-dark whitespace-nowrap" x-text="gender.label"></td>
                                                    <template x-for="size in sizes" :key="size">
                                                        <td class="px-1 py-1 text-center border-l border-linen-dark">
                                                            <input
                                                                type="number"
                                                                min="0"
                                                                :value="getQty(garment.key, gender.key, size)"
                                                                @input="setQty(garment.key, gender.key, size, $event.target.value)"
                                                                class="w-11 text-center text-xs border border-linen-dark py-1.5 focus:outline-none focus:border-sunburst bg-white text-charcoal transition-colors"
                                                                placeholder="0"
                                                            >
                                                        </td>
                                                    </template>
                                                </tr>
                                            </template>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </template>

                        <div x-show="quantitySummary.length > 0" x-cloak class="border-t border-linen-dark pt-4">
                            <p class="text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-2">Order Summary</p>
                            <div class="flex flex-wrap gap-1.5">
                                <template x-for="(item, i) in quantitySummary" :key="i">
                                    <span class="px-2 py-1 bg-linen text-charcoal text-xs border border-linen-dark" x-text="item"></span>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ══ STEP 6: Print Method ═════════════════════════════════ --}}
                <div x-show="currentStepName === 'print-method'" x-cloak>
                    <div class="space-y-4">
                        <p class="text-xs text-charcoal-light"><span class="text-error font-semibold">Select a print method.</span> For Specialty, choose at least one type.</p>

                        {{-- Traditional Printing --}}
                        <div class="border border-linen-dark">
                            <div class="flex items-start gap-3 p-4">
                                <input type="radio" name="crw-print-method" value="traditional"
                                    id="crw-pm-traditional"
                                    x-model="printMethod"
                                    class="w-4 h-4 mt-0.5 flex-shrink-0 accent-sunburst">
                                <div class="flex-1">
                                    <label for="crw-pm-traditional" class="block text-sm font-bold text-charcoal cursor-pointer mb-1">Traditional Printing</label>
                                    <p class="text-xs text-charcoal-light">HTV &nbsp;·&nbsp; Digital &nbsp;·&nbsp; Screenprint</p>
                                </div>
                            </div>
                        </div>

                        {{-- Specialty Printing --}}
                        <div class="border border-linen-dark">
                            <div class="flex items-center gap-3 p-4 border-b border-linen-dark">
                                <input type="radio" name="crw-print-method" value="specialty"
                                    id="crw-pm-specialty"
                                    x-model="printMethod"
                                    class="w-4 h-4 flex-shrink-0 accent-sunburst">
                                <label for="crw-pm-specialty" class="text-sm font-bold text-charcoal cursor-pointer">Specialty Printing</label>
                            </div>
                            <div x-show="printMethod === 'specialty'" x-cloak class="p-3">
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
                                    <button
                                        type="button"
                                        role="switch"
                                        :aria-checked="specialtyTypes.{{ $item['key'] }}.toString()"
                                        @click="specialtyTypes.{{ $item['key'] }} = !specialtyTypes.{{ $item['key'] }}"
                                        class="flex items-center justify-between gap-2 px-3 py-3 bg-white border-2 border-linen-dark hover:border-sunburst/50 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-sunburst focus:ring-offset-1 w-full text-left"
                                    >
                                        <span class="text-xs font-semibold text-charcoal leading-tight">{{ $item['label'] }}</span>
                                        <span
                                            :class="specialtyTypes.{{ $item['key'] }} ? 'bg-sunburst' : 'bg-linen-dark'"
                                            class="relative flex-shrink-0 w-11 h-6 overflow-hidden rounded-full transition-colors duration-200"
                                        >
                                            <span
                                                :class="specialtyTypes.{{ $item['key'] }} ? 'translate-x-6' : 'translate-x-1'"
                                                class="absolute left-0 top-1 w-4 h-4 bg-white rounded-full shadow transition-transform duration-200"
                                            ></span>
                                        </span>
                                    </button>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- ══ STEP 7: Completion Date ══════════════════════════════ --}}
                <div x-show="currentStepName === 'completion-date'" x-cloak>
                    <div class="space-y-4">

                        {{-- Rush already set in Step 1 --}}
                        <div x-show="isRush === true" x-cloak
                            class="flex items-center gap-3 px-4 py-3 bg-sunburst/10 border-l-4 border-sunburst">
                            <svg class="w-5 h-5 text-sunburst flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                            </svg>
                            <div>
                                <p class="text-sm font-bold text-charcoal">Rush Order — Expediting</p>
                                <p class="text-xs text-charcoal-light mt-0.5">Your request has been flagged as a rush order. We'll prioritize processing.</p>
                            </div>
                        </div>

                        {{-- Rush question + date on same row when not already a rush order --}}
                        <div x-show="isRush !== true" x-cloak class="grid grid-cols-2 gap-6 items-center">
                            <div class="text-center">
                                <label class="block text-xs font-semibold text-charcoal-light mb-1.5">
                                    Rush delivery? <span class="text-error">*</span>
                                </label>
                                <div class="flex gap-6 pt-1 justify-center">
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input type="radio" name="crw-rush-delivery" value="yes"
                                            @change="isRushDelivery = true"
                                            :checked="isRushDelivery === true"
                                            class="w-4 h-4 accent-sunburst">
                                        <span class="text-sm font-medium text-charcoal">Yes</span>
                                    </label>
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input type="radio" name="crw-rush-delivery" value="no"
                                            @change="isRushDelivery = false"
                                            :checked="isRushDelivery === false"
                                            class="w-4 h-4 accent-sunburst">
                                        <span class="text-sm font-medium text-charcoal">No</span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-charcoal-light mb-1.5">
                                    Desired Completion Date <span class="text-error">*</span>
                                </label>
                                <input
                                    type="date"
                                    x-model="completionDate"
                                    @click="if ($el.showPicker) $el.showPicker()"
                                    :class="rushActive ? 'border-sunburst ring-1 ring-sunburst/30' : 'border-linen-dark'"
                                    class="w-full px-3 py-2.5 text-sm border focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal transition-colors cursor-pointer"
                                >
                            </div>
                        </div>

                        {{-- Date input when rush already set in step 1 --}}
                        <div x-show="isRush === true" x-cloak>
                            <label class="block text-xs font-semibold text-charcoal-light mb-1.5">
                                Desired Completion Date <span class="text-error">*</span>
                            </label>
                            <input
                                type="date"
                                x-model="completionDate"
                                @click="if ($el.showPicker) $el.showPicker()"
                                class="w-full px-3 py-2.5 text-sm border border-sunburst ring-1 ring-sunburst/30 focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal transition-colors cursor-pointer"
                            >
                        </div>

                    </div>
                </div>

                {{-- ══ STEP 8: Extra Notes ══════════════════════════════════ --}}
                <div x-show="currentStepName === 'extra-notes'" x-cloak>
                    <div class="space-y-3">
                        <p class="text-xs text-charcoal-light">Include any additional details — artwork requirements, special instructions, references, etc. (optional)</p>
                        <textarea
                            x-model="extraNotes"
                            rows="8"
                            placeholder="Add any extra notes, instructions, or details about your custom order…"
                            class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors resize-y"
                        ></textarea>
                    </div>
                </div>

                {{-- ══ STEP 9: Shipping Address ═════════════════════════════ --}}
                <div x-show="currentStepName === 'shipping-address'" x-cloak>
                    <div class="space-y-4">

                        {{-- Contact info — pre-filled from contact modal, styled like all other shipping fields --}}
                        <div>
                            <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">Full Name</label>
                            <input type="text" x-model="contactName" placeholder="Full name"
                                class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">Email</label>
                                <input type="email" x-model="contactEmail" placeholder="you@example.com"
                                    class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">Phone</label>
                                <input type="tel" x-model="contactPhone" placeholder="(815) 000-0000"
                                    class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors">
                            </div>
                        </div>

                        {{-- Company name if applicable --}}
                        <div x-show="requestType === 'company'" x-cloak>
                            <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">Company Name</label>
                            <input type="text" x-model="companyName" placeholder="Company name"
                                class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors">
                        </div>

                        {{-- Shipping address --}}
                        <div>
                            <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">Address Line 1</label>
                            <input type="text" x-model="address1" placeholder="Street address"
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
                                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">City</label>
                                <input type="text" x-model="city" placeholder="City"
                                    class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">State</label>
                                <input type="text" x-model="state" placeholder="IL" maxlength="2"
                                    class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors uppercase">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">ZIP Code</label>
                                <input type="text" x-model="zip" placeholder="60432"
                                    class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors">
                            </div>
                        </div>

                    </div>
                </div>

                {{-- ══ STEP 10: Review & Submit ══════════════════════════════ --}}
                <div x-show="currentStepName === 'confirm-submit'" x-cloak>
                    <div class="space-y-4">

                        {{-- Rush active banner --}}
                        <div x-show="rushActive" x-cloak
                            class="flex items-center gap-3 px-4 py-3 bg-sunburst text-charcoal font-bold">
                            <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                            </svg>
                            <span class="text-sm">Rush Order — Expediting Active</span>
                        </div>

                        {{-- Summary grid --}}
                        <div class="divide-y divide-linen-dark border border-linen-dark">

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

                            <div class="px-4 py-3 grid grid-cols-3 gap-3">
                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">Garments</span>
                                <div class="col-span-2">
                                    <div x-show="selectedGarmentTypes.length > 0" class="flex flex-wrap gap-1">
                                        <template x-for="g in selectedGarmentTypes" :key="g.key">
                                            <span class="px-2 py-0.5 bg-linen text-charcoal text-xs border border-linen-dark" x-text="g.label"></span>
                                        </template>
                                    </div>
                                    <span x-show="selectedGarmentTypes.length === 0" class="text-sm text-charcoal-lighter">None selected</span>
                                </div>
                            </div>

                            <div x-show="hasShirtType && (sleeveType || fabricWeight)" x-cloak class="px-4 py-3 grid grid-cols-3 gap-3">
                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">Shirt Spec</span>
                                <div class="col-span-2 text-sm text-charcoal">
                                    <span class="capitalize" x-text="sleeveType ? sleeveType + ' Sleeve' : ''"></span>
                                    <span x-show="sleeveType && fabricWeight"> &nbsp;·&nbsp; </span>
                                    <span class="capitalize" x-text="fabricWeight || ''"></span>
                                </div>
                            </div>

                            <div class="px-4 py-3 grid grid-cols-3 gap-3">
                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">Colors</span>
                                <div class="col-span-2">
                                    <div x-show="selectedColors.length > 0" class="flex flex-wrap gap-1">
                                        <template x-for="color in selectedColors" :key="color">
                                            <span class="px-2 py-0.5 bg-charcoal text-white text-xs" x-text="color"></span>
                                        </template>
                                    </div>
                                    <span x-show="selectedColors.length === 0" class="text-sm text-charcoal-lighter">None selected</span>
                                </div>
                            </div>

                            <div class="px-4 py-3 grid grid-cols-3 gap-3">
                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">Quantities</span>
                                <div class="col-span-2">
                                    <div x-show="quantitySummary.length > 0" class="flex flex-wrap gap-1">
                                        <template x-for="(item, i) in quantitySummary" :key="i">
                                            <span class="px-2 py-0.5 bg-linen text-charcoal text-xs border border-linen-dark" x-text="item"></span>
                                        </template>
                                    </div>
                                    <span x-show="quantitySummary.length === 0" class="text-sm text-charcoal-lighter">None entered</span>
                                </div>
                            </div>

                            <div class="px-4 py-3 grid grid-cols-3 gap-3">
                                <span class="text-xs font-semibold text-charcoal-light uppercase tracking-wide col-span-1 pt-0.5">Print Method</span>
                                <div class="col-span-2 text-sm text-charcoal">
                                    <span x-show="printMethod === 'traditional'" x-cloak>Traditional (HTV · Digital · Screenprint)</span>
                                    <span x-show="printMethod === 'specialty'" x-cloak>Specialty</span>
                                    <span x-show="!printMethod" class="text-charcoal-lighter">Not selected</span>
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
            <div class="flex items-center justify-center gap-1.5 py-3 flex-shrink-0" aria-hidden="true">
                <template x-for="i in totalSteps" :key="i">
                    <div
                        class="h-2 transition-all duration-300"
                        :class="step === i ? 'w-6 bg-sunburst' : (step > i ? 'w-2.5 bg-sunburst/60 rounded-full' : 'w-2.5 bg-linen-dark rounded-full')"
                    ></div>
                </template>
            </div>

            {{-- ── Footer navigation ────────────────────────────────────── --}}
            <div class="flex items-center gap-2.5 px-5 py-3.5 flex-shrink-0 border-t bg-linen-light border-linen-dark">

                <button type="button"
                    x-show="step === 1"
                    @click="close()"
                    class="text-sm font-semibold text-charcoal-light hover:text-charcoal transition-colors mr-auto">
                    Cancel
                </button>

                {{-- Validation hint --}}
                <p
                    x-show="step > 1 && !stepValid && currentStepName !== 'extra-notes' && currentStepName !== 'shipping-address' && currentStepName !== 'confirm-submit'"
                    x-cloak
                    class="text-xs text-error mr-auto"
                >Complete required fields to continue</p>

                <div class="flex items-center gap-2.5 ml-auto">

                    <x-ui.button-modal-cancel
                        x-show="step > 1"
                        x-cloak
                        @click="prev()"
                    >← Back</x-ui.button-modal-cancel>

                    <button
                        type="button"
                        x-show="step < totalSteps"
                        @click="next()"
                        x-bind:disabled="!stepValid && currentStepName !== 'extra-notes' && currentStepName !== 'shipping-address'"
                        x-bind:class="(!stepValid && currentStepName !== 'extra-notes' && currentStepName !== 'shipping-address') ? 'opacity-40 cursor-not-allowed' : ''"
                        class="px-5 py-2 text-sm font-semibold text-charcoal bg-gold-gradient hover:shadow-gold transition-all"
                    >Next →</button>

                    <x-ui.button-modal-primary
                        x-show="step === totalSteps"
                        x-cloak
                        @click="finish()"
                    >Submit Request</x-ui.button-modal-primary>

                </div>
            </div>

        </div>{{-- /panel --}}
    </div>{{-- /backdrop --}}
    </template>
</div>
