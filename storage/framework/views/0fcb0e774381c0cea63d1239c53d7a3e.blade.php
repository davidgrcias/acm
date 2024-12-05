<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['color','disabled','form','formId','href','icon','iconSize','keyBindings','labelSrOnly','tag','target','tooltip','type','wire:click','wire:target','xOn:click','class','xBind:disabled','badge','badgeColor','iconPosition','labeledFrom','outlined','size','badgeColor','iconPosition','labeledFrom'])
<x-filament::button :color="$color" :disabled="$disabled" :form="$form" :form-id="$formId" :href="$href" :icon="$icon" :icon-size="$iconSize" :key-bindings="$keyBindings" :label-sr-only="$labelSrOnly" :tag="$tag" :target="$target" :tooltip="$tooltip" :type="$type" :wire:click="$wireClick" :wire:target="$wireTarget" :x-on:click="$xOnClick" :class="$class" :x-bind:disabled="$xBindDisabled" :badge="$badge" :badgeColor="$badgeColor" :iconPosition="$iconPosition" :labeledFrom="$labeledFrom" :outlined="$outlined" :size="$size" :badge-color="$badgeColor" :icon-position="$iconPosition" :labeled-from="$labeledFrom" >

{{ $slot ?? "" }}
</x-filament::button>