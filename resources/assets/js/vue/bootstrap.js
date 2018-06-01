import Sortable from 'sortablejs';
import Tippy from 'v-tippy';
import ToggleButton from 'vue-js-toggle-button';
import VueDirectiveImagePreviewer from 'vue-directive-image-previewer';

Vue.directive('sortable', {
    inserted: function (el, binding) {
        new Sortable(el, binding.value || {})
    }
});

Vue.use(ToggleButton);
Vue.use(Tippy, {
    arrow: true
});
Vue.use(VueDirectiveImagePreviewer);
Vue.component('multiselect', require('vue-multiselect'));

require('./form');
require('./errors');

if ('Slc' in window) {
    $.extend(Slc, require('./http'));
}