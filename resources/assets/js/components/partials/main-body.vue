<!-- TODO   implementar os campos de links -->
<template>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">{{title}}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <slot></slot>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: {
            title: {required:true}
        }
    }
</script>
