# Vermont UI

## Installation

1. Install package

```bash
composer require vrmnt/ui
```

2. Put UiServiceProvider into your project **config/app.php**

```php
/*
 * Package Service Providers...
 */

\Vrmnt\Ui\UiServiceProvider::class,
```

3. Use components

```html
<x-ui::custom-component>
```

## Components

### Navbar

```php
$languages = ['en', 'sk', 'cz', 'hu'];
$menu = [
    [
        'title' => __('pages.admin'),
        'href' => route('admin.index'),
        'active' => request()->routeIs('admin.*'),
    ],
    [
        'title' => __('common.applications'),
        'href' => '#',
        'active' => false,
        'submenu' => [
            [
                'title' => __('pages.goods-receiving'),
                'href' => route('goods-receiving.index'),
                'active' => request()->routeIs('goods-receiving.*'),
            ],
            [
                'title' => __('pages.stock-takings'),
                'href' => route('stocktakes.index'),
                'active' => request()->routeIs('stocktakes.*'),
            ],
        ],
    ],
];
```

```html
<x-ui::navbar :menu="$menu" :languages="$languages" />
```

### Tables

```html
<x-ui::table>
    <x-slot name="thead">
        <tr class="align-middle">
            <th>{{ __('item.title')}}</th>
        </tr>
    </x-slot>
    <x-slot name="tbody">
        @forelse($collection as $item)
        <tr class="align-middle">
            <td>{{ $item->title}}</td>
        </tr>
        @empty
        <x-ui::table-empty colspan="1" />
        @endforelse
    </x-slot>
</x-ui::table>
```

### Filters

```html
<x-ui::filter :url="route('index')" :open="$filter !== null">
    <x-ui::filter-item>
        <x-ui::forms.select
            :label="__('items.column')"
            :value="$filter['equal']['column'] ?? ''"
            :options="$options"
            name="filter[equal][column]"
            id="column"
        ></x-ui::forms.select>
    </x-ui::filter-item>
</x-ui::filter>
```

### Forms

#### Form

```html
<x-ui::form :action="route('stocktakes.store')">
    ...
</x-ui::form>
```
> Form component already contains CSRF field and displaying of errors.

#### Input

```html
<x-ui::forms.input
    :label="$label"
    name=""
    id=""
    placeholder=""
    value=""
    required="true"
></x-ui::forms.input>
```

#### Button

```html
<x-ui::button
    :link="$link"
    :text=""
    icon=""
    type=""
></x-ui::button>
```

#### Select

```html
<x-ui::forms.select2
    :label="$label"
    :value="$value"
    name=""
    id=""
    options="$options"
    required="true"
></x-ui::forms.select2>
```
