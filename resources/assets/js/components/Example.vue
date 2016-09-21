<template>
    <li class="list-group-item">{!! Form::text('list-item.2', '', ['class' => 'form-control', 'placeholder' => 'List Item Input']) !!}</li>
</template>

<script>
    export default {
        ready() {
            console.log('Component ready.')
        }
    }
</script>
