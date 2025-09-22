@props([
    'label' => 'Menu',
    // items: [['text' => 'HVAC', 'url' => '/services/hvac', 'key' => 'hvac'], ...]
    'items' => [],
    'align' => 'left', // 'left' | 'right'
])

@php
  $dropdown_items = $dropdown_items ?? [];
  $dropdown_items = array_filter($dropdown_items);
  $dropdown_title = $dropdown_title ?? 'Menu';
  $dropdown_id = $dropdown_id ?? 'dropdown-menu';
  $alignment = $alignment ?? 'dropdown-end';
  $alignClass = $align === 'right' ? 'right-0' : 'left-0';
  $id = 'dd-'.uniqid();
@endphp

<div class="relative inline-block" id="{{ $id }}" data-dropdown-root>
    <button
        type="button"
        class="inline-flex items-center gap-1 px-3 py-2 font-semibold text-font-primary transition hover:text-indigo-600"
        aria-haspopup="true"
        aria-expanded="false"
        aria-controls="{{ $id }}-menu"
        data-dropdown-button
    >
        {{ $label }}
        <svg class="w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
        </svg>
    </button>

    <div
        id="{{ $id }}-menu"
        class="absolute z-50 mt-2 min-w-56 {{ $alignClass }} rounded-md border border-gray-200 bg-white shadow-lg origin-top transform transition ease-out duration-150 hidden opacity-0 scale-95"
        role="menu"
        aria-hidden="true"
        data-dropdown-menu
    >
        <nav class="py-2">
            @foreach($items as $item)
                <a href="{{ $item['url'] }}" class="block px-4 py-2 text-sm text-font-secondary hover:bg-primary-inverted" role="menuitem">
                    {{ $item['text'] }}
                </a>
            @endforeach
        </nav>
    </div>
</div>

<script>
(function() {
  var root = document.getElementById('{{ $id }}');
  if (!root) return;

  var btn = root.querySelector('[data-dropdown-button]');
  var menu = root.querySelector('[data-dropdown-menu]');
  if (!btn || !menu) return;

  var open = false;
  function setOpen(v) {
    open = v;
    btn.setAttribute('aria-expanded', v ? 'true' : 'false');
    menu.setAttribute('aria-hidden', v ? 'false' : 'true');
    menu.classList.toggle('hidden', !v);
    menu.classList.toggle('opacity-0', !v);
    menu.classList.toggle('scale-95', !v);
    menu.classList.toggle('opacity-100', v);
    menu.classList.toggle('scale-100', v);
  }
  // Ensure initial hidden state and transition classes
  menu.classList.add('opacity-0','scale-95','hidden');
  menu.classList.remove('opacity-100','scale-100');
  setOpen(false);

  btn.addEventListener('click', function(e) {
    e.preventDefault();
    setOpen(!open);
  });

  // Close on outside click
  document.addEventListener('click', function(e) {
    if (!root.contains(e.target)) setOpen(false);
  });

  // Keyboard: Escape closes; ArrowDown opens and focuses first item
  btn.addEventListener('keydown', function(e) {
    if (e.key === 'ArrowDown') {
      setOpen(true);
      var first = menu.querySelector('a,button,[tabindex]:not([tabindex="-1"])');
      if (first) first.focus();
    }
  });
  menu.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      setOpen(false);
      btn.focus();
    }
  });
})();
</script>