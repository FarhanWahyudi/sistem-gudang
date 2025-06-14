@props(['disabled' => false, 'placeholder' => ''])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-0 border-l-8 border-blue-600 bg-slate-100 py-3 rounded-md focus:ring-0',
                                                   'placeholder' => $placeholder]) }}>
