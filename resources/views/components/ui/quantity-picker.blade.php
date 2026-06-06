@props(['name' => 'quantity', 'min' => 1, 'max' => 99, 'value' => 1])
<div style="display:inline-flex;align-items:center;border:1px solid var(--cloud-dark);gap:0;">
    <button type="button" style="width:2.25rem;height:2.25rem;background:var(--navy);color:var(--cloud-light);font-size:1.25rem;border:0;cursor:pointer;display:flex;align-items:center;justify-content:center;"
        x-on:click="$refs.qtyInput{{ $name }}.value = Math.max({{ $min }}, parseInt($refs.qtyInput{{ $name }}.value) - 1)">−</button>
    <input type="number" name="{{ $name }}" x-ref="qtyInput{{ $name }}"
        min="{{ $min }}" max="{{ $max }}" value="{{ $value }}"
        style="width:3rem;text-align:center;border:0;border-left:1px solid var(--cloud-dark);border-right:1px solid var(--cloud-dark);height:2.25rem;font-family:var(--font-body);font-size:0.9rem;color:var(--navy-dark);">
    <button type="button" style="width:2.25rem;height:2.25rem;background:var(--navy);color:var(--cloud-light);font-size:1.25rem;border:0;cursor:pointer;display:flex;align-items:center;justify-content:center;"
        x-on:click="$refs.qtyInput{{ $name }}.value = Math.min({{ $max }}, parseInt($refs.qtyInput{{ $name }}.value) + 1)">+</button>
</div>
