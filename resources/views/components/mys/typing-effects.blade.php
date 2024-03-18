<div x-data="{
    text: '',
    textArray: ['Alpine JS is Amazing', 'It is Truly Awesome!', 'You Have to Try It!'],
    textIndex: 0,
    charIndex: 0,
    typeSpeed: 110,
    cursorSpeed: 550,
    pauseEnd: 1500,
    pauseStart: 20,
    direction: 'forward',
}" x-init="$nextTick(() => {
    let typingInterval = setInterval(startTyping, $data.typeSpeed);

    function startTyping() {
        let current = $data.textArray[$data.textIndex];

        // check to see if we hit the end of the string
        if ($data.charIndex > current.length) {
            $data.direction = 'backward';
            clearInterval(typingInterval);

            setTimeout(function() {
                typingInterval = setInterval(startTyping, $data.typeSpeed);
            }, $data.pauseEnd);
        }

        $data.text = current.substring(0, $data.charIndex);

        if ($data.direction == 'forward') {
            $data.charIndex += 1;
        } else {
            if ($data.charIndex == 0) {
                $data.direction = 'forward';
                clearInterval(typingInterval);
                setTimeout(function() {
                    $data.textIndex += 1;
                    if ($data.textIndex >= $data.textArray.length) {
                        $data.textIndex = 0;
                    }
                    typingInterval = setInterval(startTyping, $data.typeSpeed);
                }, $data.pauseStart);
            }
            $data.charIndex -= 1;
        }
    }

    setInterval(function() {
        if ($refs.cursor.classList.contains('hidden')) {
            $refs.cursor.classList.remove('hidden');
        } else {
            $refs.cursor.classList.add('hidden');
        }
    }, $data.cursorSpeed);

})"
    class="mx-auto flex max-w-7xl items-center justify-center text-center">
    <div class="relative flex h-auto items-center justify-center">
        <p class="text-2xl font-black leading-tight" x-text="text"></p>
        <span class="absolute right-0 -mr-2 h-3/4 w-2 bg-black" x-ref="cursor"></span>
    </div>
</div>
