<!-- TODO   implementar os campos de links -->
<template>
    <section class="content-header">
        <h1>
            {{title}}
            <small>{{subTitle}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>
</template>

<script>
    export default {
        props: {
            title: {required:true},
            subTitle: {required:true}
        }
    }
</script>
