@props(['options' => [], 'withEmpty' => true])

<select {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) }}>
    @if($withEmpty)
        <option value="">Uncategorized</option>
    @endif
    @foreach($options as $option)
        <option @selected(old('category_id') == $option['id']) value="{{$option['id']}}">{{$option['name']}}</option>
    @endforeach
</select>
