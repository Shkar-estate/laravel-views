<div
  x-cloak
  x-data='{ open: false, message: "", type: "success" }'
  x-on:notify.window="open = true; message = $event.detail.notification.message; type = $event.detail.notification.type"
>
  <div x-show="open && type === 'danger'">
    <x-lv-alert type='danger' onClose='open = false'>
      <div x-text='message'></div>
    </x-lv-alert>
  </div>
  <div x-show="open && type === 'success'">
    <x-lv-alert onClose='open = false'>
      <div x-text='message'></div>
    </x-lv-alert>
  </div>
</div>