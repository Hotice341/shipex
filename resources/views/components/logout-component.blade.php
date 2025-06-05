@props(['linkId' => 'logout-link'])

<a {{ $attributes->merge(['class' => 'dropdown-item logout', 'id' => $linkId, 'data-form-id' => $linkId . '-form']) }} style="cursor: pointer;">
    {{ $slot }}
</a>

<form action="{{ route('admin.logout') }}" method="POST" id="{{ $linkId }}-form" class="d-none">
    @csrf
</form>

<script>
    // Logout
    document.addEventListener("DOMContentLoaded", function() {
        // Find all logout links with class 'logout'
        document.querySelectorAll('a.logout').forEach(link => {
            const formId = link.id + '-form'; // or use data attribute: link.dataset.formId
            const form = document.getElementById(formId);

            if (form) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    form.submit();
                });
            }
        });
    });
</script>
