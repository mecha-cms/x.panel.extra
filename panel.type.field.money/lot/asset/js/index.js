((w, d) => {
    function addEvent($) {
        let debounce;
        function onInput(e) {
            let that = this,
                state = JSON.parse(that.getAttribute('data-state') || '{}');
            let key = e.key,
                join = state.join || '.',
                step = state.step || 1000,
                name = that.getAttribute('data-name'),
                source = that.form[name + '[0]'],
                value = parseInt(source && source.value || '0', 10);
            if (!e.ctrlKey && key && 1 === key.length && !/^[0-9]$/.test(key)) {
                e.preventDefault();
                return;
            }
            if (key && 'ArrowDown' === key) {
                value = value + step;
                source.value = value;
                that.value = format("" + value, join);
                e.preventDefault();
            } else if (key && 'ArrowUp' === key) {
                value = value - step;
                if (value < 1) {
                    value = "";
                }
                source.value = value || '0';
                that.value = format("" + value, join);
                e.preventDefault();
            } else {
                debounce && clearTimeout(debounce);
                debounce = setTimeout(() => {
                    source.value = value = ("" + (that.value || 0)).split(join).join("");
                    that.value = format("" + value, join);
                    if (that.selectionStart === that.selectionEnd) {
                        that.selectionStart = that.selectionEnd = that.value.length;
                    }
                }, 1);
            }
        }
        ['cut', 'input', 'keydown', 'paste'].forEach(event => $.addEventListener(event, onInput));
    }
    function format(value, join) {
        if ('0' === value) {
            return "";
        }
        value = value.split("").reverse().join("").match(/\d{1,3}/g);
        if (value) {
            value = value.join(join).split("").reverse().join("");
        }
        return value;
    }
    function onChange() {
        let fields = document.querySelectorAll('.lot\\:field.type\\:money .input[data-name]');
        fields.length && fields.forEach(addEvent);
    } onChange();
    _.on('change', onChange);
})(window, document);
