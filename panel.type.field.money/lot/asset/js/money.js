function addEvent($) {
    let debounce;
    $.addEventListener('keydown', function(e) {
        let that = this,
            state = JSON.parse(that.getAttribute('data-state') || '{}');
        let key = e.key,
            join = state.join || '.',
            value = parseInt(("" + that.value).split(join).join("") || '0', 10);
        if (!e.ctrlKey && key && 1 === key.length && !/^[0-9]$/.test(key)) {
            e.preventDefault();
            return;
        }
        if (key && 'ArrowDown' === key) {
            that.value = format("" + (value + 1000), join);
            e.preventDefault();
        } else if (key && 'ArrowUp' === key) {
            if (value > 0) {
                that.value = format("" + (value - 1000), join);
            }
            e.preventDefault();
        } else {
            debounce && clearTimeout(debounce);
            debounce = setTimeout(() => {
                that.value = format(("" + that.value).split(join).join(""), join);
                if (that.selectionStart === that.selectionEnd) {
                    that.selectionStart = that.selectionEnd = that.value.length;
                }
            }, 10);
        }
    });
}

function format(value, join) {
    return value
        .split("")
        .reverse()
        .join("")
        .match(/\d{1,3}/g)
        .join(join)
        .split("")
        .reverse()
        .join("");
}

function onChange() {
    let fields = document.querySelectorAll('.lot\\:field.type\\:money .input');
    fields.length && fields.forEach(addEvent);
} onChange();

_.on('change', onChange);
