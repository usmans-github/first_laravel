<button {{ $attributes->merge(['class' => 'rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-sm border
 hover:bg-gray-50 hover:text-red-500 hover:border hover:border-red-500 ',  'type' => 'submit'])}} > {{ $slot }}</button>