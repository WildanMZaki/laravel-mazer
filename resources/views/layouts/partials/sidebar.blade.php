<x-sidebar :href="route('dashboard')" :logo="asset('assets/static/images/logo/favicon.png')">
    <x-sidebar.item icon="bi bi-grid-fill" :link="route('dashboard')" name="Dashboard" :active="true" />
    <x-sidebar.item icon="bi bi-stack" :link="route('dashboard')" name="Components">
        <x-sidebar.subitem :link="route('component.accordion')" name="Accordion"/>
    </x-sidebar.item>
</x-sidebar>
