<!DOCTYPE html>
<html>

<body>

<form id="custom-notification" action="">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" />

    <label for="body">Body:</label>
    <textarea id="body" name="body"></textarea>

    <div class="buttons-wrapper">
        <button id="button-wn-show-preset" class="button-demo">Show Preset Notification</button>
    </div>
</form>

<h3>Log</h3>
<div id="log"></div>
<button id="clear-log" class="button-demo">Clear log</button>

<script>
    if (!('Notification' in window)) {
        document.getElementById('wn-unsupported').classList.remove('hidden');
        document.getElementById('button-wn-show-preset').setAttribute('disabled', 'disabled');
    } else {
        var log = document.getElementById('log');
        var notificationEvents = ['onclick', 'onshow', 'onerror', 'onclose'];

        function notifyUser(event) {
            var title;
            var options;

            event.preventDefault();

            if (event.target.id === 'button-wn-show-preset') {
                title = 'Email received';
                options = {
                    body: 'You have a total of 3 unread emails',
                    tag: 'preset',
                    icon: 'http://www.audero.it/favicon.ico'
                };
            } else {
                title = document.getElementById('title').value;
                options = {
                    body: document.getElementById('body').value,
                    tag: 'custom'
                };
            }

            Notification.requestPermission(function() {
                var notification = new Notification(title, options);

                notificationEvents.forEach(function(eventName) {
                    notification[eventName] = function(event) {
                        log.innerHTML = 'Event "' + event.type + '" triggered for notification "' + notification.tag + '"<br />' + log.innerHTML;
                    };
                });
            });
        }

        document.getElementById('button-wn-show-preset').addEventListener('click', notifyUser);
        document.getElementById('clear-log').addEventListener('click', function() {
            log.innerHTML = '';
        });
    }
</script>
</body>
</html>